<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Gross price as base price
    |--------------------------------------------------------------------------
    |
    | This default value is used to select the method to calculate prices and taxes
    | If true the item price is managed as a gross price, so taxes will be calculated by separation/exclusion
    |
    */

    'calculator' => \Gloudemans\Shoppingcart\Calculation\DefaultCalculator::class,

    /*
    |--------------------------------------------------------------------------
    | Default tax rate
    |--------------------------------------------------------------------------
    |
    | This default tax rate will be used when you make a class implement the
    | Taxable interface and use the HasTax trait.
    |
    */

    'tax' => 10,

    /*
    |--------------------------------------------------------------------------
    | Shoppingcart database settings
    |--------------------------------------------------------------------------
    |
    | Here you can set the connection that the shoppingcart should use when
    | storing and restoring a cart.
    |
    */

    'database' => [

        'connection' => null,

        'table' => 'shoppingcart',

    ],

    /*
    |--------------------------------------------------------------------------
    | Destroy the cart on user logout
    |--------------------------------------------------------------------------
    |
    | When this option is set to 'true' the cart will automatically
    | destroy all cart instances when the user logs out.
    |
    */

    'destroy_on_logout' => false,

    /*
    |--------------------------------------------------------------------------
    | Default number format
    |--------------------------------------------------------------------------
    |
    | This defaults will be used for the formatted numbers if you don't
    | set them in the method call.
    |
    */

    'format' => [

        'decimals' => 2,

        'decimal_point' => '.',

        'thousand_separator' => ',',

    ],
    'pay_type' => [
        0=>[
            'name' => 'Ch??a ho??n th??nh ?????t h??ng',
            'type' => '0',
            'class' => '',
            'bank' => '',
            'account' => '',
            'address' => '',
            'hotline' => '',
            'email' => ''
        ],
        1=>[
            'name' => 'Chuy???n kho???n',
            'type' => '1',
            'class' => '',
            'bank' => '',
            'account' => '',
            'address' => '',
            'hotline' => '',
            'email' => ''
        ],
        2=>[
            'name' => 'COD',
            'type' => '2',
            'class' => '',
            'bank' => 'Thanh to??n khi nh???n h??ng',
            'account' => '',
            'address' => '',
            'hotline' => '',
            'email' => ''
        ],
        3=>[
            'name' => 'MOMO',
            'type' => '3',
            'class' => '',
            'bank' => 'B???n ph???i c?? t??i kho???n Momo',
            'account' => '',
            'address' => '',
            'hotline' => '',
            'email' => ''
        ],
        4=>[
            'name' => 'VNPAY',
            'type' => '4',
            'class' => '',
            'bank' => 'B???n ph???i c?? t??i kho???n VNPay',
            'account' => '',
            'address' => '',
            'hotline' => '',
            'email' => ''
        ],
    ]

];
