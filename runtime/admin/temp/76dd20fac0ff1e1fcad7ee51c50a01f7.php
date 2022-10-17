<?php /*a:1:{s:90:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/warehousegoods/module/operate.html";i:1665913498;}*/ ?>
<!-- 操作栏 -->
<button type="button" class="am-btn am-btn-default am-btn-xs am-radius am-btn-block submit-popup" data-url="<?php echo MyUrl('admin/warehousegoods/detail', ['id'=>$module_data['id']]); ?>">
    <i class="am-icon-eye"></i>
    <span>详情</span>
</button>
<button type="button" class="am-btn am-btn-secondary am-btn-xs am-radius am-btn-block submit-popup" data-url="<?php echo MyUrl('admin/warehousegoods/inventoryinfo', ['id'=>$module_data['id']]); ?>" data-class="warehouse-goods-popup">
    <i class="am-icon-square-o"></i>
    <span>库存</span>
</button>
<button type="button" class="am-btn am-btn-danger am-btn-xs am-radius am-btn-block submit-delete" data-url="<?php echo MyUrl('admin/warehousegoods/delete'); ?>" data-id="<?php echo htmlentities($module_data['id']); ?>" data-key="ids">
    <i class="am-icon-trash-o"></i>
    <span>删除</span>
</button>