<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use AopClient;

class TestController extends Controller
{
    function index2(){
        //MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAsXeipgTyIJrrACuUNHb+Q3RQvqSGcQnAHR9+hwepj73xj/OXI6U+AAlIEjByElk6j2LpUGCv23faEI19o3AMoH6sYv1WP5UJR+C0oLPgNGJUrRNviuy4GNYM1t6RThqAuvzeSZ4HFRXF2RzqFe2KTBxwaxBv3cCMUtO2vZcalgwHRqSFa15sPlFctuP5h/Y80kZdzaFVNiRd2gz/eyWHDZOdTS60Jirs46maBnR0kwHiYkOq2K2AXy4mBV1hN5UMiEWcs+Nyz9b62N6yaE9kufz3iMvnIFlhr7iEuMAWA05pUggzdmUltBDHGOPfxNwGfAyb/OoDc6SD7lAq1I1JCQIDAQAB
        $c = new AopClient();
        $c->gatewayUrl = "https://openapi.alipay.com/gateway.do";
        $c->appId = "2017120700425333";
        $c->rsaPrivateKey = 'MIIEogIBAAKCAQEAsXeipgTyIJrrACuUNHb+Q3RQvqSGcQnAHR9+hwepj73xj/OXI6U+AAlIEjByElk6j2LpUGCv23faEI19o3AMoH6sYv1WP5UJR+C0oLPgNGJUrRNviuy4GNYM1t6RThqAuvzeSZ4HFRXF2RzqFe2KTBxwaxBv3cCMUtO2vZcalgwHRqSFa15sPlFctuP5h/Y80kZdzaFVNiRd2gz/eyWHDZOdTS60Jirs46maBnR0kwHiYkOq2K2AXy4mBV1hN5UMiEWcs+Nyz9b62N6yaE9kufz3iMvnIFlhr7iEuMAWA05pUggzdmUltBDHGOPfxNwGfAyb/OoDc6SD7lAq1I1JCQIDAQABAoIBAA94X1xbmAPRnWTBZ8T/DoEw1Y0Y6INYF0Ayq6P3vgdCxpkG4gkAcZwtMvQq9va0go9XTwFrvEjEdOT2gJpLvT4MbNigPvGB+3Ihm31a0NOgMsN3q0SQCChaGHpuonoNg2VJf9MpDHMBF+MqSxmoQGMMI5yhrS7GhzT9MbPrRS0JMDFGCNjgwL7v5c+XKiSp/4Jxgfx5pAJlmxf8rv7cmqr/aJ7xvuu6DZiZnUzdJ9eSf9+sjrufKhClqJL0jg/GmNQikuNDkyNHP5qxQjZ8ljNxAjr1xdg46stN2GJi4ZOrpLG6zBBsTuaCBYL29BvimZBd7Gu6wg2GJ6n3To5bc1UCgYEA324k1mToTkTTSvEku/vWYmwlFsp8ZAQgqHQhb/LODK8ZIEn3LSZk5aXKeB6jLjp/sEjQj3Nytu5yQmQp44i/iQrTktdKYeXMMtT14wrCP6vwnzIONQ5E4mVTAp1Bjvc8yCVjRWdl1Do44pYT8Q23TmibtTEi6ckDEzIwHxF/0d8CgYEAy1ZFPvWKhcTEV8nqXBIZqVtf8ovJdoxp5f2RROY8nO96/5LFoEuu2NV/3uSdk760f1genyyBMpLB1slYXm985aLYBnaiXlpGKPEvWGf0zfFcQZOjRDJPJyOm5m1CwKXv05GrQeNs3UqpbHckCadLMNcxxg4toq7g1pUvwDooUhcCgYAEUOphQd3C9U1nmzTsdLb1e8VTpWG1xOakmmmy8evNDuzbVNJzitRUI1m/7EeWswaYby+oNcC3i++lHK46eP/KM+1WXtZPAdNp//coBaMu+7FQQfVITRhDj1WFLWiAzIHeE+rRAmhTKzTCG8gS1gL+fsLTQzm7bmiizEtlrj7b3QKBgChMz+qbhbnfdr6jgTSATd+4AXsz41kAmViA+hK6wxajjDAtKcgMV/oXzoEhtG185Y87qs4HZw/b8FkejMoitJFaxg/54VJr9+3TZ3vRFr7ecFd66GfyxKdQNJsE2q8N9EttWpDzfzcYvh2GO3lCU++5Jt9HHhpZKKy+4rjpjeY/AoGADyr4Y65V5Zseg+Nfsag6hDkkf6JJB69zDgec/Hryse5haCqLX55a89WcPZEVkLYYAB53IxwTrvFSnNTg4QYLq9PbOyEAKORQ6cRD3NfqTNKzDflB+qYcr9KHfpiz15yCcZd1o7/7tWPJr8xDs2HpwgbzA5YqP4dnY9Rpt+NqWY8=' ;
        $c->format = "json";
        $c->charset= "UTF-8";
        $c->signType= "RSA";
        $c->alipayrsaPublicKey = 'MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDDI6d306Q8fIfCOaTXyiUeJHkrIvYISRcc73s3vF1ZT7XN8RNPwJxo8pWaJMmvyTn9N4HQ632qJBVHf8sxHi/fEsraprwCtzvzQETrNRwVxLO5jVmRGi60j8Ue1efIlzPXV9je9mkjzOmdssymZkh2QhUrCmZYI/FCEa3/cNMW0QIDAQAB';
        //$c->alipayrsaPublicKey = 'MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCnxj/9qwVfgoUh/y2W89L6BkRAFljhNhgPdyPuBV64bfQNN1PjbCzkIM6qRdKBoLPXmKKMiFYnkd6rAoprih3/PrQEB/VsW8OoM8fxn67UDYuyBTqA23MML9q1+ilIZwBC2AQ2UBVOrFXfFl75p6/B5KsiNG9zpgmLCUYuLkxpLQIDAQAB';
//实例化具体API对应的request类,类名称和接口名称对应,当前调用接口名称：alipay.open.public.template.message.industry.modify
        $request = new \AlipayTradeAppPayRequest();
//SDK已经封装掉了公共参数，这里只需要传入业务参数
        /*
        $bizcontent = "{\"body\":\"test\","
            . "\"subject\": \"Apptest\","
            . "\"out_trade_no\": \"201712345436436\","
            . "\"timeout_express\": \"30m\","
            . "\"total_amount\": \"0.01\","
            . "\"product_code\":\"QUICK_MSECURITY_PAY\""
            . "}";
        dump($bizcontent);
        */

        $bizcontent = [
            'body'=>'test',
            'subject' => 'Apptest',
            'out_trade_no' => (string)time(),
            'total_amount' => '0.01',
            'timeout_express' => '30m',
            'product_code' => "QUICK_MSECURITY_PAY"
        ];
        $bizcontent = json_encode($bizcontent);
        $request->setNotifyUrl("http://jc.xyzxzy.cn/public/alipay");
        $request->setBizContent($bizcontent);
        //这里和普通的接口调用不同，使用的是sdkExecute
        $response = $c->sdkExecute($request);
        //$response = urldecode($response);
//htmlspecialchars是为了输出到页面时防止被浏览器将关键参数html转义，实际打印到日志以及http传输不会有这个问题
        echo htmlspecialchars($response);//就是orderString 可以直接给客户端请求，无需再做处理。

    }

