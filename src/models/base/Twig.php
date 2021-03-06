<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace dmstr\modules\prototype\models\base;

use Yii;

/**
 * This is the base-model class for table "app_twig".
 *
 * @property integer $id
 * @property string $key
 * @property string $value
 * @property string $aliasModel
 */
abstract class Twig extends \yii\db\ActiveRecord
{


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%twig}}';
    }

    /**
     * @inheritdoc
     * @return \dmstr\modules\prototype\models\query\TwigQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \dmstr\modules\prototype\models\query\TwigQuery(get_called_class());
    }

    /**
     * Alias name of table for crud viewsLists all Area models.
     * Change the alias name manual if needed later
     * @return string
     */
    public function getAliasModel($plural = false)
    {
        if ($plural) {
            return Yii::t('app', 'Twigs');
        } else {
            return Yii::t('app', 'Twig');
        }
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['key', 'value'], 'required'],
            [['value'], 'string'],
            [['key'], 'string', 'max' => 255],
            [['key'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'key' => Yii::t('app', 'Key'),
            'value' => Yii::t('app', 'Value'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return array_merge(
            parent::attributeHints(),
            [
                'id' => Yii::t('app', 'ID'),
                'key' => Yii::t('app', 'Key'),
                'value' => Yii::t('app', 'Value'),
            ]);
    }


}
