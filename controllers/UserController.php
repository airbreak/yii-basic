<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/29
 * Time: 17:57
 */
namespace app\controllers;
use yii\rest\ActiveController;
class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';
}