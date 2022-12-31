<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $student_id
 * @property string|null $first_name
 * @property string|null $second_name
 * @property string|null $class
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db_');
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id'], 'required'],
            [['student_id'], 'integer'],
            [['first_name', 'second_name', 'class'], 'string', 'max' => 50],
            [['student_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'first_name' => 'First Name',
            'second_name' => 'Second Name',
            'class' => 'Class',
        ];
    }
}
