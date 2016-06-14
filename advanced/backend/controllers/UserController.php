<?php
namespace backend\controllers;

use app\models\User;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;


/**
 * Site controller
 */
class UserController extends Controller
{
    function actionIndex(){
        return $this->renderPartial('welcome');
    }
}