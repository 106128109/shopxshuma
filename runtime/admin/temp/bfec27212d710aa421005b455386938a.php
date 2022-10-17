<?php /*a:2:{s:76:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/lib/module/user.html";i:1665913498;s:80:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/order/module/status.html";i:1665913498;}*/ ?>
<!-- 订单状态 -->
<?php if(!empty($module_data)): ?>
    <p><?php echo htmlentities($module_data['status_name']); ?></p>
    <?php if($module_data['user_is_delete_time'] != 0): ?>
        <p class="am-text-warning">用户已删除</p>
    <?php endif; ?>
<?php endif; ?>