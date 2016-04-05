<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index() {
        /*
         * 控制器定义了六个常量，用来快速判断请求的类型
         * IS_GET
         * IS_POST
         * IS_PUT
         * IS_DELETE
         * IS_AJAX
         * REQUEST_METHOD(枚举)
         * */

        //echo "uder.index";
        /*
         * redirect:重定向
         * redirect('地址表达式','','跳转时间','跳转信息')
         * */
        //$this->redirect('edit','','2','纯跳转,2秒后跳转');

        /*
         * 成功跳转：success('跳转信息','跳转地址',跳转时间)
         * 失败跳转：error('跳转信息','跳转地址',跳转时间)
         * */
        //$this->success('成功跳转',U('User/login'),3);
        //$this->error('出错了',U('User/login'),3);

        /*
         * Ajax数据返回
         * ajaxReturn(返回的数据, '返回的数据类型：json或xml')
         * */
        //$this->ajaxReturn(getTestData(), 'json');

        /*获取输入变量*/
        $server = I('server');
        dump($server);
    }

    public function edit() {
        echo "uder.edit";
    }

    public function login() {
        //echo "uder.login";
        $user = I('get.user', null);
        if($user === '13cloud') {
            $this->success('您好，13cloud', U('User/index'),3);
        }else {
            $this->error('您不是13cloud', U('User/index'),3);
        }
    }
}