<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/9
 * Time: 15:53
 */

namespace Home\Behavior;
use Think\Behavior;

class TestBehavior extends Behavior
{

    // 行为参数定义
    protected $options   =  array(
        'test_param'        => false,   //  行为参数 会转换成TEST_PARAM配置参数
                  );
    public function run(&$params){
        if($this->test_param ){
            echo 'RUNTEST BEHAVIOR'.$params;
        }
    }
}