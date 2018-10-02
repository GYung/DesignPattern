<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-1-31
 * Time: 下午2:05
 */

namespace app\test\factorytest;

use \PHPUnit\Framework\TestCase;
use app\factory\SendFactorySimple;

class sendfactoryTest extends TestCase {
    protected $app;
    function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->app=new sendfactory();
    }

    public function testMain(){


        $result=$this->app->produce('mail');

        $this->assertEquals('my is mail',$result);
    }
}
