<?php /*a:10:{s:76:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/goods/save_info.html";i:1665913498;s:74:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/header.html";i:1665913498;s:80:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/page_loading.html";i:1665913498;s:71:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/goods/spec.html";i:1665913498;s:92:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/goodsparamstemplate/tips.html";i:1665913498;s:93:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/goodsparamstemplate/table.html";i:1665913498;s:76:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/not_data.html";i:1665913498;s:68:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/lib/seo.html";i:1665913498;s:79:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/goods/spec_extends.html";i:1665913498;s:74:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/footer.html";i:1665913498;}*/ ?>
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
		<form class="am-form form-validation" action="<?php echo MyUrl('admin/goods/save'); ?>" method="POST" request-type="ajax-url" request-value="<?php echo MyUrl('admin/goods/index', $params); ?>" enctype="multipart/form-data">
			<legend>
				<span class="am-text-default">商品<?php if(empty($data['id'])): ?>添加<?php else: ?>编辑<?php endif; ?></span>
				<a href="<?php echo MyUrl('admin/goods/index', $params); ?>" class="am-fr am-text-sm am-margin-top-sm am-icon-mail-reply"> 返回</a>
			</legend>

			<nav class="goods-nav">
				<ul>
					<li>
						<a href="javascript:;" data-value="#goods-nav-base">基础信息</a>
					</li>
					<li>
						<a href="javascript:;" data-value="#goods-nav-operations">商品规格</a>
					</li>
					<li>
						<a href="javascript:;" data-value="#goods-nav-parameters">商品参数</a>
					</li>
					<li>
						<a href="javascript:;" data-value="#goods-nav-photo">商品相册</a>
					</li>
					<li>
						<a href="javascript:;" data-value="#goods-nav-video">商品视频</a>
					</li>
					<li>
						<a href="javascript:;" data-value="#goods-nav-app">手机详情</a>
					</li>
					<li>
						<a href="javascript:;" data-value="#goods-nav-web">电脑详情</a>
					</li>
					<li>
						<a href="javascript:;" data-value="#goods-nav-fictitious">虚拟信息</a>
					</li>
					<li>
						<a href="javascript:;" data-value="#goods-nav-extends">扩展数据</a>
					</li>
					<li>
						<a href="javascript:;" data-value="#goods-nav-seo">SEO</a>
					</li>
					<li class="am-text-center am-padding-xs nav-shrink-submit">
						<i class="am-icon-angle-double-right am-icon-sm"></i>
					</li>
				</ul>
			</nav>

			<!-- 基础信息 -->
			<div class="am-panel am-panel-default" id="goods-nav-base">
                <div class="am-panel-hd">
                    <h3 class="am-panel-title">基础信息</h3>
                </div>
                <div class="am-panel-bd am-padding-vertical-xs">
					<div class="am-form-group">
						<label>标题名称<span class="am-form-group-label-tips-must">必填</span></label>
						<input type="hidden" name="title_color" value="<?php if(!empty($data['title_color'])): ?><?php echo htmlentities($data['title_color']); ?><?php endif; ?>" />
						<div class="am-input-group am-input-group-sm">
							<input type="text" name="title" placeholder="标题名称" minlength="2" maxlength="160" data-validation-message="标题名称格式 2~160 个字符" class="am-form-field am-radius" <?php if(!empty($data)): ?> value="<?php echo htmlentities($data['title']); ?>" <?php endif; if(!empty($data['title_color'])): ?> style="color:<?php echo htmlentities($data['title_color']); ?>;" <?php endif; ?> required />
							<span class="am-input-group-btn">
								<button type="button" class="am-btn am-btn-default am-btn-xs colorpicker-submit" data-input-tag="input[name='title']" data-color-tag="input[name='title_color']">
									<img src="<?php echo htmlentities($attachment_host); ?>/static/common/images/colorpicker.png" />
								</button>
							</span>
						</div>
					</div>
					<div class="am-form-group">
						<label>商品简述<span class="am-form-group-label-tips">选填</span></label>
						<input type="text" name="simple_desc" placeholder="商品简述" maxlength="230" data-validation-message="商品简述格式 最多230个字符" class="am-radius" <?php if(!empty($data)): ?> value="<?php echo htmlentities($data['simple_desc']); ?>"<?php endif; ?> />
					</div>
					<div class="am-form-group">
						<label>商品型号<span class="am-form-group-label-tips">选填</span></label>
						<input type="text" name="model" placeholder="商品型号" maxlength="30" data-validation-message="商品型号格式 最多30个字符" class="am-radius" <?php if(!empty($data)): ?> value="<?php echo htmlentities($data['model']); ?>"<?php endif; ?> />
					</div>
					<div class="am-form-group">
						<label>商品分类<span class="am-form-group-label-tips-must">至少选择一个</span></label>
						<br />
						<select name="category_id" class="am-radius chosen-select" multiple="multiple" minchecked="1" data-placeholder="请选择..." data-validation-message="请至少选择一个商品分类" required>
							<?php if(!empty($goods_category_list)): foreach($goods_category_list as $v): ?>
									<option value="<?php echo htmlentities($v['id']); ?>" <?php if(!empty($data['category_ids']) and in_array($v['id'], $data['category_ids'])): ?>selected<?php endif; ?>>一级 - <?php echo htmlentities($v['name']); ?></option>
									<?php if(!empty($v['items'])): foreach($v['items'] as $vs): ?>
											<option style="padding-left: 30px;" value="<?php echo htmlentities($vs['id']); ?>" <?php if(!empty($data['category_ids']) and in_array($vs['id'], $data['category_ids'])): ?>selected<?php endif; ?>>二级-<?php echo htmlentities($vs['name']); ?></option>
											<?php if(!empty($vs['items'])): foreach($vs['items'] as $vss): ?>
													<option style="padding-left: 60px;" value="<?php echo htmlentities($vss['id']); ?>" <?php if(!empty($data['category_ids']) and in_array($vss['id'], $data['category_ids'])): ?>selected<?php endif; ?>>三级-<?php echo htmlentities($vss['name']); ?></option>
												<?php endforeach; ?>
											<?php endif; ?>
										<?php endforeach; ?>
									<?php endif; ?>
								<?php endforeach; ?>
							<?php endif; ?>
						</select>
					</div>
					<div class="am-form-group">
						<label>品牌<span class="am-form-group-label-tips">可选</span></label>
						<br />
						<select name="brand_id" class="am-radius chosen-select" data-placeholder="请选择..." data-validation-message="请选择品牌">
							<?php if(!empty($brand_list)): ?>
								<option value="0">请选择...</option>
								<?php foreach($brand_list as $v): ?>
									<option value="<?php echo htmlentities($v['id']); ?>" <?php if(isset($data['brand_id']) and $data['brand_id'] == $v['id']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
								<?php endforeach; ?>
							<?php endif; ?>
						</select>
					</div>
					<div class="am-form-group">
						<label>生产地<span class="am-form-group-label-tips">可选</span></label>
						<br />
						<select name="place_origin" class="am-radius chosen-select" data-placeholder="请选择..." data-validation-message="请选择生产地">
							<option value="0">请选择...</option>
							<?php if(!empty($region_province_list)): foreach($region_province_list as $v): ?>
									<option value="<?php echo htmlentities($v['id']); ?>" <?php if(!empty($data['place_origin']) and $v['id'] == $data['place_origin']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
								<?php endforeach; ?>
							<?php endif; ?>
						</select>
					</div>
					<div class="am-form-group">
						<label>库存单位<span class="am-form-group-label-tips-must">必填</span></label>
						<input type="text" name="inventory_unit" placeholder="库存单位" minlength="1" maxlength="6" data-validation-message="库存单位格式 1~6 个字符" class="am-radius" <?php if(!empty($data)): ?> value="<?php echo htmlentities($data['inventory_unit']); ?>"<?php endif; ?> required />
					</div>
					<div class="am-form-group">
	                    <label>购买赠送积分比例<span class="am-form-group-label-tips">选填</span><span class="am-form-group-label-tips">按照商品金额比例乘以数量的比例进行发放</span></label>
	                    <div class="am-alert am-alert-warning am-radius am-margin-top-0" data-am-alert>
						    <p>订单完成自动将发放到用户锁定积分、再由脚本自动发放到有效积分</p>
						</div>
	                    <div class="am-input-group am-input-group-sm am-margin-top-xs">
	                        <input type="number" name="give_integral" placeholder="购买赠送积分" min="0" max="100" data-validation-message="购买赠送积分比例 0~100 的数字" class="am-form-field am-radius" <?php if(!empty($data['give_integral'])): ?> value="<?php echo htmlentities($data['give_integral']); ?>"<?php endif; ?> />
	                        <span class="am-input-group-btn">
	                            <button type="button" class="am-btn am-btn-default am-radius">%</button>
	                        </span>
	                    </div>
	                </div>
					<div class="am-form-group">
						<label>最低起购数量<span class="am-form-group-label-tips-must">必填</span><span class="am-form-group-label-tips">默认数值 1</span></label>
						<input type="number" name="buy_min_number" placeholder="最低起购数量" min="1" max="100000000" data-validation-message="最低起购数量 1~100000000" class="am-radius" value="<?php if(empty($data) or empty($data['buy_min_number'])): ?>1<?php else: ?><?php echo htmlentities($data['buy_min_number']); ?><?php endif; ?>" required />
					</div>
					<div class="am-form-group">
						<label>单次最大购买数量<span class="am-form-group-label-tips">选填</span><span class="am-form-group-label-tips">单次最大数值 100000000, 小于等于0或空则不限</span></label>
						<input type="number" name="buy_max_number" placeholder="单次最大购买数量" min="0" max="100000000" data-validation-message="单次最大购买数量 1~100000000" class="am-radius" <?php if(!empty($data['buy_max_number'])): ?> value="<?php echo htmlentities($data['buy_max_number']); ?>"<?php endif; ?> />
					</div>
					<div class="am-form-group">
						<label>商品类型<span class="am-form-group-label-tips">可选</span></label>
						<div class="am-alert am-alert-warning am-radius am-margin-top-0" data-am-alert>
						    <p>1. 当前系统配置的站点类型为[ <strong class="am-text-danger"><?php echo htmlentities($common_site_type_list[$common_site_type]['name']); ?></strong> ]</p>
						    <p>2. 如果商品类型未配置则跟随系统配置的站点类型</p>
						    <p>3. 当设置的商品类型不在系统设置的站点类型包含的时候，商品加入购物车功能将失效</p>
						</div>
						<select name="site_type" class="am-radius chosen-select am-margin-top-xs" data-placeholder="可选择..." data-validation-message="请选择商品类型">
							<option value="-1">可选择...</option>
							<?php if(!empty($common_site_type_list)): foreach($common_site_type_list as $v): ?>
									<option value="<?php echo htmlentities($v['value']); ?>" <?php if(isset($data['site_type']) and $v['value'] == $data['site_type']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
								<?php endforeach; ?>
							<?php endif; ?>
						</select>
					</div>
					<div class="am-form-group am-form-file">
						<label class="block">封面图片<span class="am-form-group-label-tips">选传</span><span class="am-form-group-label-tips">留空则取相册第一张图、建议800*800px</span></label>
						<ul class="plug-file-upload-view goods-recommended-images-view" data-form-name="images" data-max-number="1" data-dialog-type="images">
							<?php if(!empty($data['images'])): ?>
								<li>
									<input type="text" name="images" value="<?php echo htmlentities($data['images']); ?>" />
									<img src="<?php echo htmlentities($data['images']); ?>" />
									<i>×</i>
								</li>
							<?php endif; ?>
						</ul>
						<div class="plug-file-upload-submit" data-view-tag="ul.goods-recommended-images-view">+上传图片</div>
					</div>
					<div class="am-form-group">
						<label class="block">扣减库存<span class="am-form-group-label-tips">可选</span><span class="am-form-group-label-tips">扣除规则根据后台配置->扣除库存规则而定</span></label>
						<input name="is_deduction_inventory" value="1" type="checkbox" data-off-text="否" data-on-text="是" data-size="xs" data-on-color="success" data-off-color="default" data-handle-width="50" data-am-switch <?php if((isset($data['is_deduction_inventory']) and $data['is_deduction_inventory'] == 1) or empty($data)): ?>checked="true"<?php endif; ?> />
					</div>
					<div class="am-form-group">
						<label class="block">上下架<span class="am-form-group-label-tips">可选</span><span class="am-form-group-label-tips">下架后用户不可见</span></label>
						<input name="is_shelves" value="1" type="checkbox" data-off-text="下架" data-on-text="上架" data-size="xs" data-on-color="success" data-off-color="default" data-handle-width="50" data-am-switch <?php if((isset($data['is_shelves']) and $data['is_shelves'] == 1) or empty($data)): ?>checked="true"<?php endif; ?> />
					</div>
				</div>
			</div>

			<!-- 商品规格 -->
			<div class="am-panel am-panel-default" id="goods-nav-operations" data-spec-add-max-number="<?php echo MyC('common_spec_add_max_number', 3, true); ?>">
                <div class="am-panel-hd">
                    <h3 class="am-panel-title">商品规格<span class="am-form-group-label-tips-must">必填</span></h3>
                </div>
                <div class="am-panel-bd business-form-group">
                    <div class="am-margin-horizontal-sm">
                    	<!-- 规格快捷操作 -->
<div class="spec-quick am-margin-bottom-lg">
    <div>
        <div class="am-alert am-alert-warning am-radius" data-am-alert>
            <button type="button" class="am-close">&times;</button>
            <p>1. 批量添加规格可以快速创建商品SKU，大量节省SKU编辑时间，快捷操作数据不影响SKU数据，仅生成的时候重新覆盖SKU。</p>
            <p>2. 商品添加成功后，仓库管理->仓库商品中添加并配置库存</p>
        </div>
        <span class="business-operations-submit quick-spec-title-add">+ 批量添加规格</span>
        <span class="business-operations-submit am-margin-left-sm am-icon-gg quick-spec-created"> 生成规格</span>
    </div>
    <div class="goods-specifications am-margin-top-sm" <?php if(empty($data['spec_base'])): ?>style="display: none;"<?php endif; ?>>
        <table class="am-table am-table-bordered am-table-centered am-table-striped am-table-hover table-thead-beautify">
            <thead>
                <tr>
                    <th class="spec-quick-th-title">规格名</th>
                    <th class="spec-quick-th-value">规格值</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($data['spec_base'])): foreach($data['spec_base'] as $spec_base_key=>$spec_base): ?>
                        <tr>
                            <td class="am-text-middle">
                                <i class="am-close quick-title-remove">×</i>
                                <input type="text" value="<?php echo htmlentities($spec_base['title']); ?>" name="spec_base_title_<?php echo htmlentities($spec_base_key); ?>" placeholder="规格名" />
                            </td>
                            <td class="spec-quick-td-value am-cf">
                                <?php if(!empty($spec_base['value'])): foreach($spec_base['value'] as $value): ?>
                                        <div class="am-fl am-margin-xs value-item">
                                            <input type="text" class="am-fl" name="spec_base_value_<?php echo htmlentities($spec_base_key); ?>[]" value="<?php echo htmlentities($value); ?>" placeholder="规格值" />
                                            <i class="am-close quick-value-remove">×</i>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                <div class="am-fl am-margin-xs value-item am-text-left"><span class="business-operations-submit quick-spec-value-add" data-index="<?php echo htmlentities($spec_base_key); ?>">+ 添加规格值</span>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- 规格常规操作 -->
<div>
    <span class="business-operations-submit specifications-nav-title-add">+ 添加规格值</span>
    <span class="business-operations-submit am-margin-left-sm specifications-nav-set-all am-icon-cogs" data-am-modal="{target: '#spec-popup-all-operation'}"> 高级批量设置</span>
</div>
<div class="goods-specifications am-padding-top-sm">
    <!-- 规格列表 -->
    <div class="specifications-container am-scrollable-horizontal">
        <table class="am-table am-table-bordered am-table-centered specifications-table am-margin-bottom-sm am-table-striped am-table-hover table-thead-beautify am-margin-bottom-0">
            <thead class="title-nav">
                <tr>
                    <?php if(!empty($specifications['type'])): foreach($specifications['type'] as $type_v): ?>
                            <th class="table-title table-title-<?php echo htmlentities($type_v['id']); ?>">
                                <i class="am-close title-nav-remove" data-index="<?php echo htmlentities($type_v['id']); ?>">×</i>
                                <input type="text" name="specifications_name_<?php echo htmlentities($type_v['id']); ?>" placeholder="规格名" value="<?php echo htmlentities($type_v['name']); ?>" data-validation-message="请填写规格名" required />
                            </th>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <th class="title-start">
                        <span>价格(元)</span>
                        <i class="am-icon-edit"></i>
                    </th>
                    <th>
                        <span>原价(元)</span>
                        <i class="am-icon-edit"></i>
                    </th>
                    <th>
                        <span>重量(kg)</span>
                        <i class="am-icon-edit"></i>
                    </th>
                    <th>
                        <span>体积(m³)</span>
                        <i class="am-icon-edit"></i>
                    </th>
                    <th>
                        <span>编码</span>
                        <i class="am-icon-edit"></i>
                    </th>
                    <th>
                        <span>条形码</span>
                        <i class="am-icon-edit"></i>
                    </th>
                    <th class="extend-btn">扩展</th>
                    <th class="operation-btn">操作</th>
                </tr>
            </thead>
            <tbody>
                <?php if(empty($specifications['value'])): ?>
                    <tr class="line-0" data-line-tag=".line-0">
                        <td class="am-text-middle value-start">
                            <input type="text" name="specifications_price[]" placeholder="价格" class="am-radius" pattern="<?php echo htmlentities($default_price_regex); ?>" data-validation-message="请填写有效的销售金额" required />
                        </td>
                        <td class="am-text-middle">
                            <input type="text" name="specifications_original_price[]" placeholder="原价" class="am-radius" pattern="<?php echo htmlentities($default_price_regex); ?>" data-validation-message="请填写有效的原价" />
                        </td>
                        <td class="am-text-middle">
                            <input type="number" name="specifications_weight[]" placeholder="重量" class="am-radius" min="0.00" max="100000000.00" step="0.01" data-validation-message="规格重量 0.00~100000000.00" />
                        </td>
                        <td class="am-text-middle">
                            <input type="number" name="specifications_volume[]" placeholder="体积" class="am-radius" min="0.00" max="100000000.00" step="0.01" data-validation-message="规格体积 0.00~100000000.00" />
                        </td>
                        <td class="am-text-middle">
                            <input type="text" name="specifications_coding[]" placeholder="编码" class="am-radius" maxlength="60" data-validation-message="规格编码最多60个字符" />
                        </td>
                        <td class="am-text-middle">
                            <input type="text" name="specifications_barcode[]" placeholder="条形码" class="am-radius" maxlength="60" data-validation-message="条形码最多60个字符" />
                        </td>
                        <td class="am-text-middle">
                            <input type="hidden" name="specifications_extends[]" value="" class="line-extend-input" />
                            <a href="javascript:;" class="am-text-xs am-text-secondary line-extend-btn">编辑</a>
                        </td>
                        <td class="am-text-middle">
                            <a href="javascript:;" class="am-text-xs am-text-secondary am-margin-right-sm line-move" data-type="top">上移</a>
                            <a href="javascript:;" class="am-text-xs am-text-secondary am-margin-right-sm line-move" data-type="bottom">下移</a>
                            <a href="javascript:;" class="am-text-xs am-text-secondary am-margin-right-xs line-copy">复制</a>
                            <a href="javascript:;" class="am-text-xs am-text-danger line-remove">移除</a>
                        </td>
                    </tr>
                <?php endif; if(!empty($specifications['value'])): foreach($specifications['value'] as $line_k=>$line_v): ?>
                        <tr class="line-<?php echo htmlentities($line_k); if($line_k > 0): ?> line-not-first<?php endif; ?>" data-line-tag=".line-<?php echo htmlentities($line_k); ?>">
                        <?php foreach($line_v as $v): if(isset($v['data_type'])): switch($v['data_type']): case "spec": ?>
                                        <td class="am-text-middle table-value table-value-<?php echo htmlentities($v['data']['key']); ?>">
                                            <input type="text" name="specifications_value_<?php echo htmlentities($v['data']['key']); ?>[]" placeholder="规格值" value="<?php echo htmlentities($v['data']['value']); ?>" data-validation-message="请填写规格值" required />
                                        </td>
                                    <?php break; case "base": ?>
                                        <td class="am-text-middle value-start">
                                            <input type="text" name="specifications_price[]" placeholder="价格" class="am-radius" pattern="<?php echo htmlentities($default_price_regex); ?>" data-validation-message="请填写有效的销售金额" value="<?php if(isset($v['data']['price'])): ?><?php echo htmlentities($v['data']['price']); ?><?php endif; ?>" required />
                                        </td>
                                        <td class="am-text-middle">
                                            <input type="text" name="specifications_original_price[]" placeholder="原价" class="am-radius" pattern="<?php echo htmlentities($default_price_regex); ?>" data-validation-message="请填写有效的原价" value="<?php if($v['data']['original_price'] > 0): ?><?php echo htmlentities($v['data']['original_price']); ?><?php endif; ?>" />
                                        </td>
                                        <td class="am-text-middle">
                                            <input type="number" name="specifications_weight[]" placeholder="重量" class="am-radius" min="0.00" max="100000000.00" step="0.01" data-validation-message="规格重量 0.00~100000000.00" value="<?php if(isset($v['data']['weight']) and $v['data']['weight'] > 0): ?><?php echo htmlentities($v['data']['weight']); ?><?php endif; ?>" />
                                        </td>
                                        <td class="am-text-middle">
                                            <input type="number" name="specifications_volume[]" placeholder="体积" class="am-radius" max="100000000" min="0.00" max="100000000.00" step="0.01" data-validation-message="规格体积 0.00~100000000.00" value="<?php if(isset($v['data']['volume']) and $v['data']['volume'] > 0): ?><?php echo htmlentities($v['data']['volume']); ?><?php endif; ?>" />
                                        </td>
                                        <td class="am-text-middle">
                                            <input type="text" name="specifications_coding[]" placeholder="编码" class="am-radius" maxlength="60" data-validation-message="规格编码最多60个字符" value="<?php if(isset($v['data']['coding'])): ?><?php echo htmlentities($v['data']['coding']); ?><?php endif; ?>" />
                                        </td>
                                        <td class="am-text-middle">
                                            <input type="text" name="specifications_barcode[]" placeholder="条形码" class="am-radius" maxlength="60" data-validation-message="条形码最多60个字符" value="<?php if(isset($v['data']['barcode'])): ?><?php echo htmlentities($v['data']['barcode']); ?><?php endif; ?>" />
                                        </td>
                                        <td class="am-text-middle">
                                            <input type="hidden" name="specifications_extends[]" value="<?php echo htmlentities($v['data']['extends']); ?>" class="line-extend-input" />
                                            <a href="javascript:;" class="am-text-xs am-text-secondary line-extend-btn">编辑</a>
                                        </td>
                                        <td class="am-text-middle">
                                            <a href="javascript:;" class="am-text-xs am-text-secondary am-margin-right-sm line-move" data-type="top">上移</a>
                                            <a href="javascript:;" class="am-text-xs am-text-secondary am-margin-right-sm line-move" data-type="bottom">下移</a>
                                            <a href="javascript:;" class="am-text-xs am-text-secondary am-margin-right-xs line-copy">复制</a>
                                            <a href="javascript:;" class="am-text-xs am-text-danger line-remove">移除</a>
                                        </td>
                                    <?php break; ?>
                                <?php endswitch; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <div class="am-margin-top-sm">
        <span class="business-operations-submit specifications-line-add">+添加一行</span>
    </div>
    <div class="spec-images-list">
        <div class="am-alert am-radius">
            规格名称与规格值保持一致，相同规格名称添加一次即可，重复添加则后面覆盖前面，顺序不影响前端展示效果。
            <span class="business-operations-submit specifications-line-images-add">+添加规格图片</span>
            <span class="business-operations-submit specifications-line-images-auto-add am-margin-left-sm am-icon-dot-circle-o"> 第<input type="text" class="am-inline-block am-text-center am-margin-horizontal-xs am-radius" value="1" />列规格自动生成</span>
        </div>
        <ul class="spec-images-content">
            <?php if(!empty($specifications['type'])): foreach($specifications['type'] as $type): if(!empty($type['value'])): foreach($type['value'] as $spec_key=>$spec): if(!empty($spec['images'])): ?>
                                <li class="spec-images-items spec-images-items-<?php echo htmlentities($type['id']); ?><?php echo htmlentities($spec_key); ?>">
                                    <input type="text" name="spec_images_name[<?php echo htmlentities($type['id']); ?><?php echo htmlentities($spec_key); ?>]" placeholder="规格名称" class="am-radius t-c" data-validation-message="请填写规格名称" value="<?php echo htmlentities($spec['name']); ?>" required >
                                    <ul class="plug-file-upload-view spec-images-view-<?php echo htmlentities($type['id']); ?><?php echo htmlentities($spec_key); ?>" data-form-name="spec_images[<?php echo htmlentities($type['id']); ?><?php echo htmlentities($spec_key); ?>]" data-max-number="1" data-delete='0' data-dialog-type="images">
                                        <li>
                                            <input type="hidden" name="spec_images[<?php echo htmlentities($type['id']); ?><?php echo htmlentities($spec_key); ?>]" value="<?php echo htmlentities($spec['images_old']); ?>" data-validation-message="请上传规格图片" required />
                                            <img src="<?php echo htmlentities($spec['images']); ?>" />
                                            <i>×</i>
                                        </li>
                                    </ul>
                                    <div class="plug-file-upload-submit" data-view-tag="ul.spec-images-view-<?php echo htmlentities($type['id']); ?><?php echo htmlentities($spec_key); ?>">+上传图片</div>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
</div>

<!-- 所有规格批量操作弹层 -->
<div class="am-popup" id="spec-popup-all-operation">
    <div class="am-popup-inner">
        <div class="am-popup-hd">
            <h4 class="am-popup-title">高级批量设置</h4>
            <span data-am-modal-close class="am-close">&times;</span>
        </div>
        <div class="am-popup-bd">
            <div class="am-alert am-alert-secondary spec-title-container"></div>
            <div class="am-form-group">
                <label class="block">销售价(元)</label>
                <input type="text" placeholder="价格" class="am-radius popup_all_price" pattern="<?php echo htmlentities($default_price_regex); ?>" data-validation-message="请填写有效的销售金额" />
            </div>
            <div class="am-form-group">
                <label class="block">原价(元)</label>
                <input type="text" placeholder="原价" class="am-radius popup_all_original_price" pattern="<?php echo htmlentities($default_price_regex); ?>" data-validation-message="请填写有效的原价" />
            </div>
            <div class="am-form-group">
                <label class="block">重量(kg)</label>
                <input type="number" placeholder="重量" class="am-radius popup_all_weight" maxlength="80" min="0.00" max="100000000.00" step="0.01" data-validation-message="规格重量 0.00~100000000.00" />
            </div>
            <div class="am-form-group">
                <label class="block">体积(m³)</label>
                <input type="number" placeholder="体积" class="am-radius popup_all_volume" maxlength="80" min="0.00" max="100000000.00" step="0.01" data-validation-message="规格体积 0.00~100000000.00" />
            </div>
            <div class="am-form-group">
                <label class="block">编码</label>
                <input type="text" placeholder="编码" class="am-radius popup_all_coding" maxlength="80" data-validation-message="规格编码最多80个字符" />
            </div>
            <div class="am-form-group">
                <label class="block">条形码</label>
                <input type="text" placeholder="条形码" class="am-radius popup_all_barcode" maxlength="80" data-validation-message="条形码最多80个字符" />
            </div>
            <div class="am-form-group am-form-group-refreshing am-text-center">
                <div class="am-padding-vertical-sm">
                <button type="button" class="am-btn am-btn-warning am-radius am-btn-sm am-margin-right-lg" data-am-modal-close>取消</button>
                <button type="button" class="am-btn am-btn-secondary am-radius am-btn-sm am-margin-left-lg">确认</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 单个规格批量操作弹层 -->
<div class="am-modal am-modal-no-btn" tabindex="-1" id="spec-modal-all-operation">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">批量操作
            <a href="javascript: void(0)" class="am-close" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd">
            <div class="am-input-group am-input-group-sm">
                <input type="text" class="am-form-field" placeholder="批量设置的值" />
                <span class="am-input-group-btn">
                    <button type="button" class="am-btn am-btn-default">确认</button>
                </span>
            </div>
        </div>
    </div>
</div>
                    </div>
                </div>
            </div>

			<!-- 商品参数 -->
            <div class="am-panel am-panel-default" id="goods-nav-parameters">
                <div class="am-panel-hd">
                    <h3 class="am-panel-title">商品参数<span class="am-form-group-label-tips">选填</span></h3>
                </div>
                <div class="am-panel-bd business-form-group">
                    <div class="am-margin-horizontal-sm">
						<div class="am-alert am-alert-warning am-radius" data-am-alert>
    <button type="button" class="am-close">&times;</button>
    <p>1. 展示范围</p>
    <div class="am-padding-left-sm">
        <p>1.1 全部（在商品基础信息和详情参数下都展示）</p>
        <p>1.2 详情（仅在商品详情参数下都展示）</p>
        <p>1.3 基础（仅在商品基础信息下都展示）</p>
    </div>
    <p>2. 快捷操作将会清除原来的数据、重载页面便可恢复原来的数据（仅保存商品后生效）</p>
</div>
						<!-- 通过配置生成商品参数 -->
						<div class="am-dropdown" id="parameters-quick-container" data-am-dropdown>
							<span class="business-operations-submit am-dropdown-toggle parameters-quick-add">
								<span>快捷操作</span>
								<i class="am-icon-caret-down"></i>
							</span>
							<div class="am-dropdown-content parameters-quick-config">
								<div class="am-margin-bottom-sm">
									<select class="am-radius chosen-select goods-template-params-select" data-placeholder="请选择模板..." data-validation-message="选择商品参数模板">
										<?php if(!empty($goods_template_list) and is_array($goods_template_list)): ?>
											<option value="">请选择模板...</option>
											<?php foreach($goods_template_list as $v): ?>
												<option value="<?php echo urlencode(json_encode($v['config_data'], JSON_UNESCAPED_UNICODE)); ?>"><?php echo htmlentities($v['name']); ?></option>
											<?php endforeach; ?>
										<?php endif; ?>
									</select>
								</div>
								<textarea rows="5" placeholder="粘贴商品参数配置信息"></textarea>
								<button type="button" class="am-btn am-btn-secondary am-btn-xs am-radius am-btn-block am-margin-top-sm">确认</button>
							</div>
						</div>
						<!-- 复制操作 -->
						<span class="business-operations-submit am-margin-left-sm parameters-quick-copy">
							<i class="am-icon-copy"></i>
							<span>复制配置</span>
						</span>
					    <!-- 清空操作 -->
					    <span class="business-operations-submit am-margin-left-sm parameters-quick-remove">
							<i class="am-icon-times"></i>
							<span>清空参数</span>
						</span>

						<!-- 参数表格 -->
						<!-- 复制弹窗、仅复制操作失败的时候显示让用户手动复制 -->
<div class="am-modal am-modal-no-btn" tabindex="-1" id="parameters-quick-copy-modal">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">
            <a href="javascript: void(0)" class="am-close" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd">
            <div class="am-padding-sm">
                <textarea rows="5" placeholder="商品参数配置信息"></textarea>
            </div>
        </div>
    </div>
</div>

<!--表列表数据 -->
<div class="parameters-container am-margin-top-sm">
    <table class="am-table am-table-bordered am-table-centered am-table-striped am-table-hover am-margin-bottom-sm parameters-table table-thead-beautify am-margin-bottom-0">
        <thead>
            <tr>
                <th class="spec-quick-th-title">展示范围</th>
                <th class="spec-quick-th-title">参数名称</th>
                <th class="spec-quick-th-value">参数值</th>
                <th class="spec-quick-th-value">操作</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($parameters) and is_array($parameters)): foreach($parameters as $pv): ?>
                    <tr>
                        <td class="am-text-middle">
                            <select name="parameters_type[]" class="am-radius chosen-select" data-validation-message="请选择商品参数展示类型">
                                <?php if(!empty($common_goods_parameters_type_list)): foreach($common_goods_parameters_type_list as $v): ?>
                                        <option value="<?php echo htmlentities($v['value']); ?>" <?php if($pv['type'] == $v['value']): ?>selected<?php endif; ?>><?php echo htmlentities($v['name']); ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </td>
                        <td class="am-text-middle">
                            <input type="text" name="parameters_name[]" placeholder="参数名称" value="<?php echo htmlentities($pv['name']); ?>" data-validation-message="请填写参数名称" maxlength="160" required />
                        </td>
                        <td class="am-text-middle">
                            <input type="text" name="parameters_value[]" placeholder="参数值" value="<?php echo htmlentities($pv['value']); ?>" maxlength="160" data-validation-message="请填写参数值" />
                        </td>
                        <td class="am-text-middle">
                            <a href="javascript:;" class="am-text-xs am-text-secondary am-margin-right-sm line-move" data-type="top">上移</a>
                            <a href="javascript:;" class="am-text-xs am-text-secondary am-margin-right-sm line-move" data-type="bottom">下移</a>
                            <a href="javascript:;" class="am-text-xs am-text-danger line-remove">移除</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<div class="am-margin-top-sm">
    <span class="business-operations-submit parameters-line-add">+添加一行</span>
</div>
					</div>
                </div>
            </div>

			<!-- 相册 -->
			<div class="am-panel am-panel-default" id="goods-nav-photo">
                <div class="am-panel-hd">
                    <h3 class="am-panel-title">商品相册<span class="am-form-group-label-tips-must">必传</span></h3>
                </div>
                <div class="am-panel-bd business-form-group">
                    <div class="am-margin-horizontal-sm">
                    	<div class="am-alert am-alert-warning am-radius" data-am-alert>
	                        <button type="button" class="am-close">&times;</button>
	                        <p>可拖拽图片进行排序，建议图片尺寸一致800*800px、最多30张</p>
	                    </div>
	                    <ul class="plug-file-upload-view goods-photo-view" data-form-name="photo[]" data-max-number="30" data-dialog-type="images">
	                        <?php if(!empty($data['photo'])): foreach($data['photo'] as $v): ?>
	                                <li>
	                                    <input type="text" name="photo[]" value="<?php echo htmlentities($v['images_old']); ?>" />
	                                    <img src="<?php echo htmlentities($v['images']); ?>" />
	                                    <i>×</i>
	                                </li>
	                            <?php endforeach; ?>
	                        <?php endif; ?>
	                    </ul>
	                    <div class="plug-file-upload-submit" data-view-tag="ul.goods-photo-view">+上传相册</div>
                    </div>
                </div>
            </div>

			<!-- 视频 -->
            <div class="am-panel am-panel-default" id="goods-nav-video">
                <div class="am-panel-hd">
                    <h3 class="am-panel-title">商品视频<span class="am-form-group-label-tips">选传</span></h3>
                </div>
                <div class="am-panel-bd business-form-group">
                    <div class="am-margin-horizontal-sm">
	                    <div class="am-alert am-alert-warning am-radius" data-am-alert>
	                        <button type="button" class="am-close">&times;</button>
	                        <p>视频比图文更有具带入感，仅支持 mp4 格式</p>
	                    </div>
	                    <ul class="plug-file-upload-view plug-file-upload-view-video goods-video-view" data-form-name="video" data-max-number="1" data-dialog-type="video">
	                        <?php if(!empty($data['video'])): ?>
	                            <li>
	                                <input type="text" name="video" value="<?php echo htmlentities($data['video']); ?>" />
	                                <video src="<?php echo htmlentities($data['video']); ?>" controls>your browser does not support the video tag</video>
	                                <i>×</i>
	                            </li>
	                        <?php endif; ?>
	                    </ul>
	                    <div class="plug-file-upload-submit" data-view-tag="ul.goods-video-view">+上传视频</div>
	                </div>
                </div>
            </div>

			<!-- 手机详情 -->
			<div class="am-panel am-panel-default" id="goods-nav-app">
                <div class="am-panel-hd">
                    <h3 class="am-panel-title">手机详情<span class="am-form-group-label-tips">选填</span></h3>
                </div>
                <div class="am-panel-bd business-form-group">
                    <div class="am-margin-horizontal-sm">
                    	<div class="am-alert am-alert-warning am-radius" data-am-alert>
	                        <button type="button" class="am-close">&times;</button>
	                        <p>设置手机详情后、在手机模式下将展示手机详情、比如[小程序、APP]</p>
	                    </div>
						<ul class="content-app-items" data-max-count="10" data-required="1" data-images-name="content_app_images" data-content-name="content_app_text" data-images-text="图片" data-content-text="文本内容" data-delete-text="删除" data-drag-sort-text="拖拽排序">
							<?php if(!empty($data['content_app'])): foreach($data['content_app'] as $v): ?>
									<li>
										<div>
											<div class="content-app-left">
												<label class="block">图片</label>
												<ul class="plug-file-upload-view goods-content-app-images-view-<?php echo htmlentities($v['id']); ?>" data-form-name="content_app_images_<?php echo htmlentities($v['id']); ?>" data-max-number="1" data-dialog-type="images">
													<?php if(!empty($v['images'])): ?>
														<li>
															<input type="text" name="content_app_images_<?php echo htmlentities($v['id']); ?>" value="<?php echo htmlentities($v['images_old']); ?>" />
															<img src="<?php echo htmlentities($v['images']); ?>" />
															<i>×</i>
														</li>
													<?php endif; ?>
												</ul>
												<div class="plug-file-upload-submit" data-view-tag="ul.goods-content-app-images-view-<?php echo htmlentities($v['id']); ?>">+上传图片</div>
											</div>
											<div class="am-form-group content-app-right fr">
												<label>文本内容</label>
												<textarea rows="5" name="content_app_text_<?php echo htmlentities($v['id']); ?>" maxlength="105000" class="am-radius" placeholder="文本内容" data-validation-message="文本内容最多 105000 个字符"><?php if(!empty($v)): ?><?php echo $v['content_old']; ?><?php endif; ?></textarea>
											</div>
										</div>
										<i class="c-p am-text-xs cr-red content-app-items-rem-sub">删除</i>
										<i class="c-m am-text-xs drag-sort-submit">拖拽排序</i>
									</li>
								<?php endforeach; ?>
							<?php endif; ?>
						</ul>
						<span class="business-operations-submit content-app-items-add-sub">+添加手机详情</span>
					</div>
				</div>
			</div>

			<!-- 电脑详情 -->
			<div class="am-panel am-panel-default" id="goods-nav-web">
                <div class="am-panel-hd">
                    <h3 class="am-panel-title">电脑详情<span class="am-form-group-label-tips-must">必填</span></h3>
                </div>
                <div class="am-panel-bd business-form-group">
                	<div class="am-margin-horizontal-sm">
                        <textarea class="am-radius am-validate" name="content_web" maxlength="105000" id="editor-tag" data-validation-message="电脑端详情内容最多 105000 个字符" style="width: 100%;"><?php if(!empty($data['content_web'])): ?><?php echo htmlentities($data['content_web']); ?><?php endif; ?></textarea>
                    </div>
                </div>
            </div>

			<!-- 虚拟信息 -->
            <div class="am-panel am-panel-default" id="goods-nav-fictitious">
                <div class="am-panel-hd">
                    <h3 class="am-panel-title">虚拟信息<span class="am-form-group-label-tips">选填</span></h3>
                </div>
                <div class="am-panel-bd business-form-group">
                	<div class="am-margin-horizontal-sm">
                        <script type="text/plain" id="goods-fictitious-container" name="fictitious_goods_value"><?php if(!empty($data['fictitious_goods_value'])): ?><?php echo $data['fictitious_goods_value']; ?><?php endif; ?></script>
                    </div>
                </div>
            </div>

			<!-- 扩展数据 -->
            <div class="am-panel am-panel-default" id="goods-nav-extends">
                <div class="am-panel-hd">
                    <h3 class="am-panel-title">扩展数据<span class="am-form-group-label-tips">该区域为插件扩展数据，请按照插件文档填写相应的值</span></h3>
                </div>
                <div class="am-panel-bd business-form-group">
                	<div class="am-margin-horizontal-sm">
	                	<!-- 插件扩展数据 start -->
						<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
			                <div class="plugins-tag">
			                    <span>plugins_view_admin_goods_save</span>
			                </div>
			            <?php endif; if(!empty($plugins_view_admin_goods_save_data) and is_array($plugins_view_admin_goods_save_data) and !empty(array_filter($plugins_view_admin_goods_save_data))): foreach($plugins_view_admin_goods_save_data as $hook): if(is_string($hook) or is_int($hook)): ?>
			                        <?php echo $hook; ?>
			                    <?php endif; ?>
			                <?php endforeach; else: ?>
							<div class="table-no"><i class="am-icon-warning"></i> 没有相关数据</div>
						<?php endif; ?>
						<!-- 插件扩展数据 end -->
					</div>
                </div>
            </div>

            <!-- SEO信息 -->
            <div class="am-panel am-panel-default" id="goods-nav-seo">
                <div class="am-panel-hd">
                    <h3 class="am-panel-title">SEO信息<span class="am-form-group-label-tips">选填</span></h3>
                </div>
                <div class="am-panel-bd am-padding-vertical-xs">
                    <div class="am-form-group">
    <label>SEO标题<span class="am-form-group-label-tips">一般不超过80个字符</span></label>
    <input type="text" name="seo_title" placeholder="SEO标题" maxlength="100" data-validation-message="SEO标题格式 最多80个字符" class="am-radius" <?php if(!empty($data['seo_title'])): ?> value="<?php echo htmlentities($data['seo_title']); ?>"<?php endif; ?> />
</div>
<div class="am-form-group">
    <label>SEO关键字<span class="am-form-group-label-tips">一般不超过100个字符，多个关键字以半圆角逗号 [ , ] 隔开</span></label>
    <input type="text" name="seo_keywords" placeholder="SEO关键字" maxlength="130" data-validation-message="SEO关键字格式 最多130个字符" class="am-radius" <?php if(!empty($data['seo_keywords'])): ?> value="<?php echo htmlentities($data['seo_keywords']); ?>"<?php endif; ?> />
</div>
<div class="am-form-group">
    <label>SEO描述<span class="am-form-group-label-tips">一般不超过200个字符</span></label>
    <textarea rows="4" name="seo_desc" maxlength="230" class="am-radius" placeholder="SEO描述" data-validation-message="SEO描述格式 最多230个字符"><?php if(!empty($data['seo_desc'])): ?><?php echo htmlentities($data['seo_desc']); ?><?php endif; ?></textarea>
</div>
                </div>
            </div>

			<div class="am-form-group am-form-group-refreshing am-margin-top-lg am-padding-left-0">
				<input type="hidden" name="id" <?php if(isset($data) and !empty($data['id']) and (!isset($is_copy) or $is_copy != 1)): ?> value="<?php echo htmlentities($data['id']); ?>"<?php endif; ?> />
				<button type="submit" class="am-btn am-btn-primary am-radius btn-loading-example am-btn-sm am-btn-block" data-am-loading="{loadingText:'处理中...'}">保存</button>
			</div>
		</form>
        <!-- form end -->
	</div>
</div>
<!-- right content end  -->

<!-- 规格扩展数据弹层 -->
<div class="am-popup" id="specifications-extends-popup">
    <div class="am-popup-inner">
        <div class="am-popup-hd">
            <h4 class="am-popup-title">规格扩展数据</h4>
            <span data-am-modal-close class="am-close">&times;</span>
        </div>
        <div class="am-popup-bd">
            <form class="am-form form-validation-specifications-extends view-save" request-type="sync" request-value="SpecificationsExtendsBack">
                <?php if(!empty($goods_specifications_extends) and is_array($goods_specifications_extends)): foreach($goods_specifications_extends as $v): ?>
                        <div class="am-alert am-alert-secondary">
                            <label class="am-text-sm"><?php echo htmlentities($v['name']); ?></label>
                            <?php if(!empty($v['desc'])): ?>
                                <span class="am-text-xs am-text-warning am-margin-left-xs"><?php echo htmlentities($v['desc']); ?></span>
                            <?php endif; if(!empty($v['tips'])): ?>
                                <div class="am-alert am-alert-warning am-margin-0" data-am-alert>
                                    <button type="button" class="am-close">&times;</button>
                                    <p><?php echo $v['tips']; ?></p>
                                </div>
                            <?php endif; if(!empty($v['element'])): foreach($v['element'] as $element): if(!empty($element['name'])): ?>
                                        <div class="am-form-group">
                                            <?php if(!empty($element['title']) or !empty($element['desc'])): ?>
                                                <label class="block">
                                                    <?php if(!empty($element['title'])): ?>
                                                        <?php echo htmlentities($element['title']); ?>
                                                    <?php endif; if(!empty($element['desc'])): ?>
                                                        <span class="am-form-group-label-tips"><?php echo htmlentities($element['desc']); ?></span>
                                                    <?php endif; ?>
                                                </label>
                                            <?php endif; switch($element['element']): case "input": if(isset($element['type'])): if(in_array($element['type'], ['radio', 'checkbox']) and !empty($element['element_data']) and is_array($element['element_data'])): foreach($element['element_data'] as $element_data_key=>$element_data): ?>
                                                                <label class="<?php if(isset($element['is_block']) and $element['is_block'] == 1): ?>am-<?php echo htmlentities($element['type']); else: ?>am-<?php echo htmlentities($element['type']); ?>-inline<?php endif; ?>">
                                                                    <input
                                                                        type="<?php echo htmlentities($element['type']); ?>"
                                                                        name="<?php echo htmlentities($element['name']); ?>"
                                                                        value="<?php echo htmlentities($element_data['value']); ?>"

                                                                        <?php if(isset($data['config'][$element['name']]) and in_array($element_data['value'], explode(',', $data['config'][$element['name']]))): ?> checked<?php endif; if(isset($element['minchecked']) and $element['type'] == 'checkbox'): ?> minchecked="<?php echo htmlentities($element['minchecked']); ?>"<?php endif; if(isset($element['maxchecked']) and $element['type'] == 'checkbox'): ?> maxchecked="<?php echo htmlentities($element['maxchecked']); ?>"<?php endif; if(isset($element['message'])): ?> data-validation-message="<?php echo htmlentities($element['message']); ?>"<?php endif; if($element_data_key == 0 and isset($element['is_required']) and $element['is_required'] == 1): ?>required<?php endif; ?>
                                                                        data-am-ucheck />
                                                                        <?php echo htmlentities($element_data['name']); ?>
                                                                </label>
                                                            <?php endforeach; else: ?>
                                                            <input
                                                                class="am-radius"
                                                                type="<?php echo htmlentities($element['type']); ?>"
                                                                name="<?php echo htmlentities($element['name']); ?>"
                                                                value="<?php if(isset($data['config'][$element['name']])): ?><?php echo htmlentities($data['config'][$element['name']]); else: if(isset($element['default'])): ?><?php echo htmlentities($element['default']); ?><?php endif; ?><?php endif; ?>"

                                                                <?php if(isset($element['placeholder'])): ?> placeholder="<?php echo htmlentities($element['placeholder']); ?>"<?php endif; if(isset($element['message'])): ?> data-validation-message="<?php echo htmlentities($element['message']); ?>"<?php endif; if(isset($element['is_required']) and $element['is_required'] == 1): ?> required<?php endif; ?>
                                                                />
                                                        <?php endif; else: ?>
                                                        <p class="am-text-danger">element input-type 配置有误</p>
                                                    <?php endif; break; case "select": if(!empty($element['element_data']) and is_array($element['element_data'])): ?>
                                                        <select
                                                            class="chosen-select am-radius"
                                                            name="<?php echo htmlentities($element['name']); ?>"

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
                                                        name="<?php echo htmlentities($element['name']); ?>"

                                                        <?php if(isset($element['rows'])): ?> rows="<?php echo htmlentities($element['rows']); ?>"<?php endif; if(isset($element['placeholder'])): ?> placeholder="<?php echo htmlentities($element['placeholder']); ?>"<?php endif; if(isset($element['is_required']) and $element['is_required'] == 1): if(isset($element['minlength'])): ?> minlength="<?php echo htmlentities($element['minlength']); ?>"<?php endif; if(isset($element['maxlength'])): ?> maxlength="<?php echo htmlentities($element['maxlength']); ?>"<?php endif; ?>
                                                            required
                                                        <?php endif; ?>
                                                    ><?php if(isset($data['config'][$element['name']])): ?><?php echo htmlentities($data['config'][$element['name']]); else: if(isset($element['default'])): ?><?php echo htmlentities($element['default']); ?><?php endif; ?><?php endif; ?></textarea>
                                                <?php break; ?>
                                            <?php endswitch; ?>
                                        </div>
                                    <?php else: ?>
                                        <p class="am-text-danger">element form-name 配置有误</p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>

                    <div class="am-form-group am-form-group-refreshing am-margin-top-lg am-padding-left-0">
                        <button type="submit" class="am-btn am-btn-primary am-radius btn-loading-example am-btn-sm am-btn-block am-margin-bottom-sm">确认</button>
                    </div>
                <?php else: ?>
                    <div class="table-no"><i class="am-icon-warning"></i> 没有相关数据</div>
                <?php endif; ?>
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

<script type="text/javascript">
// 规格扩展返回处理
function SpecificationsExtendsBack(data)
{
	var $extends_popup = $('#specifications-extends-popup');
    $('.specifications-table').find($extends_popup.attr('data-line-extend')).find('.line-extend-input').val(JSON.stringify(data));
    $extends_popup.modal('close');
}
</script>