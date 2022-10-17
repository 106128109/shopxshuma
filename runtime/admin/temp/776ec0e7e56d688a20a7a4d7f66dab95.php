<?php /*a:1:{s:81:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/order/module/operate.html";i:1665913498;}*/ ?>
<!-- 操作栏 -->
<button type="button" class="am-btn am-btn-default am-btn-xs am-radius am-btn-block submit-popup" data-url="<?php echo MyUrl('admin/order/detail', ['id'=>$module_data['id']]); ?>">
    <i class="am-icon-eye"></i>
    <span>详情</span>
</button>
<?php if(!empty($module_data['operate_data'])): if($module_data['operate_data']['is_confirm'] == 1): ?>
        <button type="button" class="am-btn am-btn-primary am-btn-xs am-radius am-btn-block submit-ajax" data-url="<?php echo MyUrl('admin/order/confirm'); ?>" data-id="<?php echo htmlentities($module_data['id']); ?>" data-value="<?php echo htmlentities($module_data['user_id']); ?>" data-view="reload" data-msg="是否操作收货，操作后不可恢复！">
            <i class="am-icon-check-circle-o"></i>
            <span>确认</span>
        </button>
    <?php endif; if($module_data['operate_data']['is_pay'] == 1): ?>
        <button type="button" class="am-btn am-btn-success am-btn-xs am-radius am-btn-block submit-pay" data-id="<?php echo htmlentities($module_data['id']); ?>" data-payment-id="<?php echo htmlentities($module_data['payment_id']); ?>" data-am-modal="{target: '#order-pay-popup'}">
            <i class="am-icon-paypal"></i>
            <span>支付</span>
        </button>
    <?php endif; if($module_data['operate_data']['is_delivery'] == 1): if($module_data['order_model'] == 2): ?>
            <button type="button" class="am-btn am-btn-secondary am-btn-xs am-radius am-btn-block submit-take" data-id="<?php echo htmlentities($module_data['id']); ?>" data-user-id="<?php echo htmlentities($module_data['user_id']); ?>" data-am-modal="{target: '#order-take-modal', closeViaDimmer: 0, width: 200, height: 160}" <?php if(!empty($module_data) and !empty($module_data['aftersale_first'])): ?>data-am-popover="{content: '订单有售后、请注意核对', trigger: 'hover focus', theme: 'danger sm'}"<?php endif; ?>>
                <i class="am-icon-check"></i>
                <span>取货</span>
            </button>
        <?php else: ?>
           <button type="button" class="am-btn am-btn-secondary am-btn-xs am-radius am-btn-block submit-delivery" data-url="<?php echo MyUrl('admin/order/delivery'); ?>" data-id="<?php echo htmlentities($module_data['id']); ?>" data-user-id="<?php echo htmlentities($module_data['user_id']); ?>" data-express-id="<?php echo htmlentities($module_data['express_id']); ?>" data-am-modal="{target: '#order-delivery-popup'}" <?php if(!empty($module_data) and !empty($module_data['aftersale_first'])): ?>data-am-popover="{content: '订单有售后、请注意核对', trigger: 'hover focus', theme: 'danger sm'}"<?php endif; ?>>
                <i class="am-icon-send-o"></i>
                <span>发货</span>
            </button>
        <?php endif; ?>
    <?php endif; if($module_data['operate_data']['is_collect'] == 1): ?>
        <button type="button" class="am-btn am-btn-success am-btn-xs am-radius am-btn-block submit-ajax" data-url="<?php echo MyUrl('admin/order/collect'); ?>" data-id="<?php echo htmlentities($module_data['id']); ?>" data-value="<?php echo htmlentities($module_data['user_id']); ?>" data-view="reload" data-msg="是否操作收货，操作后不可恢复！">
            <i class="am-icon-check-circle-o"></i>
            <span>收货</span>
        </button>
    <?php endif; if($module_data['operate_data']['is_cancel'] == 1): ?>
        <button type="button" class="am-btn am-btn-warning am-btn-xs am-radius am-btn-block submit-ajax" data-url="<?php echo MyUrl('admin/order/cancel'); ?>" data-id="<?php echo htmlentities($module_data['id']); ?>" data-value="<?php echo htmlentities($module_data['user_id']); ?>" data-view="reload" data-msg="取消后无法恢复，确定继续吗？">
            <i class="am-icon-paint-brush"></i>
            <span>取消</span>
        </button>
    <?php endif; if($module_data['operate_data']['is_delete'] == 1): ?>
        <button type="button" class="am-btn am-btn-danger am-btn-xs am-radius am-btn-block submit-ajax" data-url="<?php echo MyUrl('admin/order/delete'); ?>" data-id="<?php echo htmlentities($module_data['id']); ?>" data-value="<?php echo htmlentities($module_data['user_id']); ?>" data-view="delete" data-msg="删除后无法恢复，确定继续吗？">
            <i class="am-icon-trash-o"></i>
            <span>删除</span>
        </button>
    <?php endif; ?>
<?php endif; ?>