<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "goods".
 *
 * @property integer $code
 * @property integer $sklad
 * @property integer $id_rubric
 * @property integer $ost
 * @property string $title
 * @property integer $package
 * @property string $volume
 * @property integer $price
 * @property integer $vkor
 * @property string $day
 */
class Goods extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'goods';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'sklad', 'id_rubric', 'ost', 'title', 'package', 'volume', 'price', 'vkor', 'day'], 'required'],
            [['code', 'sklad', 'id_rubric', 'ost', 'package', 'price', 'vkor'], 'integer'],
            [['day'], 'safe'],
            [['title'], 'string', 'max' => 255],
            [['volume'], 'string', 'max' => 12]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code' => 'Code',
            'sklad' => 'Sklad',
            'id_rubric' => 'Id Rubric',
            'ost' => 'Ost',
            'title' => 'Title',
            'package' => 'Package',
            'volume' => 'Volume',
            'price' => 'Price',
            'vkor' => 'Vkor',
            'day' => 'Day',
        ];
    }

    /**
     * @inheritdoc
     * @return GoodsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GoodsQuery(get_called_class());
    }
}
