<?php /*a:11:{s:75:"/home/wwwroot/www.tianjinyuxi.cn/app/index/view/default/category/index.html";i:1665913498;s:74:"/home/wwwroot/www.tianjinyuxi.cn/app/index/view/default/public/header.html";i:1665913498;s:71:"/home/wwwroot/www.tianjinyuxi.cn/app/index/view/default/public/nav.html";i:1665913498;s:82:"/home/wwwroot/www.tianjinyuxi.cn/app/index/view/default/public/header_top_nav.html";i:1665913498;s:78:"/home/wwwroot/www.tianjinyuxi.cn/app/index/view/default/public/nav_search.html";i:1665913498;s:78:"/home/wwwroot/www.tianjinyuxi.cn/app/index/view/default/public/header_nav.html";i:1665913498;s:82:"/home/wwwroot/www.tianjinyuxi.cn/app/index/view/default/public/goods_category.html";i:1665913498;s:76:"/home/wwwroot/www.tianjinyuxi.cn/app/index/view/default/public/not_data.html";i:1665913498;s:74:"/home/wwwroot/www.tianjinyuxi.cn/app/index/view/default/public/footer.html";i:1665913498;s:78:"/home/wwwroot/www.tianjinyuxi.cn/app/index/view/default/public/footer_nav.html";i:1665913498;s:73:"/home/wwwroot/www.tianjinyuxi.cn/app/index/view/default/public/quick.html";i:1665913498;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php echo MyConfig('shopxo.default_charset', 'utf-8'); ?>" />
	<title><?php echo htmlentities($home_seo_site_title); ?></title>
	<meta name="keywords" content="<?php echo htmlentities($home_seo_site_keywords); ?>" />
	<meta name="description" content="<?php echo htmlentities($home_seo_site_description); ?>" />
	<meta name="generator" content="<?php echo htmlentities($my_url); ?>" />
	<meta name="application-name" content="<?php echo htmlentities($home_seo_site_title); ?>" />
	<meta name="msapplication-tooltip" content="<?php echo htmlentities($home_seo_site_title); ?>" />
	<meta name="msapplication-starturl" content="<?php echo htmlentities($my_url); ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlentities($public_host); ?>favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">

	<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php echo MyC('home_site_name'); ?>">
    <link rel="apple-touch-icon" href="<?php echo AttachmentPathViewHandle(MyC('home_site_logo_square')); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo AttachmentPathViewHandle(MyC('home_site_logo_square')); ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/assets/css/amazeui.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-switch/amazeui.switch.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-chosen/amazeui.chosen.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/cropper/cropper.min.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-tagsinput/amazeui.tagsinput.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/css/common.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/index/<?php echo htmlentities($default_theme); ?>/css/common.css?v=<?php echo MyC('home_static_cache_version'); ?>" />

    <!-- ckplayer????????? -->
	<?php if(isset($is_load_ckplayer) and $is_load_ckplayer == 1): ?>
		<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/ckplayer/css/ckplayer.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<?php endif; ?>

	<!-- ?????? -->
    <?php if(!empty($plugins_css)): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/<?php echo htmlentities($plugins_css); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; ?>

    <!-- ??????????????? -->
    <?php if(isset($is_load_layout) and $is_load_layout == 1): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/css/layout.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; if(isset($is_load_layout_admin) and $is_load_layout_admin == 1): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/css/layout.admin.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; ?>
    <!-- ???????????? -->
	<?php if(!empty($module_css)): ?>
		<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/<?php echo htmlentities($module_css); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<?php endif; ?>

	<!-- css?????? -->
    <?php if(!empty($plugins_css_data) and is_array($plugins_css_data)): foreach($plugins_css_data as $hook): if(!empty($hook) and is_string($hook)): if(substr($hook, 0, 4) == 'http'): ?>
                    <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($hook); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
                <?php else: ?>
                    <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?><?php echo htmlentities($hook); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
                <?php endif; elseif(is_array($hook)): foreach($hook as $hook_css): if(!empty($hook_css) and is_string($hook_css)): if(substr($hook_css, 0, 4) == 'http'): ?>
                            <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($hook_css); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
                        <?php else: ?>
                            <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?><?php echo htmlentities($hook_css); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>

	<script type="text/javascript">
		var __system_type__ = '<?php echo htmlentities($system_type); ?>';
		var __root__ = '<?php echo htmlentities($public_host); ?>';
		var __my_http__ = '<?php echo htmlentities($my_http); ?>';
		var __my_url__ = '<?php echo htmlentities($my_url); ?>';
        var __my_public_url__ = '<?php echo htmlentities($my_public_url); ?>';
		var __public__ = '<?php echo htmlentities($public_host); ?>';
		var __default_theme__ = '<?php echo htmlentities($default_theme); ?>';
		var __modal_login_url__ = '<?php echo MyUrl("index/user/modallogininfo"); ?>';
		var __attachment_host__ = '<?php echo htmlentities($attachment_host); ?>';
        var __seo_url_suffix__ = '<?php echo MyC("home_seo_url_html_suffix", "html", true); ?>';
		var __user_id__ = <?php if(empty($user['id'])): ?>0<?php else: ?><?php echo htmlentities($user['id']); ?><?php endif; ?>;
        var __currency_symbol__ = '<?php echo htmlentities($currency_symbol); ?>';
        var __is_mobile__ = '<?php if(IsMobile()): ?>1<?php else: ?>0<?php endif; ?>';
        var __env_max_input_vars_count__ = '<?php echo htmlentities($env_max_input_vars_count); ?>';
        var __map_view_url__ = '<?php echo MyUrl("index/map/index"); ?>';
        var __load_map_type__ = '<?php echo htmlentities($load_map_type); ?>';
	</script>
	
	<!-- ??????header????????? -->
	<?php if(!empty($plugins_common_header_data) and is_array($plugins_common_header_data)): foreach($plugins_common_header_data as $hook): if(is_string($hook) or is_int($hook)): ?>
				<?php echo $hook; ?>
			<?php endif; ?>
		<?php endforeach; ?>
	<?php endif; ?>
</head>
<body <?php if(in_array(MiniAppEnv(), MyConfig('shopxo.mini_app_type_list'))): ?>class="mini-app-env"<?php endif; ?>>
<!-- css?????? -->
<?php if((!isset($page_pure) or $page_pure != 1) and (!isset($is_header) or $is_header == 1)): if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
	    <div class="plugins-tag">
	        <span>plugins_css</span>
	    </div>
	<?php endif; ?>
<?php endif; ?>

<!-- ??????header????????? -->
<?php if((!isset($page_pure) or $page_pure != 1) and (!isset($is_header) or $is_header == 1)): if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
		<div class="plugins-tag">
			<span>plugins_common_header</span>
		</div>
	<?php endif; ?>
<?php endif; ?>

<!-- ?????????????????? -->
<?php if(!isset($page_pure) or $page_pure != 1): if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
		<div class="plugins-tag">
			<span>plugins_view_common_top</span>
		</div>
	<?php endif; if(!empty($plugins_view_common_top_data) and is_array($plugins_view_common_top_data)): foreach($plugins_view_common_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
				<?php echo $hook; ?>
			<?php endif; ?>
		<?php endforeach; ?>
	<?php endif; ?>
<?php endif; ?>

<!-- header?????????????????? -->
<?php if(!isset($is_footer) or $is_footer == 1): if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
		<div class="plugins-tag">
			<span>plugins_view_common_top_header</span>
		</div>
	<?php endif; if(!empty($plugins_view_common_top_header_data) and is_array($plugins_view_common_top_header_data)): foreach($plugins_view_common_top_header_data as $hook): if(is_string($hook) or is_int($hook)): ?>
				<?php echo $hook; ?>
			<?php endif; ?>
		<?php endforeach; ?>
	<?php endif; ?>
<?php endif; ?>

<!-- nav start -->
<?php if(!empty($common_bottom_nav_list)): ?>
    <div class="mobile-navigation">
        <?php foreach($common_bottom_nav_list as $nav): ?>
            <li <?php if($controller_name.$action_name == $nav['only_tag']): ?>class="active"<?php endif; ?>>
                <a <?php if(isset($nav['is_login']) and $nav['is_login'] == 1 and empty($user)): ?>href="javascript:;" class="login-event am-block"<?php else: ?> href="<?php echo htmlentities($nav['url']); ?>" class="am-block"<?php endif; ?>>
                    <img src="<?php echo htmlentities($attachment_host); ?>/static/<?php echo htmlentities($module_name); ?>/<?php echo htmlentities($default_theme); ?>/images/<?php if($controller_name.$action_name == $nav['only_tag']): ?><?php echo htmlentities($nav['icon']); ?>-active.png<?php else: ?><?php echo htmlentities($nav['icon']); ?>.png<?php endif; ?>" class="am-block" alt="<?php echo htmlentities($nav['name']); ?>" />
                    <p><?php echo htmlentities($nav['name']); ?></p>
                </a>
                <?php if(isset($nav['badge']) and $nav['badge'] !== null and $nav['badge'] > 0): ?>
                    <span class="am-badge am-badge-danger am-round common-cart-total hot-icon"><?php echo htmlentities($nav['badge']); ?></span>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<!-- nav end -->

<!-- header top nav -->
<!-- ??????????????? start -->
<div class="header-top">
    <div class="am-container header">
        <ul class="top-nav-left">
            <div class="top-nav-items">
                <div class="menu-hd">
                    <!-- ???????????????????????????-???????????? -->
                    <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                        <div class="plugins-tag">
                            <span>plugins_view_header_navigation_top_left_begin</span>
                        </div>
                    <?php endif; if(!empty($plugins_view_header_navigation_top_left_begin_data) and is_array($plugins_view_header_navigation_top_left_begin_data)): foreach($plugins_view_header_navigation_top_left_begin_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                                <?php echo $hook; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; if(empty($user)): ?>
                        <em>?????????????????????</em>
                        <em><?php echo MyC('home_site_name'); ?></em>
                        <?php if(!empty($home_user_login_type)): ?>
                            [<a href="<?php echo MyUrl('index/user/logininfo'); ?>">??????</a>]
                        <?php endif; if(!empty($home_user_reg_type)): ?>
                            [<a href="<?php echo MyUrl('index/user/reginfo'); ?>">??????</a>]
                        <?php endif; else: ?>
                        <em>??????</em>
                        <?php if(!empty($user['icon'])): ?>
                            <img src="<?php echo htmlentities($user['icon']); ?>" class="common-user-icon" <?php if(!empty($user['icon_title'])): ?>title="<?php echo htmlentities($user['icon_title']); ?>"<?php endif; ?> />
                        <?php endif; ?>
                        <em><?php echo htmlentities($user['user_name_view']); ?>???????????????</em>
                        <em><?php echo MyC('home_site_name'); ?></em>
                        [<a href="<?php echo MyUrl('index/user/logout'); ?>">??????</a>]
                    <?php endif; ?>

                    <!-- ???????????????????????????-???????????? -->
                    <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                        <div class="plugins-tag">
                            <span>plugins_view_header_navigation_top_left_end</span>
                        </div>
                    <?php endif; if(!empty($plugins_view_header_navigation_top_left_end_data) and is_array($plugins_view_header_navigation_top_left_end_data)): foreach($plugins_view_header_navigation_top_left_end_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                                <?php echo $hook; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </ul>

        <ul class="top-nav-right">
            <!-- ???????????????????????????-???????????? -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_header_navigation_top_right_begin</span>
                </div>
            <?php endif; if(!empty($plugins_view_header_navigation_top_right_begin_data) and is_array($plugins_view_header_navigation_top_right_begin_data)): foreach($plugins_view_header_navigation_top_right_begin_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>

            <!-- ?????????????????????????????? -->
            <?php if(MyC('home_header_top_is_home', 0) == 1 and $module_name.$controller_name.$action_name != 'indexindexindex'): ?>
                <div class="top-nav-items top-nav-items-home">
                    <div class="menu-hd ">
                        <a href="<?php echo htmlentities($home_url); ?>" target="_top">
                            <i class="am-icon-fw am-icon-home"></i>
                            <span>????????????</span>
                        </a>
                    </div>
                </div>
            <?php endif; ?>

            <!-- ???????????? -->
            <?php if(!empty($common_nav_top_right_list) and is_array($common_nav_top_right_list)): foreach($common_nav_top_right_list as $nav): if(empty($nav['items'])): ?>
                        <div class="top-nav-items <?php if(!empty($nav['type'])): ?>top-nav-items-<?php echo htmlentities($nav['type']); ?><?php endif; ?>">
                            <div class="menu-hd <?php if(isset($nav['is_login']) and $nav['is_login'] == 1 and empty($user)): ?>login-event<?php endif; ?>">
                                <a href="<?php if(empty($user)): ?>javascript:;<?php else: ?><?php echo htmlentities($nav['url']); ?><?php endif; ?>" target="_top">
                                    <i class="am-icon-fw <?php echo htmlentities($nav['icon']); ?>"></i>
                                    <span><?php echo htmlentities($nav['name']); ?></span>
                                    <?php if(isset($nav['badge']) and $nav['badge'] > -1): if($nav['badge'] > 0): ?>
                                            <strong class="am-badge am-badge-danger am-round <?php if(isset($nav['type']) and $nav['type'] == 'cart'): ?>common-cart-total<?php endif; ?>"><?php echo htmlentities($nav['badge']); ?></strong>
                                        <?php else: ?>
                                            <strong class="am-round <?php if(isset($nav['type']) and $nav['type'] == 'cart'): ?>common-cart-total<?php endif; ?>"><?php echo htmlentities($nav['badge']); ?></strong>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </a>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="top-nav-items <?php if(!empty($nav['type'])): ?>top-nav-items-<?php echo htmlentities($nav['type']); ?><?php endif; ?>">
                            <div class="am-dropdown menu-hd" data-am-dropdown>
                                <a class="am-dropdown-toggle" href="javascript:;" target="_top" data-am-dropdown-toggle>
                                    <i class="am-icon-fw <?php echo htmlentities($nav['icon']); ?>"></i>
                                    <span><?php echo htmlentities($nav['name']); ?></span>
                                    <i class="am-icon-angle-down"></i>
                                </a>
                                <ul class="am-dropdown-content">
                                    <?php foreach($nav['items'] as $navs): ?>
                                        <li class="<?php if(((isset($nav['is_login']) and $nav['is_login'] == 1) or (isset($navs['is_login']) and $navs['is_login'] == 1)) and empty($user)): ?>login-event<?php endif; ?>">
                                            <a href="<?php if(((isset($nav['is_login']) and $nav['is_login'] == 1) or (isset($navs['is_login']) and $navs['is_login'] == 1)) and empty($user)): ?>javascript:;<?php else: ?><?php echo htmlentities($navs['url']); ?><?php endif; ?>"><?php echo htmlentities($navs['name']); ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>

            <!-- ???????????????????????????-???????????? -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_header_navigation_top_right_end</span>
                </div>
            <?php endif; if(!empty($plugins_view_header_navigation_top_right_end_data) and is_array($plugins_view_header_navigation_top_right_end_data)): foreach($plugins_view_header_navigation_top_right_end_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
</div>
<!-- ??????????????? end -->

<!-- search -->
<!-- ????????? start -->
<div class="nav-search white am-hide-sm-only">
    <div class="am-container">
        <div class="logo am-show-sm-only">
            <a href="<?php echo htmlentities($home_url); ?>">
                <img src="<?php echo AttachmentPathViewHandle(MyC('home_site_logo_wap')); ?>" alt="<?php echo MyC('home_seo_site_title'); ?>" />
            </a>
        </div>
        <div class="logo-big am-hide-sm-only">
            <a href="<?php echo htmlentities($home_url); ?>">
                <img src="<?php echo AttachmentPathViewHandle(MyC('home_site_logo')); ?>" alt="<?php echo MyC('home_seo_site_title'); ?>" />
            </a>
        </div>

        <!-- logo?????? -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span>plugins_view_common_logo_right</span>
            </div>
        <?php endif; if(!empty($plugins_view_common_logo_right_data) and is_array($plugins_view_common_logo_right_data)): foreach($plugins_view_common_search_right_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                    <?php echo $hook; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>

        <div class="search-bar">
            <!-- ???????????????????????? -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_common_search_inside_left</span>
                </div>
            <?php endif; if(!empty($plugins_view_common_search_inside_left_data) and is_array($plugins_view_common_search_inside_left_data)): foreach($plugins_view_common_search_inside_left_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>

            <!-- ????????? -->
            <form action="<?php echo MyUrl('index/search/index'); ?>" method="POST">
                <div class="search-group">
                    <input id="search-input" name="wd" type="text" placeholder="?????????????????????^_^ !" value="<?php if(!empty($params['wd'])): ?><?php echo htmlentities($params['wd']); ?><?php endif; ?>" autocomplete="off" />
                    <button type="submit" id="ai-topsearch" class="submit am-btn">
                        <i class="am-icon-search"></i>
                        <span>??????</span>
                    </button>
                </div>
                <?php if(!empty($home_search_keywords)): ?>
                    <ul class="search-hot-keywords">
                        <?php foreach($home_search_keywords as $v): ?>
                            <li><a href="<?php echo MyUrl('index/search/index', ['wd'=>StrToAscii($v)]); ?>" target="_blank"><?php echo htmlentities($v); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </form>

            <!-- ???????????????????????? -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_common_search_inside_right</span>
                </div>
            <?php endif; if(!empty($plugins_view_common_search_inside_right_data) and is_array($plugins_view_common_search_inside_right_data)): foreach($plugins_view_common_search_inside_right_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- ????????????????????? -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span>plugins_view_common_search_right</span>
            </div>
        <?php endif; if(!empty($plugins_view_common_search_right_data) and is_array($plugins_view_common_search_right_data)): foreach($plugins_view_common_search_right_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                    <?php echo $hook; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
<!-- ????????? end -->

<!-- header nav -->
<header class="am-topbar shop-navigation">
    <div class="am-container">
        <!-- ?????????????????? -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span>plugins_view_common_header_nav_left</span>
            </div>
        <?php endif; if(!empty($plugins_view_common_header_nav_left_data) and is_array($plugins_view_common_header_nav_left_data)): foreach($plugins_view_common_header_nav_left_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                    <?php echo $hook; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>

        <!-- ??????????????????????????? -->
        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-default am-show-sm-only switch-submit" data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">????????????</span> <span class="am-icon-bars"></span></button>

        <!-- logo -->
        <h1 class="am-topbar-brand wap-logo am-show-sm-only">
            <a href="<?php echo htmlentities($home_url); ?>">
                <img src="<?php echo AttachmentPathViewHandle(MyC('home_site_logo_wap')); ?>" alt="<?php echo MyC('home_seo_site_title'); ?>" />
            </a>
        </h1>

        <!-- ???????????? -->
        <a href="<?php echo MyUrl('index/category/index'); ?>" class="am-show-md-only">
            <div class="goods-category-title am-hide-sm-only">
                <span class="all-goods">????????????</span>
            </div>
        </a>

        <!-- ??????????????? -->
        <form class="am-topbar-form am-topbar-left am-form-inline am-show-sm-only navigation-search" role="search" action="<?php echo MyUrl('index/search/index'); ?>" method="POST">
            <div class="am-input-group am-input-group-sm">
                <input type="text" name="wd" class="am-form-field" placeholder="?????????????????????^_^ !" value="<?php if(!empty($params['wd'])): ?><?php echo htmlentities($params['wd']); ?><?php endif; ?>" autocomplete="off" />
                <span class="am-input-group-btn">
                    <button class="am-btn am-btn-default" type="submit">
                        <span class="am-icon-search am-icon-xs"></span>
                    </button>
                </span>
            </div>

            <!-- ???????????????????????? -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_common_header_nav_search_inside</span>
                </div>
            <?php endif; if(!empty($plugins_view_common_header_nav_search_inside_data) and is_array($plugins_view_common_header_nav_search_inside_data)): foreach($plugins_view_common_header_nav_search_inside_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </form>

        <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
            <!-- ?????????????????????????????? -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_common_header_nav_content_inside_top</span>
                </div>
            <?php endif; if(!empty($plugins_view_common_header_nav_content_inside_top_data) and is_array($plugins_view_common_header_nav_content_inside_top_data)): foreach($plugins_view_common_header_nav_content_inside_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; if(empty($user)): ?>
                <!-- ?????????????????? -->
                <div class="navigation-button am-show-sm-only">
                    <?php if(!empty($home_user_login_type)): ?>
                        <a href="<?php echo MyUrl('index/user/logininfo'); ?>" class="am-btn am-btn-primary am-topbar-btn am-btn-sm">??????</a>
                    <?php endif; if(!empty($home_user_reg_type)): ?>
                        <a href="<?php echo MyUrl('index/user/reginfo'); ?>" class="am-btn am-btn-success am-topbar-btn am-btn-sm">??????</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <!-- ????????? -->
            <?php if(!empty($nav_header)): ?>
                <ul class="am-nav am-nav-pills am-topbar-nav">
                    <?php foreach($nav_header as $nav): if(empty($nav['items'])): ?>
                            <li>
                                <a href="<?php echo htmlentities($nav['url']); ?>" <?php if($nav['is_new_window_open'] == 1): ?>target="_blank"<?php endif; ?> title="<?php echo htmlentities($nav['name']); ?>" <?php if(isset($nav['active']) and $nav['active'] == 1): ?>class="active"<?php endif; ?>><?php echo htmlentities($nav['name']); ?></a>
                            </li>
                        <?php else: ?>
                            <li class="am-dropdown" data-am-dropdown>
                                <a class="am-dropdown-toggle <?php if(isset($nav['active']) and $nav['active'] == 1): ?>active<?php endif; ?>" data-am-dropdown-toggle href="javascript:;">
                                    <?php echo htmlentities($nav['name']); ?> <span class="am-icon-caret-down"></span>
                                </a>
                                <ul class="am-dropdown-content">
                                    <?php foreach($nav['items'] as $navs): ?>
                                        <li>
                                            <a href="<?php echo htmlentities($navs['url']); ?>" title="<?php echo htmlentities($navs['name']); ?>" <?php if(isset($navs['active']) and $navs['active'] == 1): ?>class="active"<?php endif; ?>><?php echo htmlentities($navs['name']); ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <!-- ???????????? -->
            <div class="am-topbar-right am-hide-sm-only">
                <!-- ??????????????? -->
                <?php if(MyC('home_navigation_main_quick_status') == 1): ?>
                    <div class="navigation-main-quick">
                        <a href="javascript:;" class="am-block" data-am-modal="{target: '#left-main-quick-popup'}">
                            <span class="am-icon-sliders icon"></span>
                            <b class="am-block"></b>
                            <p class="am-text-truncate name"><?php echo MyC('home_navigation_main_quick_name', '?????????', true); ?></p>
                            <i class="am-icon-angle-down"></i>
                        </a>
                    </div>
                <?php endif; ?>
            </div>

            <!-- ?????????????????????????????? -->
            <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                <div class="plugins-tag">
                    <span>plugins_view_common_header_nav_content_inside_bottom</span>
                </div>
            <?php endif; if(!empty($plugins_view_common_header_nav_content_inside_bottom_data) and is_array($plugins_view_common_header_nav_content_inside_bottom_data)): foreach($plugins_view_common_header_nav_content_inside_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                        <?php echo $hook; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- ?????????????????? -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span>plugins_view_common_header_nav_right</span>
            </div>
        <?php endif; if(!empty($plugins_view_common_header_nav_right_data) and is_array($plugins_view_common_header_nav_right_data)): foreach($plugins_view_common_header_nav_right_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                    <?php echo $hook; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</header>

<!-- goods category -->
<!-- ????????????  -->
<div id="goods-category" class="am-container am-hide-sm-only am-hide-md-only" data-controller-name="<?php echo htmlentities($controller_name); ?>">
    <div class="goods-category-s">
        <a href="<?php echo MyUrl('index/category/index'); ?>">
            <div class="goods-category-title">
                <span class="all-goods">????????????</span>
            </div>
        </a>
        <div class="category-content" <?php if((isset($common_goods_category_hidden) and $common_goods_category_hidden == 1)): ?>style="display:none;"<?php endif; ?>>
            <div class="category">
                <ul class="category-list">
                    <?php if(!empty($goods_category_list) and is_array($goods_category_list)): foreach($goods_category_list as $v): ?>
                            <li class="first">
                                <a href="<?php echo MyUrl('index/search/index', ['cid'=>$v['id']]); ?>" class="am-block" title="<?php echo htmlentities($v['name']); ?>">
                                <div class="category-info">
                                    <h3 class="category-name b-category-name am-text-truncate">
                                        <?php if(!empty($v['icon'])): ?>
                                            <img src="<?php echo htmlentities($v['icon']); ?>" />
                                        <?php endif; ?>
                                        <span class="bd-name"><?php echo htmlentities($v['name']); ?></span>
                                    </h3>
                                    <em>&gt;</em>
                                </div>
                                </a>
                                <?php if($category_show_level > 1): ?>
                                    <div class="menu-item menu-in top">
                                        <?php if(!empty($v['items'])): ?>
                                            <div class="area-in">
                                                <div class="area-bg">
                                                    <div class="menu-srot">
                                                        <div class="sort-side">
                                                            <?php foreach($v['items'] as $vs): ?>
                                                                <dl class="dl-sort <?php if($category_show_level == 2): ?>dl-sort-two<?php endif; ?>">
                                                                    <?php if($category_show_level == 2): ?>
                                                                        <dd>
                                                                            <a href="<?php echo MyUrl('index/search/index', ['cid'=>$vs['id']]); ?>" title="<?php echo htmlentities($vs['name']); ?>">
                                                                                <span><?php echo htmlentities($vs['name']); ?></span>
                                                                            </a>
                                                                        </dd>
                                                                    <?php elseif($category_show_level == 3): ?>
                                                                        <dt>
                                                                            <a href="<?php echo MyUrl('index/search/index', ['cid'=>$vs['id']]); ?>" title="<?php echo htmlentities($vs['name']); ?>">
                                                                                <span title="<?php echo htmlentities($vs['name']); ?>"><?php echo htmlentities($vs['name']); ?></span>
                                                                            </a>
                                                                        </dt>
                                                                        <?php if(!empty($vs['items'])): foreach($vs['items'] as $vss): ?>
                                                                                <dd>
                                                                                    <a href="<?php echo MyUrl('index/search/index', ['cid'=>$vss['id']]); ?>" title="<?php echo htmlentities($vss['name']); ?>">
                                                                                        <span><?php echo htmlentities($vss['name']); ?></span>
                                                                                    </a>
                                                                                </dd>
                                                                            <?php endforeach; ?>
                                                                        <?php endif; ?>
                                                                    <?php endif; ?>
                                                                </dl>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div class="table-no"><i class="am-icon-warning"></i> ??????????????????</div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- content -->
<div class="am-container category-list-container">
    <?php if(!empty($goods_category_list)): if($category_show_level == 1): ?>
            <ul class="model-one am-avg-sm-2 am-avg-md-3 am-avg-lg-4">
                <?php foreach($goods_category_list as $v): ?>
                    <li class="am-fl">
                        <div class="item-content am-text-center am-margin-xs">
                            <a href="<?php echo MyUrl('index/search/index', ['cid'=>$v['id']]); ?>" title="<?php echo htmlentities($v['name']); ?>" class="am-block am-padding-xs">
                                <?php if(!empty($v['icon'])): ?>
                                    <img src="<?php echo htmlentities($v['icon']); ?>" alt="<?php echo htmlentities($v['name']); ?>" class="category-icon am-block am-margin-bottom-xs" />
                                <?php endif; ?>
                                <p><?php echo htmlentities($v['name']); ?></p>
                            </a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <ul class="category-nav am-fl">
                <?php foreach($goods_category_list as $k=>$v): ?>
                    <li class="am-text-break am-padding-horizontal-sm <?php if($k == 0): ?> active<?php endif; ?>" data-url="<?php echo MyUrl('index/search/index', ['cid'=>$v['id']]); ?>"><?php echo htmlentities($v['name']); ?></li>
                <?php endforeach; ?>
            </ul>
            <?php foreach($goods_category_list as $k=>$v): ?>
                <div class="category-content category-content-<?php echo htmlentities($k); ?> am-fr am-padding-vertical-xs <?php if($k != 0): ?> none<?php endif; ?>">
                    <?php if(!empty($v['vice_name']) or !empty($v['describe'])): ?>
                        <div class="category-item am-padding-sm am-margin-bottom-sm one-cetegory">
                            <a href="<?php echo MyUrl('index/search/index', ['cid'=>$v['id']]); ?>" title="<?php echo htmlentities($v['name']); ?>">
                                <div>
                                    <?php if(!empty($v['vice_name'])): ?>
                                        <strong <?php if(!empty($v['bg_color'])): ?>style="color:<?php echo htmlentities($v['bg_color']); ?>;"<?php endif; ?> class="am-text-sm am-margin-right-sm"><?php echo htmlentities($v['vice_name']); ?></strong>
                                    <?php endif; if(!empty($v['describe'])): ?>
                                        <span class="am-text-grey"><?php echo htmlentities($v['describe']); ?></span>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </div>
                    <?php endif; if(!empty($v['items'])): if($category_show_level == 2): ?>
                            <div class="category-item am-padding-sm two-content">
                                <ul>
                                    <?php foreach($v['items'] as $vs): ?>
                                        <li class="am-fl am-text-center">
                                            <?php if(!empty($vs['icon'])): ?>
                                                <a href="<?php echo MyUrl('index/search/index', ['cid'=>$vs['id']]); ?>" title="<?php echo htmlentities($vs['name']); ?>" class="am-block">
                                                    <img src="<?php echo htmlentities($vs['icon']); ?>" alt="<?php echo htmlentities($vs['name']); ?>" class="category-icon am-block am-margin-bottom-xs" />
                                                </a>
                                            <?php endif; ?>
                                            <p>
                                                <a href="<?php echo MyUrl('index/search/index', ['cid'=>$vs['id']]); ?>" title="<?php echo htmlentities($vs['name']); ?>" class="am-block"><?php echo htmlentities($vs['name']); ?></a>
                                            </p>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php elseif($category_show_level == 3): foreach($v['items'] as $vs): ?>
                                <div class="category-item am-padding-sm">
                                    <a href="<?php echo MyUrl('index/search/index', ['cid'=>$vs['id']]); ?>" title="<?php echo htmlentities($vs['name']); ?>">
                                        <div class="am-text-center">
                                            <strong><?php echo htmlentities($vs['name']); ?></strong>
                                        </div>
                                    </a>
                                    <?php if(!empty($vs['items'])): ?>
                                        <ul class="am-margin-top-sm am-padding-top-sm">
                                            <?php foreach($vs['items'] as $kss=>$vss): ?>
                                                <li class="am-fl am-text-center">
                                                    <?php if(!empty($vss['icon'])): ?>
                                                        <a href="<?php echo MyUrl('index/search/index', ['cid'=>$vss['id']]); ?>" title="<?php echo htmlentities($vss['name']); ?>" class="am-block">
                                                            <img src="<?php echo htmlentities($vss['icon']); ?>" alt="<?php echo htmlentities($vss['name']); ?>" class="category-icon am-block am-margin-bottom-xs" />
                                                        </a>
                                                    <?php endif; ?>
                                                    <p>
                                                        <a href="<?php echo MyUrl('index/search/index', ['cid'=>$vss['id']]); ?>" title="<?php echo htmlentities($vss['name']); ?>" class="am-block"><?php echo htmlentities($vss['name']); ?></a>
                                                    </p>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; else: ?>
                        <div class="table-no">
                            <i class="am-icon-warning"></i>
                            <span>?????????????????????</span>
                            <p class="am-margin-top-lg am-text-center">
                                <a href="<?php echo MyUrl('index/search/index', ['cid'=>$v['id']]); ?>" class="am-text-secondary" title="?????????????????????">????????????????????? >></a>
                            </p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        <?php endif; else: ?>
        <div class="table-no"><i class="am-icon-warning"></i> ??????????????????</div>
    <?php endif; ?>
</div>

<!-- commom html -->
<textarea id="upload-editor-view" data-url="<?php if(isset($is_load_upload_editor) and $is_load_upload_editor == 1): ?><?php echo MyUrl('index/ueditor/index', ['path_type'=>empty($editor_path_type) ? 'common' : $editor_path_type]); ?><?php endif; ?>" style="display: none;"></textarea>

<!-- footer start -->
<?php if((!isset($page_pure) or $page_pure != 1) and (!isset($is_footer) or $is_footer == 1)): ?>
	<!-- ???????????????????????? -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
    <div class="plugins-tag">
        <span>plugins_view_common_footer_top</span>
    </div>
<?php endif; if(!empty($plugins_view_common_footer_top_data) and is_array($plugins_view_common_footer_top_data)): foreach($plugins_view_common_footer_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
            <?php echo $hook; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; if(!IsMobile() or (IsMobile() and MyC('common_is_mobile_concise_model') != 1)): ?>
	<!-- ???????????? -->
	<footer data-am-widget="footer" class="am-footer am-footer-default" data-am-footer="{}">
		<div class="am-container">
			<!-- ???????????? -->
			<?php if(!empty($nav_footer)): ?>
				<ul data-am-widget="gallery" class="am-gallery am-avg-sm-2 am-avg-md-4 am-avg-lg-4 am-gallery-overlay am-no-layout am-u-md-8 footer-nav-list" data-am-gallery="{}">
					<?php foreach($nav_footer as $k=>$v): if($k < 4): ?>
							<li>
								<div class="am-gallery-item">
									<p class="footer-nav-title am-text-truncate"><?php echo htmlentities($v['name']); ?></p>
									<?php if(!empty($v['items'])): foreach($v['items'] as $vs): ?>
											<p class="am-text-truncate">
												<a href="<?php echo htmlentities($vs['url']); ?>" <?php if($vs['is_new_window_open'] == 1): ?>target="_blank"<?php endif; ?>><?php echo htmlentities($vs['name']); ?></a>
											</p>
										<?php endforeach; ?>
									<?php endif; ?>
								</div>
							</li>
						<?php endif; ?>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>

			<!-- ???????????? -->
			<ul class="footer-about am-u-md-4">
				<?php if(!empty($common_customer_store_tel)): ?>
					<li class="tel">
						<i class="am-icon-volume-control-phone"></i>
						<a href="tel:<?php echo htmlentities($common_customer_store_tel); ?>"><?php echo htmlentities($common_customer_store_tel); ?></a>
					</li>
				<?php endif; if(!empty($common_customer_store_address)): ?>
					<li class="address">
						<i class="am-icon-map-marker"></i>
						<span><?php echo htmlentities($common_customer_store_address); ?></span>
					</li>
				<?php endif; if(!empty($common_customer_store_email)): ?>
					<li class="email">
						<i class="am-icon-envelope"></i>
						<span><?php echo htmlentities($common_customer_store_email); ?></span>
					</li>
				<?php endif; if(!empty($common_customer_store_qrcode)): ?>
					<li class="qrcode">
						<img src="<?php echo htmlentities($common_customer_store_qrcode); ?>" alt="<?php echo MyC('home_seo_site_title'); ?>" />
					</li>
				<?php endif; ?>
			</ul>
		</div>

		<!-- ???????????? -->
		<div class="am-footer-miscs">
			<div class="am-container">
				<!-- ???????????? -->
				<?php if(!empty($link_list)): ?>
					<div class="friendship-list">
						<ul class="am-cf am-margin-bottom-sm">
							<li class="am-fl am-text-center title">????????????</li>
							<?php foreach($link_list as $v): ?>
								<li class="am-fl am-text-center">
									<a href="<?php echo htmlentities($v['url']); ?>" <?php if($v['is_new_window_open'] == 1): ?> target="_blank"<?php endif; ?> title="<?php echo htmlentities($v['describe']); ?>"><?php echo htmlentities($v['name']); ?></a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; if(!empty($home_site_icp)): ?>
					<b></b>
					<p class="footer-icp">
						<a href="https://beian.miit.gov.cn/" target="_blank">
							<img src="<?php echo htmlentities($attachment_host); ?>/static/common/images/beian-icp-icon.png" alt="ICP??????" />
							<?php echo htmlentities($home_site_icp); ?>
						</a>
					</p>
				<?php endif; ?>
			</div>
		</div>
	</footer>
<?php else: ?>
	<footer class="am-footer am-footer am-footer-default mobile-concise-model">
		<!-- ???????????? -->
		<div class="am-footer-miscs">
			<p class="powered">
				<?php echo $home_theme_footer_bottom_powered; ?> <?php echo htmlentities(APPLICATION_VERSION); ?>
			</p>
		</div>
	</footer>
<?php endif; ?>

<!-- ???????????? -->
<?php if(MyC('home_navigation_main_quick_status') == 1): ?>
	<a href="javascript:;" class="am-icon-btn am-icon-sliders am-show-sm-only left-main-quick-menu" data-am-modal="{target: '#left-main-quick-popup'}"></a>
<div class="am-popup popup-not-title" id="left-main-quick-popup">
    <div class="am-popup-inner">
        <span data-am-modal-close class="am-close am-close-alt am-icon-times"></span>
        <div class="am-popup-bd">
            <?php if(!empty($nav_quick) and is_array($nav_quick)): ?>
                <ul class="am-avg-sm-3 am-avg-md-4 am-avg-lg-4 left-main-quick-content">
                    <?php foreach($nav_quick as $nav): if(!empty($nav['images_url']) and !empty($nav['name'])): ?>
                            <li class="am-text-center am-padding-sm <?php if(isset($nav['class_name'])): ?><?php echo htmlentities($nav['class_name']); ?><?php endif; ?>" <?php if(!empty($nav['data_value'])): ?>data-value="<?php echo htmlentities($nav['data_value']); ?>"<?php endif; ?>>
                                <?php if(isset($nav['event_type']) and isset($nav['event_value']) and in_array($nav['event_type'], [3,4])): switch($nav['event_type']): case "3": ?>
                                            <!-- ?????? -->
                                            <a href="javascript:;" <?php if(!empty($nav['event_value_data']) and isset($nav['event_value_data'][2]) and isset($nav['event_value_data'][3]) and $nav['event_value_data'][2] != 0 and $nav['event_value_data'][3] != 0): ?>class="submit-map-popup" data-lng="<?php echo htmlentities($nav['event_value_data'][2]); ?>" data-lat="<?php echo htmlentities($nav['event_value_data'][3]); ?>"<?php endif; ?>>
                                                <p class="nav-icon" style="<?php if(!empty($nav['bg_color'])): ?>background:<?php echo htmlentities($nav['bg_color']); ?>;<?php endif; ?>">
                                                    <img src="<?php echo htmlentities($nav['images_url']); ?>" alt="<?php echo htmlentities($nav['name']); ?>" />
                                                </p>
                                        <?php break; case "4": ?>
                                            <!-- ?????? -->
                                            <a <?php if(!empty($nav['event_value'])): ?>href="tel:<?php echo htmlentities($nav['event_value']); ?>"<?php else: ?>href="javascript:;"<?php endif; ?>>
                                                <p class="nav-icon" style="<?php if(!empty($nav['bg_color'])): ?>background:<?php echo htmlentities($nav['bg_color']); ?>;<?php endif; ?>">
                                                <img src="<?php echo htmlentities($nav['images_url']); ?>" alt="<?php echo htmlentities($nav['name']); ?>" />
                                            </p>
                                        <?php break; ?>
                                    <?php endswitch; else: ?>
                                    <!-- ??????url?????? -->
                                    <a <?php if(!empty($nav['event_value'])): ?>href="<?php echo htmlentities($nav['event_value']); ?>"<?php else: ?>href="javascript:;"<?php endif; ?>>
                                        <p class="nav-icon" style="<?php if(!empty($nav['bg_color'])): ?>background:<?php echo htmlentities($nav['bg_color']); ?>;<?php endif; ?>">
                                            <img src="<?php echo htmlentities($nav['images_url']); ?>" alt="<?php echo htmlentities($nav['name']); ?>" />
                                        </p>
                                <?php endif; ?>
                                <p class="am-margin-top-xs am-text-truncate"><?php echo htmlentities($nav['name']); ?></p>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <div class="table-no"><i class="am-icon-warning"></i> ??????????????????</div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?>
<?php endif; ?>
<!-- footer end -->

<!-- ?????????????????? -->
<?php if(!isset($page_pure) or $page_pure != 1): if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
        <div class="plugins-tag">
            <span>plugins_view_common_bottom</span>
        </div>
    <?php endif; if(!empty($plugins_view_common_bottom_data) and is_array($plugins_view_common_bottom_data)): foreach($plugins_view_common_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                <?php echo $hook; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
<?php endif; ?>

<!-- footer?????????????????? -->
<?php if(!isset($is_footer) or $is_footer == 1): if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
        <div class="plugins-tag">
            <span>plugins_view_common_bottom_footer</span>
        </div>
    <?php endif; if(!empty($plugins_view_common_bottom_footer_data) and is_array($plugins_view_common_bottom_footer_data)): foreach($plugins_view_common_bottom_footer_data as $hook): if(is_string($hook) or is_int($hook)): ?>
                <?php echo $hook; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
<?php endif; ?>
</body>
</html>

<!-- ?????? -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/jquery/jquery-2.2.4.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/assets/js/amazeui.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- jshash -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/jshash/md5-min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- ??????????????? -->
<?php if(isset($is_load_imagezoom) and $is_load_imagezoom == 1): ?>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/imagezoom/jquery.imagezoom.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- echarts ?????? -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/echarts/echarts.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/echarts/macarons.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- amazeui?????? -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-switch/amazeui.switch.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-chosen/amazeui.chosen.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-dialog/amazeui.dialog.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-tagsinput/amazeui.tagsinput.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- ?????????????????? -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/cropper/cropper.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- ???????????? -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/clipboard/clipboard.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- ???????????????????????? -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/dragsort/jquery.dragsort-0.5.2.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- ueditor ????????? -->
<script type='text/javascript' src="<?php echo htmlentities($my_public_url); ?>static/common/lib/ueditor/ueditor.config.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/ueditor/ueditor.all.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/ueditor/lang/zh-cn/zh-cn.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- ??????????????? -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/colorpicker/jquery.colorpicker.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- ???????????? -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/My97DatePicker/WdatePicker.js"></script>

<!-- ckplayer????????? -->
<?php if(isset($is_load_ckplayer) and $is_load_ckplayer == 1): ?>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/ckplayer/js/ckplayer.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- map -->
<?php if(isset($is_load_map_api) and $is_load_map_api == 1 and !empty($load_map_type)): switch($load_map_type): case "baidu": ?>
            <script type="text/javascript" src="<?php echo htmlentities($my_http); ?>://api.map.baidu.com/api?v=2.0&ak=<?php echo MyC('common_baidu_map_ak'); ?>"></script>
        <?php break; case "amap": ?>
            <script type="text/javascript">
                window._AMapSecurityConfig = {
                    securityJsCode: '<?php echo MyC("common_amap_map_safety_ak"); ?>',
                }
            </script>
            <script type="text/javascript" src="<?php echo htmlentities($my_http); ?>://webapi.amap.com/maps?v=2.0&key=<?php echo MyC('common_amap_map_ak'); ?>"></script>
        <?php break; case "tencent": ?>
            <script type="text/javascript" src="<?php echo htmlentities($my_http); ?>://map.qq.com/api/js?v=2.exp&key=<?php echo MyC('common_tencent_map_ak'); ?>"></script>
            <script type="text/javascript" src="<?php echo htmlentities($my_http); ?>://map.qq.com/api/gljs?libraries=service&v=1.exp&key=<?php echo MyC('common_tencent_map_ak'); ?>"></script>
        <?php break; case "tianditu": ?>
            <script type="text/javascript" src="<?php echo htmlentities($my_http); ?>://api.tianditu.gov.cn/api?v=4.0&tk=<?php echo MyC('common_tianditu_map_ak'); ?>"></script>
        <?php break; ?>
    <?php endswitch; ?>
<?php endif; ?>

<!-- ???????????????????????? -->
<script type="text/javascript">
    var upload_editor = UE.getEditor("upload-editor-view", {
        isShow: false,
        focus: false,
        enableAutoSave: false,
        autoSyncData: false,
        autoFloatEnabled:false,
        wordCount: false,
        sourceEditor: null,
        scaleEnabled:true,
        toolbars: [["insertimage", "insertvideo", "attachment"]]
    });
</script>

<!-- ???????????? -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/js/common.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/index/<?php echo htmlentities($default_theme); ?>/js/common.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php if(isset($is_load_layout_admin) and $is_load_layout_admin == 1): ?>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/js/layout.admin.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- ??????????????????js -->
<?php if(!empty($plugins_js)): ?>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/<?php echo htmlentities($plugins_js); ?>?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- ???????????????js -->
<?php if(!empty($module_js)): ?>
	<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/<?php echo htmlentities($module_js); ?>?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- ???????????? --> 
<?php if((!isset($page_pure) or $page_pure != 1) and (!isset($is_footer) or $is_footer == 1)): ?>
    <?php echo MyC('home_footer_info'); ?>
<?php endif; ?>

<!-- js?????? -->
<?php if((!isset($page_pure) or $page_pure != 1) and (!isset($is_footer) or $is_footer == 1)): if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
        <div class="plugins-tag">
            <span>plugins_js</span>
        </div>
    <?php endif; ?>
<?php endif; if(!empty($plugins_js_data) and is_array($plugins_js_data)): foreach($plugins_js_data as $hook): if(!empty($hook) and is_string($hook)): if(substr($hook, 0, 4) == 'http'): ?>
                <script type='text/javascript' src="<?php echo htmlentities($hook); ?>?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
            <?php else: ?>
                <script type='text/javascript' src="<?php echo htmlentities($public_host); ?><?php echo htmlentities($hook); ?>?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
            <?php endif; elseif(is_array($hook)): foreach($hook as $hook_js): if(!empty($hook_js) and is_string($hook_js)): if(substr($hook_js, 0, 4) == 'http'): ?>
                        <script type='text/javascript' src="<?php echo htmlentities($hook_js); ?>?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
                    <?php else: ?>
                        <script type='text/javascript' src="<?php echo htmlentities($public_host); ?><?php echo htmlentities($hook_js); ?>?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>

<!-- ???????????????????????? -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
    <div class="plugins-tag">
        <span>plugins_common_page_bottom</span>
    </div>
<?php endif; if(!empty($plugins_common_page_bottom_data) and is_array($plugins_common_page_bottom_data)): foreach($plugins_common_page_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
            <?php echo $hook; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>