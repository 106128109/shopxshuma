<?php /*a:1:{s:88:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/warehousegoods/module/goods.html";i:1665913498;}*/ ?>
<!-- 商品基础信息 -->
<?php if(!empty($module_data)): if(!empty($module_data['goods'])): ?>
        <div class="am-nbfc">
            <a href="<?php echo htmlentities($module_data['goods']['goods_url']); ?>" target="_blank">
                <img src="<?php echo htmlentities($module_data['goods']['images']); ?>" alt="<?php echo htmlentities($module_data['goods']['title']); ?>" class="am-img-thumbnail am-radius am-align-left am-margin-right-xs am-fl" width="60" height="60" />
            </a>
            <a class="am-text-top am-nowrap-initial" href="<?php echo htmlentities($module_data['goods']['goods_url']); ?>" target="_blank"><?php echo htmlentities($module_data['goods']['title']); ?></a>
        </div>
        <p><?php echo htmlentities($currency_symbol); ?><?php echo htmlentities($module_data['goods']['price']); ?></p>
    <?php else: ?>
        商品信息异常
    <?php endif; ?>
<?php endif; ?>