<?php /*a:1:{s:83:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/order/module/aftersale.html";i:1665913498;}*/ ?>
<!-- 最新售后信息 -->
<?php if(!empty($module_data) and !empty($module_data['aftersale_first'])): ?>
    <p>状态：<?php echo htmlentities($module_data['aftersale_first']['status_text']); ?></p>
    <p>类型：<?php echo htmlentities($module_data['aftersale_first']['type_text']); ?></p>
    <p>金额：<strong class="am-text-danger"><?php echo htmlentities($module_data['aftersale_first']['price']); ?></strong></p>
    <p>数量：<?php echo htmlentities($module_data['aftersale_first']['number']); ?></p>
    <p>原因：<?php echo htmlentities($module_data['aftersale_first']['reason']); ?></p>
<?php endif; ?>