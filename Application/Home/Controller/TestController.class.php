<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/8
 * Time: 16:34
 */

namespace Home\Controller;


class TestController
{
    public function test(){
        //--------------test_????-----------//
        //URL = http://es-static.xiaojukeji.com/static/web/esapp/20180205/wallettemplate.jpg

        //----------------test_??---------------//
//        $valus = 'yangwenxin';
//        S('name',$valus,10);exit;
//        S('name',null); //????
//        echo S('name');exit;

//        $cache =S(array('type'=>'file','prefix'=>'thinkPHP','expire'=>10));
//        $cache->name="valus";
//        $valus=$cache->name;
//        echo $valus;
//        unset($cache->name);exit;

        //-----------------test_last_SQL----------//
//        $Index = M("lianxi");
//        $Index->find(2);
//        echo $Index->getLastSql();exit;

        //------------------test_??-------------//
        //        G('begin');
//        G('end');
//        echo G('begin','end',115).'s';

        //------------------test_debug--------------//

        //-------------------test_exception---------//
//        E("errorno test",25);
        // throw new \Think\Exception("test_test_test_exception");
        //-------------------test_log----------------//
//        \Think\Log::record('?????????????','WARN',true);exit;
//        \Think\Log::write('????????????????????','WARN');exit;//log_path ????ThinkPHP.php?????

        //--------------------test_mysql------------//

//        $conn = mysqli_connect("localhost","root","root");
//        if(!$conn){
//            echo "mysql connect fail";
//            exit;
//        }
//        $sql = "select * from yangwenxin.didi_user";
//        $sel  = mysqli_query($conn, $sql);
//        echo json_encode($sel);exit;

//        $resource1 = mysql_connect('localhost', 'root', 'root');//??1 ??????ip???2?????????3???????
//
//        if (!$resource1){//??mysql??????
//            die('could not connect?errono:' . mysql_errno() . 'errmsg?' . mysql_error);//mysql_query()???
//        };
//
//        mysql_select_db("yangwenxin",$resource1) or die("fails");
//        $result = mysql_query("select * from  u");
//        echo json_encode($result);exit;
        //        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "????"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>???? <b>ThinkPHP</b>?</p><br/>[ ???????Home???Index??? ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
//        //echo "wahaha";
//        //$name = C('name');//??????
//         C('name', 'time');
//        $name = C('name');
//        $config = array('WEB_SITE_TITLE'=>'ThinkPHP','WEB_SITE_DESCRIPTION'=>'??PHP??');C($config);
//         C($config);//????
//        $name = C('WEB_SITE_TITLE');
        // $name = C('time');
        //echo $name;
//        $a = 101;
//        $b = 11;
        //$UserController =  new UserController();
        //$sun = $UserController->sun($a,$b);
        //echo $sun;
        // echo (UserController::sun($a, $b));;
//        echo __DIR__.'<br/>';
//        echo __FILE__.'<br/>';
//        echo __LINE__.'<br/>';

        //  $user = A('User');
        // trace('test_test_trace','??','ERR');exit;

        $show = D("lianxi");
        $data[] = $show->where('id=65')->find();
        echo json_encode($data);exit;
        $sun=$user->sun($a,$b);
        echo $sun;

    }
}