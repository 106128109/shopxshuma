<?php /*a:1:{s:87:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/goodsbrowse/module/operate.html";i:1665913498;}*/ ?>
<!-- 操作栏 -->
<button type="button" class="am-btn am-btn-default am-btn-xs am-radius am-btn-block submit-popup" data-url="<?php echo MyUrl('admin/goodsbrowse/detail', ['id'=>$module_data['id']]); ?>">
    <i class="am-icon-eye"></i>
    <span>详情</span>
</button>
<button type="button" class="am-btn am-btn-danger am-btn-xs am-radius am-btn-block submit-delete" data-url="<?php echo MyUrl('admin/goodsbrowse/delete'); ?>" data-id="<?php echo htmlentities($module_data['id']); ?>" data-key="ids">
    <i class="am-icon-trash-o"></i>
    <span>删除</span>
</button>