<?php

return [
    'title'      => 'خطة الاستحقاق',
    'navigation' => [
        'title' => 'خطة الاستحقاق',
    ],

    'form' => [
        'fields' => [
            'name'                    => 'العنوان',
            'is-based-on-worked-time' => 'يعتمد على الوقت العامل',
            'accrued-gain-time'       => 'وقت الاستحقاق المكتسب',
            'carry-over-time'         => 'وقت الترحيل',
            'carry-over-date'         => 'تاريخ الترحيل',
            'status'                  => 'الحالة',
        ],
    ],

    'table' => [
        'columns' => [
            'name'   => 'الاسم',
            'levels' => 'المستويات',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف خطة الاستحقاق',
                    'body'  => 'تم حذف خطة الاستحقاق بنجاح.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف خطة الاستحقاق',
                    'body'  => 'تم حذف خطة الاستحقاق بنجاح.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'entries' => [
            'name'                    => 'الاسم',
            'is-based-on-worked-time' => 'يعتمد على الوقت العامل',
            'accrued-gain-time'       => 'وقت الاستحقاق المكتسب',
            'carry-over-time'         => 'وقت الترحيل',
            'carry-over-day'          => 'يوم الترحيل',
            'carry-over-month'        => 'شهر الترحيل',
        ],
    ],
];
