<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hosts".
 *
 * @property int $id
 * @property string $site_name
 * @property string $host_admin_panel
 * @property string $host_admin_user
 * @property string $host_admin_pwd
 * @property string $ftp_address
 * @property string $ftp_user
 * @property string $ftp_password
 * @property string $site_admin_user
 * @property string $site_admin_pwd
 * @property string $site_bd_name
 * @property string $site_bd_user
 * @property string $site_bd_pwd
 * @property string $site_email
 * @property string $site_email_pwd
 */
class Hosts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hosts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['site_name', 'host_admin_panel', 'host_admin_user', 'host_admin_pwd', 'ftp_address', 'ftp_user', 'ftp_password'], 'required'],
            [['site_name', 'host_admin_panel', 'host_admin_user', 'host_admin_pwd', 'ftp_address', 'ftp_user', 'ftp_password', 'site_admin_user', 'site_admin_pwd', 'site_bd_name', 'site_bd_user', 'site_bd_pwd', 'site_email', 'site_email_pwd'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'site_name' => 'Site Name',
            'host_admin_panel' => 'Host Admin Panel',
            'host_admin_user' => 'Host Admin User',
            'host_admin_pwd' => 'Host Admin Pwd',
            'ftp_address' => 'Ftp Address',
            'ftp_user' => 'Ftp User',
            'ftp_password' => 'Ftp Password',
            'site_admin_user' => 'Site Admin User',
            'site_admin_pwd' => 'Site Admin Pwd',
            'site_bd_name' => 'Site Bd Name',
            'site_bd_user' => 'Site Bd User',
            'site_bd_pwd' => 'Site Bd Pwd',
            'site_email' => 'Site Email',
            'site_email_pwd' => 'Site Email Pwd',
        ];
    }
}
