<?php /*a:1:{s:81:"/home/wwwroot/www.tianjinyuxi.cn/app/admin/view/default/order/module/address.html";i:1665913498;}*/ ?>
<!-- 地址信息 -->
<?php if(!empty($module_data) and in_array($module_data['order_model'], [0,2]) and !empty($module_data['address_data'])): ?>
    <div>
        <?php if(!empty($module_data['address_data']['alias'])): ?>
            <span class="am-badge am-badge-secondary-plain am-radius"><?php echo htmlentities($module_data['address_data']['alias']); ?></span>
        <?php endif; ?>
        <span><?php echo htmlentities($module_data['address_data']['name']); ?></span>
        <span class="am-margin-left-sm"><?php echo htmlentities($module_data['address_data']['tel']); ?></span>
    </div>
    <div class="am-margin-top-xs">
        <p>
            <span><?php echo htmlentities($module_data['address_data']['province_name']); ?></span>
            <span><?php echo htmlentities($module_data['address_data']['city_name']); ?></span>
            <span><?php echo htmlentities($module_data['address_data']['county_name']); ?></span>
            <span><?php echo htmlentities($module_data['address_data']['address']); ?></span>
        </p>
        <?php if(!empty($module_data['address_data']['idcard_name']) or !empty($module_data['address_data']['idcard_number']) or !empty($module_data['address_data']['idcard_front']) or !empty($module_data['address_data']['idcard_back'])): ?>
            <div class="am-alert am-alert-secondary am-margin-vertical-0">
                <p class="am-margin-bottom-xs"><strong>身份证信息</strong></p>
                <hr data-am-widget="divider" style="" class="am-divider am-divider-dashed am-margin-vertical-0" />
                <div class="am-margin-top-xs">
                    <p>姓名：<?php echo htmlentities($module_data['address_data']['idcard_name']); ?></p>
                    <p>号码：<?php echo htmlentities($module_data['address_data']['idcard_number']); ?></p>
                    <?php if(!empty($module_data['address_data']['idcard_front']) or !empty($module_data['address_data']['idcard_back'])): ?>
                        <p class="am-nbfc"><span class="am-fl">照片：</span><?php if(!empty($module_data['address_data']['idcard_front'])): ?><a href="<?php echo htmlentities($module_data['address_data']['idcard_front']); ?>" target="_blank" class="am-fl"><img width="35" height="27" src="<?php echo htmlentities($module_data['address_data']['idcard_front']); ?>" alt="身份证人像面" class="am-img-thumbnail am-radius am-block" /></a><?php endif; if(!empty($module_data['address_data']['idcard_back'])): ?><a href="<?php echo htmlentities($module_data['address_data']['idcard_back']); ?>" target="_blank" class="am-fl am-margin-left-xs"><img width="35" height="27" src="<?php echo htmlentities($module_data['address_data']['idcard_back']); ?>" alt="身份证人像面" class="am-img-thumbnail am-radius am-block" /></a><?php endif; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; if(isset($module_data['address_data']['lng']) and isset($module_data['address_data']['lat']) and $module_data['address_data']['lng'] != 0 and $module_data['address_data']['lat'] != 0): ?>
            <div class="am-margin-top-xs">
                <button type="button" class="am-btn am-btn-success am-btn-xs am-radius am-icon-map-marker am-padding-xs submit-map-popup" data-lng="<?php echo htmlentities($module_data['address_data']['lng']); ?>" data-lat="<?php echo htmlentities($module_data['address_data']['lat']); ?>"> 查看位置</button>
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>