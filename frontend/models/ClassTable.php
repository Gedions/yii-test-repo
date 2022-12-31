<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "class_table".
 *
 * @property int $class_id
 * @property string|null $class_name
 *
 * @property ClassTable $class
 * @property ClassTable $class0
 * @property ClassTable $classTable
 * @property ClassTable $classTable0
 * @property ClassTable[] $classes
 * @property ClassTable[] $classes0
 */
class ClassTable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'class_table';
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
            [['class_id'], 'required'],
            [['class_id'], 'integer'],
            [['class_name'], 'string', 'max' => 50],
            [['class_id'], 'unique'],
            [['class_id'], 'exist', 'skipOnError' => true, 'targetClass' => ClassTable::class, 'targetAttribute' => ['class_id' => 'class_id']],
            [['class_id'], 'exist', 'skipOnError' => true, 'targetClass' => ClassTable::class, 'targetAttribute' => ['class_id' => 'class_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'class_id' => 'Class ID',
            'class_name' => 'Class Name',
        ];
    }

    /**
     * Gets query for [[Class]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClass()
    {
        return $this->hasOne(ClassTable::class, ['class_id' => 'class_id']);
    }

    /**
     * Gets query for [[Class0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClass0()
    {
        return $this->hasOne(ClassTable::class, ['class_id' => 'class_id']);
    }

    /**
     * Gets query for [[ClassTable]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClassTable()
    {
        return $this->hasOne(ClassTable::class, ['class_id' => 'class_id']);
    }

    /**
     * Gets query for [[ClassTable0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClassTable0()
    {
        return $this->hasOne(ClassTable::class, ['class_id' => 'class_id']);
    }

    /**
     * Gets query for [[Classes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClasses()
    {
        return $this->hasMany(ClassTable::class, ['class_id' => 'class_id'])->viaTable('class_table', ['class_id' => 'class_id']);
    }

    /**
     * Gets query for [[Classes0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClasses0()
    {
        return $this->hasMany(ClassTable::class, ['class_id' => 'class_id'])->viaTable('class_table', ['class_id' => 'class_id']);
    }
}
