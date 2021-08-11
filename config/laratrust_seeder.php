<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'administrator' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],

        //AHRIS
        'admin-ahris' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'admin-access' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'admin-benefits' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],


         //Dynamic Survey Builder
         'admin-survey' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'creator-survey' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'report-survey' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],


        //Web Control Panel
        'admin-website' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'design-website' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'material-website' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'posting-website' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],

        //ICTD-MONITORING
        'admin-ict' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'admin-backup' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'staff-backup' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'monitoring-backup' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        


        //DMS
        'dms-ahris' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'dms-uploader' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'dms-uploader' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],

        //HO/Branch

        'div-head' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],

        'div-ass-head' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],

        'heads' => [
            'profile' => 'c,r,u,d',
        ],
        'emp' => [
            'profile' => 'c,r,u,d',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
