<?php
namespace tests\codeception\api\unit;

/**
 * Class DbTestCase
 * 
 * @package tests\codeception\api\unit
 */
class DbTestCase extends \yii\codeception\DbTestCase
{
    public $appConfig = '@tests/codeception/config/api/unit.php';
}
