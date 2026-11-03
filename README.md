# Tavaan Engine — Event

> **رویداد و Outbox** — موتور Event در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.event` |
| نام | `Event` |
| عنوان فارسی | رویداد و Outbox |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Event` |
| نوع | `engine` |
| Facade | `Event` (accessor: `events`) |

## قراردادها (Contracts)

این موتور قراردادهای زیر را ارائه می‌دهد:

- `Tavaan\Engine\Event\Contracts\DispatcherInterface`

## خطاها (Exceptions)

- `Tavaan\Engine\Event\Exceptions\EventNotAllowlistedException`
- `Tavaan\Engine\Event\Exceptions\ListenerException`
- `Tavaan\Engine\Event\Exceptions\MaxListenersExceededException`

## کلاس‌های اصلی

- `src/Console/OutboxRelayCommand.php`
- `src/EventDispatcher.php`
- `src/EventServiceProvider.php`
- `src/ListenerRegistry.php`
- `src/ListenerResolver.php`
- `src/Outbox/DatabaseOutbox.php`
- `src/OutboxRelay.php`
- `src/RegisteredListener.php`
- `src/TrieNode.php`
- `src/WildcardMatcher.php`

## Service Providerها

- `Tavaan\Engine\Event\EventServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `container`
- `config`

## پیکربندی

- فایل پیکربندی: `config/event.php`
- کلید: `event`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Event.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Event`** (این مخزن) | موتور Event |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
