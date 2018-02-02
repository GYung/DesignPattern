<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-2
 * Time: 下午3:14
 */

namespace app\src\chain;


abstract class abstracthandle
{
    protected $handel;
 public function gethandle(){
     return $this->handel;
 }
 public function sethandle($handel){
     $this->handel=$handel;
 }
}