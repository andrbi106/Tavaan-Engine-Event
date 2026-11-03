<?php

declare(strict_types=1);

namespace Tavaan\Engine\Event\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * event:list command.
 */
final class EventListCommand implements CommandInterface
{
    public function name(): string
    {
        return 'event:list';
    }

    public function description(): string
    {
        return 'Run event:list (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
