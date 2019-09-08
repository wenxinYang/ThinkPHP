<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/9
 * Time: 14:17
 * 访问控制器
 */

namespace Home\Controller;
use Think\Controller;

class UserController extends Controller
{
 /*   public function _before_index(){//控制器中前置操作
        echo "before<br/>";
    }*/

    public function _empty($name){

        self::city($name);

//    echo IS_GET;  //判断是什么类型的请求

/*        $time = time();
        echo date("Y:m:d",$time);

      //  $res = self::sun($a,$b);
        if( true ){
            $this->success('新加成功','Index/getInfo',5);
        }else{
            $this->error('新加失败');
        }*/
    }

/*    public function _after_index(){//控制器中后置操作
           echo "after<br/>";
    }*/

    protected function  city($name){

        echo '当前城市'.$name;
    }

    public function sun($a,$b){
        $c =$a +$b;
        return $c;
    }


}