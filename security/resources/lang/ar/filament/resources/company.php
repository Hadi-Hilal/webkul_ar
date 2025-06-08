<?php

return [
    'title' => 'الشركات',

    'navigation' => [
        'title' => 'الشركات',
        'group' => 'الإعدادات',
    ],

    'global-search' => [
        'name'  => 'الاسم',
        'email' => 'البريد الإلكتروني',
    ],

    'form' => [
        'sections' => [
            'company-information' => [
                'title'  => 'معلومات الشركة',
                'fields' => [
                    'name'                  => 'اسم الشركة',
                    'registration-number'   => 'رقم التسجيل',
                    'company-id'            => 'معرّف الشركة',
                    'tax-id'                => 'الرقم الضريبي',
                    'tax-id-tooltip'        => 'الرقم الضريبي هو معرف فريد لشركتك.',
                    'website'               => 'الموقع الإلكتروني',
                ],
            ],

            'address-information' => [
                'title'  => 'معلومات العنوان',
                'fields' => [
                    'street1'        => 'الشارع 1',
                    'street2'        => 'الشارع 2',
                    'city'           => 'المدينة',
                    'zipcode'        => 'الرمز البريدي',
                    'country'        => 'الدولة',
                    'currency-name'  => 'اسم العملة',
                    'phone-code'     => 'رمز الهاتف',
                    'code'           => 'الكود',
                    'country-name'   => 'اسم الدولة',
                    'state-required' => 'الولاية مطلوبة',
                    'zip-required'   => 'الرمز البريدي مطلوب',
                    'create-country' => 'إنشاء دولة',
                    'state'          => 'الولاية',
                    'state-name'     => 'اسم الولاية',
                    'state-code'     => 'رمز الولاية',
                    'create-state'   => 'إنشاء ولاية',
                ],
            ],

            'additional-information' => [
                'title' => 'معلومات إضافية',
                'fields' => [
                    'default-currency'        => 'العملة الافتراضية',
                    'currency-name'           => 'اسم العملة',
                    'currency-full-name'      => 'الاسم الكامل للعملة',
                    'currency-symbol'         => 'رمز العملة',
                    'currency-iso-numeric'    => 'الرقم التسلسلي ISO للعملة',
                    'currency-decimal-places' => 'عدد المنازل العشرية للعملة',
                    'currency-rounding'       => 'تقريب العملة',
                    'currency-status'         => 'حالة العملة',
                    'company-foundation-date' => 'تاريخ تأسيس الشركة',
                    'currency-create'         => 'إنشاء عملة',
                    'status'                  => 'الحالة',
                ],
            ],

            'branding' => [
                'title'  => 'العلامة التجارية',
                'fields' => [
                    'company-logo' => 'شعار الشركة',
                    'color'        => 'اللون',
                ],
            ],

            'contact-information' => [
                'title'  => 'معلومات الاتصال',
                'fields' => [
                    'email'  => 'عنوان البريد الإلكتروني',
                    'phone'  => 'رقم الهاتف',
                    'mobile' => 'رقم الهاتف المحمول',
                ],
            ],
        ],
    ],

    'table' => [
        'columns' => [
            'logo'                 => 'الشعار',
            'company-name'         => 'اسم الشركة',
            'branches'             => 'الفروع',
            'email'                => 'البريد الإلكتروني',
            'city'                 => 'المدينة',
            'country'              => 'الدولة',
            'currency'             => 'العملة',
            'status'               => 'الحالة',
            'created-at'           => 'تاريخ الإنشاء',
            'updated-at'           => 'تاريخ التحديث',
        ],

        'groups' => [
            'company-name' => 'اسم الشركة',
            'city'         => 'المدينة',
            'country'      => 'الدولة',
            'state'        => 'الولاية',
            'email'        => 'البريد الإلكتروني',
            'phone'        => 'الهاتف',
            'currency'     => 'العملة',
            'created-at'   => 'تاريخ الإنشاء',
            'updated-at'   => 'تاريخ التحديث',
        ],

        'filters' => [
            'status'  => 'الحالة',
            'country' => 'الدولة',
        ],

        'actions' => [
            'edit' => [
                'notification' => [
                    'title' => 'تم تعديل الشركة',
                    'body'  => 'تم تعديل الشركة بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف الشركة',
                    'body'  => 'تم حذف الشركة بنجاح.',
                ],
            ],

            'restore' => [
                'notification' => [
                    'title' => 'تم استعادة الشركة',
                    'body'  => 'تم استعادة الشركة بنجاح.',
                ],
            ],
        ],

        'bulk-actions' => [
            'restore' => [
                'notification' => [
                    'title' => 'تم استعادة الشركات',
                    'body'  => 'تم استعادة الشركات بنجاح.',
                ],
            ],

            'delete' => [
                'notification' => [
                    'title' => 'تم حذف الشركات',
                    'body'  => 'تم حذف الشركات بنجاح.',
                ],
            ],

            'force-delete' => [
                'notification' => [
                    'title' => 'تم الحذف النهائي للشركات',
                    'body'  => 'تم الحذف النهائي للشركات بنجاح.',
                ],
            ],
        ],

        'empty-state-actions' => [
            'create' => [
                'notification' => [
                    'title' => 'تم إنشاء الشركات',
                    'body'  => 'تم إنشاء الشركات بنجاح.',
                ],
            ],
        ],
    ],

    'infolist' => [
        'sections' => [
            'company-information' => [
                'title'   => 'معلومات الشركة',
                'entries' => [
                    'name'                  => 'اسم الشركة',
                    'registration-number'   => 'رقم التسجيل',
                    'company-id'            => 'معرّف الشركة',
                    'tax-id'                => 'الرقم الضريبي',
                    'tax-id-tooltip'        => 'الرقم الضريبي هو معرف فريد لشركتك.',
                    'website'               => 'الموقع الإلكتروني',
                ],
            ],

            'address-information' => [
                'title'  => 'معلومات العنوان',
                'entries' => [
                    'street1'        => 'الشارع 1',
                    'street2'        => 'الشارع 2',
                    'city'           => 'المدينة',
                    'zipcode'        => 'الرمز البريدي',
                    'country'        => 'الدولة',
                    'currency-name'  => 'اسم العملة',
                    'phone-code'     => 'رمز الهاتف',
                    'code'           => 'الكود',
                    'country-name'   => 'اسم الدولة',
                    'state-required' => 'الولاية مطلوبة',
                    'zip-required'   => 'الرمز البريدي مطلوب',
                    'create-country' => 'إنشاء دولة',
                    'state'          => 'الولاية',
                    'state-name'     => 'اسم الولاية',
                    'state-code'     => 'رمز الولاية',
                    'create-state'   => 'إنشاء ولاية',
                ],
            ],

            'additional-information' => [
                'title' => 'معلومات إضافية',
                'entries' => [
                    'default-currency'        => 'العملة الافتراضية',
                    'currency-name'           => 'اسم العملة',
                    'currency-full-name'      => 'الاسم الكامل للعملة',
                    'currency-symbol'         => 'رمز العملة',
                    'currency-iso-numeric'    => 'الرقم التسلسلي ISO للعملة',
                    'currency-decimal-places' => 'عدد المنازل العشرية للعملة',
                    'currency-rounding'       => 'تقريب العملة',
                    'currency-status'         => 'حالة العملة',
                    'company-foundation-date' => 'تاريخ تأسيس الشركة',
                    'currency-create'         => 'إنشاء عملة',
                    'status'                  => 'الحالة',
                ],
            ],

            'branding' => [
                'title'   => 'العلامة التجارية',
                'entries' => [
                    'company-logo' => 'شعار الشركة',
                    'color'        => 'اللون',
                ],
            ],

            'contact-information' => [
                'title'   => 'معلومات الاتصال',
                'entries' => [
                    'email'  => 'عنوان البريد الإلكتروني',
                    'phone'  => 'رقم الهاتف',
                    'mobile' => 'رقم الهاتف المحمول',
                ],
            ],
        ],
    ],
];
