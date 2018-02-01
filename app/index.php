<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-1
 * Time: 上午11:10
 */
require '../vendor/autoload.php';
$url=$_SERVER['REQUEST_URI'];

$filename=substr($url,strpos($url,'index.php')+9);
    if(file_exists(dirname(__FILE__).$filename))
       include_once dirname(__FILE__).$filename;
    else
        echo "文件不存在";

