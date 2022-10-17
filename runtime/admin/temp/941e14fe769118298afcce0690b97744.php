<?php /*a:1:{s:81:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/user/module/referrer.html";i:1665913498;}*/ ?>
<!-- 邀请用户信息 -->
<?php if(!empty($module_data) and !empty($module_data['referrer_info'])): ?>
    <img src="<?php echo htmlentities($module_data['referrer_info']['avatar']); ?>" alt="<?php echo htmlentities($module_data['referrer_info']['user_name_view']); ?>" class="am-img-thumbnail am-radius am-align-left am-margin-right-xs am-margin-bottom-0" width="35" height="35" />
    <ul class="user-base">
        <li>名称：<?php if(empty($module_data['referrer_info']['username'])): ?><span class="cr-ccc">无</span><?php else: ?><?php echo htmlentities($module_data['referrer_info']['username']); ?><?php endif; ?></li>
        <li>昵称：<?php if(empty($module_data['referrer_info']['nickname'])): ?><span class="cr-ccc">无</span><?php else: ?><?php echo htmlentities($module_data['referrer_info']['nickname']); ?><?php endif; ?></li>
        <li>手机：<?php if(empty($module_data['referrer_info']['mobile'])): ?><span class="cr-ccc">无</span><?php else: ?><?php echo htmlentities($module_data['referrer_info']['mobile']); ?><?php endif; ?></li>
        <li>邮箱：<?php if(empty($module_data['referrer_info']['email'])): ?><span class="cr-ccc">无</span><?php else: ?><?php echo htmlentities($module_data['referrer_info']['email']); ?><?php endif; ?></li>
    </ul>
<?php endif; ?>