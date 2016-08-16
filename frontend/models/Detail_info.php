<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "detail_info".
 *
 * @property integer $u_id
 * @property integer $height
 * @property integer $weight
 * @property integer $physique
 * @property string $apparel
 * @property integer $hair_length
 * @property integer $hair_color
 * @property integer $eyes_color
 * @property string $music_genre
 * @property string $movies_genre
 * @property string $book_genre
 * @property string $hobbies
 * @property integer $education
 * @property integer $earnings
 * @property integer $goal
 * @property integer $religion
 * @property integer $hometown
 */
class Detail_info extends \yii\db\ActiveRecord
{
    public $sudejimas = [
        'Labai smulkus',
        'Smulkus',
        'Sportiškas',
        'Pilnokas',
        'Stambus'
    ];

    public $plaukuIlgis = [
        'Labai trumpi',
        'Trumpi',
        'Vidutiniški',
        'Ilgi',
        'Labai ilgi'
    ];

    public $plaukuSpalva = [
        'Šviesi',
        'Raudona',
        'Ruda',
        'Juoda',
        'Kita',
    ];

    public $akiuSpalva = [
        'Gintaro',
        'Rudos',
        'Mėlynos',
        'Pilkos',
        'Žalios',
        'Lazdyno',
    ];

    public $apranga = [
        'Frakas',
        'Formali',
        'Pusiau formali',
        'Išeiginė',
        'Laisvalaikio',
    ];

    public $issilavinimas = [
        'Pagrindinis',
        'Vidurinis',
        'Profesinis',
        'Bakalauras',
        'Magistras',
        'Daktaras',
        'Profesorius',
    ];

    public $tikslas = [
        'Susirašinėjimai',
        'Flirtas',
        'Slapti pasimatymai',
        'Trumpalaikiai santykiai',
        'Seksas',
        'Ilgalaikiai santykiai',
        'Visi išvardinti'
    ];

    public $religija = [
        'Krikščionybė',
        'Islamas',
        'Hinduizmas',
        'Budizmas',
        'Šintoizmas',
        'Sikizmas',
        'Judaizmas',
        'Konfucianizmas',
        'Netikiu',
        'Kita',
    ];

