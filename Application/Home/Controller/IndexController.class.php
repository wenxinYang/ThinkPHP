<?php

namespace Home\Controller;

use Think\Controller  as Controller;
use Home\Logic as Logic;

import("@.Controller.UserController");//这个是另外一种导包方法

class IndexController extends Controller {

    /*
     * create：2018_11_8 16:14
     * author：yangwenxin
     * dsc: 验证码验证
     */
    public function index(){
        $code = $_POST['data'];
        $result = Logic\UserLogic::verifyCheck($code);//检查验证码的逻辑放在  logic/userlogic中。

        if($result){
            $this->success('验证成功','inset');
        }

        if(!empty($_POST['data'])){
            if($_POST['data'] == "请输入验证码"){
                $error = "请输入验证码";
            }else{
                $error = "验证码错误，请重试";
            }
            $this->error($error,'index',1);
        }else{
            $result = "请输入验证码";
        }
        $time = Logic\UserLogic::getTime();
        $data['result'] = $result;
        $data['time'] = $time;
        $this->assign("data", $data);
        $this->display("index/index");
    }

    /*
     * create：2018_11_8 16:14
     * author: yangwenxin
     * dsc: 插入数据
     */
    public function inset(){
        $type = array(1,2);
        $data['name'] = "输入name";
        $data['sex'] = "输入sex";
        $license['name'] = $_POST['data1'] == "输入name" ? 1 : 0;
        $license['sex'] = $_POST['data2'] == "输入sex" ? 2 : 0;
        $license = $license['name'] + $license['sex'];

        if (isset($_POST["data1"]) && !empty($_POST["data1"]) && !$license) {
            $user = M('lianxi');
            $in["name"] = $_POST["data1"];
            $in["sex"] = $_POST['data2'];
            $info = $user->add($in);
            if($info){
                $this->success("插入数据成功",'select');
            }else{
                $this->error("插入数据失败",'inset');
            }
        }elseif( in_array($license,$type)){
            $errmsg = $license == 1 ? "请输入name" : "请输入sex";
            $this->error("$errmsg", "inset");
        }else{
            $this->assign("data",$data);
            $this->display("index/inset");
        }
    }

    /*
     * create：2018_11_8 16:14
     * author: yangwenxin
     * dsc: 查询lianxi表
     */
    public function select(){
        if(isset($_POST['id']) && $_POST['id'] !== "输入要查询的条件"){
            $show = D("lianxi");
            $condition['name'] = $_POST['id'];
            $data = $show->where($condition)->find();
            if(empty($data)) {
                $this->error("查询失败，请重试", "select");
            }
        }
        $this->assign('data1',$data);
        $this->display("Index/select");
        if(!empty($data)){
            $this->success("查询成功，跳转中","updata",2);
        }
    }

    /*
     * create：2018_11_8 16:14
     * author: yangwenxin
     * dsc: 上传图片
     */
    public function updata(){
        if($_FILES['photo']['error']!=0 && $_FILES['photo1']['error']!=0 && $_FILES['photo2']['error']!=0 ){
            $this->error('上传失败，请选择需要上传的图片！！！', 'updata',2);
        }
        $this->display("index/updata");
        $info = Logic\UserLogic::upPicture();
        if($info['check']) {
            $this->success("上传图片成功", 'response', 1);
        }
    }

    /*
     * 最后结果页
     */
    public function response(){
        $this->display("Index/response");
    }

    /*
     * 实例化验证码
     */
    public function verify(){
        $Verify = new \Think\Verify();
        $Verify->entry();
    }

}