<?php
namespace app\controllers;

use yii\web\Controllers;
use yii\data\Pagination;
use app\models\Country;

class CountryController extends Controllers
{
  public function actionIndex()
  {
    $query = Country::find();
  }
}