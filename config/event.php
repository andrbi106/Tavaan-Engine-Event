<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Event Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور event — همهٔ کلیدهای مستندشده در `docs/03-engines/event.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/event.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('EVENT_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('EVENT_PREFIX', 'event:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('EVENT_LOG_CHANNEL', 'event'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Event',
        'accessor' => 'events',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];