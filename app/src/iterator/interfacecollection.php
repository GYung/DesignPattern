<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-2
 * Time: 上午11:30
 */

namespace app\src\iterator;


interface interfacecollection
{
 public function iterator();
 public function getValue($i);
 public function getSize();
}