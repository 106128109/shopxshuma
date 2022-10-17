<?php /*a:10:{s:72:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/order/index.html";i:1665913498;s:79:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/module/form.html";i:1665913498;s:74:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/header.html";i:1665913498;s:80:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/page_loading.html";i:1665913498;s:91:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/module/form_operate_top.html";i:1665913498;s:85:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/module/form_table.html";i:1665913498;s:76:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/not_data.html";i:1665913498;s:94:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/module/form_operate_bottom.html";i:1665913498;s:93:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/module/form_fields_select.html";i:1665913498;s:74:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/footer.html";i:1665913498;}*/ ?>
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

<!-- content top hook -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
    <div class="plugins-tag">
        <span><?php echo htmlentities($hook_name_content_top); ?></span>
    </div>
<?php endif; 
    $hook_data = MyEventTrigger($hook_name_content_top, ['hook_name'=>$hook_name_content_top, 'is_backend'=>true]);
    if(!empty($hook_data) && is_array($hook_data))
    {
        foreach($hook_data as $hook)
        {
            if(is_string($hook) || is_int($hook))
            {
                echo htmlspecialchars_decode($hook);
            }
        }
    }
 ?>

<!-- right content start  -->
<div class="content-right">
    <!-- content top start -->
    <div class="content-top">
        
    </div>
    <!-- content top end -->
    <div class="content form-table-content">
        <!-- content inside top hook -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span><?php echo htmlentities($hook_name_content_inside_top); ?></span>
            </div>
        <?php endif; 
            $hook_data = MyEventTrigger($hook_name_content_inside_top, ['hook_name'=>$hook_name_content_inside_top, 'is_backend'=>true]);
            if(!empty($hook_data) && is_array($hook_data))
            {
                foreach($hook_data as $hook)
                {
                    if(is_string($hook) || is_int($hook))
                    {
                        echo htmlspecialchars_decode($hook);
                    }
                }
            }
         ?>

        <!-- form -->
        <?php if(!empty($form_table) and !empty($form_table['base']) and !empty($form_table['form']) and is_array($form_table['base']) and is_array($form_table['form'])): ?>
            <form class="form-validation-search" method="post" action="<?php if(isset($form_table['base']['is_search']) and $form_table['base']['is_search'] == 1 and !empty($form_table['base']['search_url'])): ?><?php echo htmlentities($form_table['base']['search_url']); ?><?php endif; ?>" request-type="jump" request-value="<?php if(isset($form_table['base']['is_search']) and $form_table['base']['is_search'] == 1 and !empty($form_table['base']['search_url'])): ?><?php echo htmlentities($form_table['base']['search_url']); ?><?php endif; ?>">
                <!-- nav start -->
                <div class="form-table-navigation">
                    
                </div>
                <!-- nav end -->

                <!-- top operate start -->
                <div class="form-table-operate-top am-cf">
                    
                        <!-- 公共操作 -->
<!-- 钩子 -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
    <div class="plugins-tag">
        <span><?php echo htmlentities($hook_name_form_top_operate); ?></span>
    </div>
<?php endif; 
    $hook_data = MyEventTrigger($hook_name_form_top_operate, ['hook_name'=>$hook_name_form_top_operate, 'is_backend'=>true]);
    if(!empty($hook_data) && is_array($hook_data))
    {
        foreach($hook_data as $hook)
        {
            if(is_string($hook) || is_int($hook))
            {
                echo htmlspecialchars_decode($hook);
            }
        }
    }
 ?>

<!-- 是否开启删除操作 -->
<?php if(isset($form_table['base']['is_delete']) and $form_table['base']['is_delete'] == 1): ?>
    <button
        type="button"
        class="am-btn am-btn-danger am-radius am-btn-xs am-icon-trash-o form-table-operate-top-delete-submit"
        data-url="<?php if(isset($form_table['base']['delete_url'])): ?><?php echo htmlentities($form_table['base']['delete_url']); ?><?php endif; ?>"
        data-form="<?php if(isset($form_table['base']['delete_form'])): ?><?php echo htmlentities($form_table['base']['delete_form']); ?><?php endif; ?>"
        data-key="<?php if(isset($form_table['base']['delete_key'])): ?><?php echo htmlentities($form_table['base']['delete_key']); ?><?php endif; ?>"
        data-confirm-title="<?php if(isset($form_table['base']['confirm_title'])): ?><?php echo htmlentities($form_table['base']['confirm_title']); ?><?php endif; ?>"
        data-confirm-msg="<?php if(isset($form_table['base']['confirm_msg'])): ?><?php echo htmlentities($form_table['base']['confirm_msg']); ?><?php endif; ?>"
        data-timeout="<?php if(isset($form_table['base']['timeout'])): ?><?php echo htmlentities($form_table['base']['timeout']); ?><?php endif; ?>"
    > 删除</button>
<?php endif; ?>

<!-- 是否开启搜索操作 公共搜索操作放在最后面 -->
<?php if(isset($form_table['base']['is_search']) and $form_table['base']['is_search'] == 1): ?>
    <a href="<?php if(isset($form_table['base']['search_url'])): ?><?php echo htmlentities($form_table['base']['search_url']); ?><?php endif; ?>" class="am-btn am-btn-warning am-radius am-btn-sm am-icon-filter"> 重置</a>
    <button type="submit" class="am-btn am-btn-primary am-radius am-btn-xs btn-loading-example am-icon-search" data-am-loading="{loadingText:' 搜索中...'}"> 搜索</button>

    <!-- 排序数据字段 -->
    <input type="hidden" name="fp_order_by_key" value="<?php if(!empty($form_order_by) and !empty($form_order_by['key'])): ?><?php echo htmlentities($form_order_by['key']); ?><?php endif; ?>" />
    <input type="hidden" name="fp_order_by_val" value="<?php if(!empty($form_order_by) and !empty($form_order_by['val'])): ?><?php echo htmlentities($form_order_by['val']); ?><?php endif; ?>" />
