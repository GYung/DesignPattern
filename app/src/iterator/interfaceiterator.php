<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-2
 * Time: 上午11:33
 */

namespace app\src\iterator;


interface interfaceiterator
{
    public function pre();
    public function next();
    public function hasNext();
}