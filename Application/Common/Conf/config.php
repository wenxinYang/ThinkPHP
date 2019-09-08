<?php
return array(
	//'配置项'=>'配置值'
    'SHOW_PAGE_TRACE' => true,
    'name1'=>'CaCa',        //test
    'VAR_CONTROLLER'        =>  'controller',    // 默认控制器获取变量
    'VAR_ACTION'            =>  'action',    // 默认操作获取变量

    //默认的模块已经入口方法
    //'DEFAULT_MODULE'=>'Admin',
   'DEFAULT_CONTROLLER'=>'index',
    'DEFAULT_ACTION'=>'index',
   // 'DEFAULT_C_LAYER' => 'Event',
    'CONTROLLER_LEVEL'      =>  1,//控制器层级划分
//    'ACTION_SUFFIX'     => 'Action',//操作方法后缀。比如，定义getInfo()方法时，需要定义成getInfoAction().URL访问无影响。


);