<?php endif; ?>

<!-- 字段选择 -->
<?php if(!isset($form_table['base']['is_fields_sel']) or $form_table['base']['is_fields_sel'] == 1): ?>
    <div class="am-fr am-nbfc">
        <button type="button" class="am-btn am-btn-default am-radius am-btn-xs am-icon-cog" data-am-modal="{target: '#form-table-fields-popup'}"> 设置</button>
    </div>
<?php endif; ?>
                    
                </div>
                <!-- top operate end -->

                <!-- form table start -->
                <div class="am-scrollable-horizontal am-table-scrollable-horizontal" data-md5-key="<?php echo htmlentities($form_md5_key); ?>">
    <table class="am-table am-table-striped am-table-hover am-table-bordered am-text-nowrap form-table-data-list">
        <thead>
            <tr>
                <?php foreach($form_table['form'] as $t): if(!isset($t['is_list']) or $t['is_list'] == 1): ?>
                        <!-- 1. 上下居中 -->
                        <!-- 2. 格子大小 -->
                        <!-- 3. 内容位置居（左|中|右） -->
                        <!-- 4. 格子是否固定（left|right 左|右） -->
                        <th class="
                            <?php if(isset($t['is_middle']) and $t['is_middle'] == 1): ?>am-text-middle <?php endif; if(!empty($t['grid_size'])): ?>am-grid-<?php echo htmlentities($t['grid_size']); ?> <?php endif; if(!empty($t['align'])): ?>am-text-<?php echo htmlentities($t['align']); ?> <?php endif; if(!empty($t['fixed'])): ?>am-grid-fixed-<?php echo htmlentities($t['fixed']); ?> <?php endif; if(!empty($t['view_type']) and $t['view_type'] == 'operate'): ?>am-operate-grid <?php endif; ?>
                        "
                        style="
                            <?php if(!empty($t['width'])): ?>
                                min-width: <?php echo htmlentities($t['width']); ?>px;
                            <?php endif; ?>
                        "
                        >
                            <?php switch($t['view_type']): case "checkbox": ?>
                                    <button type="button" class="am-btn am-btn-secondary am-radius am-btn-xs form-table-operate-checkbox-submit" data-value="<?php if(isset($t['is_checked']) and $t['is_checked'] == 1): ?>1<?php else: ?>0<?php endif; ?>" data-checked-text="<?php echo htmlentities($t['checked_text']); ?>" data-not-checked-text="<?php echo htmlentities($t['not_checked_text']); ?>" <?php if(empty($data_list)): ?>disabled<?php endif; ?>><?php if(isset($t['is_checked']) and $t['is_checked'] == 1): ?><?php echo htmlentities($t['checked_text']); else: ?><?php echo htmlentities($t['not_checked_text']); ?><?php endif; ?></button>
                                <?php break; default: if(isset($t['label'])): ?><?php echo htmlentities($t['label']); ?><?php endif; ?>
                            <?php endswitch; ?>

                            <!-- 排序操作 -->
                            <?php if(isset($t['is_sort']) and $t['is_sort'] == 1 and !empty($t['sort_key'])): ?>
                                <div class="form-sort-container am-nbfc am-inline-block">
                                    <a href="javascript:;" data-key="<?php echo htmlentities($t['sort_key']); ?>" data-val="asc" class="sort-icon am-icon-caret-up <?php if(!empty($form_order_by) and !empty($form_order_by['key']) and $form_order_by['key'] == $t['sort_key'] and !empty($form_order_by['val']) and $form_order_by['val'] == 'asc'): ?>sort-active<?php endif; ?>"></a>
                                    <a href="javascript:;" data-key="<?php echo htmlentities($t['sort_key']); ?>" data-val="desc" class="sort-icon am-icon-caret-down <?php if(!empty($form_order_by) and !empty($form_order_by['key']) and $form_order_by['key'] == $t['sort_key'] and !empty($form_order_by['val']) and $form_order_by['val'] == 'desc'): ?>sort-active<?php endif; ?>"></a>
                                </div>
                            <?php endif; ?>
                        </th>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tr>

            <!-- search -->
            <?php if(isset($form_table['base']['is_search']) and $form_table['base']['is_search'] == 1): ?>
                <tr class="form-table-search">
                    <?php if(!empty($params['page_size'])): ?>
                        <input type="hidden" name="page_size" value="<?php echo htmlentities($params['page_size']); ?>" />
                    <?php endif; foreach($form_table['form'] as $k=>$t): if(!isset($t['is_list']) or $t['is_list'] == 1): ?>
                            <td class="
                                <?php if(isset($t['is_middle']) and $t['is_middle'] == 1): ?>am-text-middle <?php endif; if(!empty($t['grid_size'])): ?>am-grid-<?php echo htmlentities($t['grid_size']); ?> <?php endif; if(!empty($t['align'])): ?>am-text-<?php echo htmlentities($t['align']); ?> <?php endif; if(!empty($t['fixed'])): ?>am-grid-fixed-<?php echo htmlentities($t['fixed']); ?> <?php endif; if(!empty($t['view_type']) and $t['view_type'] == 'operate'): ?>am-operate-grid <?php endif; ?>
                            "
                            style="
                                <?php if(!empty($t['width'])): ?>
                                    min-width: <?php echo htmlentities($t['width']); ?>px;
                                <?php endif; ?>
                            "
                            >
                                <?php if(!empty($t['search_config']) and !empty($t['search_config']['form_type']) and !empty($t['search_config']['form_name'])): switch($t['search_config']['form_type']): case "input": ?>
                                            <!-- 输入 -->
                                            <input type="text" class="am-form-field am-radius" autocomplete="off" name="<?php echo htmlentities($t['form_key']); ?>" value="<?php if(!empty($form_params) and isset($form_params[$t['form_key']])): ?><?php echo htmlentities($form_params[$t['form_key']]); ?><?php endif; ?>" placeholder="<?php if(isset($t['search_config']['placeholder'])): ?><?php echo htmlentities($t['search_config']['placeholder']); ?><?php endif; ?>" <?php if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; if(!empty($form_params) and isset($form_params[$t['form_key']])): ?> data-am-popover="{theme: 'sm', content: '<?php echo htmlentities($form_params[$t['form_key']]); ?>', trigger: 'hover focus'}"<?php endif; ?> />
                                        <?php break; case "select": ?>
                                            <!-- 选择 -->
                                            <select name="<?php echo htmlentities($t['form_key']); ?>"
                                                class="chosen-select am-text-left"
                                                data-placeholder="<?php if(isset($t['search_config']['placeholder'])): ?><?php echo htmlentities($t['search_config']['placeholder']); ?><?php endif; ?>"
                                                <?php if(isset($t['search_config']['is_multiple']) and $t['search_config']['is_multiple'] == 1): ?> multiple<?php endif; if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; ?>
                                            >
                                                <?php if(isset($t['search_config']['is_seat_select']) and $t['search_config']['is_seat_select'] == 1 and (!isset($t['search_config']['is_multiple']) or $t['search_config']['is_multiple'] != 1)): ?>
                                                    <option value="<?php if(isset($t['search_config']['seat_select_value'])): ?><?php echo htmlentities($t['search_config']['seat_select_value']); ?><?php endif; ?>">
                                                        <?php if(empty($t['search_config']['seat_select_text'])): if(empty($t['search_config']['placeholder'])): ?>请选择<?php if(!empty($t['label'])): ?><?php echo htmlentities($t['label']); ?><?php endif; else: ?><?php echo htmlentities($t['search_config']['placeholder']); ?><?php endif; else: ?><?php echo htmlentities($t['search_config']['seat_select_text']); ?><?php endif; ?>
                                                    </option>
                                                <?php endif; if(!empty($t['search_config']['data']) and is_array($t['search_config']['data'])): foreach($t['search_config']['data'] as $k=>$v): if(is_array($v)): ?>
                                                            <option value="<?php if(isset($t['search_config']['data_key']) and isset($v[$t['search_config']['data_key']])): ?><?php echo htmlentities($v[$t['search_config']['data_key']]); ?><?php endif; ?>" <?php if(!empty($form_params) and isset($form_params[$t['form_key']]) and isset($t['search_config']['data_key']) and ((is_array($form_params[$t['form_key']]) and in_array($v[$t['search_config']['data_key']], $form_params[$t['form_key']])) or (!is_array($form_params[$t['form_key']]) and $v[$t['search_config']['data_key']] == $form_params[$t['form_key']]))): ?>selected<?php endif; ?>>
                                                                <?php if(isset($t['search_config']['data_name']) and isset($v[$t['search_config']['data_name']])): ?>
                                                                    <?php echo htmlentities($v[$t['search_config']['data_name']]); ?>
                                                                <?php endif; ?>
                                                            </option>
                                                        <?php else: ?>
                                                            <option value="<?php echo htmlentities($k); ?>" <?php if(!empty($form_params) and isset($form_params[$t['form_key']]) and isset($t['search_config']['data_key']) and ((is_array($form_params[$t['form_key']]) and in_array($k, $form_params[$t['form_key']])) or (!is_array($form_params[$t['form_key']]) and $k == $form_params[$t['form_key']]))): ?>selected<?php endif; ?>><?php echo htmlentities($v); ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </select>
                                        <?php break; case "section": ?>
                                            <!-- 区间 -->
                                            <div class="form-table-search-section">
                                                <input type="number" class="am-form-field am-radius am-inline-block" autocomplete="off" name="<?php echo htmlentities($t['form_key']); ?>_min" value="<?php if(!empty($form_params) and isset($form_params[$t['form_key'].'_min'])): ?><?php echo htmlentities($form_params[$t['form_key'].'_min']); ?><?php endif; ?>" <?php if(isset($t['search_config']['is_point']) and $t['search_config']['is_point'] == 1): ?>step="0.01"<?php endif; ?> min="0" placeholder="<?php if(isset($t['search_config']['placeholder_min'])): ?><?php echo htmlentities($t['search_config']['placeholder_min']); ?><?php endif; ?>" <?php if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; if(!empty($form_params) and isset($form_params[$t['form_key'].'_min'])): ?> data-am-popover="{theme: 'sm', content: '<?php echo htmlentities($form_params[$t['form_key'].'_min']); ?>', trigger: 'hover focus'}"<?php endif; ?> />
                                                <span>-</span>
                                                <input type="number" class="am-form-field am-radius am-inline-block" autocomplete="off" name="<?php echo htmlentities($t['form_key']); ?>_max" value="<?php if(!empty($form_params) and isset($form_params[$t['form_key'].'_max'])): ?><?php echo htmlentities($form_params[$t['form_key'].'_max']); ?><?php endif; ?>" <?php if(isset($t['search_config']['is_point']) and $t['search_config']['is_point'] == 1): ?>step="0.01"<?php endif; ?> min="0" placeholder="<?php if(isset($t['search_config']['placeholder_max'])): ?><?php echo htmlentities($t['search_config']['placeholder_max']); ?><?php endif; ?>" <?php if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; if(!empty($form_params) and isset($form_params[$t['form_key'].'_max'])): ?> data-am-popover="{theme: 'sm', content: '<?php echo htmlentities($form_params[$t['form_key'].'_max']); ?>', trigger: 'hover focus'}"<?php endif; ?> />
                                            </div>
                                        <?php break; case "datetime": ?>
                                            <div class="form-table-search-section form-table-search-time">
                                                <input type="text" autocomplete="off" class="am-form-field am-input-sm am-radius am-inline-block Wdate" id="form-table-search-time-start-<?php echo htmlentities($t['form_key']); ?>" name="<?php echo htmlentities($t['form_key']); ?>_start" value="<?php if(!empty($form_params) and isset($form_params[$t['form_key'].'_start'])): ?><?php echo htmlentities($form_params[$t['form_key'].'_start']); ?><?php endif; ?>" placeholder="<?php if(isset($t['search_config']['placeholder_start'])): ?><?php echo htmlentities($t['search_config']['placeholder_start']); ?><?php endif; ?>" value="" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd H:mm:ss',maxDate:'#F{$dp.$D(\'form-table-search-time-end-<?php echo htmlentities($t['form_key']); ?>\');}'})" autocomplete="off" <?php if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; if(!empty($form_params) and isset($form_params[$t['form_key'].'_start'])): ?> data-am-popover="{theme: 'sm', content: '<?php echo htmlentities($form_params[$t['form_key'].'_start']); ?>', trigger: 'hover focus'}"<?php endif; ?> />
                                                <span>-</span>
                                                <input type="text" autocomplete="off" class="am-form-field am-input-sm am-radius am-inline-block Wdate" id="form-table-search-time-end-<?php echo htmlentities($t['form_key']); ?>" name="<?php echo htmlentities($t['form_key']); ?>_end" value="<?php if(!empty($form_params) and isset($form_params[$t['form_key'].'_end'])): ?><?php echo htmlentities($form_params[$t['form_key'].'_end']); ?><?php endif; ?>" placeholder="<?php if(isset($t['search_config']['placeholder_end'])): ?><?php echo htmlentities($t['search_config']['placeholder_end']); ?><?php endif; ?>" value="" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd H:mm:ss',minDate:'#F{$dp.$D(\'form-table-search-time-start-<?php echo htmlentities($t['form_key']); ?>\');}'})" autocomplete="off" <?php if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; if(!empty($form_params) and isset($form_params[$t['form_key'].'_end'])): ?> data-am-popover="{theme: 'sm', content: '<?php echo htmlentities($form_params[$t['form_key'].'_end']); ?>', trigger: 'hover focus'}"<?php endif; ?> />
                                            </div>
                                        <?php break; case "date": ?>
                                            <div class="form-table-search-section form-table-search-time">
                                                <input type="text" autocomplete="off" class="am-form-field am-input-sm am-radius am-inline-block Wdate" id="form-table-search-time-start-<?php echo htmlentities($t['form_key']); ?>" name="<?php echo htmlentities($t['form_key']); ?>_start" value="<?php if(!empty($form_params) and isset($form_params[$t['form_key'].'_start'])): ?><?php echo htmlentities($form_params[$t['form_key'].'_start']); ?><?php endif; ?>" placeholder="<?php if(isset($t['search_config']['placeholder_start'])): ?><?php echo htmlentities($t['search_config']['placeholder_start']); ?><?php endif; ?>" value="" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd',maxDate:'#F{$dp.$D(\'form-table-search-time-end-<?php echo htmlentities($t['form_key']); ?>\',{d:-1});}'})" autocomplete="off" <?php if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; if(!empty($form_params) and isset($form_params[$t['form_key'].'_start'])): ?> data-am-popover="{theme: 'sm', content: '<?php echo htmlentities($form_params[$t['form_key'].'_start']); ?>', trigger: 'hover focus'}"<?php endif; ?> />
                                                <span>-</span>
                                                <input type="text" autocomplete="off" class="am-form-field am-input-sm am-radius am-inline-block Wdate" id="form-table-search-time-end-<?php echo htmlentities($t['form_key']); ?>" name="<?php echo htmlentities($t['form_key']); ?>_end" value="<?php if(!empty($form_params) and isset($form_params[$t['form_key'].'_end'])): ?><?php echo htmlentities($form_params[$t['form_key'].'_end']); ?><?php endif; ?>" placeholder="<?php if(isset($t['search_config']['placeholder_end'])): ?><?php echo htmlentities($t['search_config']['placeholder_end']); ?><?php endif; ?>" value="" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd',minDate:'#F{$dp.$D(\'form-table-search-time-start-<?php echo htmlentities($t['form_key']); ?>\',{d:+1});}'})" autocomplete="off" <?php if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; if(!empty($form_params) and isset($form_params[$t['form_key'].'_end'])): ?> data-am-popover="{theme: 'sm', content: '<?php echo htmlentities($form_params[$t['form_key'].'_end']); ?>', trigger: 'hover focus'}"<?php endif; ?> />
                                            </div>
                                        <?php break; case "ym": ?>
                                            <input type="text" autocomplete="off" class="am-form-field am-input-sm am-radius Wdate" name="<?php echo htmlentities($t['form_key']); ?>" value="<?php if(!empty($form_params) and isset($form_params[$t['form_key']])): ?><?php echo htmlentities($form_params[$t['form_key']]); ?><?php endif; ?>" placeholder="<?php if(isset($t['search_config']['placeholder'])): ?><?php echo htmlentities($t['search_config']['placeholder']); ?><?php endif; ?>" value="" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM'})" autocomplete="off" <?php if(isset($t['search_config']['is_disabled']) and $t['search_config']['is_disabled'] == 1): ?> disabled<?php endif; if(!empty($form_params) and isset($form_params[$t['form_key']])): ?> data-am-popover="{theme: 'sm', content: '<?php echo htmlentities($form_params[$t['form_key']]); ?>', trigger: 'hover focus'}"<?php endif; ?> />
                                        <?php break; case "module": ?>
                                            <!-- 从模块加载自定义模块数据 -->
                                            <?php if(!empty($t['search_config']['template'])): if(isset($t['search_config']['data'])): ?>
                                                    <?php echo ModuleInclude($t['search_config']['template'], [
                                                        'form'=>$t,
                                                        'data'=>$t['search_config']['data'],
                                                        'form_name_key'=>$t['form_key'],
                                                        'params'=>isset($form_params) ? $form_params : [],
                                                    ]); else: ?>
                                                    <?php echo ModuleInclude($t['search_config']['template'], [
                                                        'form'=>$t,
                                                        'data'=>[],
                                                        'form_name_key'=>$t['form_key'],
                                                        'params'=>isset($form_params) ? $form_params : [],
                                                    ]); ?>
                                                <?php endif; ?>
                                            <?php endif; break; ?>
                                    <?php endswitch; ?>
                                <?php endif; ?>
                            </td>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tr>
            <?php endif; ?>
        </thead>
        <tbody>
            <?php if(!empty($data_list) and !empty($form_table['base']['key_field'])): ?>
                <!-- 处理数据数量小于默认数量 -->
                <?php $__FOR_START_1604655435__=0;$__FOR_END_1604655435__=count($data_list);for($i=$__FOR_START_1604655435__;$i < $__FOR_END_1604655435__;$i+=1){ ?>
                    <!-- 1. tr 主键id名称 -->
                    <!-- 2. 是否黄色选中class -->
                    <tr
                        <?php if(isset($data_list[$i][$form_table['base']['key_field']])): ?>
                            id="data-list-<?php echo htmlentities($data_list[$i][$form_table['base']['key_field']]); ?>"
                        <?php endif; if(!empty($form_table['base']['status_field']) and isset($data_list[$i][$form_table['base']['status_field']]) and $data_list[$i][$form_table['base']['status_field']] == 0): ?>
                            class="am-active"
                        <?php endif; ?>
                    >
                        <?php foreach($form_table['form'] as $t): if(!isset($t['is_list']) or $t['is_list'] == 1): ?>
                                <!-- 1. 上下居中 -->
                                <!-- 2. 格子大小 -->
                                <!-- 3. 内容位置居（左|中|右） -->
                                <!-- 4. 格子是否固定（left|right 左|右） -->
                                <!-- 5. 是否操作列 -->
                                <td class="am-nowrap-initial
                                    <?php if(isset($t['is_middle']) and $t['is_middle'] == 1): ?>am-text-middle <?php endif; if(!empty($t['grid_size'])): ?>am-grid-<?php echo htmlentities($t['grid_size']); ?> <?php endif; if(!empty($t['align'])): ?>am-text-<?php echo htmlentities($t['align']); ?> <?php endif; if(!empty($t['fixed'])): ?>am-grid-fixed-<?php echo htmlentities($t['fixed']); ?> <?php endif; if(!empty($t['view_type']) and $t['view_type'] == 'operate'): ?>am-operate-grid <?php endif; ?>
                                "
                                style="
                                    <?php if(!empty($t['width'])): ?>
                                        min-width: <?php echo htmlentities($t['width']); ?>px;
                                    <?php endif; ?>
                                "
                                >
                                    <?php if(isset($data_list[$i]) and !empty($t['view_type']) and !empty($t['view_key'])): ?>
                                        <!-- 数据匹配 -->
                                        <?php switch($t['view_type']): case "field": ?>
                                                <!-- 前后固定拼接的值 前面 -->
                                                <?php if(isset($t['view_join_first'])): ?>
                                                    <span><?php echo htmlentities($t['view_join_first']); ?></span>
                                                <?php endif; ?>

                                                <!-- 如果字段为数组则处理多个字段拼接数据 -->
                                                <?php if(is_array($t['view_key'])): foreach($t['view_key'] as $fk=>$fv): if(isset($data_list[$i][$fv])): ?>
                                                            <span><?php echo htmlentities($data_list[$i][$fv]); ?></span>
                                                            <!-- 多个字段拼接数据的的拼接字符 -->
                                                            <?php if(isset($t['view_key_join']) and $fk < count($t['view_key'])-1): ?>
                                                                <span><?php echo $t['view_key_join']; ?></span>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endforeach; else: ?>
                                                    <!-- 是否存在数据 key -->
                                                    <?php if(isset($data_list[$i][$t['view_key']])): ?>
                                                        <!-- 是否指定数据转换 -->
                                                        <?php if(!empty($t['view_data']) and is_array($t['view_data'])): ?>
                                                            <!-- 不存在数组中则不显示 -->
                                                            <?php if(isset($t['view_data'][$data_list[$i][$t['view_key']]])): ?>
                                                                <!-- 是否指定二维数组key取值 -->
                                                                <?php if(!empty($t['view_data_key'])): if(isset($t['view_data'][$data_list[$i][$t['view_key']]][$t['view_data_key']])): ?>
                                                                        <?php echo htmlentities($t['view_data'][$data_list[$i][$t['view_key']]][$t['view_data_key']]); ?>
                                                                    <?php endif; else: ?>
                                                                    <?php echo htmlentities($t['view_data'][$data_list[$i][$t['view_key']]]); ?>
                                                                <?php endif; ?>
                                                            <?php endif; ?>

                                                        <!-- 直接展示数据 -->
                                                        <?php else: ?>
                                                            <?php echo $data_list[$i][$t['view_key']]; ?>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                <!-- 前后固定拼接的值 后面 -->
                                                <?php if(isset($t['view_join_last'])): ?>
                                                    <span><?php echo htmlentities($t['view_join_last']); ?></span>
                                                <?php endif; break; case "module": ?>
                                                <!-- 从模块加载自定义模块数据 -->
                                                <?php echo ModuleInclude(empty($t['template']) ? $t['view_key'] : $t['template'], $data_list[$i], [
                                                    'form'      => $t,
                                                    'params'    => isset($form_params) ? $form_params : [],
                                                ]); break; case "status": ?>
                                                <!-- 数据状态操作按钮组件 -->
                                                <?php if(!empty($t['key_field']) and !empty($t['post_url']) and !empty($data_list[$i][$t['key_field']]) and array_key_exists($t['view_key'], $data_list[$i])): ?>
                                                    <a href="javascript:;"
                                                        class="am-icon-btn am-icon-check submit-state <?php if($data_list[$i][$t['view_key']] == 1): ?>am-success<?php else: ?>am-default<?php endif; ?>"
                                                        data-url="<?php echo htmlentities($t['post_url']); ?>"
                                                        data-id="<?php if(isset($data_list[$i][$t['key_field']])): ?><?php echo htmlentities($data_list[$i][$t['key_field']]); ?><?php endif; ?>"
                                                        data-state="<?php echo htmlentities($data_list[$i][$t['view_key']]); ?>"
                                                        data-field="<?php echo htmlentities($t['view_key']); ?>"
                                                        data-is-update-status="<?php if(isset($t['is_form_su']) and $t['is_form_su'] == 1): ?>1<?php else: ?>0<?php endif; ?>"
                                                        data-is-loading="<?php if(isset($t['is_loading']) and $t['is_loading'] == 1): ?>1<?php else: ?>0<?php endif; ?>"
                                                        data-loading-msg="<?php if(!empty($t['loading_msg'])): ?><?php echo htmlentities($t['loading_msg']); ?><?php endif; ?>"
                                                    ></a>
                                                <?php endif; break; case "operate": ?>
                                                <!-- 是否操作列 -->
                                                <!-- 模块数据 -->
                                                <?php echo ModuleInclude($t['view_key'], $data_list[$i], [
                                                    'form'      => $t,
                                                    'params'    => isset($form_params) ? $form_params : [],
                                                ]); ?>

                                                <!-- 列表操作钩子 -->
                                                <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                                                    <div class="plugins-tag">
                                                        <span><?php echo htmlentities($hook_name_form_list_operate); ?></span>
                                                    </div>
                                                <?php endif; 
                                                    $hook_data = MyEventTrigger($hook_name_form_list_operate, [
                                                        'hook_name'     => $hook_name_form_list_operate,
                                                        'is_backend'    => true,
                                                        'id'            => isset($data_list[$i][$form_table['base']['key_field']]) ? $data_list[$i][$form_table['base']['key_field']] : 0,
                                                        'data'          => $data_list[$i],
                                                    ]);
                                                    if(!empty($hook_data) && is_array($hook_data))
                                                    {
                                                        foreach($hook_data as $hook)
                                                        {
                                                            if(is_string($hook) || is_int($hook))
                                                            {
                                                                echo htmlspecialchars_decode($hook);
                                                            }
                                                        }
                                                    }
                                                 break; case "radio": if(isset($data_list[$i][$form_table['base']['key_field']])): ?>
                                                    <!-- 是否配置指定数据不显示控件 -->
                                                    <?php if(!isset($t['not_show_data']) or 
                                                        empty($t['not_show_key']) or 
                                                        (is_array($t['not_show_data']) and isset($data_list[$i][$t['not_show_key']]) and !in_array($data_list[$i][$t['not_show_key']], $t['not_show_data'])) or 
                                                        (isset($t['not_show_type']) and isset($data_list[$i][$t['not_show_key']]) and (
                                                            ($t['not_show_type'] == 0 and $data_list[$i][$t['not_show_key']] == $t['not_show_data']) or 
                                                            ($t['not_show_type'] == 1 and $data_list[$i][$t['not_show_key']] > $t['not_show_data']) or 
                                                            ($t['not_show_type'] == 2 and $data_list[$i][$t['not_show_key']] < $t['not_show_data'])
                                                        ))): ?>
                                                        <div class="form-table-operate-radio">
                                                            <label class="am-radio am-secondary am-radio-inline">
                                                                <input type="radio" name="<?php echo htmlentities($t['view_key']); ?>" value="<?php echo htmlentities($data_list[$i][$form_table['base']['key_field']]); ?>" <?php if(isset($t['is_checked']) and $t['is_checked'] == 1): ?>checked<?php endif; ?> data-am-ucheck />
                                                            </label>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endif; break; case "checkbox": if(isset($data_list[$i][$form_table['base']['key_field']])): ?>
                                                    <!-- 是否配置指定数据不显示控件 -->
                                                    <?php if(!isset($t['not_show_data']) or 
                                                        empty($t['not_show_key']) or 
                                                        (is_array($t['not_show_data']) and isset($data_list[$i][$t['not_show_key']]) and !in_array($data_list[$i][$t['not_show_key']], $t['not_show_data'])) or 
                                                        (isset($t['not_show_type']) and isset($data_list[$i][$t['not_show_key']]) and (
                                                            ($t['not_show_type'] == 0 and $data_list[$i][$t['not_show_key']] == $t['not_show_data']) or 
                                                            ($t['not_show_type'] == 1 and $data_list[$i][$t['not_show_key']] > $t['not_show_data']) or 
                                                            ($t['not_show_type'] == 2 and $data_list[$i][$t['not_show_key']] < $t['not_show_data'])
                                                        ))): ?>
                                                        <div class="form-table-operate-checkbox">
                                                            <label class="am-checkbox am-secondary am-checkbox-inline">
                                                                <input type="checkbox" name="<?php echo htmlentities($t['view_key']); ?>" value="<?php echo htmlentities($data_list[$i][$form_table['base']['key_field']]); ?>" <?php if(isset($t['is_checked']) and $t['is_checked'] == 1): ?>checked<?php endif; ?> data-am-ucheck />
                                                            </label>
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endif; break; ?>
                                        <?php endswitch; ?>

                                        <!-- 列表格子钩子 -->
                                        <?php if(!empty($t['unique_key']) and $t['view_type'] != 'operate'): if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
                                                <div class="plugins-tag">
                                                    <span><?php echo htmlentities($hook_name_form_grid); ?>_<?php echo htmlentities($t['unique_key']); ?></span>
                                                </div>
                                            <?php endif; 
                                                $hook_data = MyEventTrigger($hook_name_form_grid.'_'.$t['unique_key'], [
                                                    'hook_name'     => $hook_name_form_grid.'_'.$t['unique_key'],
                                                    'is_backend'    => true,
                                                    'id'            => isset($data_list[$i][$form_table['base']['key_field']]) ? $data_list[$i][$form_table['base']['key_field']] : 0,
                                                    'data'          => $data_list[$i],
                                                ]);
                                                if(!empty($hook_data) && is_array($hook_data))
                                                {
                                                    foreach($hook_data as $hook)
                                                    {
                                                        if(is_string($hook) || is_int($hook))
                                                        {
                                                            echo htmlspecialchars_decode($hook);
                                                        }
                                                    }
                                                }
                                             ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </td>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tr>
                <?php } ?>
            <?php endif; ?>
        </tbody>
    </table>
    <?php if(empty($data_list)): ?>
        <div class="table-no"><i class="am-icon-warning"></i> 没有相关数据</div>
    <?php endif; ?>
