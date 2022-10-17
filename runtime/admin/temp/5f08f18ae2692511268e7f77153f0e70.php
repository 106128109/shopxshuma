<?php /*a:1:{s:83:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/payment/module/operate.html";i:1665913498;}*/ ?>
<!-- 操作栏 -->
<?php if($module_data['is_install'] == 0): ?>
    <button type="button" class="am-btn am-btn-success am-btn-xs am-radius am-btn-block submit-ajax" data-url="<?php echo MyUrl('admin/payment/install'); ?>" data-id="<?php echo htmlentities($module_data['payment']); ?>" data-view="reload" data-msg="安装进行中、确认操作吗？">
        <i class="am-icon-cubes"></i>
        <span>安装</span>
    </button>

    <?php if(!in_array($module_data['payment'], $cannot_deleted_list)): ?>
        <button type="button" class="am-btn am-btn-danger am-btn-xs am-radius am-btn-block submit-delete" data-url="<?php echo MyUrl('admin/payment/delete'); ?>" data-id="<?php echo htmlentities($module_data['payment']); ?>">
            <i class="am-icon-trash-o"></i>
            <span>删除</span>
        </button>
    <?php endif; else: ?>
    <a class="am-btn am-btn-secondary am-btn-xs am-radius am-btn-block" href="<?php echo MyUrl('admin/payment/saveinfo', array('id'=>$module_data['id'])); ?>">
        <i class="am-icon-edit"></i>
        <span>编辑</span>
    </a>

    <button type="button" class="am-btn am-btn-warning am-btn-xs am-radius am-btn-block submit-ajax" data-url="<?php echo MyUrl('admin/payment/uninstall'); ?>" data-id="<?php echo htmlentities($module_data['payment']); ?>" data-view="reload" data-msg="卸载后不可恢复、确认操作吗？">
        <i class="am-icon-remove"></i>
        <span>卸载</span>
    </button>
<?php endif; if(!empty($upgrade_info) and isset($upgrade_info[$module_data['payment']]) and $upgrade_info[$module_data['payment']]['version_new'] != $module_data['version']): ?>
    <button type="button" class="am-btn am-btn-danger am-btn-xs am-radius am-btn-block package-upgrade-event" data-type="payment" data-name="<?php echo htmlentities($module_data['name']); ?>" data-value="<?php echo htmlentities($module_data['payment']); ?>" data-json="<?php echo urlencode(json_encode($upgrade_info[$module_data['payment']])); ?>">
        <i class="am-icon-refresh"></i>
        <span>更新</span>
    </button>
<?php endif; ?>