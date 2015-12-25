<?php

namespace frontend\models;
use yii\db\ActiveQuery;

/**
 * This is the ActiveQuery class for [[Goods]].
 *
 * @see Goods
 */
class GoodsQuery extends ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Goods[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Goods|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}