</div>
                <!-- form table end -->

                <!-- bottom operate start -->
                <div class="form-table-operate-bottom am-nbfc am-margin-top-sm">
                    
                        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
    <div class="plugins-tag">
        <span><?php echo htmlentities($hook_name_form_bottom_operate); ?></span>
    </div>
<?php endif; 
    $hook_data = MyEventTrigger($hook_name_form_bottom_operate, ['hook_name'=>$hook_name_form_bottom_operate, 'is_backend'=>true]);
    if(!empty($hook_data) && is_array($hook_data))
    {
        foreach($hook_data as $hook)
        {
            if(is_string($hook) || is_int($hook))
            {
                echo htmlspecialchars_decode($hook);
            }
        }
    }
 ?>
                    
                </div>
                <!-- bottom operate end -->
            </form>

            <!-- 字段选择 -->
            <?php if(!isset($form_table['base']['is_fields_sel']) or $form_table['base']['is_fields_sel'] == 1): ?>
    <div class="am-popup popup-not-title" id="form-table-fields-popup">
        <div class="am-popup-inner">
            <span data-am-modal-close class="am-close am-close-alt am-icon-times"></span>
            <div class="am-popup-bd am-padding-0">
                <div class="form-table-fields-select-container">
                    <div class="am-scrollable-vertical form-table-fields-list-container">
                        <?php if(!empty($form_user_fields)): ?>
                            <div class="am-alert am-margin-bottom-0">
                                <p>可点击拖拽调整显示顺序、如需恢复点击重置即可</p>
                            </div>
                            <ul class="am-list am-list-static am-list-striped am-margin-bottom-0 form-table-fields-content-container">
                                <?php foreach($form_user_fields as $v): ?>
                                    <li>
                                        <label class="am-checkbox-inline">
                                            <input type="checkbox" name="form_field_checkbox_value" value="<?php echo htmlentities($v['label']); ?>" data-am-ucheck <?php if(isset($v['checked']) and $v['checked'] == 1): ?>checked<?php endif; ?> />
                                            <span><?php echo htmlentities($v['label']); ?></span>
                                        </label>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <div class="table-no"><i class="am-icon-warning"></i> 没有相关数据</div>
                        <?php endif; ?>
                    </div>
                    <div class="am-padding-sm am-nbfc form-table-fields-button-container">
                        <button type="button" class="am-btn am-btn-secondary am-radius am-btn-xs form-table-field-checkbox-submit" data-value="<?php if(array_sum(array_column($form_user_fields, 'checked')) > 0): ?>1<?php else: ?>0<?php endif; ?>" data-checked-text="反选" data-not-checked-text="全选"><?php if(array_sum(array_column($form_user_fields, 'checked')) > 0): ?>反选<?php else: ?>全选<?php endif; ?></button>
                        <button type="button" class="am-btn am-btn-warning am-btn-xs am-radius am-margin-left-sm submit-ajax" data-url="<?php echo MyUrl('admin/formtable/fieldsselectreset'); ?>" data-id="<?php echo htmlentities($form_md5_key); ?>" data-key="md5_key" data-view="reload" data-is-confirm="0">重置</button>
                        <button type="button" class="am-btn am-btn-primary am-radius am-btn-xs btn-loading-example am-fr form-table-field-confirm-submit" data-url="<?php echo MyUrl('admin/formtable/fieldsselectsave'); ?>" data-am-loading="{loadingText:'处理中...'}">确认</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; else: ?>
            <div class="table-no"><i class="am-icon-warning"></i> <?php if(empty($form_error)): ?>动态表格配置有误<?php else: ?><?php echo htmlentities($form_error); ?><?php endif; ?></div>
        <?php endif; ?>

        <!-- page start -->
        
            <?php if(!empty($data_list) and isset($page_html)): ?>
                <?php echo $page_html; ?>
            <?php endif; ?>
        
        <!-- page end -->

        <!-- extend start -->
        
    <!-- 取货弹窗 -->
    <div class="am-modal am-modal-no-btn" tabindex="-1" id="order-take-modal">
        <div class="am-modal-dialog">
            <div class="am-modal-hd">
                <a href="javascript: void(0)" class="am-close" data-am-modal-close>&times;</a>
            </div>
            <div class="am-modal-bd">
                <form class="am-form form-validation-take take-form" method="post" action="<?php echo MyUrl('admin/order/delivery'); ?>" request-type="ajax-reload">
                    <div class="am-form-group am-form-group-refreshing am-margin-bottom-0">
                        <label>取货码</label>
                        <input type="text" autocomplete="off" name="extraction_code" placeholder="取货码" minlength="4" maxlength="4" data-validation-message="请填写4位数取货码" class="am-radius" required />
                    </div>
                    <div class="am-form-group am-form-group-refreshing">
                        <input type="hidden" name="id" value="0" />
                        <input type="hidden" name="user_id" value="0" />
                        <button type="submit" class="am-btn am-btn-primary am-radius btn-loading-example am-btn-sm am-btn-block" data-am-loading="{loadingText:'处理中...'}">确认</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- 发货弹窗 -->
    <div class="am-popup" id="order-delivery-popup">
        <div class="am-popup-inner">
            <div class="am-popup-hd">
                <h4 class="am-popup-title">发货操作</h4>
                <span data-am-modal-close class="am-close">&times;</span>
            </div>
            <div class="am-popup-bd">
                <form class="am-form form-validation-delivery delivery-form" method="post" action="<?php echo MyUrl('admin/order/delivery'); ?>" request-type="ajax-reload">
                    <div class="business-item">
                        <?php if(!empty($express_list)): ?>
                            <ul class="express-list" data-type="express">
                                <?php foreach($express_list as $express): if($express['is_enable'] == 1): ?>
                                        <li class="express-items-<?php echo htmlentities($express['id']); ?>" data-value="<?php echo htmlentities($express['id']); ?>">
                                            <?php if(!empty($express['icon'])): ?>
                                                <img src="<?php echo htmlentities($express['icon']); ?>" />
                                            <?php endif; ?>
                                            <span><?php echo htmlentities($express['name']); ?></span>
                                            <i class="icon-active"></i>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; if(empty($express_list)): ?>
                            <div class="table-no"><i class="am-icon-warning"></i> 没有相关数据</div>
                        <?php endif; ?>
                    </div>

                    <div class="am-margin-top-sm">
                        <label>快递单号</label>
                        <input type="text" autocomplete="off" name="express_number" placeholder="快递单号" minlength="1" data-validation-message="请填写快递单号" class="am-radius" required />
                    </div>
                    
                    <div class="am-margin-top-lg">
                        <input type="hidden" name="id" value="0" />
                        <input type="hidden" name="express_id" value="0" />
                        <input type="hidden" name="user_id" value="0" />
                        <button type="submit" class="am-btn am-btn-primary am-radius btn-loading-example am-btn-sm am-btn-block" data-am-loading="{loadingText:'处理中...'}">确认</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- 支付弹窗 -->
    <div class="am-popup" id="order-pay-popup">
        <div class="am-popup-inner">
            <div class="am-popup-hd">
                <h4 class="am-popup-title">支付操作</h4>
                <span data-am-modal-close class="am-close">&times;</span>
            </div>
            <div class="am-popup-bd">
                <form class="am-form form-validation-pay pay-form" action="<?php echo MyUrl('admin/order/pay'); ?>" method="POST" request-type="ajax-reload">
                    <div class="business-item">
                        <?php if(!empty($buy_payment_list)): ?>
                            <ul class="payment-list" data-type="payment">
                                <?php foreach($buy_payment_list as $payment): ?>
                                    <li class="payment-items-<?php echo htmlentities($payment['id']); ?>" data-value="<?php echo htmlentities($payment['id']); ?>">
                                        <?php if(!empty($payment['logo'])): ?>
                                            <img src="<?php echo htmlentities($payment['logo']); ?>" />
                                        <?php endif; ?>
                                        <span><?php echo htmlentities($payment['name']); ?></span>
                                        <i class="icon-active"></i>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; if(empty($buy_payment_list)): ?>
                            <div class="table-no"><i class="am-icon-warning"></i> 没有相关数据</div>
                        <?php endif; ?>
                    </div>
                    <div class="am-margin-top-sm">
                        <input type="hidden" name="id" value="0" />
                        <input type="hidden" name="payment_id" value="0" />
                        <button type="submit" class="am-btn am-btn-primary am-radius btn-loading-example am-btn-sm am-btn-block" data-am-loading="{loadingText:'处理中...'}">确认</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

        <!-- extend end -->

        <!-- content inside bottom hook -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span><?php echo htmlentities($hook_name_content_inside_bottom); ?></span>
            </div>
        <?php endif; 
            $hook_data = MyEventTrigger($hook_name_content_inside_bottom, ['hook_name'=>$hook_name_content_inside_bottom, 'is_backend'=>true]);
            if(!empty($hook_data) && is_array($hook_data))
            {
                foreach($hook_data as $hook)
                {
                    if(is_string($hook) || is_int($hook))
                    {
                        echo htmlspecialchars_decode($hook);
                    }
                }
            }
         ?>
    </div>
</div>
<!-- right content end  -->

<!-- content bottom hook -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
    <div class="plugins-tag">
        <span><?php echo htmlentities($hook_name_content_bottom); ?></span>
    </div>
<?php endif; 
    $hook_data = MyEventTrigger($hook_name_content_bottom, ['hook_name'=>$hook_name_content_bottom, 'is_backend'=>true]);
    if(!empty($hook_data) && is_array($hook_data))
    {
        foreach($hook_data as $hook)
        {
            if(is_string($hook) || is_int($hook))
            {
                echo htmlspecialchars_decode($hook);
            }
        }
    }
 ?>

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

<!-- page buttom -->
