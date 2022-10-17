<?php /*a:1:{s:97:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/warehousegoods/module/spec_inventory.html";i:1665913498;}*/ ?>
<?php if(!empty($module_data['spec']) and is_array($module_data['spec'])): ?>
    <div class="am-scrollable-vertical spec-inventory-list">
        <ul>
            <?php foreach($module_data['spec'] as $sv): ?>
                <li class="am-nbfc">
                    <p class="spec-name am-fl"><?php if(empty($sv['spec'])): ?>默认规格<?php else: ?><?php echo htmlentities($sv['spec']); ?><?php endif; ?></p>
                    <strong class="am-fr"><?php echo htmlentities($sv['inventory']); ?></strong>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>