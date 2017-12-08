<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use AopClient;

class TestController extends Controller
{
    function index(){
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
