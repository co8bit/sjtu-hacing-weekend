<?php
return array(
	//'APP_GROUP_LIST'=>'Home,Admin',//多个应用设置
	//'DEFAULT_GROUP'=>'Home',//默认分组设置
	//'DEFAULT_MODULE'=>'Home',//默认模块设置
	//'DEFAULT_CONTROLLER'=>'index',//默认控制器

	/*===================URL配置===========================*/
	//'URL_MODEL'=>'2',//url模式
	//'URL_ROUTER_ON'=>true,//开启路由功能
	/*====================url大小写不区分===========*/
'MODULE_ALLOW_LIST' => array (
                'Home',
                'Admin',
        ),
        'DEFAULT_MODULE' => 'Home',
	'URL_CASE_INSENSITIVE'=>true,//true不区分大小写

	'DEFAULT_M_LAYER'       =>  'Model', // 默认的模型层名称
	'DEFAULT_C_LAYER'       =>  'Controller', // 默认的控制器层名称
	'DEFAULT_V_LAYER'       =>  'View', // 默认的视图层名称

	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'zxd', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => 'zxd_', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集

);