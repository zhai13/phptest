<?php
/**
 * Created by PhpStorm.
 * User: zhaoguoqiang
 * Date: 4/2/16
 * Time: 9:38 下午
 */

namespace Home\Controller;
use Think\Controller;


class EmptyController extends Controller {  //空控制器
    public function _empty() {  //空操作方法
        echo '空操作方法';
    }
}