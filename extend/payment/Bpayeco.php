<?php
// +----------------------------------------------------------------------
// | ShopXO 国内领先企业级B2C免费开源电商系统
// +----------------------------------------------------------------------
// | Copyright (c) 2011~2099 http://shopxo.net All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( https://opensource.org/licenses/mit-license.php )
// +----------------------------------------------------------------------
// | Author: Devil
// +----------------------------------------------------------------------
namespace payment;

/**
 * 易联支付 - 支付插件
 * @author   Devil
 * @blog    http://gong.gg/
 * @version 1.0.0
 * @date    2018-09-19
 * @desc    description
 */
class Bpayeco
{
    // 插件配置参数
    private $config;

    // 接口地址
    private $url = [
        0 => 'https://ebank.payeco.com/services/DnaPayB2C',
        1 => 'https://testebank.payeco.com:8143/ebank/servlet/DnaPayB2C',
    ];

    private $IsSM2 = [
        0 => 'MD5',
        1 => 'SM3withSM2',
    ];
    /**
     * 构造方法
     * @author   Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2018-09-17
     * @desc    description
     * @param   [array]           $params [输入参数（支付配置参数）]
     */
    public function __construct($params = [])
    {
        $this->config = $params;
    }

    /**
     * 配置信息
     * @author   Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2018-09-19
     * @desc    description
     */
    public function Config()
    {
        // 基础信息
        $base = [
            'name'          => '易联网银支付',  // 插件名称
            'version'       => '1.0.0',  // 插件版本
            'apply_version' => '不限',  // 适用系统版本描述
            'apply_terminal'=> ['pc'], // 适用终端 默认全部 ['pc', 'h5', 'ios', 'android', 'alipay', 'weixin', 'baidu', 'toutiao']
            'desc'          => '适用PC端，网银支付，即时到帐支付方式，买家的交易资金直接打入卖家易联账户，快速回笼交易资金。 <a href="https://www.payeco.com/" target="_blank">立即申请</a>',  // 插件描述（支持html）
            'author'        => 'Devil',  // 开发者
            'author_url'    => 'http://shopxo.net/',  // 开发者主页
        ];

        // 配置信息
        $element = [
            [
                'element'       => 'input',
                'type'          => 'text',
                'default'       => '',
                'name'          => 'merchant_no',
                'placeholder'   => '商户号',
                'title'         => '商户号',
                'is_required'   => 0,
                'message'       => '请填写商户号',
            ],
            [
                'element'       => 'input',
                'type'          => 'text',
                'default'       => '',
                'name'          => 'privatKey',
                'placeholder'   => '商户密钥',
                'title'         => '商户密钥',
                'is_required'   => 0,
                'rows'          => 6,
                'message'       => '请填写商户密钥',
            ],
            [
                'element'       => 'input',
                'type'          => 'text',
                'default'       => '',
                'name'          => 'SM2',
                'placeholder'   => '国密私钥',
                'title'         => '国密私钥',
                'is_required'   => 0,
                'rows'          => 6,
                'message'       => '请填写国密私钥，如没配置则不需要填写',
            ],
            [
               'element'       => 'select',
               'title'         => '是否添加国密加密',
               'message'       => '请选择是否添加国密加密',
               'name'          => 'is_sm2',
               'is_multiple'   => 0,
               'element_data'  => [
                           ['value'=>0, 'name'=>'否'],
                           ['value'=>1, 'name'=>'是'],
                       ],
           ],
            [
                'element'       => 'select',
                'title'         => '是否测试环境',
                'message'       => '请选择是否测试环境',
                'name'          => 'is_dev_env',
                'is_multiple'   => 0,
                'element_data'  => [
                    ['value'=>0, 'name'=>'否'],
                    ['value'=>1, 'name'=>'是'],
                ],
            ],
        ];

        return [
            'base'      => $base,
            'element'   => $element,
        ];
    }

