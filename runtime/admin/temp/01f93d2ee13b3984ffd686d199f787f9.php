<?php /*a:5:{s:78:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/payment/save_info.html";i:1665913498;s:74:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/header.html";i:1665913498;s:80:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/page_loading.html";i:1665913498;s:76:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/not_data.html";i:1665913498;s:74:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/footer.html";i:1665913498;}*/ ?>
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
		<form class="am-form form-validation" action="<?php echo MyUrl('admin/payment/save'); ?>" method="POST" request-type="ajax-url" request-value="<?php echo MyUrl('admin/payment/index'); ?>" enctype="multipart/form-data">
			<legend>
				<span class="am-text-default">支付方式<?php if(empty($data['id'])): ?>添加<?php else: ?>编辑<?php endif; ?></span>
				<a href="<?php echo MyUrl('admin/payment/index'); ?>" class="am-fr am-text-sm am-margin-top-sm am-icon-mail-reply"> 返回</a>
			</legend>
			<?php if(empty($data)): ?>
					<div class="table-no"><i class="am-icon-warning"></i> 没有相关数据</div>
			<?php else: ?>
				<div class="am-form-group">
					<label>名称</label>
					<input type="text" name="name" placeholder="名称" minlength="2" maxlength="60" data-validation-message="名称格式 2~30 个字符" class="am-radius" <?php if(!empty($data)): ?> value="<?php echo htmlentities($data['name']); ?>"<?php endif; ?> required />
				</div>
				<div class="am-form-group">
					<label>适用终端</label>
				    <select name="apply_terminal" class="am-radius chosen-select" multiple="multiple" minchecked="1" data-placeholder="可选择..." data-validation-message="至少选择一个适用终端" required>
						<?php foreach($common_platform_type as $v): if(isset($data) and isset($data['apply_terminal_old']) and is_array($data['apply_terminal_old']) and in_array($v['value'], $data['apply_terminal_old'])): ?>
								<option value="<?php echo htmlentities($v['value']); ?>" <?php if(isset($data['apply_terminal']) and in_array($v['value'], $data['apply_terminal'])): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
							<?php endif; ?>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="am-form-group am-form-file">
					<label class="block">LOGO</label>
					<ul class="plug-file-upload-view logo-images-view" data-form-name="logo" data-max-number="1" data-dialog-type="images">
						<?php if(!empty($data['logo'])): ?>
							<li>
								<input type="text" name="logo" value="<?php echo htmlentities($data['logo']); ?>" />
								<img src="<?php echo htmlentities($data['logo']); ?>" />
								<i>×</i>
							</li>
						<?php endif; ?>
					</ul>
					<div class="plug-file-upload-submit" data-view-tag="ul.logo-images-view">+上传图片</div>
				</div>

				<!-- plugins config start -->
				<?php if(!empty($data['element'])): ?>
					<div class="am-alert am-alert-secondary">
						<label class="am-text-sm am-text-warning">该区域为插件配置填写项，请按照插件文档填写相应的值</label>
						<?php foreach($data['element'] as $element): ?>
							<div class="am-form-group">
								<?php if(!empty($element['title'])): ?>
									<label class="block"><?php echo htmlentities($element['title']); if(!empty($element['desc'])): ?><span class="am-form-group-label-tips"><?php echo htmlentities($element['desc']); ?></span><?php endif; ?></label>
								<?php endif; switch($element['element']): case "input": if(in_array($element['type'], ['radio', 'checkbox']) and !empty($element['element_data']) and is_array($element['element_data'])): foreach($element['element_data'] as $element_data_key=>$element_data): ?>
												<label class="<?php if(isset($element['is_block']) and $element['is_block'] == 1): ?>am-<?php echo htmlentities($element['type']); else: ?>am-<?php echo htmlentities($element['type']); ?>-inline<?php endif; ?>">
													<input
														type="<?php echo htmlentities($element['type']); ?>"
														name="plugins_<?php echo htmlentities($element['name']); ?>"
														value="<?php echo htmlentities($element_data['value']); ?>"

														<?php if(isset($data['config'][$element['name']]) and in_array($element_data['value'], explode(',', $data['config'][$element['name']]))): ?> checked<?php endif; if(isset($element['minchecked']) and $element['type'] == 'checkbox'): ?> minchecked="<?php echo htmlentities($element['minchecked']); ?>"<?php endif; if(isset($element['maxchecked']) and $element['type'] == 'checkbox'): ?> maxchecked="<?php echo htmlentities($element['maxchecked']); ?>"<?php endif; if(isset($element['message'])): ?> data-validation-message="<?php echo htmlentities($element['message']); ?>"<?php endif; if($element_data_key == 0 and isset($element['is_required']) and $element['is_required'] == 1): ?>required<?php endif; ?>
														data-am-ucheck />
														<?php echo htmlentities($element_data['name']); ?>
												</label>
											<?php endforeach; else: ?>
											<input
												class="am-radius"
												type="<?php echo htmlentities($element['type']); ?>"
												name="plugins_<?php echo htmlentities($element['name']); ?>"
												value="<?php if(isset($data['config'][$element['name']])): ?><?php echo htmlentities($data['config'][$element['name']]); else: if(isset($element['default'])): ?><?php echo htmlentities($element['default']); ?><?php endif; ?><?php endif; ?>"

												<?php if(isset($element['placeholder'])): ?> placeholder="<?php echo htmlentities($element['placeholder']); ?>"<?php endif; if(isset($element['message'])): ?> data-validation-message="<?php echo htmlentities($element['message']); ?>"<?php endif; if(isset($element['is_required']) and $element['is_required'] == 1): ?> required<?php endif; ?>
												/>
										<?php endif; break; case "select": if(!empty($element['element_data']) and is_array($element['element_data'])): ?>
											<select
												class="chosen-select am-radius"
												name="plugins_<?php echo htmlentities($element['name']); ?>"

												<?php if(isset($element['message'])): ?> data-validation-message="<?php echo htmlentities($element['message']); ?>"<?php endif; if(!empty($element['placeholder'])): ?> data-placeholder="<?php echo htmlentities($element['placeholder']); ?>"<?php endif; if(isset($element['is_multiple']) and $element['is_multiple'] == 1): ?>
													multiple
													<?php if(isset($element['minchecked'])): ?> minchecked="<?php echo htmlentities($element['minchecked']); ?>"<?php endif; if(isset($element['maxchecked'])): ?> maxchecked="<?php echo htmlentities($element['maxchecked']); ?>"<?php endif; ?>
												<?php endif; if(isset($element['is_required']) and $element['is_required'] == 1): ?>required<?php endif; ?>
											>
											<?php if(!isset($element['is_multiple']) or $element['is_multiple'] != 1): if(!empty($element['placeholder'])): ?>
													<option value=""><?php echo htmlentities($element['placeholder']); ?></option>
												<?php endif; ?>
											<?php endif; foreach($element['element_data'] as $element_data_key=>$element_data): ?>
													<option
														value="<?php echo htmlentities($element_data['value']); ?>"
														<?php if(isset($data['config'][$element['name']]) and in_array($element_data['value'], explode(',', $data['config'][$element['name']]))): ?>selected<?php endif; ?>
														><?php echo htmlentities($element_data['name']); ?></option>
												<?php endforeach; ?>
											</select>
										<?php endif; break; case "textarea": ?>
										<textarea
											class="am-radius"
											name="plugins_<?php echo htmlentities($element['name']); ?>"

											<?php if(isset($element['rows'])): ?> rows="<?php echo htmlentities($element['rows']); ?>"<?php endif; if(isset($element['placeholder'])): ?> placeholder="<?php echo htmlentities($element['placeholder']); ?>"<?php endif; if(isset($element['is_required']) and $element['is_required'] == 1): if(isset($element['minlength'])): ?> minlength="<?php echo htmlentities($element['minlength']); ?>"<?php endif; if(isset($element['maxlength'])): ?> maxlength="<?php echo htmlentities($element['maxlength']); ?>"<?php endif; ?>
												required
											<?php endif; ?>
										><?php if(isset($data['config'][$element['name']])): ?><?php echo htmlentities($data['config'][$element['name']]); else: if(isset($element['default'])): ?><?php echo htmlentities($element['default']); ?><?php endif; ?><?php endif; ?></textarea>
									<?php break; case "message": ?>
										<div class="am-alert am-alert-danger" data-am-alert>
											<?php echo $element['message']; ?>
										</div>
									<?php break; ?>
								<?php endswitch; ?>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
				<!-- plugins config end -->

				<div class="am-form-group">
					<label>顺序</label>
					<input type="number" placeholder="顺序" name="sort" min="0" max="255" data-validation-message="顺序 0~255 之间的数值" class="am-radius" value="<?php if(isset($data['sort'])): ?><?php echo htmlentities($data['sort']); else: ?>0<?php endif; ?>" required />
				</div>

				<div class="am-form-group">
				    <label class="block">用户开放</label>
				    <input name="is_open_user" value="1" type="checkbox" data-off-text="否" data-on-text="是" data-size="xs" data-on-color="success" data-off-color="default" data-handle-width="50" data-am-switch <?php if((isset($data['is_open_user']) and $data['is_open_user'] == 1) or !isset($data['is_open_user'])): ?>checked="true"<?php endif; ?> />
				</div>

				<div class="am-form-group">
				    <label class="block">是否启用</label>
				    <input name="is_enable" value="1" type="checkbox" data-off-text="否" data-on-text="是" data-size="xs" data-on-color="success" data-off-color="default" data-handle-width="50" data-am-switch <?php if((isset($data['is_enable']) and $data['is_enable'] == 1) or !isset($data['is_enable'])): ?>checked="true"<?php endif; ?> />
				</div>
				<div class="am-form-group am-form-group-refreshing am-margin-top-lg am-padding-left-0">
					<input type="hidden" name="id" <?php if(!empty($data)): ?> value="<?php echo htmlentities($data['id']); ?>"<?php endif; ?> />
					<button type="submit" class="am-btn am-btn-primary am-radius btn-loading-example am-btn-sm am-btn-block" data-am-loading="{loadingText:'处理中...'}">保存</button>
				</div>
			<?php endif; ?>
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
<script>
$('.select-maxchecked').on('checkedOverflow.selected.amui', function() {
  Prompt('最多选择' + this.getAttribute('maxchecked') + '项');
});
</script>