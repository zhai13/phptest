<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index() {
        $this->listActionsUrl();
    }
    /*
     * 列出User控制器操作方法的URL
     * private私有的成员方法：
     * 在类的内部可以访问
     * 在子类（继承）中不可以访问
     * 在类的外部不可以直接访问
     * */
    private function listActionsURL() {
        echo "当前的URL模式为：".C('URL_MODEL');
        echo "<hr>";

        echo "User控制器index操作方法的URL为<a href=\"".U('Home/User/index')."\">".U('Home/User/index');
        echo "<hr>";

        echo "User控制器edit操作方法的URL为<a href=\"".U('Home/User/edit')."\">".U('Home/User/edit');
        echo "<hr>";

        echo "User控制器login操作方法的URL为<a href=\"".U('Home/User/login')."\">".U('Home/User/login');
        echo "<hr>";
    }
}