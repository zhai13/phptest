<?php
namespace Views\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //定义变量
        $username = 'zhai13';
        $email = 'admin@13cloud.cn';
        $age = 29;

        //数组形式
        $user = array(
            'user' => $username,
            'mail' => $email,
            'age' => $age,
        );
        $this->assign('user',$user);

        $fetchContent = $this->fetch(); //会返回渲染后的内容，但不会输出
        $fetchContent = str_replace('zhai13', 'Thirteen', $fetchContent);
        $this->show($fetchContent); //输出，一般是配合fetch方法使用
        //使用assign方法为视图变量赋值; assign('变量名', 变量值);
        /*$this->assign('user', $username);
        $this->assign('mail', $email);
        $this->assign('age', $age);*/

        //$this->display();   //渲染视图
    }
}