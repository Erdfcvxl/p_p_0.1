<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "search_info".
 *
 * @property integer $u_id
 * @property integer $min_height
 * @property integer $max_height
 * @property integer $min_weight
 * @property integer $max_weight
 * @property string $physique
 * @property string $apparel
 * @property string $hair_length
 * @property string $hair_color
 * @property string $eyes_color
 * @property string $music_genre
 * @property string $movies_genre
 * @property string $book_genre
 * @property string $hobbies
 * @property string $addictions
 * @property string $education
 * @property string $earnings
 * @property string $goal
 * @property string $religion
 * @property string $hometown
 */
class Search_info extends \yii\db\ActiveRecord
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

    public $multiple = [
        'sex',
        'city',
        'orentation',
        'physique',
        'hair_length',
        'hair_color',
        'eyes_color',
        'apparel',
        'education',
        'earnings',
        'goal',
        'religion',
        'hometown',
    ];

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'search_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_id', 'max_height', 'max_weight', 'sex', 'min_years', 'max_years', 'city', 'orentation', 'picture'], 'safe'],
            [['u_id', 'min_height', 'max_height', 'min_weight', 'max_weight'], 'integer'],
            [['music_genre', 'movies_genre', 'book_genre', 'hobbies', 'addictions'], 'safe'],
            [['physique', 'apparel', 'hair_length', 'hair_color', 'eyes_color', 'education', 'earnings', 'goal', 'religion', 'hometown'], 'safe'],
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
            'sex' => Yii::t('app', 'Lytis'),
            'min_years' => Yii::t('app', 'Minimalus amžius'),
            'max_years' => Yii::t('app', 'Maksimalus amžius'),
            'month' => Yii::t('app', 'mėnuo'),
            'day' => Yii::t('app', 'diena'),
            'city' => Yii::t('app', 'Miestas'),
            'orentation' => Yii::t('app', 'Orentacija'),
            'picture' => Yii::t('app', 'Nuotrauka'),
            'min_height' => Yii::t('app', 'Minimalus ugis'),
            'max_height' => Yii::t('app', 'Maksimalus ugis'),
            'min_weight' => Yii::t('app', 'Minimalus svoris'),
            'max_weight' => Yii::t('app', 'Maksimalus svoris'),
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
        ];
    }

    public function multipleLoad($params)
    {

        foreach ($this->multiple as $v) {
            $serialized = serialize($this->$v);
            $this->$v = $serialized;
        }

    }

    static public function prepare()
    {
        if($model = self::findOne(Yii::$app->user->id)) {

            foreach ($model->multiple as $v) {
                $unserialize = unserialize($model->$v);
                $model->$v = $unserialize;
            }
            
            return $model;
        }

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

    public function preset()
    {
        if($this->min_height === null)
            $this->min_height = 25;

        if($this->max_height === null)
            $this->max_height = 75;

        if($this->min_weight === null)
            $this->min_weight = 15;

        if($this->max_weight === null)
            $this->max_weight = 45;

    }

    public function getYears()
    {
        for($i = 18; $i <= 95; $i++)
            $result[] = $i;

        return $result;
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

    public function getCities()
    {
        $model = new CitiesUk;
        $country = Yii::$app->params['country'];

        return $model->$country;
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
