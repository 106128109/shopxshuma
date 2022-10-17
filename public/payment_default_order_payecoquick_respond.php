<?php

/**
 * 订单支付同步入口
 */
namespace think;

// 默认绑定模块
$_GET['s'] = 'order/respond';

// 指定系统类型
define('SYSTEM_TYPE', 'default');

// 支付模块标记
define('PAYMENT_TYPE', 'PayecoQuick');

// 引入公共入口文件
require __DIR__.'/core.php';

// 加载基础文件
require __DIR__ . '/../vendor/autoload.php';

// 执行HTTP应用并响应
$http = (new App())->http;
$response = $http->name('index')->run();
$response->send();
$http->end($response);
?>