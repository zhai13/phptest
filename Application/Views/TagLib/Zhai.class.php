<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/9
 * Time: 14:33
 */
namespace Views\TagLib;
use Think\Template\TagLib;

class Zhai extends TagLib {
    /*定义标签列表*/
    protected $tags = array(
        'friends' => array(
            'attr' => 'uid',
            'close' => 1,
        ),
    );

    public function _friends($tag,$content)
    {
        $id=$tag['uid'];
        $name=$tag['name'];
        $empty=$tag['empty'];
        $unique=rand();

        $parse_string='<?php ';
        $parse_string.='$_FRIENDS_'.$unique.'=get_user_friends('.$id.');';
        $parse_string.='if(empty($_FRIENDS_'.$unique.')){echo $empty;}';
        $parse_string.='else';
        $parse_string.='{';
        $parse_string.='foreach ($_FRIENDS_' . $unique . ' as $key => $' . $name . ') {';
        $parse_string.='?>';
        $parse_string.=$content;
        $parse_string.='<?php ';
        $parse_string.='}';
        $parse_string.='}';
        $parse_string.=' ?>';

        return $parse_string;
    }
}
?>