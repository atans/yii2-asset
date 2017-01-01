<?php

namespace atans\asset\models;

use Yii;

/**
 * Asset
 *
 * @property integer $id
 * @property integer $parent_id
 * @property integer $location_id
 * @property string $name
 * @property string $purchased_at
 * @property string $purchase_from
 * @property string $quality
 * @property string $description
 * @property string $remarks
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class Asset extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fixed_asset';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'name', 'description', 'remarks', 'status', 'created_at', 'updated_at'], 'required'],
            [['parent_id', 'location_id'], 'integer'],
            [['purchased_at', 'created_at', 'updated_at'], 'safe'],
            [['description'], 'string'],
            [['name', 'purchase_from', 'remarks'], 'string', 'max' => 255],
            [['quality', 'status'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('asset', 'ID'),
            'parent_id' => Yii::t('asset', 'Parent ID'),
            'location_id' => Yii::t('asset', 'Location ID'),
            'name' => Yii::t('asset', 'Name'),
            'purchased_at' => Yii::t('asset', 'Purchased At'),
            'purchase_from' => Yii::t('asset', 'Purchase From'),
            'quality' => Yii::t('asset', 'Quality'),
            'description' => Yii::t('asset', 'Description'),
            'remarks' => Yii::t('asset', 'Remarks'),
            'status' => Yii::t('asset', 'Status'),
            'created_at' => Yii::t('asset', 'Created At'),
            'updated_at' => Yii::t('asset', 'Updated At'),
        ];
    }
}