    /**
     * 支付入口
     * @author   Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2018-09-19
     * @desc    description
     * @param   [array]           $params [输入参数]
     */
    public function Pay($params = [])
    {
        // 请求参数
        $parameter = [
//            'merchant_no'       => $this->config['merchant_no'],
//            'request_no'        => md5(time().GetNumberCode(6)),
//            'request_time'      => date('YmdHis'),
            'merch_order_no'    => $params['order_no'],
            'amount'            => $params['total_price'],
//            'currency'          => 'CNY',
            'order_desc'        => $params['name'],
//            'expire_time'       => $this->OrderAutoCloseTime(),
            'notify_url'        => $params['notify_url'],
            'return_url'        => $params['redirect_url'],
        ];

        // 签名
//        $parameter['sign'] = $this->MyRsaSign($this->SignContent($parameter));

        // 请求接口
//        $action = IsMobile() ? 'h5placeOrder' : 'placeOrder';
//        $ret = $this->HttpRequest('cashierdesk/v1/profitShare/'.$action, $parameter);
//        if($ret['code'] != 0)
//        {
//            return $ret;
//        }

        // 数据是否正确
//        if(isset($ret['data']['code']) && $ret['data']['code'] == '0000')
//        {
//            return DataReturn('success', 0, $ret['data']['data']['url']);
//        }
        $ret = $this->PayWeb($parameter);
        return $ret;
    }
    /**
     * [PayWeb PC支付]
     * @author   Devil
     * @blog     http://gong.gg/
     * @version  1.0.0
     * @datetime 2018-09-28T00:23:04+0800
     * @param   [array]           $params [输入参数]
     */
    private function PayWeb($parameter)
    {
        // 支付参数
        $param = array(
            'merchant_no'                => $this->config['merchant_no'],
            'privatKey'                => $this->config['privatKey'],
            'merch_order_no'    => $parameter['merch_order_no'],
            'amount'            => $parameter['amount'],
            'order_desc'        => $parameter['order_desc'],
            'notify_url'        => $parameter['notify_url'],
            'return_url'        => $parameter['return_url'],
        );
        $privatKey = $param['privatKey'];//商户私钥
        $Version = '2.0.0'; //接口版本
        $OrderFrom = '16'; //订单来源
        $Currency = 'CNY'; //币种
        $Language = '00'; //语言
        $SynAddress = $param['notify_url']; //同步返回报文地址
        $AsynAddress = $param['return_url']; //异步返回报文地址
        $OrderType = '00'; //订单类型 00=即时支付 01-非即时支�?
        $Description = $param['order_desc']; //商品描述
        $remark = '商品支付'; //备注

        $ProcCode = '0200'; //消息类型
        $AccountNo = ''; //银行卡号
        $ProcessCode = '190011';  //处理�?
        $Amount = $param['amount'];   //金额
        $TransDatetime = date("YmdHis",time()); //传输日期时间
        $AcqSsn = '123456'; //系统跟踪�?
        $TransData = ''; //其他业务资料，用“|”分隔，例如：银行代�?
        $Reference = ''; //系统参考号  原值返�?
        $OrderNo = ''; //系统参考号  原值返�?
        $TerminalNo = ''; //终端�?
        $MerchantNo = $param['merchant_no']; //商户�?
        $MerchantOrderNo = $param['merch_order_no'];//商户系统订单�?

        //组建令牌
        $macClear = '';
        $macClear .= !empty($ProcCode) ? $ProcCode.' ' : '';
        $macClear .= !empty($AccountNo) ? $AccountNo.' ' : '';
        $macClear .= !empty($ProcessCode) ? $ProcessCode.' ' : '';
        $macClear .= !empty($Amount) ? $Amount.' ' : '';
        $macClear .= !empty($TransDatetime) ? $TransDatetime.' ' : '';
        $macClear .= !empty($AcqSsn) ? $AcqSsn.' ' : '';
        $macClear .= !empty($OrderNo) ? $OrderNo.' ' : '';
        $macClear .= !empty($TransData) ? $TransData.' ' : '';
        $macClear .= !empty($Reference) ? $Reference.' ' : '';
        $macClear .= !empty($TerminalNo) ? $TerminalNo.' ' : '';
        $macClear .= !empty($MerchantNo) ? $MerchantNo.' ' : '';
        $macClear .= !empty($MerchantOrderNo) ? $MerchantOrderNo.' ' : '';
        $macClear = trim($macClear);
        $mac = md5(strtoupper($macClear)." ".$privatKey);
        $mac =  strtoupper($mac);

        //组建xml
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<x:NetworkRequest xmlns:x="http://www.payeco.com" xmlns:xsi="http://www.w3.org">';
        $xml .= '<Version>'.$Version.'</Version>';
        $xml .= '<ProcCode>'.$ProcCode.'</ProcCode>';
        $xml .= '<ProcessCode>'.$ProcessCode.'</ProcessCode>';
        $xml .= '<AccountNo></AccountNo>';
        $xml .= '<AccountType></AccountType>';
        $xml .= '<MobileNo></MobileNo>';
        $xml .= '<Amount>'.$Amount.'</Amount>';
        $xml .= '<Currency>CNY</Currency>';
        $xml .= '<SynAddress>'.$SynAddress.'</SynAddress>';
        $xml .= '<AsynAddress>'.$AsynAddress.'</AsynAddress>';
        $xml .= '<Remark></Remark>';
        $xml .= '<TerminalNo></TerminalNo>';
        $xml .= '<MerchantNo>'.$MerchantNo.'</MerchantNo>';
        $xml .= '<MerchantOrderNo>'.$MerchantOrderNo.'</MerchantOrderNo>';
        $xml .= '<OrderNo></OrderNo>';
        $xml .= '<OrderFrom>'.$OrderFrom.'</OrderFrom>';
        $xml .= '<Language>'.$Language.'</Language>';
        $xml .= '<Description>'.$Description.'</Description>';
        $xml .= '<OrderType>'.$OrderType.'</OrderType>';
        $xml .= '<AcqSsn>'.$AcqSsn.'</AcqSsn>';
        $xml .= '<Reference></Reference>';
        $xml .= '<TransDatetime>'.$TransDatetime.'</TransDatetime>';
        $xml .= '<MerchantName></MerchantName>';
        $xml .= '<TransData></TransData>';
        $xml .= '<IDCardName></IDCardName>';
        $xml .= '<IDCardNo></IDCardNo>';
        $xml .= '<BankAddress></BankAddress>';
        $xml .= '<IDCardType></IDCardType>';
        $xml .= '<BeneficiaryName></BeneficiaryName>';
        $xml .= '<BeneficiaryMobileNo></BeneficiaryMobileNo>';
        $xml .= '<DeliveryAddress></DeliveryAddress>';
        $xml .= '<IpAddress></IpAddress>';
        $xml .= '<Location></Location>';
        $xml .= '<UserFlag></UserFlag>';
        $xml .= '<MAC>'.$mac.'</MAC>';
        $xml .= '</x:NetworkRequest>';

        $request_text = urlencode(base64_encode($xml));//最终请求格�?

        //建立请求
        $para_temp = array('request_text' => $request_text);

        $html = $this->BuildRequestForm($para_temp);

        // web端输出执行form表单post提交
        exit($html);
    }

