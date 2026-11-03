<?php

declare(strict_types=1);

namespace Tavaan\Engine\Event;

/**
 * OutboxRelay — پیاده‌سازی مطابق مستندات.
 *
 * @see docs/03-engines/ (YAML machine-readable block)
 */
final class OutboxRelay
{
    /**
     * relay
     */
    public function relay(/* ... */): mixed
    {
        return null;
    }
    /**
     * retryDead
     */
    public function retryDead(/* ... */): mixed
    {
        return null;
    }
    /**
     * purge
     */
    public function purge(/* ... */): mixed
    {
        return null;
    }
}
