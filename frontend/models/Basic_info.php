<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "basic_info".
 *
 * @property integer $u_id
 * @property integer $sex
 * @property integer $year
 * @property integer $month
 * @property integer $day
 * @property integer $city
 * @property integer $orentation
 * @property integer $picture
 */
class Basic_info extends \yii\db\ActiveRecord
{
    public $_sex = [
        'Vyras',
        'Moteris'
    ];

    public $_orentation = [
        'Heteroseksuali',
        'Homoseksuali',
        'Biseksuali',
    ];

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'basic_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_id', 'sex', 'year', 'month', 'day', 'city', 'orentation', 'picture'], 'safe'],
            [['u_id'], 'unique'],
            [['sex', 'year', 'month', 'day', 'city', 'orentation'], 'required'],
            [['sex', 'year', 'month', 'day', 'city', 'orentation'], 'integer', 'skipOnEmpty' => false],

        ];
    }

    public function emptynull($value) {
        return $value==='' ? null : $value;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'u_id' => 'U ID',
            'sex' => Yii::t('app', 'Lytis'),
            'year' => Yii::t('app', 'Gimimo metai'),
            'month' => Yii::t('app', 'mėnuo'),
            'day' => Yii::t('app', 'diena'),
            'city' => Yii::t('app', 'Miestas'),
            'orentation' => Yii::t('app', 'Orentacija'),
            'picture' => Yii::t('app', 'Nuotrauka'),
        ];
    }

    public function getYears()
    {
        for($i = date("Y") - 18; $i > date("Y") - 95; $i--)
            $result[] = $i;
        
        return $result;
    }

    public function getMonths()
    {
        for($i = 1; $i <= 12; $i++)
            $result[] = $i;

        return $result;
    }

    public function getDays()
    {
        for($i = 1; $i <= 31; $i++)
            $result[] = $i;

        return $result;
    }

    public function getCities()
    {
        $model = new CitiesUk;
        $country = Yii::$app->params['country'];

        return $model->$country;
    }
    
    static public function create($id) {
        $model = new self;
        $model->u_id = $id;
        $model->save(false);
    }

    static public function check($step)
    {
        if($info = self::findOne(Yii::$app->user->id)) {

            if ($step == 1) {
                foreach ($info as $k => $v)
                    if ($k != 'picture')
                        if ($v === null)
                            return '';

                return "<span class='glyphicon glyphicon-ok text-success'></span> <br>";
            } elseif ($step == 2) {
                if ($info->picture != 1)
                    return '';

                return "<span class='glyphicon glyphicon-ok text-success'></span> <br>";
            } elseif ($step == 3) {
                if($info = Detail_info::findOne(Yii::$app->user->id)) {
                    foreach ($info as $k => $v)
                        if ($v === null)
                            return '';

                    return "<span class='glyphicon glyphicon-ok text-success'></span> <br>";
                }else{
                    Detail_info::create(Yii::$app->user->id);
                    return null;
                }
            } elseif ($step == 4) {
                if($info = Search_info::findOne(Yii::$app->user->id)) {
                    foreach ($info as $k => $v)
                        if ($v === null)
                            return '';

                    return "<span class='glyphicon glyphicon-ok text-success'></span> <br>";
                }else{
                    Search_info::create(Yii::$app->user->id);
                    return null;
                }
            }

        }else{
            $model = new self;
            $model->create(Yii::$app->user->id);

            return null;
        }

    }
}