    private function BuildRequestForm($params)
    {
        $is_dev_env = isset($this->config['is_dev_env']) ? $this->config['is_dev_env'] : 0;
        $url = $this->url[$is_dev_env];

        $html = "<form id='submit'  action='".$url."' method='POST'>";
        foreach($params as $key=>$val)
        {
            if(!empty($val))
            {
                $html .= "<input type='hidden' id='".$key."' name='".$key."' value='".$val."'/>";
            }
        }

        $html .= "<script>document.all.submit.submit();</script>";
        return $html;
    }
    /**
     * 订单自动关闭的时间
     * @author  Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2021-03-24
     * @desc    description
     */
    public function OrderAutoCloseTime()
    {
        $time = intval(MyC('common_order_close_limit_time', 30, true))*60;
        return date('YmdHis', time()+$time);
    }

    /**
     * 退款处理
     * @author  Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2019-05-28
     * @desc    description
     * @param   [array]           $params [输入参数]
     */
    public function Refund($params = [])
    {
        // 参数
        $p = [
            [
                'checked_type'      => 'empty',
                'key_name'          => 'order_no',
                'error_msg'         => '订单号不能为空',
            ],
            [
                'checked_type'      => 'empty',
                'key_name'          => 'trade_no',
                'error_msg'         => '交易平台订单号不能为空',
            ],
            [
                'checked_type'      => 'empty',
                'key_name'          => 'refund_price',
                'error_msg'         => '退款金额不能为空',
            ],
        ];
        $ret = ParamsChecked($params, $p);
        if($ret !== true)
        {
            return DataReturn($ret, -1);
        }

        // 退款原因
        $refund_reason = empty($params['refund_reason']) ? $params['order_no'].'订单退款'.$params['refund_price'].'元' : $params['refund_reason'];

        // 请求参数
        $parameter = [
            'merchant_no'       => $this->config['merchant_no'],
            'request_no'        => md5(time().GetNumberCode(6)),
            'request_time'      => date('YmdHis'),
            'mer_order_no'      => $params['order_no'],
            'mer_refund_seq'    => md5(GetNumberCode(10)),
            'refund_amount'     => $params['refund_price'],
            'refund_reason'     => $refund_reason,
        ];

        // 签名
        $parameter['sign'] = $this->MyRsaSign($this->SignContent($parameter));

        // 请求接口
        $ret = $this->HttpRequest('unify/v1/refund', $parameter);
        if($ret['code'] != 0)
        {
            return $ret;
        }

        // 数据是否正确
        if(isset($ret['data']['code']) && $ret['data']['code'] == '0000')
        {
            // 统一返回格式
            $res = $ret['data']['data'];
            $data = [
                'out_trade_no'  => isset($res['mer_order_no']) ? $res['mer_order_no'] : '',
                'trade_no'      => isset($res['refund_order_no']) ? $res['refund_order_no'] : '',
                'buyer_user'    => '',
                'refund_price'  => isset($res['refund_amount']) ? $res['refund_amount'] : 0.00,
                'return_params' => $ret['data'],
            ];
            return DataReturn('退款成功', 0, $data);
        } else {
            // 是否已完全退款完成
            if(in_array($ret['data']['code'], ['00660001', '1013']))
            {
                // 统一返回格式
                $data = [
                    'out_trade_no'  => $params['order_no'],
                    'trade_no'      => '',
                    'buyer_user'    => '',
                    'refund_price'  => $params['refund_price'],
                    'return_params' => $ret['data'],
                ];
                return DataReturn('退款成功', 0, $data);
            }
        }
        return DataReturn($ret['data']['msg'].'('.$ret['data']['code'].')', -1);
    }

