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

    	$data[id]		=	$this->_param("ID");
    	$data[title]	=	$this->_param("title");
    	$data[type]	=	$this->_param("type");
    	$data[content]	=	$this->_param("content");
    	$data[time]	=	$this->_param("time");
    	$data[uid]	=	$this->_param("uid");
    	
    	$D("Problem")->add($data);
    }
}