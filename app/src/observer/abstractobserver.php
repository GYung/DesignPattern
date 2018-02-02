<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-2
 * Time: 上午10:56
 */
namespace app\src\observer;
use  app\src\observer\interfacesubject;
use app\src\observer\observer;
abstract class abstractobserver implements interfacesubject{

    protected $observer;
    public function add($observer)
    {
       $this->observer=new observer();

    }
    public function notifall()
    {
        $this->observer=new observer();
        $this->observer->update();
    }


}