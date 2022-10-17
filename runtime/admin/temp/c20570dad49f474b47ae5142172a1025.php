<?php /*a:4:{s:77:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/admin/login_info.html";i:1665913498;s:74:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/header.html";i:1665913498;s:80:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/page_loading.html";i:1665913498;s:74:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/public/footer.html";i:1665913498;}*/ ?>
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

<!-- content start -->
<div class="account-pages">
	<div class="wrapper-page">
		<div class="am-text-center">
            <span class="logo"><?php echo htmlentities($admin_theme_site_name); ?></span>
        </div>
        <div class="am-margin-top-lg am-nbfc admin-login">
        	<?php if(count($admin_login_type) > 0): ?>
                <div data-am-widget="tabs" class="am-tabs am-tabs-d2 am-margin-0" data-am-tabs="{noSwipe: 1}">
                    <?php if(count($admin_login_type) > 1): ?>
                        <ul class="am-tabs-nav am-cf">
                            <?php if(in_array('username', $admin_login_type)): ?>
                                <li class="am-active"><a href="[data-tab-panel-0]">帐号密码</a></li>
                            <?php endif; if(in_array('email', $admin_login_type)): ?>
                                <li class="<?php if(!in_array('username', $admin_login_type)): ?>am-active<?php endif; ?>"><a href="[data-tab-panel-2]">邮箱验证码</a></li>
                            <?php endif; if(in_array('sms', $admin_login_type)): ?>
                                <li class="<?php if(!in_array('username', $admin_login_type) and !in_array('email', $admin_login_type)): ?>am-active<?php endif; ?>"><a href="[data-tab-panel-1]">手机验证码</a></li>
                            <?php endif; ?>
                        </ul>
                    <?php endif; ?>
                    <div class="am-tabs-bd am-padding-bottom-sm">
                        <?php if(in_array('username', $admin_login_type)): ?>
                            <div data-tab-panel-0 class="am-tab-panel am-active">
                                <!-- form start -->
                                <form class="am-form form-validation-username" method="post" action="<?php echo MyUrl('admin/admin/login'); ?>" request-type="ajax-url" request-value="<?php echo MyUrl('admin/index/index'); ?>">
                                    <div class="am-form-group am-form-group-refreshing">
                                        <label>用户名</label>
                                        <input type="text" name="accounts" class="am-radius" placeholder="请输入用户名" pattern="<?php echo MyConst('common_regex_username'); ?>" data-validation-message="用户名格式 5~18 个字符（可以是字母数字下划线）" autocomplete="off" required />
                                    </div>

                                    <div class="am-form-group am-form-group-refreshing business-form-block am-margin-top-xs">
                                        <label>登录密码</label>
                                        <div class="am-input-group am-input-group-sm">
                                            <input type="password" name="pwd" class="am-radius" placeholder="请输入登录密码" pattern="<?php echo MyConst('common_regex_pwd'); ?>" data-validation-message="密码格式 6~18 个字符" autocomplete="off" required />
                                            <span class="am-input-group-btn">
                                                <button class="am-btn am-btn-default am-radius am-icon-eye eye-submit" type="button"></button>
                                            </span>
                                        </div>
                                    </div>

                                    <?php if(MyC('admin_login_img_verify_state') == 1): ?>
                                        <div class="am-form-group am-form-group-refreshing business-form-block am-margin-top-xs">
                                            <label>验证码</label>
                                            <div class="am-input-group am-input-group-sm">
                                                <input type="text" name="verify" class="am-radius" placeholder="请输入验证码" minlength="4" maxlength="4" data-validation-message="请输入图片验证码" autocomplete="off" required />
                                                <span class="am-input-group-btn">
                                                    <span class="am-btn am-btn-default am-radius am-padding-0 form-verify">
                                                        <img src="<?php echo MyUrl('admin/admin/adminverifyentry'); ?>" class="am-radius c-p" id="form-verify-img" onClick="this.src=this.src+'&'+Math.random();" />
                                                        <a href="javascript:;" class="form-verify-tips" onClick="document.getElementById('form-verify-img').src='<?php echo MyUrl('admin/admin/adminverifyentry'); ?>&'+Math.random();">更换一张</a>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <div class="am-form-group am-form-group-refreshing am-margin-top-lg">
                                        <input type="hidden" name="type" value="username" />
                                        <button type="submit" class="am-btn am-btn-primary am-btn-block am-radius am-btn-sm btn-loading-example" data-am-loading="{loadingText: '登录中...'}">登录</button>
                                    </div>
                                </form>
                                <!-- form end -->
                            </div>
                        <?php endif; if(in_array('email', $admin_login_type)): ?>
                            <div data-tab-panel-2 class="am-tab-panel <?php if(!in_array('username', $admin_login_type)): ?>am-active<?php endif; ?>">
                                <!-- form start -->
                                <form class="am-form form-validation-email" method="post" action="<?php echo MyUrl('admin/admin/login'); ?>" request-type="ajax-url" request-value="<?php echo MyUrl('admin/index/index'); ?>">
                                    <div class="am-form-group am-form-group-refreshing">
                                        <label>电子邮箱</label>
                                        <input type="email" name="accounts" class="am-radius" placeholder="请输入电子邮箱" data-validation-message="电子邮箱格式错误" autocomplete="off" required />
                                    </div>

                                    <div class="am-form-group am-form-group-refreshing business-form-block am-margin-top-xs">
                                        <label>验证码</label>
                                        <div class="am-input-group am-input-group-sm">
                                            <input type="number" name="verify" class="am-radius" placeholder="验证码" min="0" minlength="4" maxlength="4" data-validation-message="验证码格式 4 位数字" autocomplete="off" required />
                                            <span class="am-input-group-btn">
                                                <button class="am-btn am-btn-default am-radius btn-loading-example verify-submit" type="button" data-am-loading="{spinner:'circle-o-notch', loadingText:'发送中...'}" data-url="<?php echo MyUrl('admin/admin/loginverifysend'); ?>" data-verify="<?php echo MyC('common_img_verify_state'); ?>" data-text="获取验证码" data-send-text="还有 {time} 秒" data-time="<?php echo MyC('common_verify_interval_time', 30, true); ?>" data-form-tag="form.form-validation-email">获取验证码</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="am-form-group am-form-group-refreshing am-margin-top-lg">
                                        <input type="hidden" name="type" value="email" />
                                        <button type="submit" class="am-btn am-btn-primary am-btn-block am-radius am-btn-sm btn-loading-example" data-am-loading="{loadingText: '登录中...'}">登录</button>
                                    </div>
                                </form>
                                <!-- form end -->
                            </div>
                        <?php endif; if(in_array('sms', $admin_login_type)): ?>
                            <div data-tab-panel-1 class="am-tab-panel <?php if(!in_array('username', $admin_login_type) and !in_array('email', $admin_login_type)): ?>am-active<?php endif; ?>">
                                <!-- form start -->
                                <form class="am-form form-validation-sms" method="post" action="<?php echo MyUrl('admin/admin/login'); ?>" request-type="ajax-url" request-value="<?php echo MyUrl('admin/index/index'); ?>">
                                    <div class="am-form-group am-form-group-refreshing">
                                        <label>手机号码</label>
                                        <input type="text" name="accounts" class="am-radius" placeholder="请输入手机号码" pattern="<?php echo MyConst('common_regex_mobile'); ?>" data-validation-message="手机号码格式错误" autocomplete="off" required />
                                    </div>

                                    <div class="am-form-group am-form-group-refreshing business-form-block am-margin-top-xs">
                                        <label>验证码</label>
                                        <div class="am-input-group am-input-group-sm">
                                            <input type="number" name="verify" class="am-radius" placeholder="请输入验证码" min="0" minlength="4" maxlength="4" data-validation-message="验证码格式 4 位数字" autocomplete="off" required />
                                            <span class="am-input-group-btn">
                                                <button class="am-btn am-btn-default am-radius btn-loading-example verify-submit" type="button" data-am-loading="{spinner:'circle-o-notch', loadingText:'发送中...'}" data-url="<?php echo MyUrl('admin/admin/loginverifysend'); ?>" data-verify="<?php echo MyC('common_img_verify_state'); ?>" data-text="获取验证码" data-send-text="还有 {time} 秒" data-time="<?php echo MyC('common_verify_interval_time', 30, true); ?>" data-form-tag="form.form-validation-sms">获取验证码</button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="am-form-group am-form-group-refreshing am-margin-top-lg">
                                        <input type="hidden" name="type" value="sms" />
                                        <button type="submit" class="am-btn am-btn-primary am-btn-block am-radius am-btn-sm btn-loading-example" data-am-loading="{loadingText: '登录中...'}">登录</button>
                                    </div>
                                </form>
                                <!-- form end -->
                            </div>
                        <?php endif; ?>

                        <div class="am-padding-horizontal am-nbfc">
                            <a href="/" target="_blank" class="text-muted" data-am-popover="{theme: 'danger sm', content: '请联系管理员重置密码', trigger: 'hover focus'}">忘记密码?</a>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="am-text-center am-padding-vertical-lg register-close"><i class="am-icon-warning"></i> 暂时关闭了登录</div>
            <?php endif; ?>
        </div>
	</div>
