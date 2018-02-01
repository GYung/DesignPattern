<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-1
 * Time: 下午5:30
 */
/*
 * 通过类组合各个对象
 */
class treenode{

    private $name;
    private $parent;
    private $children;

    public function __construct( $nodename)
    {
        $this->name=$nodename;
    }
    public function setName($nodename){
        $this->name=$nodename;
    }
    public function getName(){
        return $this->name;
    }
    //父亲节点
    public function setParent($parent){
        $this->name=$parent;
    }
    public function getParent(){
        return $this->parent;
    }
    //孩子节点
    public function setChildren($children){
        $this->name=$children;
    }
    public function getChildren(){
        return $this->children;
    }


}