    function index(){
        header('Access-Control-Allow-Origin: *');
        header('Content-type: text/plain');
// 获取支付金额
        $amount='';

        $total = floatval($amount);
        if(!$total){
            $total = 1;
        }
// 对签名字符串转义
        function createLinkstring($para) {
            $arg  = "";
            while (list ($key, $val) = each ($para)) {
                $arg.=$key.'="'.$val.'"&';
            }
            //去掉最后一个&字符
            $arg = substr($arg,0,count($arg)-2);
            //如果存在转义字符，那么去掉转义
            if(get_magic_quotes_gpc()){$arg = stripslashes($arg);}
            return $arg;
        }
// 签名生成订单信息
        function rsaSign($data) {
            $priKey = "-----BEGIN RSA PRIVATE KEY-----
MIIEogIBAAKCAQEAsXeipgTyIJrrACuUNHb+Q3RQvqSGcQnAHR9+hwepj73xj/OXI6U+AAlIEjByElk6j2LpUGCv23faEI19o3AMoH6sYv1WP5UJR+C0oLPgNGJUrRNviuy4GNYM1t6RThqAuvzeSZ4HFRXF2RzqFe2KTBxwaxBv3cCMUtO2vZcalgwHRqSFa15sPlFctuP5h/Y80kZdzaFVNiRd2gz/eyWHDZOdTS60Jirs46maBnR0kwHiYkOq2K2AXy4mBV1hN5UMiEWcs+Nyz9b62N6yaE9kufz3iMvnIFlhr7iEuMAWA05pUggzdmUltBDHGOPfxNwGfAyb/OoDc6SD7lAq1I1JCQIDAQABAoIBAA94X1xbmAPRnWTBZ8T/DoEw1Y0Y6INYF0Ayq6P3vgdCxpkG4gkAcZwtMvQq9va0go9XTwFrvEjEdOT2gJpLvT4MbNigPvGB+3Ihm31a0NOgMsN3q0SQCChaGHpuonoNg2VJf9MpDHMBF+MqSxmoQGMMI5yhrS7GhzT9MbPrRS0JMDFGCNjgwL7v5c+XKiSp/4Jxgfx5pAJlmxf8rv7cmqr/aJ7xvuu6DZiZnUzdJ9eSf9+sjrufKhClqJL0jg/GmNQikuNDkyNHP5qxQjZ8ljNxAjr1xdg46stN2GJi4ZOrpLG6zBBsTuaCBYL29BvimZBd7Gu6wg2GJ6n3To5bc1UCgYEA324k1mToTkTTSvEku/vWYmwlFsp8ZAQgqHQhb/LODK8ZIEn3LSZk5aXKeB6jLjp/sEjQj3Nytu5yQmQp44i/iQrTktdKYeXMMtT14wrCP6vwnzIONQ5E4mVTAp1Bjvc8yCVjRWdl1Do44pYT8Q23TmibtTEi6ckDEzIwHxF/0d8CgYEAy1ZFPvWKhcTEV8nqXBIZqVtf8ovJdoxp5f2RROY8nO96/5LFoEuu2NV/3uSdk760f1genyyBMpLB1slYXm985aLYBnaiXlpGKPEvWGf0zfFcQZOjRDJPJyOm5m1CwKXv05GrQeNs3UqpbHckCadLMNcxxg4toq7g1pUvwDooUhcCgYAEUOphQd3C9U1nmzTsdLb1e8VTpWG1xOakmmmy8evNDuzbVNJzitRUI1m/7EeWswaYby+oNcC3i++lHK46eP/KM+1WXtZPAdNp//coBaMu+7FQQfVITRhDj1WFLWiAzIHeE+rRAmhTKzTCG8gS1gL+fsLTQzm7bmiizEtlrj7b3QKBgChMz+qbhbnfdr6jgTSATd+4AXsz41kAmViA+hK6wxajjDAtKcgMV/oXzoEhtG185Y87qs4HZw/b8FkejMoitJFaxg/54VJr9+3TZ3vRFr7ecFd66GfyxKdQNJsE2q8N9EttWpDzfzcYvh2GO3lCU++5Jt9HHhpZKKy+4rjpjeY/AoGADyr4Y65V5Zseg+Nfsag6hDkkf6JJB69zDgec/Hryse5haCqLX55a89WcPZEVkLYYAB53IxwTrvFSnNTg4QYLq9PbOyEAKORQ6cRD3NfqTNKzDflB+qYcr9KHfpiz15yCcZd1o7/7tWPJr8xDs2HpwgbzA5YqP4dnY9Rpt+NqWY8=
-----END RSA PRIVATE KEY-----";
            $res = openssl_get_privatekey($priKey);
            openssl_sign($data, $sign, $res);
            openssl_free_key($res);
            $sign = base64_encode($sign);
            $sign = urlencode($sign);
            return $sign;
        }
// 支付宝合作者身份ID，以2088开头的16位纯数字
        $partner = "2088221422641136";
// 支付宝账号
        $seller_id = '422064362@qq.com';
// 商品网址
        $base_path = urlencode('http://www.dcloud.io/helloh5/');
// 异步通知地址
        $notify_url = urlencode('http://demo.dcloud.net.cn/payment/alipay/notify.php');
// 订单标题
        $subject = 'DCloud项目捐赠';
// 订单详情
        $body = 'DCloud致力于打造HTML5最好的移动开发工具，包括终端的Runtime、云端的服务和IDE，同时提供各项配套的开发者服务。';
// 订单号，示例代码使用时间值作为唯一的订单ID号
        $out_trade_no = date('YmdHis', time());
        $parameter = array(
            'service'        => 'mobile.securitypay.pay',   // 必填，接口名称，固定值
            'partner'        => $partner,                   // 必填，合作商户号
            '_input_charset' => 'UTF-8',                    // 必填，参数编码字符集
            'out_trade_no'   => $out_trade_no,              // 必填，商户网站唯一订单号
            'subject'        => $subject,                   // 必填，商品名称
            'payment_type'   => '1',                        // 必填，支付类型
            'seller_id'      => $seller_id,                 // 必填，卖家支付宝账号
            'total_fee'      => $total,                     // 必填，总金额，取值范围为[0.01,100000000.00]
            'body'           => $body,                      // 必填，商品详情
            'it_b_pay'       => '1d',                       // 可选，未付款交易的超时时间
            'notify_url'     => $notify_url,                // 可选，服务器异步通知页面路径
            'show_url'       => $base_path                  // 可选，商品展示网站
        );
//生成需要签名的订单
        $orderInfo = createLinkstring($parameter);
//签名
        $sign = rsaSign($orderInfo);
//生成订单
        echo $orderInfo.'&sign="'.$sign.'"&sign_type="RSA"';
    }
}