    /**
     * 支付回调处理
     * @author   Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2018-09-19
     * @desc    description
     * @param   [array]           $params [输入参数]
     */
    public function Respond($params = [])
    {
        // 请求参数
        $data = empty($_POST) ? $_GET :  array_merge($_GET, $_POST);

        // 签名验证
        if(empty($data['sign']))
        {
            return DataReturn('签名为空', -1);
        }
        if($this->OutRsaVerify($this->SignContent($data), base64_decode($data['sign'])))
        {
            return DataReturn('签名验证失败', -1);
        }
        return DataReturn('支付成功', 0, $this->ReturnData($params));
    }

    /**
     * 返回数据统一格式
     * @author   Devil
     * @blog     http://gong.gg/
     * @version  1.0.0
     * @datetime 2018-10-06T16:54:24+0800
     * @param    [array]                   $data [返回数据]
     */
    private function ReturnData($data)
    {
        // 返回数据固定基础参数
        $data['trade_no']       = $data['order_no'];  // 支付平台 - 订单号
        $data['buyer_user']     = '';  // 支付平台 - 用户
        $data['out_trade_no']   = $data['merch_order_no'];  // 本系统发起支付的 - 订单号
        $data['subject']        = '';  // 本系统发起支付的 - 商品名称
        $data['pay_price']      = $data['amount'];  // 本系统发起支付的 - 总价

        return $data;
    }
    
