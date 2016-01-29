<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Sys_SaleCustomer".
 *
 * @property string $Cus_id
 * @property string $Cus_Name
 * @property string $Cus_Nickname
 * @property string $Cus_Phone
 * @property string $Cus_Fax
 * @property string $Cus_Email
 * @property string $Cus_Website
 * @property string $Cus_Address
 * @property string $Cus_Contactname
 * @property string $Cus_Customeras
 * @property string $Cus_Country
 * @property string $Cus_Province
 * @property string $Cus_ContactPhone
 * @property string $Cus_Description
 * @property string $ts_create
 * @property string $ts_update
 * @property string $ts_name
 * @property integer $IsDelete
 */
class Customer extends \yii\db\ActiveRecord
{
    public $fullname;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Sys_SaleCustomer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Cus_id'], 'required'],
            [['Cus_Name', 'Cus_Nickname', 'Cus_Phone', 'Cus_Fax', 'Cus_Email', 'Cus_Website', 'Cus_Address', 'Cus_Contactname', 'Cus_Customeras', 'Cus_Country', 'Cus_Province', 'Cus_ContactPhone', 'Cus_Description', 'ts_name'], 'string'],
            [['ts_create', 'ts_update'], 'safe'],
            [['IsDelete'], 'integer'],
            [['fullname'],'safe'],
            ['Cus_id','unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Cus_id' => 'Customer ID',
            'Cus_Name' => 'Customer Name',
            'Cus_Nickname' => 'Nickname',
            'Cus_Phone' => 'Phone',
            'Cus_Fax' => 'Fax',
            'Cus_Email' => 'Email',
            'Cus_Website' => 'Website',
            'Cus_Address' => 'Address',
            'Cus_Contactname' => 'Contactname',
            'Cus_Customeras' => 'Customeras',
            'Cus_Country' => 'Country',
            'Cus_Province' => 'Province',
            'Cus_ContactPhone' => 'Contact Phone',
            'Cus_Description' => 'Description',
            'ts_create' => 'Ts Create',
            'ts_update' => 'Ts Update',
            'ts_name' => 'Ts Name',
            'IsDelete' => 'Is Delete',
            'fullname'=>  Yii::t('app', 'Full Name'),
           
        ];
    }
    public function getFullname()
    {
       return $this->Cus_Name."  [ ". $this->Cus_Nickname." ]";
    }
}
