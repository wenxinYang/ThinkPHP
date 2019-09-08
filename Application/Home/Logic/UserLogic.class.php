<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/9
 * Time: 12:02
 */

namespace Home\Logic;
use  Think\Model;

class UserLogic extends Model
{
    public function getTime(){
        $time = time();
        return date("Y:m:d H:m:s",$time);
    }

    /*
     * 验证码检查
     */
    public function verifyCheck($code,$id=""){
        $chek = new  \Think\Verify();
        return $chek->check($code, $id);
    }

    /*
     * 上传图片
     */
    public function upPicture(){
        $upload  = new \Think\Upload();
        $upload->maxSize = 12400000;
        $upload->rootPath = './Public/';
        $upload->savePath  = 'Uploads/';
        $info['check'] = $upload->upload();
        $info['errmsg'] = $upload->getError();
        return $info;
    }


}