<?php

declare(strict_types=1);

namespace Tavaan\Engine\Event\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * event:outbox-relay command.
 */
final class EventOutboxRelayCommand implements CommandInterface
{
    public function name(): string
    {
        return 'event:outbox-relay';
    }

    public function description(): string
    {
        return 'Run event:outbox-relay (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
