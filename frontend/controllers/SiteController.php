<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\helpers\Url;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{

    public $layout = 'titulinis';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['index','signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    //'logout' => ['post'],
                ],
            ],
        ];
    }

    public function beforeAction($action)
    {
        if(Yii::$app->user->id)
            $this->redirect(Url::to(['app/index']));

        return true;
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {

        /* Registracija */
        $model = new LoginForm;
        if ($model->load(Yii::$app->request->post()) && $model->login())
            return $this->redirect(Url::to(['app/index']));


        /* Registracija */
        $registerForm = new SignupForm;
        if($registerForm->load(Yii::$app->request->post()))
            if ($user = $registerForm->signup())
                if (Yii::$app->getUser()->login($user))
                    return $this->redirect(Url::to(['app/index']));

        /* Password reset */
        $remind = new PasswordResetRequestForm();
        if ($remind->load(Yii::$app->request->post()) && $remind->validate()) {
            if ($remind->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Pasitikrinkite el. paštą dėl tolimesnių nurodymų.');
            } else {
                Yii::$app->session->setFlash('error', 'Apgailestaujame, mes negalime atkurti slaptažodžio šiam el. paštui. Prašome susisiekti su <a href="mailto:'.Yii::$app->params["supportEmail"].'">mumis</a>.');
            }

            $Tremind = true;
        }

        return $this->render('index', [
            'model' => $model,
            'registerForm' => $registerForm,
            'remind' => $remind,
            'Tremind' => (isset($Tremind)),
        ]);
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect(Url::to(['site/index']));
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
