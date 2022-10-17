<?php /*a:6:{s:79:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/site/siteset/index.html";i:1665913498;s:74:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/header.html";i:1665913498;s:80:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/page_loading.html";i:1665913498;s:76:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/site/public/nav.html";i:1665913498;s:84:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/site/public/siteset_nav.html";i:1665913498;s:74:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/footer.html";i:1665913498;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php echo MyConfig('shopxo.default_charset', 'utf-8'); ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlentities($public_host); ?>favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1" />
	<title>后台管理系统</title>
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/assets/css/amazeui.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-switch/amazeui.switch.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-chosen/amazeui.chosen.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-tagsinput/amazeui.tagsinput.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/css/common.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/admin/<?php echo htmlentities($default_theme); ?>/css/common.css?v=<?php echo MyC('home_static_cache_version'); ?>" />

    <!-- ckplayer播放器 -->
    <?php if(isset($is_load_ckplayer) and $is_load_ckplayer == 1): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/lib/ckplayer/css/ckplayer.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; ?>

    <!-- 可视化拖拽 -->
    <?php if(isset($is_load_layout) and $is_load_layout == 1): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/css/layout.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; if(isset($is_load_layout_admin) and $is_load_layout_admin == 1): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/common/css/layout.admin.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; ?>
	<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/admin/<?php echo htmlentities($default_theme); ?>/css/iconfontmenu.css?v=<?php echo MyC('home_static_cache_version'); ?>" />

    <!-- 插件 -->
    <?php if(!empty($plugins_css)): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/<?php echo htmlentities($plugins_css); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; ?>

    <!-- 页面样式 -->
	<?php if(!empty($module_css)): ?>
		<link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/<?php echo htmlentities($module_css); ?>?v=<?php echo MyC('home_static_cache_version'); ?>" />
	<?php endif; ?>

	<!-- css钩子 -->
    <?php if(!empty($plugins_admin_css_data) and is_array($plugins_admin_css_data)): foreach($plugins_admin_css_data as $hook): if(!empty($hook) and is_string($hook)): if(substr($hook, 0, 4) == 'http'): ?>
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

    <!-- 公共header内钩子 -->
	<?php if(!empty($plugins_admin_common_header_data) and is_array($plugins_admin_common_header_data)): foreach($plugins_admin_common_header_data as $hook): if(is_string($hook) or is_int($hook)): ?>
				<?php echo $hook; ?>
			<?php endif; ?>
		<?php endforeach; ?>
	<?php endif; ?>

    <!-- 主题配色 -->
    <?php if(isset($admin_color_value) and $admin_color_value == 1): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo htmlentities($public_host); ?>static/admin/<?php echo htmlentities($default_theme); ?>/css/color/black.css?v=<?php echo MyC('home_static_cache_version'); ?>" />
    <?php endif; ?>
</head>
<script type="text/javascript">
    var __system_type__ = '<?php echo htmlentities($system_type); ?>';
    var __root__ = '<?php echo htmlentities($public_host); ?>';
    var __my_http__ = '<?php echo htmlentities($my_http); ?>';
    var __my_url__ = '<?php echo htmlentities($my_url); ?>';
    var __my_public_url__ = '<?php echo htmlentities($my_public_url); ?>';
    var __public__ = '<?php echo htmlentities($public_host); ?>';
    var __default_theme__ = '<?php echo htmlentities($default_theme); ?>';
	var __attachment_host__ = '<?php echo htmlentities($attachment_host); ?>';
    var __seo_url_suffix__ = '<?php echo MyC("home_seo_url_html_suffix", "html", true); ?>';
    var __currency_symbol__ = '<?php echo htmlentities($currency_symbol); ?>';
    var __is_mobile__ = '<?php if(IsMobile()): ?>1<?php else: ?>0<?php endif; ?>';
    var __env_max_input_vars_count__ = '<?php echo htmlentities($env_max_input_vars_count); ?>';
    var __map_view_url__ = '<?php echo MyUrl("admin/map/index"); ?>';
    var __load_map_type__ = '<?php echo htmlentities($load_map_type); ?>';
</script>
<body>
<?php if($module_name.$controller_name.$action_name != 'adminindexindex'): ?>
    <div class="am-modal am-page-loading">
    <span class="am-icon-spinner am-icon-pulse am-icon-lg"></span>
</div>
<?php endif; ?>

<!-- 公共顶部钩子 -->
<?php if(!empty($plugins_admin_view_common_top_data) and is_array($plugins_admin_view_common_top_data) and (!isset($is_header) or $is_header == 1)): foreach($plugins_admin_view_common_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
			<?php echo $hook; ?>
		<?php endif; ?>
	<?php endforeach; ?>
<?php endif; ?>

<!-- right content start  -->
<div class="content-right">
    <!-- second nav start -->
    <?php if(!empty($second_nav_list) and is_array($second_nav_list)): ?>
    <ul class="am-nav am-nav-pills table-nav second-nav">
        <?php foreach($second_nav_list as $v): ?>
            <li <?php if($nav_type == $v['type']): ?>class="am-active"<?php endif; ?> data-type="<?php echo htmlentities($v['type']); ?>">
                <a href="<?php echo MyUrl('admin/site/index', ['nav_type'=>$v['type'], 'view_type'=>$view_type]); ?>"><?php echo htmlentities($v['name']); ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; switch($nav_type): case "login":case "forgetpwd": ?>
        <!-- 登录/密码找回提示 -->
        <div class="content">
            <div class="am-alert am-alert-warning am-radius am-margin-bottom-0" data-am-alert>
                <button type="button" class="am-close">&times;</button>
                <p class="am-text-xs">左侧图片最多可上传3张图片、每次随机展示其中一张</p>
            </div>
        </div>
    <?php break; case "register": ?>
        <!-- 注册提示 -->
        <div class="content">
            <div class="am-alert am-alert-warning am-radius am-margin-bottom-0" data-am-alert>
                <button type="button" class="am-close">&times;</button>
                <p class="am-text-xs">可自定义背景图片、默认底灰色</p>
            </div>
        </div>
    <?php break; ?>
<?php endswitch; ?>
    <!-- second nav end -->

    <div class="content">
        <!-- nav start -->
        <?php if(!empty($siteset_nav_list) and is_array($siteset_nav_list)): ?>
    <ul class="am-nav am-nav-pills table-nav">
        <?php foreach($siteset_nav_list as $v): ?>
            <li <?php if($view_type == $v['type']): ?>class="am-active"<?php endif; ?> data-type="<?php echo htmlentities($v['type']); ?>">
                <a href="<?php echo MyUrl('admin/site/index', ['nav_type'=>$nav_type, 'view_type'=>$v['type']]); ?>"><?php echo htmlentities($v['name']); ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
        <!-- nav end -->

        <!-- form start -->
        <form class="am-form form-validation" action="<?php echo MyUrl('admin/site/save'); ?>" method="POST" request-type="ajax-url" request-value="<?php echo MyUrl('admin/site/index', ['nav_type'=>$nav_type, 'view_type'=>$view_type]); ?>" enctype="multipart/form-data">
            <!-- 基础 -->
            <div class="am-panel am-panel-default am-margin-top-sm">
                <div class="am-panel-hd">
                    <h3 class="am-panel-title">基础</h3>
                </div>
                <div class="am-panel-bd am-padding-vertical-xs">
                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['home_index_banner_left_status']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['home_index_banner_left_status']['describe']); ?></span></label>
                        <select name="<?php echo htmlentities($data['home_index_banner_left_status']['only_tag']); ?>" class="am-radius chosen-select" data-validation-message="<?php echo htmlentities($data['home_index_banner_left_status']['error_tips']); ?>" required>
                            <?php foreach($common_close_open_list as $v): ?>
                                <option value="<?php echo htmlentities($v['value']); ?>" <?php if(isset($data['home_index_banner_left_status']['value']) and $data['home_index_banner_left_status']['value'] == $v['value']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['home_index_banner_right_status']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['home_index_banner_right_status']['describe']); ?></span></label>
                        <select name="<?php echo htmlentities($data['home_index_banner_right_status']['only_tag']); ?>" class="am-radius chosen-select" data-validation-message="<?php echo htmlentities($data['home_index_banner_right_status']['error_tips']); ?>" required>
                            <?php foreach($common_close_open_list as $v): ?>
                                <option value="<?php echo htmlentities($v['value']); ?>" <?php if(isset($data['home_index_banner_right_status']['value']) and $data['home_index_banner_right_status']['value'] == $v['value']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['home_index_floor_data_type']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['home_index_floor_data_type']['describe']); ?></span></label>
                        <select name="<?php echo htmlentities($data['home_index_floor_data_type']['only_tag']); ?>" class="am-radius chosen-select" data-validation-message="<?php echo htmlentities($data['home_index_floor_data_type']['error_tips']); ?>">
                            <?php foreach($common_site_floor_data_type_list as $k=>$v): ?>
                                <option value="<?php echo htmlentities($k); ?>" <?php if(isset($data['home_index_floor_data_type']['value']) and $data['home_index_floor_data_type']['value'] == $k): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="am-alert">
                            拖拽模式需要自行进入首页设计页面、请先保存选中配置后再<a href="<?php echo MyUrl('index/index/index', ['is_design'=>1, 'save_url'=>urlencode(base64_encode(MyUrl('admin/layout/layoutindexhomesave')))]); ?>" target="_blank" class="am-margin-left-sm">去设计页面 >></a>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['home_index_floor_left_top_category']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['home_index_floor_left_top_category']['describe']); ?></span></label>
                        <?php if(!empty($goods_category_list)): ?>
                            <ul class="am-list am-list-static am-list-border am-margin-bottom-0">
                                <?php foreach($goods_category_list as $category): ?>
                                    <li>
                                        <p class="am-text-truncate am-margin-bottom-xs">
                                            <span><?php echo htmlentities($category['name']); ?></span>
                                            <span class="am-margin-left-sm form.am-form am-form-group-label-tips"><?php echo htmlentities($category['vice_name']); ?></span>
                                        </p>
                                        <select name="<?php echo htmlentities($data['home_index_floor_left_top_category']['only_tag']); ?>[<?php echo htmlentities($category['id']); ?>]" class="am-radius chosen-select" multiple="multiple" data-placeholder="请选择..." data-validation-message="<?php echo htmlentities($data['home_index_floor_left_top_category']['error_tips']); ?>">
                                            <?php if(!empty($category['items'])): foreach($category['items'] as $v): ?>
                                                    <option value="<?php echo htmlentities($v['id']); ?>" <?php if(!empty($category['config_category_ids']) and in_array($v['id'], $category['config_category_ids'])): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </select>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <p class="am-text-danger am-margin-top-sm">如需更多楼层展示，请先到 / 商品管理->商品分类、一级分类设置首页推荐</p>
                        <?php else: ?>
                            <div class="am-text-center am-margin-top-lg">
                                <i class="am-icon-warning"></i>
                                <span>暂无数据，请先到 / 商品管理->商品分类、一级分类设置首页推荐</span>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['home_index_floor_top_right_keywords']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['home_index_floor_top_right_keywords']['describe']); ?></span></label>
                        <?php if(!empty($goods_category_list)): ?>
                            <ul class="am-list am-list-static am-list-border am-margin-bottom-0">
                                <?php foreach($goods_category_list as $category): ?>
                                    <li>
                                        <p class="am-text-truncate am-margin-bottom-xs">
                                            <span><?php echo htmlentities($category['name']); ?></span>
                                            <span class="am-margin-left-sm form.am-form am-form-group-label-tips"><?php echo htmlentities($category['vice_name']); ?></span>
                                        </p>
                                        <input type="text" name="<?php echo htmlentities($data['home_index_floor_top_right_keywords']['only_tag']); ?>[<?php echo htmlentities($category['id']); ?>]" placeholder="<?php echo htmlentities($category['name']); ?><?php echo htmlentities($data['home_index_floor_top_right_keywords']['describe']); ?>" data-validation-message="<?php echo htmlentities($data['home_index_floor_top_right_keywords']['error_tips']); ?>" class="am-radius" value="<?php echo htmlentities($category['config_keywords']); ?>" data-am-tagsinput />
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <p class="am-text-danger am-margin-top-sm">如需更多楼层展示，请先到 / 商品管理->商品分类、一级分类设置首页推荐</p>
                        <?php else: ?>
                            <div class="am-text-center am-margin-top-lg">
                                <i class="am-icon-warning"></i>
                                <span>暂无数据，请先到 / 商品管理->商品分类、一级分类设置首页推荐</span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- 自动模式 -->
            <div class="am-panel am-panel-default">
                <div class="am-panel-hd">
                    <h3 class="am-panel-title">自动模式</h3>
                </div>
                <div class="am-panel-bd am-padding-vertical-xs">
                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['home_index_floor_goods_max_count']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['home_index_floor_goods_max_count']['describe']); ?></span></label>
                        <div class="am-input-group am-input-group-sm">
                            <input type="number" min="0" name="<?php echo htmlentities($data['home_index_floor_goods_max_count']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['home_index_floor_goods_max_count']['name']); ?>" data-validation-message="<?php echo htmlentities($data['home_index_floor_goods_max_count']['error_tips']); ?>" class="am-radius am-form-field" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['home_index_floor_goods_max_count']['value']); ?>"<?php endif; ?> />
                            <span class="am-input-group-btn">
                                <button class="am-btn am-btn-default" type="button">个</button>
                          </span>
                        </div>
                        <div class="am-alert am-alert-warning" data-am-alert>
                            <button type="button" class="am-close">&times;</button>
                            <p>1. 配置每个楼层最多展示多少个商品</p>
                            <p>2. 不建议将数量修改的太大、会导致PC端左侧空白区域太大</p>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['home_index_floor_goods_order_by_type']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['home_index_floor_goods_order_by_type']['describe']); ?></span></label>
                        <select name="<?php echo htmlentities($data['home_index_floor_goods_order_by_type']['only_tag']); ?>" class="am-radius chosen-select" data-validation-message="<?php echo htmlentities($data['home_index_floor_goods_order_by_type']['error_tips']); ?>">
                            <?php foreach($goods_order_by_type_list as $k=>$v): ?>
                                <option value="<?php echo htmlentities($k); ?>" <?php if(isset($data['home_index_floor_goods_order_by_type']['value']) and $data['home_index_floor_goods_order_by_type']['value'] == $k): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="am-alert am-alert-warning" data-am-alert>
                            <button type="button" class="am-close">&times;</button>
                            <p>综合为：热度->销量->最新 进行 降序(desc)排序</p>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['home_index_floor_goods_order_by_rule']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['home_index_floor_goods_order_by_rule']['describe']); ?></span></label>
                        <select name="<?php echo htmlentities($data['home_index_floor_goods_order_by_rule']['only_tag']); ?>" class="am-radius chosen-select" data-validation-message="<?php echo htmlentities($data['home_index_floor_goods_order_by_rule']['error_tips']); ?>">
                            <?php foreach($goods_order_by_rule_list as $k=>$v): ?>
                                <option value="<?php echo htmlentities($k); ?>" <?php if(isset($data['home_index_floor_goods_order_by_rule']['value']) and $data['home_index_floor_goods_order_by_rule']['value'] == $k): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>

            <!-- 手动模式 -->
            <div class="am-panel am-panel-default">
                <div class="am-panel-hd">
                    <h3 class="am-panel-title">手动模式</h3>
                </div>
                <div class="am-panel-bd am-padding-vertical-xs">
                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['home_index_floor_manual_mode_goods']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['home_index_floor_manual_mode_goods']['describe']); ?></span></label>
                        <div class="am-alert am-alert-warning" data-am-alert>
                            <button type="button" class="am-close">&times;</button>
                            <p>1. 可点击商品标题拖拽排序、按照顺序展示</p>
                            <p>2. 不建议添加很多商品、会导致PC端左侧空白区域太大</p>
                        </div>
                        <?php if(!empty($goods_category_list)): ?>
                            <ul class="am-list am-list-static am-list-border am-margin-bottom-0 am-margin-top-sm">
                                <?php foreach($goods_category_list as $category): ?>
                                    <li>
                                        <p class="am-text-truncate am-margin-bottom-xs">
                                            <span><?php echo htmlentities($category['name']); ?></span>
                                            <span class="am-margin-left-sm form.am-form am-form-group-label-tips"><?php echo htmlentities($category['vice_name']); ?></span>
                                        </p>
                                        <ul class="am-list am-list-border am-list-striped am-margin-top-sm manual-mode-goods-container manual-mode-goods-container-<?php echo htmlentities($category['id']); ?>">
                                        <?php if(!empty($floor_manual_mode_goods_list) && !empty($floor_manual_mode_goods_list[$category['id']])): foreach($floor_manual_mode_goods_list[$category['id']] as $g): ?>
                                                <li class="manual-mode-goods-item-<?php echo htmlentities($g['id']); ?>">
                                                    <input type="hidden" name="<?php echo htmlentities($data['home_index_floor_manual_mode_goods']['only_tag']); ?>[<?php echo htmlentities($category['id']); ?>][]" value="<?php echo htmlentities($g['id']); ?>" />
                                                    <a href="<?php echo htmlentities($g['goods_url']); ?>" target="_blank" class="am-text-truncate">
                                                        <img src="<?php echo htmlentities($g['images']); ?>" alt="<?php echo htmlentities($g['title']); ?>" class="am-fl am-margin-right-xs" width="20" height="20" />
                                                        <span><?php echo htmlentities($g['title']); ?></span>
                                                    </a>
                                                    <button type="button" class="am-close am-fr">&times;</button>
                                                </li>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                    <span class="business-operations-submit goods-popup-add" data-tag=".manual-mode-goods-container-<?php echo htmlentities($category['id']); ?>" data-form-name="<?php echo htmlentities($data['home_index_floor_manual_mode_goods']['only_tag']); ?>[<?php echo htmlentities($category['id']); ?>][]">+添加商品</span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <p class="am-text-danger am-margin-top-sm">如需更多楼层展示，请先到 / 商品管理->商品分类、一级分类设置首页推荐</p>
                        <?php else: ?>
                            <div class="am-text-center am-margin-top-lg">
                                <i class="am-icon-warning"></i>
                                <span>暂无数据，请先到 / 商品管理->商品分类、一级分类设置首页推荐</span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="am-form-group am-form-group-refreshing am-margin-top-lg am-padding-left-0">
                <input type="hidden" name="nav_type" value="<?php echo htmlentities($nav_type); ?>" />
                <input type="hidden" name="view_type" value="<?php echo htmlentities($view_type); ?>" />
                <button type="submit" class="am-btn am-btn-primary am-radius btn-loading-example am-btn-sm am-btn-block" data-am-loading="{loadingText:'处理中...'}">保存</button>
            </div>
        </form>
        <!-- form end -->
    </div>
</div>
<!-- right content end  -->

<!-- 商品添加弹窗 -->
<div class="am-popup" id="siteset-goods-popup">
    <div class="am-popup-inner">
        <div class="am-popup-hd">
            <h4 class="am-popup-title">商品添加</h4>
            <span class="am-icon-arrows-alt am-full"></span>
            <span data-am-modal-close class="am-close">&times;</span>
        </div>
        <div class="am-popup-bd am-padding-0">
            <form class="am-form am-padding-sm goods-add-container">
                <!-- 搜索 -->
                <div class="forth-selection-container" data-search-url="<?php echo MyUrl('admin/site/goodssearch'); ?>">
                    <select class="am-radius chosen-select forth-selection-form-category" data-placeholder="商品分类..." data-validation-message="请选择商品分类">
                        <option value="">商品分类...</option>
                        <?php if(!empty($goods_category_list)): foreach($goods_category_list as $v): ?>
                                <option value="<?php echo htmlentities($v['id']); ?>">一级 - <?php echo htmlentities($v['name']); ?></option>
                                <?php if(!empty($v['items'])): foreach($v['items'] as $vs): ?>
                                        <option style="padding-left: 15px;" value="<?php echo htmlentities($vs['id']); ?>">二级 - <?php echo htmlentities($vs['name']); ?></option>
                                        <?php if(!empty($vs['items'])): foreach($vs['items'] as $vss): ?>
                                                <option style="padding-left: 30px;" value="<?php echo htmlentities($vss['id']); ?>">三级 - <?php echo htmlentities($vss['name']); ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                    <input type="text" placeholder="商品名称" class="am-radius forth-selection-form-keywords" />
                    <button type="button" class="am-btn am-btn-secondary am-radius am-btn-sm am-icon-search search-submit" data-am-loading="{loadingText: ' 搜索中...'}"> 搜索</button>
                </div>

                <!-- 商品列表 -->
                <div class="am-scrollable-vertical am-margin-top-sm am-padding-bottom-xs goods-list-container" data-loading-msg="搜索中...">
                    <ul class="am-gallery am-avg-sm-3 am-avg-md-4 am-avg-lg-5 am-gallery-bordered">
                        <div class="table-no"><i class="am-icon-warning"></i> 请搜索商品</div>
                    </ul>
                </div>

                <!-- 分页 -->
                <div class="am-margin-top-sm am-text-center goods-page-container"></div>
            </form>
        </div>
    </div>
</div>
        
<!-- footer start -->
<!-- 应用商店账户绑定 -->
<div class="am-popup popup-not-title" id="store-accounts-popup">
    <div class="am-popup-inner">
        <?php if(empty($site_store_info) or empty($site_store_info['base']) or !isset($site_store_info['base']['is_user_not_cloae_accounts_popup']) or $site_store_info['base']['is_user_not_cloae_accounts_popup'] == 0): ?>
            <span data-am-modal-close class="am-close am-close-alt am-icon-times"></span>
        <?php endif; ?>
        <div class="am-popup-bd">
            <!-- form start -->
            <form class="am-form form-validation-store-accounts view-save" action="<?php echo MyUrl('admin/index/storeaccountsbind'); ?>" method="POST" request-type="ajax-reload">
                <div class="am-form-group am-form-group-refreshing business-form-block am-margin-top-xs">
                    <label>账号<span class="am-form-group-label-tips-must">必填</span></label>
                    <input type="text" name="common_store_accounts" placeholder="用户名/手机/邮箱" data-validation-message="账号格式1~30个字符" class="am-radius" value="" autocomplete="off" required />
                </div>
                <div class="am-form-group am-form-group-refreshing business-form-block am-margin-top-xs">
                    <label>密码<span class="am-form-group-label-tips-must">必填</span></label>
                    <input type="password" name="common_store_password" placeholder="登录密码" data-validation-message="登录密码格式6~30个字符" class="am-radius" value="" autocomplete="off" required />
                </div>
                
                <div class="am-form-group am-form-group-refreshing am-margin-top-sm">
                    <button type="submit" class="am-btn am-btn-primary am-radius btn-loading-example am-btn-sm am-btn-block" data-am-loading="{loadingText:'绑定中...'}">绑定</button>
                </div>

            </form>
            <!-- form end -->
        </div>
    </div>
</div>

<!-- 插件包更新弹窗 -->
<div class="am-modal am-modal-no-btn" tabindex="-1" id="package-upgrade-modal">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">
            <a href="javascript: void(0)" class="am-close" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd">
            <p class="am-margin-bottom-sm"><strong class="upgrade-name">...</strong></p>
            <div class="am-scrollable-vertical am-text-left"></div>
            <div class="am-text-left am-nbfc am-margin-top-sm">
                <span class="am-icon-calendar-check-o upgrade-date"> ...</span>
                <span class="am-icon-vimeo am-margin-left-sm upgrade-version"> ...</span>
                <div class="am-fr">
                    <button type="button" class="am-btn am-btn-default am-radius am-btn-xs" data-am-modal-close>取消</button>
                    <button type="button" class="am-btn am-btn-success am-radius am-btn-xs am-margin-left-sm package-upgrade-submit" data-type="" data-value="" data-url="<?php echo MyUrl('admin/packageupgrade/upgrade'); ?>">更新</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- commom html -->
<textarea id="upload-editor-view" data-url="<?php if(isset($is_load_upload_editor) and $is_load_upload_editor == 1): ?><?php echo MyUrl('admin/ueditor/index', ['path_type'=>empty($editor_path_type) ? 'common' : $editor_path_type]); ?><?php endif; ?>" style="display: none;"></textarea>

<!-- 公共底部钩子 -->
<?php if(!empty($plugins_admin_view_common_bottom_data) and is_array($plugins_admin_view_common_bottom_data)): foreach($plugins_admin_view_common_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
            <?php echo $hook; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>
</body>
</html>

<!-- 类库 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/jquery/jquery-2.2.4.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/assets/js/amazeui.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- jshash -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/jshash/md5-min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- echarts 图表 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/echarts/echarts.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/echarts/macarons.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- ueditor 编辑器 -->
<script type='text/javascript' src="<?php echo htmlentities($my_public_url); ?>static/common/lib/ueditor/ueditor.config.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/ueditor/ueditor.all.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/ueditor/lang/zh-cn/zh-cn.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 颜色选择器 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/colorpicker/jquery.colorpicker.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 元素拖拽排序插件 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/dragsort/jquery.dragsort-0.5.2.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 动画数数 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/animation-count-to/animation.count.to.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- amazeui插件 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-switch/amazeui.switch.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-chosen/amazeui.chosen.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-dialog/amazeui.dialog.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/amazeui-tagsinput/amazeui.tagsinput.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 日期组件 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/My97DatePicker/WdatePicker.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 元素拖动 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/tdrag/tdrag.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- 复制插件 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/lib/clipboard/clipboard.min.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>

<!-- ckplayer播放器 -->
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

<!-- 隐藏编辑器初始化 -->
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

<!-- 项目公共 -->
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/js/common.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/admin/<?php echo htmlentities($default_theme); ?>/js/common.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php if(isset($is_load_layout_admin) and $is_load_layout_admin == 1): ?>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/common/js/layout.admin.js?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- 应用插件公共js -->
<?php if(!empty($plugins_js)): ?>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/<?php echo htmlentities($plugins_js); ?>?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- 当前控制器js -->
<?php if(!empty($module_js)): ?>
    <script type='text/javascript' src="<?php echo htmlentities($public_host); ?>static/<?php echo htmlentities($module_js); ?>?v=<?php echo MyC('home_static_cache_version'); ?>"></script>
<?php endif; ?>

<!-- js钩子 -->
<?php if(!empty($plugins_admin_js_data) and is_array($plugins_admin_js_data)): foreach($plugins_admin_js_data as $hook): if(!empty($hook) and is_string($hook)): if(substr($hook, 0, 4) == 'http'): ?>
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

<!-- 公共页面底部钩子 -->
<?php if(!empty($plugins_admin_common_page_bottom_data) and is_array($plugins_admin_common_page_bottom_data)): foreach($plugins_admin_common_page_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
            <?php echo $hook; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>

<script type="text/javascript">
$(function()
{
    // 绑定商店帐号
    <?php if(!empty($site_store_info) and !empty($site_store_info['base']) and isset($site_store_info['base']['is_user_force_bind_accounts']) and $site_store_info['base']['is_user_force_bind_accounts'] == 1 and !in_array($module_name.$controller_name.$action_name, ['adminindexindex', 'adminadminlogininfo']) and empty($site_store_info['user'])): ?>
        StoreAccountsPopupOpen();
    <?php endif; ?>
});
</script>
<!-- footer end -->