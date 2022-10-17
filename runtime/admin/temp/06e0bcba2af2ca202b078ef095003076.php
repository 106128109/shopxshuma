<?php /*a:1:{s:78:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/order/module/take.html";i:1665913498;}*/ ?>
<!-- 取货信息 -->
<?php if(!empty($module_data) and !empty($module_data['extraction_data'])): ?>
    <p>
        <span>取货码 :</span>
        <?php if(empty($module_data['extraction_data']['code'])): ?>
            <span class="am-text-danger">无</span>
        <?php else: ?>
            <span class="am-badge am-badge-success am-radius"><?php echo htmlentities($module_data['extraction_data']['code']); ?></span>
        <?php endif; ?>
    </p>
    <?php if(!empty($module_data['extraction_data']['images'])): ?>
        <p class="am-margin-top-xs">
            <img class="am-img-thumbnail" src="<?php echo htmlentities($module_data['extraction_data']['images']); ?>" alt="取货码" width="100" height="100" />
        </p>
    <?php endif; ?>
<?php endif; ?>