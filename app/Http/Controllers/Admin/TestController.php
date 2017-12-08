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
        $c->rsaPrivateKey = 'MIIEpAIBAAKCAQEAo5Wu/nA1aXCwvHuAfz7JcZNxOLTzWV4iuITFAHBjaqNuGJQItdplyEdKDuMTiqMeeDHQ2fCfJZRNz7NsTJ9l6n+DsZBjknMUCzPzTzfo3F6W8nuzhv0yoJLYCA/sxVo8yHR88hYEJd6zVGqDhz8QI972aRIaJG2KEpOn0qFYmn17nvOPPyZ97a6ql/uyLUPx2xYSNfA8fWn9njvtusrDNPCUXLWWBB8BdChWJdNIVTqX3iWM38Obfh+f4SFZf0VGVfczEvpgbS89oNgUW7xlTz8mrGSVoCjPz45IuizkE2K+eppN80w3mi3r/9vttnNP4gP4pTT0qeu+d3rxsHO74QIDAQABAoIBABa4HTu9Pc3NFt62kFwbzkJ15c2oY/vPdScHWYz8DvKqjAnh1WvcTzKHpCN5KiehDARJduYt4wyHEl98XdgucyskVpf8o7edP/VmW65u52pjwLcgswhWdgeTHWnRPGMUa0iz1P6STDUuPt3EhUvtWEKDHtns57CTfg+ibjZ0rieWeQ6VEE6zu20tLkrvd+hdPU8Kq7ARDAH8vr1Nr2j5Ld+dgOiMFiovSXeJoMhV0RjcYiafRX5rpG/LM30kV61XMdvY1Z+FHYY0mW6GkHnuoMJ0/x9q+eaJ3x2x1yivWcKEP75wub3HlJ6/MS26yaV0nCpYLAn5Ia+KyJO9t8xrBLkCgYEA0bvksIs5Q6HJ4rJ4BgmwSfhJT0LdLHj1+4TaiRzq/NV37D+snf1AWcLAilt4MqgY3lAyfg8YoBv4PgGx3dbvxJqSNWlj9hQmxQKiYPgEoUMjXi6TRxh50Wo6n9WEqeQB5vjmGkvDt9/GkA97ljMv4r0V72JPPAxWqoTttcPlU28CgYEAx6ulp6OrPcIsWPcvGlcSHjsddjOvxtyMvQVmNejXM2wIa6RKpoLOk7NX7JYGcTwGW7LsP4mXKEmx1k2xYvjciFcikqmRGTI3VrkZGMv6ERTHMWN9Oul0ch35IJTSdaWBhDw4YywxaRsa6mXUhLtlIa8vq7YRNoseYljdWVb1/a8CgYBWd5tZ+ZwbOPltn9yByL7IUDeRGOTsb9Yh4uzh+G0c3bk6SioVXJKKLxOINxu/7rOJ/BBFDl49rCpVDgfRiMqDCKLcqF2Q11AAiwx84+OsxGwxaQxJFFssrhoLSVEPZbQvEFB1aOUAyp4nSGrQSrwkQ4ZmkeZOwFt+o50JAgFquwKBgQCV+qWMnVDEK/T5wnn8FAkE8ix4G+zdt85zMPoMZmA3PN+6UwbLuheHNEBH8ozWQ1sXR/dS5nvHBEvziBpFGF82fhT3Cy11OpX8qz5htN2aNPxGac+oD7GrAj6eLYtEWVRGyqEkRQ68P2LhTCnspYIaYiexmCmnyanB/7QMJljR+wKBgQCAZ2RTK/BSIUArjw6OGfCPd2AFB6kKQdi2xCs4NPFYFI9l8/4iIPoJQtPG/tm7mET0qB4rTb4NO9vWcbO1bTw1Teth1PHGQHSJODkCgYkmN/hZS8X3ewJcbp7cOrrFm7ahTHmn2jpROnt+6XH/WMjwwjf+YVD+jS+ImdMyEQO68w==' ;
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
