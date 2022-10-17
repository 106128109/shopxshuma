<?php /*a:1:{s:86:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/warehouse/module/position.html";i:1665913498;}*/ ?>
<!--  经纬度 -->
<?php if(!empty($module_data['lng'])): ?>
    <p><span>经度：</span><?php echo htmlentities($module_data['lng']); ?></p>
<?php endif; if(!empty($module_data['lat'])): ?>
    <p class="am-margin-top-xs"><span>纬度：</span><?php echo htmlentities($module_data['lat']); ?></p>
<?php endif; if(isset($module_data['lng']) and isset($module_data['lat']) and $module_data['lng'] != 0 and $module_data['lat'] != 0): ?>
    <div class="am-margin-top-xs">
        <button type="button" class="am-btn am-btn-success am-btn-xs am-radius am-icon-map-marker am-padding-xs submit-map-popup" data-lng="<?php echo htmlentities($module_data['lng']); ?>" data-lat="<?php echo htmlentities($module_data['lat']); ?>"> 查看位置</button>
    </div>
<?php endif; ?>