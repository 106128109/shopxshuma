<?php /*a:5:{s:71:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/index/init.html";i:1665913498;s:74:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/header.html";i:1665913498;s:80:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/page_loading.html";i:1665913498;s:78:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/index/stats_where.html";i:1665913498;s:74:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/footer.html";i:1665913498;}*/ ?>
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
<div class="content-right" data-url="<?php echo MyUrl('admin/index/stats'); ?>">
	<div class="content">
		<!-- 顶部钩子 -->
		<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
		    <div class="plugins-tag">
		        <span>plugins_admin_view_index_init_top</span>
		    </div>


			<!-- 顶部基础信息 -->
			<div class="block-container base-content-top am-nbfc">
				<div class="am-fl am-nbfc left-content">
					<!-- 帐号信息 -->


					<!-- 广告 -->
					<?php if(!empty($site_store_info) and !empty($site_store_info['adverts']) and !empty($site_store_info['adverts']['name'])): ?>
						<a class="am-margin-left-sm am-text-danger ad-content <?php if(!empty($site_store_info['adverts']['icon'])): ?><?php echo htmlentities($site_store_info['adverts']['icon']); ?><?php endif; ?>" <?php if(empty($site_store_info['adverts']['url'])): ?>href="javascript:;"<?php else: ?>href="<?php echo htmlentities($site_store_info['adverts']['url']); ?>" target="_blank"<?php endif; ?>> <?php echo htmlentities($site_store_info['adverts']['name']); ?></a>
					<?php endif; ?>
				</div>
				<div class="am-fr am-nbfc right-content">
					<!-- VIP授权信息 -->



				</div>
			</div>
		<?php endif; ?>

		<!-- 公告顶部钩子 -->
		<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
		    <div class="plugins-tag">
		        <span>plugins_admin_view_index_init_notice_top</span>
		    </div>
		<?php endif; if(!empty($plugins_admin_view_index_init_notice_top_data) and is_array($plugins_admin_view_index_init_notice_top_data)): foreach($plugins_admin_view_index_init_notice_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
		            <?php echo $hook; ?>
		        <?php endif; ?>
		    <?php endforeach; ?>
		<?php endif; ?>

		<!-- 后台公告 -->
		<?php if(!empty($admin_notice)): ?>
			<div class="am-alert am-alert-danger" data-am-alert>
				<button type="button" class="am-close">&times;</button>
				<p><?php echo $admin_notice; ?></p>
			</div>
		<?php endif; ?>

		<!-- 基础统计基础顶部钩子 -->
		<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
		    <div class="plugins-tag">
		        <span>plugins_admin_view_index_init_stats_base_top</span>
		    </div>
		<?php endif; if(!empty($plugins_admin_view_index_init_stats_base_top_data) and is_array($plugins_admin_view_index_init_stats_base_top_data)): foreach($plugins_admin_view_index_init_stats_base_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
		            <?php echo $hook; ?>
		        <?php endif; ?>
		    <?php endforeach; ?>
		<?php endif; ?>

		<!-- 是否展示统计数据 -->
		<?php if(isset($is_stats) and $is_stats == 1): ?>
			<!-- 基础统计内部顶部钩子 -->
			<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
			    <div class="plugins-tag">
			        <span>plugins_admin_view_index_init_stats_inside_base_top</span>
			    </div>
			<?php endif; if(!empty($plugins_admin_view_index_init_stats_inside_base_top_data) and is_array($plugins_admin_view_index_init_stats_inside_base_top_data)): foreach($plugins_admin_view_index_init_stats_inside_base_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
			            <?php echo $hook; ?>
			        <?php endif; ?>
			    <?php endforeach; ?>
			<?php endif; ?>

			<!-- 基础统计 -->
			<div class="block-container shopxo-base">
				<div class="block-title echarts-title">
					<span class="icon"></span>
					<span class="title">商城统计</span>
					<a href="javascript:;" class="am-icon-question-circle am-text-warning" data-am-popover="{content: '时间筛选仅对总数有效', trigger: 'hover focus', theme: 'sm'}"></a>
					<div class="am-fr right-operate" data-type="base-count" data-empty-time="1">
					    <?php if(!empty($time_data)): ?>
					        <span class="quick-time">
					            <?php foreach($time_data as $k=>$v): if(!in_array($k, ['this-month', 'last-month'])): ?>
					                	<a href="javascript:;" data-start="<?php echo htmlentities($v['start']); ?>" data-end="<?php echo htmlentities($v['end']); ?>"><?php echo htmlentities($v['name']); ?></a>
					            	<?php endif; ?>
					            <?php endforeach; ?>
					            <a href="javascript:;" data-start="" data-end="">全部</a>
					        </span>
					    <?php endif; ?>
					    <span class="am-form echarts-where">
    <input type="text" autocomplete="off" name="time_start" class="Wdate am-radius" placeholder="开始时间" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php if(!empty($time_data) and !empty($default_day) and isset($time_data[$default_day])): ?><?php echo htmlentities($time_data[$default_day]['start']); ?><?php endif; ?>" />
    <span class="join">-</span>
    <input type="text" autocomplete="off" class="Wdate am-radius" placeholder="结束时间" name="time_end" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php if(!empty($time_data) and !empty($default_day) and isset($time_data[$default_day])): ?><?php echo htmlentities($time_data[$default_day]['end']); ?><?php endif; ?>" />
    <button type="button" class="am-btn am-btn-secondary am-radius am-btn-xs am-icon-line-chart btn-loading-example echarts-where-submit" data-am-loading="{loadingText:' 加载'}"> 确认</button>
</span>
					</div>
				</div>
				<ul class="<?php if(isset($is_income) and $is_income == true): ?>am-avg-sm-2 am-avg-lg-4<?php else: ?>am-avg-sm-1 am-avg-lg-3<?php endif; ?>">
					<li>
						<div class="li-content">
							<p class="name">用户总量</p>
							<p class="total animation-count-to base-user-count" data-to="<?php echo htmlentities($base_count['user_count']); ?>" data-speed="1500">0</p>
							<div class="item am-margin-bottom-xs">
								<span>上月</span>
								<span class="animation-count-to" data-to="<?php echo htmlentities($user['last_month_count']); ?>" data-speed="1500">0</span>
							</div>
							<div class="item am-margin-bottom-xs">
								<span>当月</span>
								<span class="animation-count-to" data-to="<?php echo htmlentities($user['same_month_count']); ?>" data-speed="1500">0</span>
							</div>
							<div class="item am-margin-bottom-xs">
								<span>昨日</span>
								<span class="animation-count-to" data-to="<?php echo htmlentities($user['yesterday_count']); ?>" data-speed="1500">0</span>
							</div>
							<div class="item">
								<span>今日</span>
								<span class="animation-count-to" data-to="<?php echo htmlentities($user['today_count']); ?>" data-speed="1500">0</span>
							</div>
							<i class="am-icon-user am-icon-lg bg-icon"></i>
						</div>
					</li>
					<li>
						<div class="li-content">
							<p class="name">订单总量</p>
							<p class="total animation-count-to base-order-count" data-to="<?php echo htmlentities($base_count['order_count']); ?>" data-speed="1500">0</p>
							<div class="item am-margin-bottom-xs">
								<span>上月</span>
								<span class="animation-count-to" data-to="<?php echo htmlentities($order_number['last_month_count']); ?>" data-speed="1500">0</span>
							</div>
							<div class="item am-margin-bottom-xs">
								<span>当月</span>
								<span class="animation-count-to" data-to="<?php echo htmlentities($order_number['same_month_count']); ?>" data-speed="1500">0</span>
							</div>
							<div class="item am-margin-bottom-xs">
								<span>昨日</span>
								<span class="animation-count-to" data-to="<?php echo htmlentities($order_number['yesterday_count']); ?>" data-speed="1500">0</span>
							</div>
							<div class="item">
								<span>今日</span>
								<span class="animation-count-to" data-to="<?php echo htmlentities($order_number['today_count']); ?>" data-speed="1500">0</span>
							</div>
							<i class="am-icon-pie-chart am-icon-lg bg-icon"></i>
						</div>
					</li>
					<li>
						<div class="li-content">
							<p class="name">成交总量</p>
							<p class="total animation-count-to base-order-sale-count" data-to="<?php echo htmlentities($base_count['order_sale_count']); ?>" data-speed="1500">0</p>
							<div class="item am-margin-bottom-xs">
								<span>上月</span>
								<span class="animation-count-to" data-to="<?php echo htmlentities($order_complete_number['last_month_count']); ?>" data-speed="1500">0</span>
							</div>
							<div class="item am-margin-bottom-xs">
								<span>当月</span>
								<span class="animation-count-to" data-to="<?php echo htmlentities($order_complete_number['same_month_count']); ?>" data-speed="1500">0</span>
							</div>
							<div class="item am-margin-bottom-xs">
								<span>昨日</span>
								<span class="animation-count-to" data-to="<?php echo htmlentities($order_complete_number['yesterday_count']); ?>" data-speed="1500">0</span>
							</div>
							<div class="item">
								<span>今日</span>
								<span class="animation-count-to" data-to="<?php echo htmlentities($order_complete_number['today_count']); ?>" data-speed="1500">0</span>
							</div>
							<i class="am-icon-gg am-icon-lg bg-icon"></i>
						</div>
					</li>
					<!-- 收入统计权限判断 -->
					<?php if(isset($is_income) and $is_income == true): ?>
						<li>
							<div class="li-content">
								<p class="name">订单总计</p>
								<p class="total animation-count-to base-order-complete-total" data-to="<?php echo htmlentities($base_count['order_complete_total']); ?>" data-speed="1500" data-decimals="2">0.00</p>
								<div class="item am-margin-bottom-xs">
									<span>上月</span>
									<span class="animation-count-to" data-to="<?php echo htmlentities($order_complete_money['last_month_count']); ?>" data-speed="1500">0</span>
								</div>
								<div class="item am-margin-bottom-xs">
									<span>当月</span>
									<span class="animation-count-to" data-to="<?php echo htmlentities($order_complete_money['same_month_count']); ?>" data-speed="1500">0</span>
								</div>
								<div class="item am-margin-bottom-xs">
									<span>昨日</span>
									<span class="animation-count-to" data-to="<?php echo htmlentities($order_complete_money['yesterday_count']); ?>" data-speed="1500" data-decimals="2">0.00</span>
								</div>
								<div class="item">
									<span>今日</span>
									<span class="animation-count-to" data-to="<?php echo htmlentities($order_complete_money['today_count']); ?>" data-speed="1500" data-decimals="2">0.00</span>
								</div>
								<i class="am-icon-line-chart am-icon-lg bg-icon"></i>
							</div>
						</li>
					<?php endif; ?>
				</ul>
			</div>

			<!-- 订单金额走势统计内部顶部钩子 -->
			<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
			    <div class="plugins-tag">
			        <span>plugins_admin_view_index_init_stats_inside_amount_trend_top</span>
			    </div>
			<?php endif; if(!empty($plugins_admin_view_index_init_stats_inside_amount_trend_top_data) and is_array($plugins_admin_view_index_init_stats_inside_amount_trend_top_data)): foreach($plugins_admin_view_index_init_stats_inside_amount_trend_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
			            <?php echo $hook; ?>
			        <?php endif; ?>
			    <?php endforeach; ?>
			<?php endif; ?>

			<!-- 订单成交金额走势，收入统计权限判断-->
			<?php if(isset($is_income) and $is_income == true): ?>
				<div class="block-container">
					<div class="block-title echarts-title">
						<span class="icon"></span>
						<span class="title">订单成交金额走势</span>
						<a href="javascript:;" class="am-icon-question-circle am-text-warning" data-am-popover="{content: '所有订单', trigger: 'hover focus', theme: 'sm'}"></a>
						<div class="am-fr right-operate" data-type="order-profit" data-init="1">
						    <?php if(!empty($time_data)): ?>
						        <span class="quick-time">
						            <?php foreach($time_data as $k=>$v): ?>
						                <a href="javascript:;" data-start="<?php echo htmlentities($v['start']); ?>" data-end="<?php echo htmlentities($v['end']); ?>"><?php echo htmlentities($v['name']); ?></a>
						            <?php endforeach; ?>
						        </span>
						    <?php endif; ?>
						    <span class="am-form echarts-where">
    <input type="text" autocomplete="off" name="time_start" class="Wdate am-radius" placeholder="开始时间" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php if(!empty($time_data) and !empty($default_day) and isset($time_data[$default_day])): ?><?php echo htmlentities($time_data[$default_day]['start']); ?><?php endif; ?>" />
    <span class="join">-</span>
    <input type="text" autocomplete="off" class="Wdate am-radius" placeholder="结束时间" name="time_end" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php if(!empty($time_data) and !empty($default_day) and isset($time_data[$default_day])): ?><?php echo htmlentities($time_data[$default_day]['end']); ?><?php endif; ?>" />
    <button type="button" class="am-btn am-btn-secondary am-radius am-btn-xs am-icon-line-chart btn-loading-example echarts-where-submit" data-am-loading="{loadingText:' 加载'}"> 确认</button>
</span>
						</div>
					</div>
					<div id="echarts-order-profit"></div>
				</div>
			<?php endif; ?>

			<!-- 订单交易走势统计内部顶部钩子 -->
			<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
			    <div class="plugins-tag">
			        <span>plugins_admin_view_index_init_stats_inside_order_trading_top</span>
			    </div>
			<?php endif; if(!empty($plugins_admin_view_index_init_stats_inside_order_trading_top_data) and is_array($plugins_admin_view_index_init_stats_inside_order_trading_top_data)): foreach($plugins_admin_view_index_init_stats_inside_order_trading_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
			            <?php echo $hook; ?>
			        <?php endif; ?>
			    <?php endforeach; ?>
			<?php endif; ?>

			<!-- 订单交易走势 -->
			<div class="block-container">
				<div class="block-title echarts-title">
					<span class="icon"></span>
					<span class="title">订单交易走势</span>
					<a href="javascript:;" class="am-icon-question-circle am-text-warning" data-am-popover="{content: '所有订单', trigger: 'hover focus', theme: 'sm'}"></a>
					<div class="am-fr right-operate" data-type="order-trading" data-init="1">
					    <?php if(!empty($time_data)): ?>
					        <span class="quick-time">
					            <?php foreach($time_data as $k=>$v): ?>
					                <a href="javascript:;" data-start="<?php echo htmlentities($v['start']); ?>" data-end="<?php echo htmlentities($v['end']); ?>"><?php echo htmlentities($v['name']); ?></a>
					            <?php endforeach; ?>
					        </span>
					    <?php endif; ?>
					    <span class="am-form echarts-where">
    <input type="text" autocomplete="off" name="time_start" class="Wdate am-radius" placeholder="开始时间" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php if(!empty($time_data) and !empty($default_day) and isset($time_data[$default_day])): ?><?php echo htmlentities($time_data[$default_day]['start']); ?><?php endif; ?>" />
    <span class="join">-</span>
    <input type="text" autocomplete="off" class="Wdate am-radius" placeholder="结束时间" name="time_end" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php if(!empty($time_data) and !empty($default_day) and isset($time_data[$default_day])): ?><?php echo htmlentities($time_data[$default_day]['end']); ?><?php endif; ?>" />
    <button type="button" class="am-btn am-btn-secondary am-radius am-btn-xs am-icon-line-chart btn-loading-example echarts-where-submit" data-am-loading="{loadingText:' 加载'}"> 确认</button>
</span>
					</div>
				</div>
				<div id="echarts-order-trading"></div>
			</div>

			<!-- 组合商品和支付统计内部顶部钩子 -->
			<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
			    <div class="plugins-tag">
			        <span>plugins_admin_view_index_init_stats_inside_compose_top</span>
			    </div>
			<?php endif; if(!empty($plugins_admin_view_index_init_stats_inside_compose_top_data) and is_array($plugins_admin_view_index_init_stats_inside_compose_top_data)): foreach($plugins_admin_view_index_init_stats_inside_compose_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
			            <?php echo $hook; ?>
			        <?php endif; ?>
			    <?php endforeach; ?>
			<?php endif; ?>

			<!-- 组合 -->
			<ul class="am-avg-sm-1 am-avg-sm-2 am-avg-lg-2 block-combination-container-2">
				<li>
					<!-- 热销商品 -->
					<div class="block-title echarts-title">
						<span class="icon"></span>
						<span class="title">热销商品</span>
						<a href="javascript:;" class="am-icon-question-circle am-text-warning" data-am-popover="{content: '不含取消关闭的订单', trigger: 'hover focus', theme: 'sm'}"></a>
						<div class="am-fr right-operate" data-type="goods-hot" data-init="1" data-empty-time="1">
						    <?php if(!empty($time_data)): ?>
						        <span class="quick-time">
						            <?php foreach($time_data as $k=>$v): ?>
						                <a href="javascript:;" data-start="<?php echo htmlentities($v['start']); ?>" data-end="<?php echo htmlentities($v['end']); ?>"><?php echo htmlentities($v['name']); ?></a>
						            <?php endforeach; ?>
						            <a href="javascript:;" data-start="" data-end="">全部</a>
						        </span>
						    <?php endif; ?>
						    <span class="am-form echarts-where">
    <input type="text" autocomplete="off" name="time_start" class="Wdate am-radius" placeholder="开始时间" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php if(!empty($time_data) and !empty($default_day) and isset($time_data[$default_day])): ?><?php echo htmlentities($time_data[$default_day]['start']); ?><?php endif; ?>" />
    <span class="join">-</span>
    <input type="text" autocomplete="off" class="Wdate am-radius" placeholder="结束时间" name="time_end" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php if(!empty($time_data) and !empty($default_day) and isset($time_data[$default_day])): ?><?php echo htmlentities($time_data[$default_day]['end']); ?><?php endif; ?>" />
    <button type="button" class="am-btn am-btn-secondary am-radius am-btn-xs am-icon-line-chart btn-loading-example echarts-where-submit" data-am-loading="{loadingText:' 加载'}"> 确认</button>
</span>
						</div>
					</div>
					<div id="echarts-goods-hot"></div>
				</li>

				<li>
					<!-- 支付方式 -->
					<div class="block-title echarts-title">
						<span class="icon"></span>
						<span class="title">支付方式</span>
						<a href="javascript:;" class="am-icon-question-circle am-text-warning" data-am-popover="{content: '所有订单', trigger: 'hover focus', theme: 'sm'}"></a>
						<div class="am-fr right-operate" data-type="pay-type" data-init="1">
						    <?php if(!empty($time_data)): ?>
						        <span class="quick-time">
						            <?php foreach($time_data as $k=>$v): ?>
						                <a href="javascript:;" data-start="<?php echo htmlentities($v['start']); ?>" data-end="<?php echo htmlentities($v['end']); ?>"><?php echo htmlentities($v['name']); ?></a>
						            <?php endforeach; ?>
						        </span>
						    <?php endif; ?>
						    <span class="am-form echarts-where">
    <input type="text" autocomplete="off" name="time_start" class="Wdate am-radius" placeholder="开始时间" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php if(!empty($time_data) and !empty($default_day) and isset($time_data[$default_day])): ?><?php echo htmlentities($time_data[$default_day]['start']); ?><?php endif; ?>" />
    <span class="join">-</span>
    <input type="text" autocomplete="off" class="Wdate am-radius" placeholder="结束时间" name="time_end" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php if(!empty($time_data) and !empty($default_day) and isset($time_data[$default_day])): ?><?php echo htmlentities($time_data[$default_day]['end']); ?><?php endif; ?>" />
    <button type="button" class="am-btn am-btn-secondary am-radius am-btn-xs am-icon-line-chart btn-loading-example echarts-where-submit" data-am-loading="{loadingText:' 加载'}"> 确认</button>
</span>
						</div>
					</div>
					<div id="echarts-pay-type"></div>
				</li>
			</ul>

			<!-- 地域分布统计内部顶部钩子 -->
			<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
			    <div class="plugins-tag">
			        <span>plugins_admin_view_index_init_stats_inside_region_top</span>
			    </div>
			<?php endif; if(!empty($plugins_admin_view_index_init_stats_inside_region_top_data) and is_array($plugins_admin_view_index_init_stats_inside_region_top_data)): foreach($plugins_admin_view_index_init_stats_inside_region_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
			            <?php echo $hook; ?>
			        <?php endif; ?>
			    <?php endforeach; ?>
			<?php endif; ?>

			<!-- 订单地域分布 -->
			<div class="am-nbfc <?php if($is_system_show_base == 0): ?>am-padding-bottom-sm<?php endif; ?>">
				<div class="block-container <?php if($is_system_show_base == 0): ?>am-margin-bottom-0<?php endif; ?>">
					<div class="block-title echarts-title">
						<span class="icon"></span>
						<span class="title">订单地域分布</span>
						<a href="javascript:;" class="am-icon-question-circle am-text-warning" data-am-popover="{content: '不含取消关闭的订单、默认维度（省）', trigger: 'hover focus', theme: 'sm'}"></a>
						<select name="value" data-am-selected="{btnWidth: '50px', btnSize: 'xs'}">
							<option value="0" selected>省</option>
							<option value="1">市</option>
							<option value="2">区/县</option>
						</select>
						<div class="am-fr right-operate" data-type="order-whole-country" data-init="1" data-empty-time="1">
						    <?php if(!empty($time_data)): ?>
						        <span class="quick-time">
						            <?php foreach($time_data as $k=>$v): ?>
						                <a href="javascript:;" data-start="<?php echo htmlentities($v['start']); ?>" data-end="<?php echo htmlentities($v['end']); ?>"><?php echo htmlentities($v['name']); ?></a>
						            <?php endforeach; ?>
						            <a href="javascript:;" data-start="" data-end="">全部</a>
						        </span>
						    <?php endif; ?>
						    <span class="am-form echarts-where">
    <input type="text" autocomplete="off" name="time_start" class="Wdate am-radius" placeholder="开始时间" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php if(!empty($time_data) and !empty($default_day) and isset($time_data[$default_day])): ?><?php echo htmlentities($time_data[$default_day]['start']); ?><?php endif; ?>" />
    <span class="join">-</span>
    <input type="text" autocomplete="off" class="Wdate am-radius" placeholder="结束时间" name="time_end" onclick="WdatePicker({firstDayOfWeek:1,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php if(!empty($time_data) and !empty($default_day) and isset($time_data[$default_day])): ?><?php echo htmlentities($time_data[$default_day]['end']); ?><?php endif; ?>" />
    <button type="button" class="am-btn am-btn-secondary am-radius am-btn-xs am-icon-line-chart btn-loading-example echarts-where-submit" data-am-loading="{loadingText:' 加载'}"> 确认</button>
</span>
						</div>
					</div>
					<div id="echarts-map-whole-country"></div>
				</div>
			</div>
		<?php endif; ?>

		<!-- 系统信息顶部钩子 -->
		<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
		    <div class="plugins-tag">
		        <span>plugins_admin_view_index_init_system_info_top</span>
		    </div>
		<?php endif; if(!empty($plugins_admin_view_index_init_system_info_top_data) and is_array($plugins_admin_view_index_init_system_info_top_data)): foreach($plugins_admin_view_index_init_system_info_top_data as $hook): if(is_string($hook) or is_int($hook)): ?>
		            <?php echo $hook; ?>
		        <?php endif; ?>
		    <?php endforeach; ?>
		<?php endif; ?>





		<!-- 底部钩子 -->
		<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
		    <div class="plugins-tag">
		        <span>plugins_admin_view_index_init_bottom</span>
		    </div>
		<?php endif; if(!empty($plugins_admin_view_index_init_bottom_data) and is_array($plugins_admin_view_index_init_bottom_data)): foreach($plugins_admin_view_index_init_bottom_data as $hook): if(is_string($hook) or is_int($hook)): ?>
		            <?php echo $hook; ?>
		        <?php endif; ?>
		    <?php endforeach; ?>
		<?php endif; ?>
	</div>
</div>
<!-- right content end  -->

<!-- 检查更新显示信息 -->
<div class="am-popup popup-not-title" id="inspect-upgrade-popup">
    <div class="am-popup-inner">
        <span data-am-modal-close class="am-close am-close-alt am-icon-times"></span>
        <div class="am-popup-bd">
        	<div class="upgrade-content"></div>
			<div class="upgrade-bottom am-text-right">
				<div class="upgrade-bottom-content">
					<button type="button" class="am-btn am-btn-default am-radius am-btn-xs" data-am-modal-close>取消</button>
					<button type="button" class="am-btn am-btn-success am-radius am-btn-xs am-margin-left-sm am-hide inspect-upgrade-confirm" data-url="<?php echo MyUrl('admin/index/inspectupgradeconfirm'); ?>">立即更新</button>
				</div>
			</div>
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