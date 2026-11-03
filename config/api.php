<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Api Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور api — همهٔ کلیدهای مستندشده در `docs/03-engines/api.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/api.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('API_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('API_PREFIX', 'api:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('API_LOG_CHANNEL', 'api'),
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];