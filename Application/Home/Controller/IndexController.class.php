<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function _before_index() {   //����ǰ�÷���
        echo 'index.before';
    }
    public function _after_index() {    //�������÷���
        echo 'index.after';
    }
    public function indexAction(){
        $config = C('');    //��ȡ������
        dump($config);
    }
    public function listAction() {
        echo 'list';
    }
}