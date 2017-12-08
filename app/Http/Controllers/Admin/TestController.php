<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use AopClient;

class TestController extends Controller
{
    function index(){
        $c = new AopClient();
        $c->gatewayUrl = "https://openapi.alipay.com/gateway.do";
        $c->appId = "2017120700425333";
        $c->rsaPrivateKey = 'MIICXQIBAAKBgQDTspc6+wcJj2JQ3aHC9bT7B9ghqhl4dQEc6CfLM0/yZlPQv/fA3Qa+gS+qG7gxSZixbXu7W0N7KQjQo/Ba8eDo8mOnJjb1hGZjJeLQEliHvEzMxmv19GdEoQlDYMxUZpeDeBM1YddBoRgCzBjsNTrKI1fNHQMnI6Lr04yP0aegGQIDAQABAoGAf8BNbQVhyM4jWYN2A839CmRAdIhO2JdbNZOPuBteCnzf5aCDJXr8f+g72F7j97JfF+tm+Lhpb6Bitm3INUm0HCZwPJ/eGMgEfFZB1CFoGJqZ4A3XeZaCDKXAot0uyoYLB/+iyAihNW6j59RRQkty45jL86KJ+z1bgYoCown2wmUCQQDsglt8sSdlxotlOjcTbmsPjpnnZBWZHLS/O4wwFacw+ookSi2F5v4OMr6/dQi7UTTa/I4OJkytMOnnoLy4+JdfAkEA5STIT88Wi4sleAfYVr60QSv9POeu98WAnRJU6YNUDTfaTEctpvfybfISo8Bb+QIdjc0v/FvjGG7ySt2isARThwJBAI5xSIaF77OFa8kQ0cD7PLHG8fyBs9xehKG0TI9dSy/dhTusDVTbNWH5wBZxd0vR8eJ+P1RYTs/0aLvffCpvVkMCQAHXtOCnaqf+m3OGpJ+18t8fSm8F8es+JFWfAx3Jl5BvpYq9e8l+7u0haDL25gZvlOtB/iPKXV4h7kLZ22gM8NsCQQCpfJm0aL1J4HNYz6Ka+7H8xVM87pU/X2JdJlJAfwtMcXs6Gzq/cFTcPrNKVTBewTQxBjpyWjtQm0LFaQzJJWl1' ;
        $c->format = "json";
        $c->charset= "GBK";
        $c->signType= "RSA";
        //$c->alipayrsaPublicKey = 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAo5Wu/nA1aXCwvHuAfz7JcZNxOLTzWV4iuITFAHBjaqNuGJQItdplyEdKDuMTiqMeeDHQ2fCfJZRNz7NsTJ9l6n+DsZBjknMUCzPzTzfo3F6W8nuzhv0yoJLYCA/sxVo8yHR88hYEJd6zVGqDhz8QI972aRIaJG2KEpOn0qFYmn17nvOPPyZ97a6ql/uyLUPx2xYSNfA8fWn9njvtusrDNPCUXLWWBB8BdChWJdNIVTqX3iWM38Obfh+f4SFZf0VGVfczEvpgbS89oNgUW7xlTz8mrGSVoCjPz45IuizkE2K+eppN80w3mi3r/9vttnNP4gP4pTT0qeu+d3rxsHO74QIDAQAB';
        $c->alipayrsaPublicKey = 'MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCnxj/9qwVfgoUh/y2W89L6BkRAFljhNhgPdyPuBV64bfQNN1PjbCzkIM6qRdKBoLPXmKKMiFYnkd6rAoprih3/PrQEB/VsW8OoM8fxn67UDYuyBTqA23MML9q1+ilIZwBC2AQ2UBVOrFXfFl75p6/B5KsiNG9zpgmLCUYuLkxpLQIDAQAB';
//实例化具体API对应的request类,类名称和接口名称对应,当前调用接口名称：alipay.open.public.template.message.industry.modify
        $request = new \AlipayTradeAppPayRequest();
//SDK已经封装掉了公共参数，这里只需要传入业务参数
        $bizcontent = "{\"body\":\"我是测试数据\","
            . "\"subject\": \"App支付测试\","
            . "\"out_trade_no\": \"20170125test02\","
            . "\"timeout_express\": \"30m\","
            . "\"total_amount\": \"0.01\","
            . "\"product_code\":\"QUICK_MSECURITY_PAY\""
            . "}";
        $request->setNotifyUrl("http://jhqck.com/kaisa/public/api/alipay");
        $request->setBizContent($bizcontent);
//这里和普通的接口调用不同，使用的是sdkExecute
        $response = $c->sdkExecute($request);
//htmlspecialchars是为了输出到页面时防止被浏览器将关键参数html转义，实际打印到日志以及http传输不会有这个问题
        echo htmlspecialchars($response);//就是orderString 可以直接给客户端请求，无需再做处理。

    }
}
