<?php
/**
 * Created by PhpStorm.
 * User: duke
 * Date: 10.07.2017
 * Time: 16:09
 */

namespace app\controllers;


use yii\web\Controller;

class MyController extends Controller
{
  public function actionIndex($id=null) {
      $hi = "Hello World!";
      $names = ['Ivanov','Petrov'];


      return $this->render("index",compact('hi','names','id'));
  }
}