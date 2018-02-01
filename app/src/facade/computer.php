<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-1
 * Time: 下午5:12
 */
/*
 * 外观模式为类之间的关系统一到一起
 */
class computer{
    protected $cpu;
    protected $power;
    public function __construct()
    {
        $this->cpu=new cpu();
        $this->power=new power();
    }

    public function start(){
        $this->power->start();
            $this->cpu->start();

    }
}