<?php

return [
    'form' => [
        'sections' => [
            'activity-details' => [
                'title' => 'تفاصيل النشاط',

                'fields' => [
                    'activity-type' => 'نوع النشاط',
                    'summary'       => 'الملخص',
                    'note'          => 'ملاحظة',
                ],
            ],

            'assignment' => [
                'title' => 'التكليف',

                'fields' => [
                    'assignment' => 'التكليف',
                    'assignee'   => 'المكلف',
                ],
            ],

            'delay-information' => [
                'title' => 'معلومات التأخير',

                'fields' => [
                    'delay-count'            => 'عدد التأخيرات',
                    'delay-unit'             => 'وحدة التأخير',
                    'delay-from'             => 'التأخير من',
                    'delay-from-helper-text' => 'مصدر حساب التأخير',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'activity-type' => 'نوع النشاط',
            'summary'       => 'الملخص',
            'assignment'    => 'التكليف',
            'assigned-to'   => 'مكلف إلى',
            'interval'      => 'الفاصل الزمني',
            'delay-unit'    => 'وحدة التأخير',
            'delay-from'    => 'التأخير من',
            'created-by'    => 'أنشأ بواسطة',
            'created-at'    => 'تاريخ الإنشاء',
            'updated-at'    => 'تاريخ التحديث',
        ],

        'groups' => [
            'activity-type' => 'نوع النشاط',
            'assignment'    => 'التكليف',
            'assigned-to'   => 'مكلف إلى',
            'interval'      => 'الفاصل الزمني',
            'delay-unit'    => 'وحدة التأخير',
            'delay-from'    => 'التأخير من',
            'created-by'    => 'أنشأ بواسطة',
            'created-at'    => 'تاريخ الإنشاء',
            'updated-at'    => 'تاريخ التحديث',
        ],

        'filters' => [
            'activity-type'   => 'نوع النشاط',
            'activity-status' => 'حالة النشاط',
            'has-delay'       => 'يوجد تأخير',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تحديث قالب النشاط',
                    'body'  => 'تم تحديث قالب النشاط بنجاح.',
                ],
            ],

            'create' => [
                'notification' => [
                    'title' => 'تم إنشاء قالب النشاط',
                    'body'  => 'تم إنشاء قالب النشاط بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف قالب النشاط',
                    'body'  => 'تم حذف قالب النشاط بنجاح.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف قوالب النشاط',
                    'body'  => 'تم حذف قوالب النشاط بنجاح.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'activity-details' => [
                'title' => 'تفاصيل النشاط',

                'entries' => [
                    'activity-type' => 'نوع النشاط',
                    'summary'       => 'الملخص',
                ],
            ],

            'assignment' => [
                'title' => 'التكليف',

                'entries' => [
                    'assignment' => 'التكليف',
                    'assignee'   => 'المكلف',
                ],
            ],

            'delay-information' => [
                'title' => 'معلومات التأخير',

                'entries' => [
                    'delay-count'            => 'عدد التأخيرات',
                    'delay-unit'             => 'وحدة التأخير',
                    'delay-from'             => 'التأخير من',
                    'delay-from-helper-text' => 'مصدر حساب التأخير',
                ],
            ],
        ],

        'note' => 'ملاحظة',
    ],
];
