<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-2-2
 * Time: 下午4:27
 */
/*
 * 中介者模式：实现类之间的解耦，星型结构
 * 中介类持有客户实例集合，并定义客户之间关系
 * 客户类持有中介实例，来获得自己需要的客户实例
 *
 * 中介类中定义好用户实例，同时用户实例接收中介实例，相互绑定成功。
 * 用户实例便可通过中介调用其他用户实例　聊天室功能
 */