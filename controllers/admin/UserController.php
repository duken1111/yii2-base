<?php

namespace app\controllers\admin;

use yii\web\Controller;

/**
 * Created by PhpStorm.
 * User: duke
 * Date: 12.07.2017
 * Time: 15:00
 */


class UserController extends Controller
{

    public function actionIndex() {
        $mess = "ADMIN";
        return $this->render("index", compact('mess'));
    }

}