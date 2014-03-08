<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="UTF-8" />
	<title><?php echo ($title); ?>_<?php echo C('SITE_TITLE');?></title>
	<meta name="keywords" content="<?php echo C('SITE_KEYWORDS');?>">
	<meta name="description" content="<?php echo C('SITE_DESCRIPTION');?>">
	<meta name="copyright" content="<?php echo C('SITE_COPYRIGHT');?>">
	<meta name="author" content="<?php echo C('SITE_AUTHOR');?>">
	<link rel="stylesheet" href="/git/haranblog/Public/css/core.css" />
	<link rel="stylesheet" href="/git/haranblog/Public/css/grid.css" />
	<link rel="stylesheet" href="/git/haranblog/Public/css/default.css" />
</head>
<body>
	<div id="wrap">
		<div class="wrap_box use_your_illusion" id="nav_box">
			<div class="container">
				<div class="grid_40" id="nav">
					<a href="/git/haranblog" class="brand"></a>
					<span class="summary"><?php echo C('SITE_SUMMARY');?></span>
					<ul>
						<li><a href="/git/haranblog" <?php if(MODULE_NAME == 'Home' && CONTROLLER_NAME == 'Index' && ACTION_NAME == 'index'): ?>class="active"<?php endif; ?>>首页</a></li>
						<li><a href="<?php echo U('Home/Article/index');?>" <?php if(MODULE_NAME == 'Home' && CONTROLLER_NAME == 'Article' && ACTION_NAME == 'index'): ?>class="active"<?php endif; ?>>文章</a></li>
						<li><a href="<?php echo U('Home/Category/index');?>" <?php if(MODULE_NAME == 'Home' && CONTROLLER_NAME == 'Category' && ACTION_NAME == 'index'): ?>class="active"<?php endif; ?>>分类</a></li>
						<li><a href="<?php echo U('Home/About/index');?>" <?php if(MODULE_NAME == 'Home' && CONTROLLER_NAME == 'About' && ACTION_NAME == 'index'): ?>class="active"<?php endif; ?>>关于</a></li>
						<li><a href="<?php echo U('Home/Contact/index');?>" <?php if(MODULE_NAME == 'Home' && CONTROLLER_NAME == 'Contact' && ACTION_NAME == 'index'): ?>class="active"<?php endif; ?>>联系</a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="wrap_box back" style="height:1000px;"></div>

		<div id="main">
			
		</div>
	</div>

	<div class="cl"></div>

	<!-- 底部开始 -->
	<div id="footer">
		
	</div>
	<!-- 底部结束 -->
<script type="text/javascript" src="/git/haranblog/Public/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/git/haranblog/Public/js/jquery.scrollUp.min.js"></script>
<script type="text/javascript" src="/git/haranblog/Public/js/jquery.lazyload.min.js"></script>
<script type="text/javascript" src="/git/haranblog/Public/js/Home/front.js"></script>
<!--[if IE 6]><script type="text/javascript" src="/git/haranblog/Public/js/iepng.js"></script>
<script type="text/javascript">
	DD_belatedPNG.fix('.brand','background');
</script><![endif]-->
</body>
</html>