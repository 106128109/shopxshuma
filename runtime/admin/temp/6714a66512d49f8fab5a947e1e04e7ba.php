<?php /*a:1:{s:80:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/payment/module/logo.html";i:1665913498;}*/ ?>
<!-- logo -->
<?php if(!empty($module_data) and !empty($module_data['logo'])): ?>
    <a href="<?php echo htmlentities($module_data['logo']); ?>" target="_blank">
        <img src="<?php echo htmlentities($module_data['logo']); ?>" class="am-radius" width="50" height="50" />
    </a>
<?php endif; ?>