<?php
namespace Views\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        //定义变量
        $username = 'zhai13';
        $email = 'admin@13cloud.cn';
        $age = 29;

        $birthday_year=1990;

        //数组形式
        $user = array(
            'user' => $username,
            'mail' => $email,
            'age' => $age,
        );
        $this->assign('user',$user);
        $this->assign('birthday_year',$birthday_year);

        //好友数据变量赋值
        $this->assign('friends',get_user_friends());

        //$fetchContent = $this->fetch(); //会返回渲染后的内容，但不会输出
        //$fetchContent = str_replace('zhai13', 'Thirteen', $fetchContent);
        //$this->show($fetchContent); //输出，一般是配合fetch方法使用
        //使用assign方法为视图变量赋值; assign('变量名', 变量值);
        /*$this->assign('user', $username);
        $this->assign('mail', $email);
        $this->assign('age', $age);*/
        //layout('layout');
        $this->display();   //渲染视图
    }

    public function friends() {
        //好友数据变量赋值
        $this->assign('friends', get_user_friends());
        //layout('layout');
        $this->display();
    }
}