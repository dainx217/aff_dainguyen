<?php
return [
    'sidebar' => [
        
        [
            'name' => 'Admin',
            'class-icon' => 'la la-cogs',
            'sub' => [
                [
                    'name' => 'Permission',
                    'route' => 'get_admin.permission.index'
                ],
                [
                    'name' => 'Role',
                    'route' => 'get_admin.role.index'
                ],
                [
                    'name' => 'Quản trị viên',
                    'route' => 'get_admin.account.index'
                ],

            ]
        ],
        [
            'name' => 'User Sell',
            'class-icon' => 'la la-tachometer-alt',
            'sub' => [
                [
                    'name' => 'Danh sách thành viên',
                    'route' => 'get_admin.user.index'
                ],
                [
                    'name' => 'Tài khoản bị khóa',
                    'route' => 'get.indexmovetrash'
                ],
            ]
        ],
        [
            'name' => 'Affiliate',
            'class-icon' => 'la la-tachometer-alt',
            'sub' => [
                [
                    'name' => 'Quản lý chiến dịch',
                    'route' => 'get_admin.campaign.index'
                ],
                
            ]
        ],

    ]
];
