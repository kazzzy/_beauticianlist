<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "technician".
 *
 * @property integer $tech_id
 * @property string $tech_nickname
 * @property string $tech_full_name
 * @property string $tech_lname
 * @property string $tech_email
 * @property string $tech_pics
 * @property string $tech_resume
 * @property string $tech_bio
 * @property string $share_bio
 * @property string $tech_disclamer
 * @property string $tech_license
 * @property string $tech_employment
 * @property string $tech_emp_address_street
 * @property string $tech_emp_address_city
 * @property string $tech_emp_address_state
 * @property string $tech_emp_address_zip
 * @property string $tech_subscription_active
 * @property string $tech_credit_type
 * @property string $tech_credit_card
 * @property string $tech_credit_ver
 * @property string $tech_fname_cc
 * @property string $tech_lname_cc
 * @property integer $tech_exp_month
 * @property integer $tech_exp_year
 * @property string $tech_school
 * @property string $tech_disinfection_verified
 * @property string $tech_profile
 * @property string $tech_pass
 * @property integer $tech_contact
 * @property string $sh_tech_contact
 * @property string $sh_tech_email
 * @property string $curr_employment
 * @property string $sh_tech_school
 * @property string $post_date
 * @property integer $status
 * @property string $shared_profile
 * @property integer $tech_specialty_id
 * @property integer $pay_status
 * @property string $pay_date
 * @property string $transaction_id
 * @property string $ret_cust_id
 * @property string $return_string
 */
class Technician extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'technician';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tech_nickname', 'tech_full_name', 'tech_lname', 'tech_email', 'share_bio', 'tech_license', 'tech_fname_cc', 'tech_lname_cc', 'tech_exp_month', 'tech_exp_year', 'tech_school', 'tech_profile', 'tech_pass', 'tech_contact', 'sh_tech_contact', 'sh_tech_email', 'curr_employment', 'sh_tech_school', 'post_date', 'status', 'shared_profile', 'pay_status', 'pay_date', 'transaction_id', 'ret_cust_id', 'return_string'], 'required'],
            [['tech_email', 'tech_bio', 'tech_pass', 'transaction_id', 'ret_cust_id', 'return_string'], 'string'],
            [['tech_exp_month', 'tech_exp_year', 'tech_contact', 'status', 'tech_specialty_id', 'pay_status'], 'integer'],
            [['post_date', 'pay_date'], 'safe'],
            [['tech_nickname', 'tech_lname'], 'string', 'max' => 20],
            [['tech_full_name'], 'string', 'max' => 45],
            [['tech_pics', 'tech_resume', 'share_bio', 'tech_disclamer', 'tech_subscription_active', 'tech_disinfection_verified', 'tech_profile', 'sh_tech_contact', 'sh_tech_email', 'curr_employment', 'sh_tech_school', 'shared_profile'], 'string', 'max' => 1],
            [['tech_license', 'tech_employment', 'tech_emp_address_street', 'tech_emp_address_city', 'tech_school'], 'string', 'max' => 30],
            [['tech_emp_address_state'], 'string', 'max' => 2],
            [['tech_emp_address_zip'], 'string', 'max' => 5],
            [['tech_credit_type'], 'string', 'max' => 4],
            [['tech_credit_card'], 'string', 'max' => 16],
            [['tech_credit_ver'], 'string', 'max' => 10],
            [['tech_fname_cc', 'tech_lname_cc'], 'string', 'max' => 255],
            [['tech_nickname'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tech_id' => 'Tech ID',
            'tech_nickname' => 'Tech Nickname',
            'tech_full_name' => 'Tech Full Name',
            'tech_lname' => 'Tech Lname',
            'tech_email' => 'Tech Email',
            'tech_pics' => 'Tech Pics',
            'tech_resume' => 'Tech Resume',
            'tech_bio' => 'Tech Bio',
            'share_bio' => 'Share Bio',
            'tech_disclamer' => 'Tech Disclamer',
            'tech_license' => 'Tech License',
            'tech_employment' => 'Tech Employment',
            'tech_emp_address_street' => 'Tech Emp Address Street',
            'tech_emp_address_city' => 'Tech Emp Address City',
            'tech_emp_address_state' => 'Tech Emp Address State',
            'tech_emp_address_zip' => 'Tech Emp Address Zip',
            'tech_subscription_active' => 'Tech Subscription Active',
            'tech_credit_type' => 'Tech Credit Type',
            'tech_credit_card' => 'Tech Credit Card',
            'tech_credit_ver' => 'Tech Credit Ver',
            'tech_fname_cc' => 'Tech Fname Cc',
            'tech_lname_cc' => 'Tech Lname Cc',
            'tech_exp_month' => 'Tech Exp Month',
            'tech_exp_year' => 'Tech Exp Year',
            'tech_school' => 'Tech School',
            'tech_disinfection_verified' => 'Tech Disinfection Verified',
            'tech_profile' => 'Tech Profile',
            'tech_pass' => 'Tech Pass',
            'tech_contact' => 'Tech Contact',
            'sh_tech_contact' => 'Sh Tech Contact',
            'sh_tech_email' => 'Sh Tech Email',
            'curr_employment' => 'Curr Employment',
            'sh_tech_school' => 'Sh Tech School',
            'post_date' => 'Post Date',
            'status' => 'Status',
            'shared_profile' => 'Shared Profile',
            'tech_specialty_id' => 'Tech Specialty ID',
            'pay_status' => 'Pay Status',
            'pay_date' => 'Pay Date',
            'transaction_id' => 'Transaction ID',
            'ret_cust_id' => 'Ret Cust ID',
            'return_string' => 'Return String',
        ];
    }
}
