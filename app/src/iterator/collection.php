<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-2
 * Time: 上午11:41
 */

namespace app\src\iterator;

use app\src\iterator\iterator;
class collection implements interfacecollection
{
    protected $values=[1,2,3,4,5];
    public function iterator()
    {
        return new iterator($this);
    }
    public function getSize()
    {
        // TODO: Implement getSize() method.
    }
    public function getValue($i)
    {
        return $this->values[$i];
    }
}