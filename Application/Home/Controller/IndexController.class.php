<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {
    public function index()
    {
    	$this->show("去帮助！");
        
    }

    public function ask()
    {
    	$data	=	null;

    	$data[title]	=	I("title");
    	$data[type]	=	I("type");
    	$data[content]	=	I("content");
    	$data[time]	=	time();
    	$data[uid]	=	I("uid");
    	
    	D("Problem")->add($data);
    }
}