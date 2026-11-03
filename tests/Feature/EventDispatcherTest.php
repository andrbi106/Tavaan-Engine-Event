<?php

declare(strict_types=1);

namespace Tavaan\Engine\Event\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\Event\EventDispatcher;
use Tavaan\Engine\Event\EventDispatcherServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور EventDispatcher.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class EventDispatcherTest extends TestCase
{
    private EventDispatcher $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new EventDispatcher($config);
    }

    /**
     * T-01: ترتیب Priority قطعی (۳ Listener با priority 100/0/50)
     */
    public function test_t01__priority___listener(): void
    {
        // TODO: پیاده‌سازی سناریوی T-01 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-01 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-02: Wildcard `shop.order.*` فقط مطابقی‌ها
     */
    public function test_t02_wildcard_shoporder__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-02 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-02 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-03: `until()` در اولین پاسخ غیر-null متوقف می‌شود
     */
    public function test_t03_until____null_(): void
    {
        // TODO: پیاده‌سازی سناریوی T-03 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-03 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-04: `stopPropagation()` جلوی بقیه را می‌گیرد
     */
    public function test_t04_stop_propagation____(): void
    {
        // TODO: پیاده‌سازی سناریوی T-04 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-04 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-05: Listener با خطا → لاگ + ادامه (`stop_on_error=false`)
     */
    public function test_t05_listener_______st(): void
    {
        // TODO: پیاده‌سازی سناریوی T-05 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-05 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-06: `ShouldQueue` → push به FakeQueue، بدون اجرای همزمان
     */
    public function test_t06_should_queue__push__fake_queue(): void
    {
        // TODO: پیاده‌سازی سناریوی T-06 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-06 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-07: Outbox در تراکنش rollback → ۰ رکورد
     */
    public function test_t07_outbox___rollback___(): void
    {
        // TODO: پیاده‌سازی سناریوی T-07 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-07 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-08: Outbox در تراکنش commit → ۱ رکورد + Relay → `sent`
     */
    public function test_t08_outbox___commit___(): void
    {
        // TODO: پیاده‌سازی سناریوی T-08 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-08 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-09: Inbox: مصرف دوبارهٔ همان key → بدون اثر جانبی
     */
    public function test_t09_inbox____key__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-09 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-09 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-10: ۳ Relay موازی → هر رویداد فقط یک‌بار `sent`
     */
    public function test_t10__relay______(): void
    {
        // TODO: پیاده‌سازی سناریوی T-10 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-10 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-11: پس از `max_attempts` → `dead` + Event
     */
    public function test_t11___max_attempts__dead__even(): void
    {
        // TODO: پیاده‌سازی سناریوی T-11 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-11 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-12: `Event::fake()` → `assertDispatched` درست
     */
    public function test_t12_eventfake__assert_dispatched_(): void
    {
        // TODO: پیاده‌سازی سناریوی T-12 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-12 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-13: Discovery Cache → Listenerها بدون اسکن ثبت می‌شوند
     */
    public function test_t13_discovery_cache__listener_(): void
    {
        // TODO: پیاده‌سازی سناریوی T-13 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-13 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-14: Subscriber با چند رویداد
     */
    public function test_t14_subscriber___(): void
    {
        // TODO: پیاده‌سازی سناریوی T-14 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-14 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-15: Hierarchical: Listener روی Interface، رویداد پیاده‌سازی را می‌گیرد
     */
    public function test_t15_hierarchical_listener__inte(): void
    {
        // TODO: پیاده‌سازی سناریوی T-15 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-15 هنوز پیاده‌سازی نشده است.');
    }

}