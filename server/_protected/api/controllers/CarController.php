<?php
/**
 * Created by PhpStorm.
 * User: rmill_000
 * Date: 23/07/2017
 * Time: 21:20
 */

namespace api\controllers;


use yii\rest\ActiveController;

class CarController extends ActiveController
{
    public $modelClass = 'api\models\Car';
}