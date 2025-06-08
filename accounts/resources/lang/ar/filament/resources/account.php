<?php

return [
    'form' => [
        'sections' => [
            'fields' => [
                'code'          => 'الرمز',
                'account-name'  => 'اسم الحساب',
                'accounting'    => 'محاسبة',
                'account-type'  => 'نوع الحساب',
                'default-taxes' => 'الضرائب الافتراضية',
                'tags'          => 'الوسوم',
                'journals'      => 'دفاتر اليومية',
                'currency'      => 'العملة',
                'deprecated'    => 'مهمل',
                'reconcile'     => 'تسوية',
                'non-trade'     => 'غير تجاري',
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'code'         => 'الرمز',
            'account-name' => 'اسم الحساب',
            'account-type' => 'نوع الحساب',
            'currency'     => 'العملة',
            'deprecated'   => 'مهمل',
            'reconcile'    => 'تسوية',
            'non-trade'    => 'غير تجاري',
        ],

        'actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف الحساب',
                    'body'  => 'تم حذف الحساب بنجاح.',
                ],
            ],
        ],

        'bulk-actions' => [
            'delete' => [
                'notification' => [
                    'title' => 'تم حذف الحسابات',
                    'body'  => 'تم حذف الحسابات بنجاح.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'name'            => 'الاسم',
                'tax-type'        => 'نوع الضريبة',
                'tax-computation' => 'حساب الضريبة',
                'tax-scope'       => 'نطاق الضريبة',
                'status'          => 'الحالة',
                'amount'          => 'المبلغ',
            ],

            'field-set' => [
                'advanced-options' => [
                    'title' => 'خيارات متقدمة',

                    'entries' => [
                        'invoice-label'       => 'تسمية الفاتورة',
                        'tax-group'           => 'مجموعة الضريبة',
                        'country'             => 'الدولة',
                        'include-in-price'    => 'تضمين في السعر',
                        'include-base-amount' => 'تضمين المبلغ الأساسي',
                        'is-base-affected'    => 'هل يتأثر الأساس',
                    ],
                ],

                'description-and-legal-notes' => [
                    'title'   => 'الوصف والملاحظات القانونية للفاتورة',
                    'entries' => [
                        'description' => 'الوصف',
                        'legal-notes' => 'ملاحظات قانونية',
                    ],
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'entries' => [
                'code'          => 'الرمز',
                'account-name'  => 'اسم الحساب',
                'accounting'    => 'محاسبة',
                'account-type'  => 'نوع الحساب',
                'default-taxes' => 'الضرائب الافتراضية',
                'tags'          => 'الوسوم',
                'journals'      => 'دفاتر اليومية',
                'currency'      => 'العملة',
                'deprecated'    => 'مهمل',
                'reconcile'     => 'تسوية',
                'non-trade'     => 'غير تجاري',
            ],
        ],
    ],
];