</div>
<!-- content end -->

<?php if(MyC('common_img_verify_state') == 1): ?>
    <!-- verify win start -->
    <div class="am-modal am-modal-no-btn" tabindex="-1" id="verify-win">
        <div class="am-modal-dialog am-radius">
            <div class="am-modal-hd">
                <a href="javascript:;" class="am-close" data-am-modal-close>&times;</a>
            </div>
            <div class="am-modal-bd">
                <div class="base">
                    <input type="text" placeholder="图形验证码" minlength="4" maxlength="4" id="verify-img-value" data-validation-message="请输入有效的图形验证码" class="am-form-field am-radius" />
                    <div class="am-fl">
                        <img src="<?php echo MyUrl('admin/admin/adminverifyentry'); ?>" class="am-radius c-p" id="verify-img" onClick="this.src=this.src+'&'+Math.random();" />
                        <a href="javascript:;" class="verify-tips" onClick="document.getElementById('verify-img').src='<?php echo MyUrl('admin/admin/adminverifyentry'); ?>&'+Math.random();">看不清换一张</a>
                    </div>
                </div>
                <button type="button" class="am-btn am-btn-secondary am-radius am-btn-sm block m-t-20 btn-loading-example verify-submit-win" data-am-loading="{spinner:'circle-o-notch', loadingText:'发送中...'}" data-win="1">确认</button>
            </div>
        </div>
    </div>
    <!-- verify win end -->
<?php endif; ?>

<!-- 随机背景图片 -->
<?php if(MyC('admin_login_info_bg_images_rand') == 1 and !empty($bg_images_list) and is_array($bg_images_list)): ?>
    <div class="bg-slides">
        <?php foreach($bg_images_list as $k=>$v): if(!empty($v)): ?>
                <div class="bg-slides-item" style="background-image:url('<?php echo htmlentities($v); ?>');<?php if($k != 0): ?>display:none;<?php endif; ?>"></div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<!-- 插件扩展数据 start -->
<?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
    <div class="plugins-tag">
        <span>plugins_view_admin_login_info</span>
    </div>
<?php endif; if(!empty($plugins_view_admin_login_info_data) and is_array($plugins_view_admin_login_info_data)): foreach($plugins_view_admin_login_info_data as $hook): if(is_string($hook) or is_int($hook)): ?>
            <?php echo $hook; ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>
		
<!-- footer -->
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