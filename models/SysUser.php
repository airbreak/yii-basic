<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sys_user".
 *
 * @property int $id
 * @property int $gender 性别。0：男士；1：女士
 * @property int $created_time
 * @property string $password 密码
 * @property string $account 账户
 * @property string $name
 * @property int $birthday
 */
class SysUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sys_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gender', 'created_time', 'birthday'], 'integer'],
            [['password', 'account'], 'required'],
            [['password', 'account', 'name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gender' => 'Gender',
            'created_time' => 'Created Time',
            'password' => 'Password',
            'account' => 'Account',
            'name' => 'Name',
            'birthday' => 'Birthday',
        ];
    }
}
