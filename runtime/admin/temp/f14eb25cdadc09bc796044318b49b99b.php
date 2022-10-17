<?php /*a:1:{s:79:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/order/module/goods.html";i:1665913498;}*/ ?>
<!-- 订单商品信息 -->
<?php if(!empty($module_data) and !empty($module_data['items'])): ?>
    <!-- 订单列表基础顶部-开始 -->
    <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
        <div class="plugins-tag">
            <span>plugins_view_admin_order_list_base_top</span>
        </div>
    <?php endif; 
        $hook_name = 'plugins_view_admin_order_list_base_top';
        $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'data'=>$module_data]);
        if(!empty($hook_data) && is_array($hook_data))
        {
            foreach($hook_data as $hook)
            {
                if(is_string($hook) || is_int($hook))
                {
                    echo htmlspecialchars_decode($hook);
                }
            }
        }
     ?>
    <!-- 订单列表基础顶部-结束 -->

    <!-- 基础信息 -->
    <?php if($module_data['pay_status'] == 1 and $module_data['pay_price'] < $module_data['total_price'] and !in_array($module_data['status'], [0,1,5,6])): ?>
        <p class="am-text-danger am-animation-shake am-animation-delay-1">
            <i class="am-icon-warning am-text-lg"></i>
            <span class="am-text-sm">请注意、该订单支付金额小于总价金额</span>
        </p>
        <hr data-am-widget="divider" class="am-divider am-divider-dashed" />
    <?php endif; if($module_data['pay_status'] == 0 and in_array($module_data['status'], [2,3,4])): ?>
        <p class="am-text-danger am-animation-shake am-animation-delay-1">
            <i class="am-icon-warning am-text-lg"></i>
            <span class="am-text-sm">请注意、该订单还未支付</span>
        </p>
        <hr data-am-widget="divider" class="am-divider am-divider-dashed" />
    <?php endif; ?>
    <p class="am-nbfc am-margin-bottom-sm">
        <!-- 订单号/id -->
        <strong class="am-icon-bookmark-o"> <?php echo htmlentities($module_data['order_no']); ?></strong>
        <strong class="am-icon-circle-thin am-margin-left-lg"> <?php echo htmlentities($module_data['id']); ?></strong>

        <!-- 仓库信息 -->
        <?php if(!empty($module_data['warehouse_name'])): ?>
            <span class="warehouse-item-container am-fr">
                <?php if(!empty($module_data['warehouse_icon'])): if(IsUrl($module_data['warehouse_icon'])): ?>
                        <img src="<?php echo htmlentities($module_data['warehouse_icon']); ?>" alt="<?php echo htmlentities($module_data['warehouse_name']); ?>" class="warehouse-icon" />
                    <?php else: ?>
                        <i class="<?php echo htmlentities($module_data['warehouse_icon']); ?>"></i>
                    <?php endif; ?>
                <?php endif; if(empty($module_data['warehouse_url'])): ?>
                    <strong class="warehouse-name"><?php echo htmlentities($module_data['warehouse_name']); ?></strong>
                <?php else: ?>
                    <a href="<?php echo htmlentities($module_data['warehouse_url']); ?>" target="_blank" class="text-deco-none">
                        <strong class="warehouse-name"><?php echo htmlentities($module_data['warehouse_name']); ?></strong>
                    </a>
                <?php endif; ?>
            </span>
        <?php endif; ?>

        <!-- 订单列表基础导航底部-开始 -->
        <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
            <div class="plugins-tag">
                <span>plugins_view_admin_order_list_base_nav_bottom</span>
            </div>
        <?php endif; 
            $hook_name = 'plugins_view_admin_order_list_base_nav_bottom';
            $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'data'=>$module_data]);
            if(!empty($hook_data) && is_array($hook_data))
            {
                foreach($hook_data as $hook)
                {
                    if(is_string($hook) || is_int($hook))
                    {
                        echo htmlspecialchars_decode($hook);
                    }
                }
            }
         ?>
        <!-- 订单列表基础导航底部-结束 -->
    </p>

    <!-- 订单列表基础商品顶部-开始 -->
    <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
        <div class="plugins-tag">
            <span>plugins_view_admin_order_list_base_goods_top</span>
        </div>
    <?php endif; 
        $hook_name = 'plugins_view_admin_order_list_base_goods_top';
        $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'data'=>$module_data]);
        if(!empty($hook_data) && is_array($hook_data))
        {
            foreach($hook_data as $hook)
            {
                if(is_string($hook) || is_int($hook))
                {
                    echo htmlspecialchars_decode($hook);
                }
            }
        }
     ?>
    <!-- 订单列表基础商品顶部-结束 -->

    <!-- 商品信息 -->
    <hr data-am-widget="divider" class="am-divider am-divider-dashed am-margin-top-0" />
    <?php foreach($module_data['items'] as $item): ?>
        <div class="am-nbfc am-padding-vertical-xs">
            <div class="base am-nbfc">
                <a href="<?php echo MyUrl('index/goods/index', ['id'=>$item['goods_id']]); ?>" target="_blank" title="<?php echo htmlentities($item['title']); ?>">
                    <img src="<?php echo htmlentities($item['images']); ?>" class="am-img-thumbnail am-radius am-margin-right-xs am-fl" width="60" height="60" />
                </a>
                <a href="<?php echo MyUrl('index/goods/index', ['id'=>$item['goods_id']]); ?>" target="_blank" title="<?php echo htmlentities($item['title']); ?>" <?php if(!empty($item['title_color'])): ?> style="color:<?php echo htmlentities($item['title_color']); ?>;" <?php endif; ?> class="am-nowrap-initial"><?php echo htmlentities($item['title']); ?></a>
            </div>
            <div class="other am-nbfc">
                <?php if(!empty($item['spec_text'])): ?>
                    <div class="am-margin-top-xs am-nowrap-initial"><?php echo htmlentities($item['spec_text']); ?></div>
                <?php endif; ?>
                <div class="am-nbfc am-margin-top-xs">
                    <span><?php echo htmlentities($module_data['currency_data']['currency_symbol']); ?><?php echo htmlentities($item['price']); ?>x<?php echo htmlentities($item['buy_number']); ?></span>
                    <div class="am-fr">
                        <?php if($item['returned_quantity'] > 0 or $item['refund_price'] > 0): ?>
                            <span class="am-text-danger am-margin-left-lg">已退 <?php echo htmlentities($item['returned_quantity']); ?> / <?php echo htmlentities($module_data['currency_data']['currency_symbol']); ?><?php echo htmlentities($item['refund_price']); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <hr data-am-widget="divider" class="am-divider am-divider-dashed am-margin-vertical-0" />
    <?php endforeach; ?>

    <!-- 订单列表基础商品底部-开始 -->
    <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
        <div class="plugins-tag">
            <span>plugins_view_admin_order_list_base_goods_bottom</span>
        </div>
    <?php endif; 
        $hook_name = 'plugins_view_admin_order_list_base_goods_bottom';
        $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'data'=>$module_data]);
        if(!empty($hook_data) && is_array($hook_data))
        {
            foreach($hook_data as $hook)
            {
                if(is_string($hook) || is_int($hook))
                {
                    echo htmlspecialchars_decode($hook);
                }
            }
        }
     ?>
    <!-- 订单列表基础商品底部-结束 -->

    <!-- 商品描述信息 -->
    <div class="am-margin-top-sm"><?php echo htmlentities($module_data['describe']); ?></div>

    <!-- 订单列表基础顶部-开始 -->
    <?php if(isset($shopxo_is_develop) and $shopxo_is_develop == true): ?>
        <div class="plugins-tag">
            <span>plugins_view_admin_order_list_base_bottom</span>
        </div>
    <?php endif; 
        $hook_name = 'plugins_view_admin_order_list_base_bottom';
        $hook_data = MyEventTrigger($hook_name, ['hook_name'=>$hook_name, 'is_backend'=>false, 'data'=>$module_data]);
        if(!empty($hook_data) && is_array($hook_data))
        {
            foreach($hook_data as $hook)
            {
                if(is_string($hook) || is_int($hook))
                {
                    echo htmlspecialchars_decode($hook);
                }
            }
        }
     ?>
    <!-- 订单列表基础顶部-结束 -->
<?php endif; ?>