    public $teviske = [
        'Vilniaus m. sav.',
        'Kauno m. sav.',
        'Klaipėdos m. sav.',
        'Panevėžio m. sav.',
        'Šiaulių m. sav.',
        'Akmenės r. sav.',
        'Alytaus m. sav.',
        'Alytaus r. sav.',
        'Anykščių r. sav.',
        'Birštono sav.',
        'Biržų r. sav.',
        'Druskininkų sav.',
        'Elektrėnų sav.',
        'Ignalinos r. sav.',
        'Jonavos r. sav.',
        'Joniškio r. sav.',
        'Jurbarko r. sav.',
        'Kaišiadorių r. sav.',
        'Kalvarijos sav.',
        'Kazlų Rūdos sav.',
        'Kėdainių r. sav.',
        'Kelmės r. sav.',
        'Kretingos r. sav.',
        'Kupiškio r. sav.',
        'Lazdijų r. sav.',
        'Marijampolės sav.',
        'Mažeikių r. sav.',
        'Molėtų r. sav.',
        'Neringos sav.',
        'Pagėgių sav.',
        'Pakruojo r. sav.',
        'Palangos m. sav.',
        'Panevėžio r. sav.',
        'Pasvalio r. sav.',
        'Plungės r. sav.',
        'Prienų r. sav.',
        'Radviliškio r. sav.',
        'Raseinių r. sav.',
        'Rietavo sav.',
        'Rokiškio r. sav.',
        'Šakių r. sav.',
        'Šalčininkų r. sav.',
        'Šiaulių r. sav.',
        'Šilalės r. sav.',
        'Šilutės r. sav.',
        'Širvintų r. sav.',
        'Skuodo r. sav.',
        'Švenčionių r. sav.',
        'Tauragės r. sav.',
        'Telšių r. sav.',
        'Trakų r. sav.',
        'Ukmergės r. sav.',
        'Utenos r. sav.',
        'Varėnos r. sav.',
        'Vilkaviškio r. sav.',
        'Vilniaus r. sav.',
        'Visagino sav.',
        'Zarasų r. sav.',
    ];


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detail_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_id', 'height', 'weight', 'physique', 'apparel', 'hair_length', 'hair_color', 'eyes_color', 'music_genre', 'movies_genre', 'book_genre', 'hobbies', 'addictions', 'education', 'earnings', 'goal', 'religion', 'hometown', 'aboutme'], 'safe'],
            [['u_id', 'height', 'weight', 'physique', 'hair_length', 'hair_color', 'eyes_color', 'education', 'earnings', 'goal', 'religion', 'hometown'], 'integer'],
            [['hobbies'], 'string'],
            [['apparel', 'music_genre', 'movies_genre', 'book_genre'], 'string', 'max' => 225],
            [['u_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'u_id' => Yii::t('app', 'U ID'),
            'height' => Yii::t('app', 'Ugis'),
            'weight' => Yii::t('app', 'Svoris'),
            'physique' => Yii::t('app', 'Kūno sudėjimas'),
            'apparel' => Yii::t('app', 'Mėgstamiausia apranga'),
            'hair_length' => Yii::t('app', 'Plaukų ilgis'),
            'hair_color' => Yii::t('app', 'Plaukų spalva'),
            'eyes_color' => Yii::t('app', 'Akių spalva'),
            'music_genre' => Yii::t('app', 'Muzikos žanrai'),
            'movies_genre' => Yii::t('app', 'Filmų žanrai'),
            'book_genre' => Yii::t('app', 'Knygų žanrai'),
            'hobbies' => Yii::t('app', 'Kiti pomėgiai'),
            'addictions' => Yii::t('app', 'Žalingi įpročiai'),
            'education' => Yii::t('app', 'Išsilavinimas'),
            'earnings' => Yii::t('app', 'Uždarbis'),
            'goal' => Yii::t('app', 'Tikslas'),
            'religion' => Yii::t('app', 'Religija'),
            'hometown' => Yii::t('app', 'Gimtasis miestas'),
            'aboutme' => Yii::t('app', 'Apie mane'),
        ];
    }

    public function preset()
    {
        if($this->height === null)
            $this->height = 50;

        if($this->weight === null)
            $this->weight = 30;
    }

    static public function prepare()
    {
        if($model = self::findOne(Yii::$app->user->id)){}
            return $model;

        $model = new self;
        $model->u_id = Yii::$app->user->id;
        $model->save(false);

        return $model;
    }

    static public function create($id) {
        $model = new self;
        $model->u_id = $id;
        $model->save(false);
    }

    static public function makeUgis()
    {
        for($i = 120; $i <= 220; $i++){
            if($i == 120){
                $result[] = "< ".$i." cm";
            }elseif($i == 220){
                $result[] = "> ".$i." cm";
            }else{
                $result[] = $i." cm";
            }
        }

        return $result;
    }

    static public function makeSvoris()
    {
        for($i = 40; $i <= 200; $i++){
            if($i == 40){
                $result[] = "< ".$i." kg";
            }elseif($i == 200){
                $result[] = "> ".$i." kg";
            }else{
                $result[] = $i." kg";
            }
        }

        return $result;
    }

    static public function makeUzdarbis()
    {
        if(Yii::$app->params['country'] == 'uk'){
            $sufix = '£';
        }

        for($i = 500; $i <= 10000; $i += 500){
            if($i == 500){
                $result[] = "< ".$i.$sufix;
            }elseif($i == 15000){
                $result[] = "> ".$i.$sufix;
            }else{
                $result[] = $i-500 . "-" .$i.$sufix;
            }
        }

        $result[] = "> 10000".$sufix;

        return $result;
    }
}