    /**
     * 网络请求
     * @author  Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2022-04-26
     * @desc    description
     * @param   [string]          $action   [请求接口]
     * @param   [array]           $data     [发送数据]
     * @param   [int]             $second   [超时]
     * @return  [mixed]                     [请求返回数据]
     */
    private function HttpRequest($action, $data, $second = 30)
    {
        $query = '';
        if(is_array($data) && 0 < count($data))
        {
            foreach($data as $k => $v)
            {
                $query .= $k.'='.urlencode($v).'&';
            }
            $query = '?'.substr($query, 0, -1);
        }
        $is_dev_env = isset($this->config['is_dev_env']) ? $this->config['is_dev_env'] : 0;
        $url = $this->url[$is_dev_env].$action.$query;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, $second);
        $headers = array('content-type: application/x-www-form-urlencoded;charset=UTF-8');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $reponse = curl_exec($ch);
        curl_close($ch);

        // 返回处理
        if(!empty($reponse))
        {
            // 待签名字符串
            $sign_str = $this->ResultDataCut('"data":', ',"sign"', $reponse);

            // 数据解析
            $reponse = json_decode($reponse, true);
            if(!empty($reponse))
            {
                // 签名验证
                if(!empty($reponse['sign']) && !$this->OutRsaVerify($sign_str, $reponse['sign']))
                {
                    return DataReturn('签名验证失败', -1);
                }
                return DataReturn('success', 0, $reponse);
            }
        }
        return DataReturn('支付接口请求失败', -1);
    }

    /**
     * 返回数据签名字符串处理
     * @author  Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2022-04-27
     * @desc    description
     * @param   [string]          $begin [开始位置]
     * @param   [string]          $end   [结算位置]
     * @param   [string]          $str   [数据字符串]
     */
    public function ResultDataCut($begin,$end,$str)
    {
        $b = mb_strpos($str,$begin) + mb_strlen($begin);
        $e = mb_strpos($str,$end) - $b;
        return mb_substr($str, $b, $e);
    }

    /**
     * 签名字符串
     * @author   Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2019-01-07
     * @desc    description
     * @param   [array]           $params [输入参数]
     */
    private function SignContent($params = [])
    {
        ksort($params);
        $sign  = '';
        foreach($params as $k=>$v)
        {
            if($k != 'sign' && $v != '' && $v != null)
            {
                $sign .= "$k=$v&";
            }
        }
        return substr($sign, 0, -1);
    }

    /**
     * 签名生成
     * @author  Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2022-04-26
     * @desc    description
     * @param   [string]          $prestr [需要签名的字符串]
     */
    private function MyRsaSign($prestr)
    {
        if(stripos($this->config['rsa_private'], '-----') === false)
        {
            $res = "-----BEGIN RSA PRIVATE KEY-----\n";
            $res .= wordwrap($this->config['rsa_private'], 64, "\n", true);
            $res .= "\n-----END RSA PRIVATE KEY-----";
        } else {
            $res = $this->config['rsa_private'];
        }
        $key = openssl_get_privatekey($res);
        openssl_sign($prestr, $sign, $key, OPENSSL_ALGO_MD5);
        unset($key);
        return base64_encode($sign);
    }

    /**
     * 验证签名
     * @author  Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2022-04-26
     * @desc    description
     * @param   [string]          $prestr [需要签名的字符串]
     * @param   [string]          $sign   [签名]
     */
    private function OutRsaVerify($prestr, $sign)
    {
        if(stripos($this->config['out_rsa_public'], '-----') === false)
        {
            $res = "-----BEGIN PUBLIC KEY-----\n";
            $res .= wordwrap($this->config['out_rsa_public'], 64, "\n", true);
            $res .= "\n-----END PUBLIC KEY-----";
        } else {
            $res = $this->config['out_rsa_public'];
        }
        $key = openssl_pkey_get_public($res);
        if($key)
        {
            $verify = openssl_verify($prestr, base64_decode($sign), $key, OPENSSL_ALGO_MD5);
            unset($key);
        }
        return (isset($verify) && $verify == 1) ? true : false;
    }

    /**
     * 自定义成功返回内容
     * @author  Devil
     * @blog    http://gong.gg/
     * @version 1.0.0
     * @date    2020-07-01
     * @desc    description
     */
    public function SuccessReturn()
    {
        return '0000';
    }
}
?>