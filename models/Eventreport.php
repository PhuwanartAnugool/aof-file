<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property integer $id
 * @property string $title
 * @property string $place_seminar
 * @property string $create_date
 * @property integer $time_goback
 * @property string $unit_people
 * @property string $date_request
 * @property string $who_request
 *
 * @property RscTime $timeGoback
 */
class Eventreport extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'place_seminar', 'create_date', 'time_goback', 'unit_people', 'who_request'], 'required'],
            [['create_date', 'date_request'], 'safe'],
            [['time_goback'], 'integer'],
            [['title', 'place_seminar', 'unit_people', 'who_request'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ลำดับที่',
            'title' => 'หัวข้อการประชุม',
            'place_seminar' => 'สถานที่ไปประชุม',
            'create_date' => 'วันที่ประชุม',
            'time_goback' => 'เวลาไป - กลับ',
            'unit_people' => 'จำนวนผู้ไปประชุม',
            'date_request' => 'วันที่ลงข้อมูลจองรถ',
            'who_request' => 'ผู้จองรถ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTimeGoback()
    {
        return $this->hasOne(RscTime::className(), ['id' => 'time_goback']);
    }
}
