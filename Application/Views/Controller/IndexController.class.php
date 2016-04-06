<?php
namespace Views\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();   //渲染视图
    }
}