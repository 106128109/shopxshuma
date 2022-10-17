<?php /*a:4:{s:73:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/config/index.html";i:1665913498;s:74:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/header.html";i:1665913498;s:80:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/page_loading.html";i:1665913498;s:74:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/footer.html";i:1665913498;}*/ ?>
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
	<div class="content">
		<!-- form start -->
		<form class="am-form form-validation" action="<?php echo MyUrl('admin/config/save', ['view_type'=>$view_type]); ?>" method="POST" request-type="ajax-url" request-value="<?php echo MyUrl('admin/config/index'); ?>">
            <!-- 基础配置 -->
            <div class="am-panel am-panel-default">
                <div class="am-panel-hd">
                    <h3 class="am-panel-title">基础配置</h3>
                </div>
                <div class="am-panel-bd am-padding-vertical-xs">
                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['admin_excel_charset']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['admin_excel_charset']['describe']); ?></span></label>
                        <select name="<?php echo htmlentities($data['admin_excel_charset']['only_tag']); ?>" class="am-radius chosen-select" data-validation-message="<?php echo htmlentities($data['admin_excel_charset']['error_tips']); ?>" required>
                            <?php foreach($common_excel_charset_list as $v): ?>
                                <option value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($data['admin_excel_charset']['value']) and $data['admin_excel_charset']['value'] == $v['id']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['common_excel_export_type']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_excel_export_type']['describe']); ?></span></label>
                        <select name="<?php echo htmlentities($data['common_excel_export_type']['only_tag']); ?>" class="am-radius chosen-select" data-validation-message="<?php echo htmlentities($data['common_excel_export_type']['error_tips']); ?>" required>
                            <?php foreach($common_excel_export_type_list as $v): ?>
                                <option value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($data['common_excel_export_type']['value']) and $data['common_excel_export_type']['value'] == $v['id']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['common_page_size']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_page_size']['describe']); ?></span></label>
                        <input type="number" name="<?php echo htmlentities($data['common_page_size']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_page_size']['name']); ?>" pattern="<?php echo MyConst('common_regex_page_number'); ?>" data-validation-message="<?php echo htmlentities($data['common_page_size']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_page_size']['value']); ?>"<?php endif; ?> required />
                    </div>
                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['admin_notice']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['admin_notice']['describe']); ?></span></label>
                        <textarea rows="4" name="<?php echo htmlentities($data['admin_notice']['only_tag']); ?>" class="am-radius" placeholder="<?php echo htmlentities($data['admin_notice']['name']); ?>" data-validation-message="<?php echo htmlentities($data['admin_notice']['error_tips']); ?>"><?php if(!empty($data)): ?><?php echo htmlentities($data['admin_notice']['value']); ?><?php endif; ?></textarea>
                    </div>
                </div>
            </div>

            <!-- 后台登录 -->
            <div class="am-panel am-panel-default">
                <div class="am-panel-hd">
                    <h3 class="am-panel-title">后台登录</h3>
                </div>
                <div class="am-panel-bd am-padding-vertical-xs">
                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['admin_login_info_bg_images_rand']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['admin_login_info_bg_images_rand']['describe']); ?></span></label>
                        <select name="<?php echo htmlentities($data['admin_login_info_bg_images_rand']['only_tag']); ?>" class="am-radius chosen-select" data-validation-message="<?php echo htmlentities($data['admin_login_info_bg_images_rand']['error_tips']); ?>" required>
                            <?php foreach($common_is_enable_list as $v): ?>
                                <option value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($data['admin_login_info_bg_images_rand']['value']) and $data['admin_login_info_bg_images_rand']['value'] == $v['id']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="am-alert am-alert-warning">
                            <p>1. 默认背景图片位于[ public/static/admin/default/images/login ]目录下</p>
                            <p>2. 变更图片后、需要在[ app/admin/controller/Admin.php ]文件中[ LoginInfo ]方法中修改[ bg_images_list ]变量</p>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['admin_login_type']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['admin_login_type']['describe']); ?></span></label>
                        <select name="<?php echo htmlentities($data['admin_login_type']['only_tag']); ?>" multiple="multiple" class="am-radius chosen-select" data-placeholder="<?php echo htmlentities($data['admin_login_type']['name']); ?>" data-validation-message="<?php echo htmlentities($data['admin_login_type']['error_tips']); ?>" required>
                            <?php foreach($common_login_type_list as $v): ?>
                                <option value="<?php echo htmlentities($v['value']); ?>" <?php if(isset($data['admin_login_type']['value']) and in_array($v['value'], $data['admin_login_type']['value'])): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['admin_login_img_verify_state']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['admin_login_img_verify_state']['describe']); ?></span></label>
                        <select name="<?php echo htmlentities($data['admin_login_img_verify_state']['only_tag']); ?>" class="am-radius chosen-select" data-validation-message="<?php echo htmlentities($data['admin_login_img_verify_state']['error_tips']); ?>" required>
                            <?php foreach($common_close_open_list as $v): ?>
                                <option value="<?php echo htmlentities($v['value']); ?>" <?php if(isset($data['admin_login_img_verify_state']['value']) and $data['admin_login_img_verify_state']['value'] == $v['value']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>

            <!-- 商品 -->
            <div class="am-panel am-panel-default">
                <div class="am-panel-hd">
                    <h3 class="am-panel-title">商品</h3>
                </div>
                <div class="am-panel-bd am-padding-vertical-xs">
                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['common_spec_add_max_number']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_spec_add_max_number']['describe']); ?></span></label>
                        <input type="number" name="<?php echo htmlentities($data['common_spec_add_max_number']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_spec_add_max_number']['describe']); ?>" data-validation-message="<?php echo htmlentities($data['common_spec_add_max_number']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_spec_add_max_number']['value']); ?>"<?php endif; ?> />
                    </div>
                </div>
            </div>

            <!-- 地图 -->
            <div class="am-panel am-panel-default">
                <div class="am-panel-hd">
                    <h3 class="am-panel-title">地图</h3>
                </div>
                <div class="am-panel-bd am-padding-vertical-xs">
                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['common_map_type']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_map_type']['describe']); ?></span></label>
                        <select name="<?php echo htmlentities($data['common_map_type']['only_tag']); ?>" class="am-radius chosen-select" data-validation-message="<?php echo htmlentities($data['common_map_type']['error_tips']); ?>" required>
                            <?php foreach($common_map_type_list as $v): ?>
                                <option value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($data['common_map_type']['value']) and $data['common_map_type']['value'] == $v['id']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="am-alert am-alert-warning">
                            <p>由于每一家的地图标准不一样、请勿随意切换地图、会导致地图坐标标注不准确的情况。</p>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['common_baidu_map_ak']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_baidu_map_ak']['describe']); ?></span></label>
                        <input type="text" name="<?php echo htmlentities($data['common_baidu_map_ak']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_baidu_map_ak']['describe']); ?>" data-validation-message="<?php echo htmlentities($data['common_baidu_map_ak']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_baidu_map_ak']['value']); ?>"<?php endif; ?> />
                        <div class="am-alert am-alert-warning">
                            请到百度地图开放平台申请 <?php if(!empty($site_store_links) and !empty($site_store_links['baidu_map_course'])): ?><a href="<?php echo htmlentities($site_store_links['baidu_map_course']); ?>" target="_blank" class="am-margin-left-sm">查看配置教程 <i class="am-icon-external-link"></i></a><?php endif; ?>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['common_amap_map_ak']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_amap_map_ak']['describe']); ?></span></label>
                        <input type="text" name="<?php echo htmlentities($data['common_amap_map_ak']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_amap_map_ak']['describe']); ?>" data-validation-message="<?php echo htmlentities($data['common_amap_map_ak']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_amap_map_ak']['value']); ?>"<?php endif; ?> />
                        <input type="text" name="<?php echo htmlentities($data['common_amap_map_safety_ak']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_amap_map_safety_ak']['describe']); ?>" data-validation-message="<?php echo htmlentities($data['common_amap_map_safety_ak']['error_tips']); ?>" class="am-radius am-margin-top-xs" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_amap_map_safety_ak']['value']); ?>"<?php endif; ?> />
                        <div class="am-alert am-alert-warning">
                            请到高德地图开放平台申请 <?php if(!empty($site_store_links) and !empty($site_store_links['amap_map_course'])): ?><a href="<?php echo htmlentities($site_store_links['amap_map_course']); ?>" target="_blank" class="am-margin-left-sm">查看配置教程 <i class="am-icon-external-link"></i></a><?php endif; ?>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['common_tencent_map_ak']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_tencent_map_ak']['describe']); ?></span></label>
                        <input type="text" name="<?php echo htmlentities($data['common_tencent_map_ak']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_tencent_map_ak']['describe']); ?>" data-validation-message="<?php echo htmlentities($data['common_tencent_map_ak']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_tencent_map_ak']['value']); ?>"<?php endif; ?> />
                        <div class="am-alert am-alert-warning">
                            请到腾讯地图开放平台申请 <?php if(!empty($site_store_links) and !empty($site_store_links['tencent_map_course'])): ?><a href="<?php echo htmlentities($site_store_links['tencent_map_course']); ?>" target="_blank" class="am-margin-left-sm">查看配置教程 <i class="am-icon-external-link"></i></a><?php endif; ?>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['common_tianditu_map_ak']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_tianditu_map_ak']['describe']); ?></span></label>
                        <input type="text" name="<?php echo htmlentities($data['common_tianditu_map_ak']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_tianditu_map_ak']['describe']); ?>" data-validation-message="<?php echo htmlentities($data['common_tianditu_map_ak']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_tianditu_map_ak']['value']); ?>"<?php endif; ?> />
                        <div class="am-alert am-alert-warning">
                            请到天地图开放平台申请 <?php if(!empty($site_store_links) and !empty($site_store_links['tianditu_map_course'])): ?><a href="<?php echo htmlentities($site_store_links['tianditu_map_course']); ?>" target="_blank" class="am-margin-left-sm">查看配置教程 <i class="am-icon-external-link"></i></a><?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 扩展 -->
            <div class="am-panel am-panel-default">
                <div class="am-panel-hd">
                    <h3 class="am-panel-title">扩展</h3>
                </div>
                <div class="am-panel-bd am-padding-vertical-xs">
                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['common_is_https_connect_store']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_is_https_connect_store']['describe']); ?></span></label>
                        <select name="<?php echo htmlentities($data['common_is_https_connect_store']['only_tag']); ?>" class="am-radius chosen-select" data-validation-message="<?php echo htmlentities($data['common_is_https_connect_store']['error_tips']); ?>" required>
                            <?php foreach($common_is_text_list as $v): ?>
                                <option value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($data['common_is_https_connect_store']['value']) and $data['common_is_https_connect_store']['value'] == $v['id']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>

            <!-- 安全 -->
            <div class="am-panel am-panel-default">
                <div class="am-panel-hd">
                    <h3 class="am-panel-title">安全</h3>
                </div>
                <div class="am-panel-bd am-padding-vertical-xs">
                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['common_data_encryption_secret']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_data_encryption_secret']['describe']); ?></span></label>
                        <input type="text" name="<?php echo htmlentities($data['common_data_encryption_secret']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_data_encryption_secret']['describe']); ?>" data-validation-message="<?php echo htmlentities($data['common_data_encryption_secret']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_data_encryption_secret']['value']); ?>"<?php endif; ?> />
                        <div class="am-alert am-alert-warning">
                            <p>一些常用的数据加解密使用、比如用户登录信息加密临时存储。<strong class="am-text-danger">PS：强烈建议修改</strong></p>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label><?php echo htmlentities($data['common_cookie_domain']['name']); ?><span class="am-form-group-label-tips"><?php echo htmlentities($data['common_cookie_domain']['describe']); ?></span></label>
                        <input type="text" name="<?php echo htmlentities($data['common_cookie_domain']['only_tag']); ?>" placeholder="<?php echo htmlentities($data['common_cookie_domain']['describe']); ?>" data-validation-message="<?php echo htmlentities($data['common_cookie_domain']['error_tips']); ?>" class="am-radius" <?php if(!empty($data)): ?>value="<?php echo htmlentities($data['common_cookie_domain']['value']); ?>"<?php endif; ?> />
                        <div class="am-alert am-alert-warning">
                            <p>1. 默认空、则仅对当前访问域名有效</p>
                            <p>2. 如需要二级域名也共享cookie则填写顶级域名、如：baidu.com</p>
                        </div>
                    </div>
                </div>
            </div>

			<div class="am-form-group am-form-group-refreshing am-margin-top-lg am-padding-left-0">
				<button type="submit" class="am-btn am-btn-primary am-radius btn-loading-example am-btn-sm am-btn-block" data-am-loading="{loadingText:'处理中...'}">保存</button>
			</div>
		</form>
        <!-- form end -->
	</div>
</div>
<!-- right content end  -->
		
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