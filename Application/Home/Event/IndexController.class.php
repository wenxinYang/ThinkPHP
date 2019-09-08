<?php
namespace Home\Controller;
use Think\Controller;
//use Home\Controller as Contrl;
import("@.Controller.UserController");
//use Home\Controller\UserController as UserController;
class IndexController extends Controller {
    public function index(){
//        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Home模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
//        //echo "wahaha";
//        //$name = C('name');
//         C('name', 'time');
//        $name = C('name');
//        $config = array('WEB_SITE_TITLE'=>'ThinkPHP','WEB_SITE_DESCRIPTION'=>'开源PHP框架');C($config);
//         C($config);
//        $name = C('WEB_SITE_TITLE');
        //$name = C('time');
        //echo $name;
        $a = 101;
        $b = 11;
       //$UserController =  new UserController();
        //$sun = $UserController->sun($a,$b);
        //echo $sun;
      // echo (UserController::sun($a, $b));;
        echo __DIR__.'<br/>';
        echo __FILE__.'<br/>';
        echo __LINE__.'<br/>';

    }//
//    public  function  test($a,$b){
//        $c = $a +$b;
//        echo $c;
//    }
}