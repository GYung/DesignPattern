<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-2
 * Time: 上午11:43
 */

namespace app\src\iterator;

use app\src\iterator\collection;
/*
 * 容器和迭代器相互关联。实例容器，容器返回迭代器，迭代器中实例容器
 */
class iterator implements interfaceiterator
{
    protected $collection;
    private $i=0;
    public function __construct($collection)
    {
        $this->collection=$collection;
    }
    public function pre()
    {
        // TODO: Implement pre() method.
    }
    public function hasNext()
    {
        if(!empty($this->collection->getValue($this->i))){

            return true;
        }
        return false;
    }
    public function next()
    {
        $result=$this->collection->getValue($this->i);
        $this->i++;
        return $result;
        // TODO: Implement next() method.
    }
}

$myiterator=(new collection())->iterator();
while($myiterator->hasNext()){
    echo $myiterator->next();
}