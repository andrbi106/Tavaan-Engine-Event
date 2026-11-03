<?php

declare(strict_types=1);

namespace Tavaan\Engine\Event;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * OutboxRelay — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Event\Contracts\OutboxRelayInterface
 */
final class OutboxRelay implements Contracts\OutboxRelayInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function relay(/* ... */): mixed
    {
        // TODO: پیاده‌سازی relay مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function retryDead(/* ... */): mixed
    {
        // TODO: پیاده‌سازی retryDead مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function purge(/* ... */): mixed
    {
        // TODO: پیاده‌سازی purge مطابق مستندات (سند §3 API).
        return null;
    }
}