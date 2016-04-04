<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function _before_index() {   //操作前置方法
        echo 'index.before';
    }
    public function _after_index() {    //操作后置方法
        echo 'index.after';
    }
    public function indexAction(){
        $config = C('');    //读取配置项
        dump($config);
    }
    public function listAction() {
        echo 'list';
    }
}