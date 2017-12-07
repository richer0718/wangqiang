<?php

return [

	// The default gateway to use
	'default' => 'paypal',

	// Add in each gateway here
	'gateways' => [
		'paypal' => [
			'driver'  => 'PayPal_Express',
			'options' => [
				'solutionType'   => '',
				'landingPage'    => '',
				'headerImageUrl' => ''
			]
		],
        'alipay' => [
            'driver' => 'Alipay_Express',
            'options' => [
                'partner' => 'your pid here',
                'key' => 'your appid here',
                'sellerEmail' =>'your alipay account here',
                'returnUrl' => 'your returnUrl here',
                'notifyUrl' => 'your notifyUrl here'
            ]
        ]
	]

];