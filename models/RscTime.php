<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rsc_time".
 *
 * @property integer $id
 * @property string $time
 *
 * @property Event[] $events
 */
class RscTime extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rsc_time';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['time'], 'required'],
            [['time'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'time' => 'เวลาไป - กลับ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvents()
    {
        return $this->hasMany(Event::className(), ['time_goback' => 'id']);
    }
}
