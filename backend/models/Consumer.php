<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "consumer".
 *
 * @property string $consumer_id
 * @property string $consumer_fname
 * @property string $consumer_lname
 * @property string $consumer_state
 * @property string $consumer_pswd
 * @property string $consumer_name
 * @property string $consumer_zip
 * @property string $consumer_email
 * @property string $post_date
 * @property integer $status
 */
class Consumer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'consumer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['consumer_fname', 'consumer_lname', 'consumer_state', 'consumer_pswd', 'consumer_name', 'consumer_zip', 'consumer_email', 'post_date', 'status'], 'required'],
            [['consumer_pswd'], 'string'],
            [['post_date'], 'safe'],
            [['status'], 'integer'],
            [['consumer_fname', 'consumer_lname', 'consumer_state'], 'string', 'max' => 255],
            [['consumer_name'], 'string', 'max' => 20],
            [['consumer_zip'], 'string', 'max' => 5],
            [['consumer_email'], 'string', 'max' => 25],
            [['consumer_name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'consumer_id' => 'Consumer ID',
            'consumer_fname' => 'Consumer Fname',
            'consumer_lname' => 'Consumer Lname',
            'consumer_state' => 'Consumer State',
            'consumer_pswd' => 'Consumer Pswd',
            'consumer_name' => 'Consumer Name',
            'consumer_zip' => 'Consumer Zip',
            'consumer_email' => 'Consumer Email',
            'post_date' => 'Post Date',
            'status' => 'Status',
        ];
    }
}
