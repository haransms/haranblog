<?php
return array(
	
	'URL_MODEL'					=>	2,

	'MODULE_ALLOW_LIST'			=>	array('Home', 'Admin'),
	'DEFAULT_MODULE'			=>	'Home',

	'DEFAULT_THEME'				=>	'default',
	'THEME_LIST'				=>	'default,blue',
    'TMPL_DETECT_THEME'			=> 	true, // 自动侦测模板主题
	'TMPL_LOAD_DEFAULTTHEME'	=>	true,

	'LOAD_EXT_CONFIG'			=>	'site',

	// 	不区分大小写
	'URL_CASE_INSENSITIVE'		=>	false,

	'TMPL_L_DELIM'				=>	'<{',
	'TMPL_R_DELIM'				=>	'}>'
);