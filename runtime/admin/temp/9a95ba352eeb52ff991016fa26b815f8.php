<?php /*a:1:{s:76:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/lib/module/user.html";i:1665913498;}*/ ?>
<!-- 用户信息 -->
<?php if(!empty($module_data)): if(!empty($module_data['user'])): ?>
        <img src="<?php echo htmlentities($module_data['user']['avatar']); ?>" alt="<?php echo htmlentities($module_data['user']['user_name_view']); ?>" class="am-img-thumbnail am-radius am-align-left am-margin-right-xs am-margin-bottom-0" width="35" height="35" />
        <ul class="user-base">
            <li>名称：<?php if(empty($module_data['user']['username'])): ?><span class="cr-ccc">无</span><?php else: ?><?php echo htmlentities($module_data['user']['username']); ?><?php endif; ?></li>
            <li>昵称：<?php if(empty($module_data['user']['nickname'])): ?><span class="cr-ccc">无</span><?php else: ?><?php echo htmlentities($module_data['user']['nickname']); ?><?php endif; ?></li>
            <li>手机：<?php if(empty($module_data['user']['mobile'])): ?><span class="cr-ccc">无</span><?php else: ?><?php echo htmlentities($module_data['user']['mobile']); ?><?php endif; ?></li>
            <li>邮箱：<?php if(empty($module_data['user']['email'])): ?><span class="cr-ccc">无</span><?php else: ?><?php echo htmlentities($module_data['user']['email']); ?><?php endif; ?></li>
        </ul>
    <?php else: ?>
        用户信息异常
    <?php endif; ?>
<?php endif; ?>