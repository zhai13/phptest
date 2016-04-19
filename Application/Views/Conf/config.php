<?php
return array(
	//'配置项'=>'配置值'
    //'DEFAULT_V_LAYER' => 'Template',    //自定义默认视图层
    //'TMPL_TEMPLATE_SUFFIX' => '.zhai',    //自定义模板文件后缀
    //'TMPL_FILE_DEPR' => '_',    //连接符（防止模板目录太深,模板文件格式：'控制器名_方法名.模板后缀'）
    //'VIEW_PATH' => './Theme/Views/',    //自定义视图目录：自定义模块视图文件目录
    'DEFAULT_THEME'=>'default', //默认主题名称的配置
    'TMPL_DETECT_THEME'=>true,  // 自动侦测模板主题
    'THEME_LIST'=>'default,zhai13', //要切换的所有主题的名称
    //'TMPL_L_DELIM'=>'{{',     //自定义模板解析定界符开始
    //'TMPL_R_DELIM'=>'}}',     //自定义模板解析定界符结束
    'TMPL_PARSE_STRING' => array(   //模板替换配置
        '__CND__' => './Cdn',
        '__AVATAR__' => '/Uploads/avatar',
    ),
    //'LAYOUT_ON' => true,
    //'LAYOUT_NAME' => 'layout',
    //'TMPL_LAYOUT_ITEM' => '{__CONTENT__}',
);