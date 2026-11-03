<?php

declare(strict_types=1);

namespace Tavaan\Engine\Event\Contracts;

/**
 * قرارداد OutboxRelay.
 *
 * @see \Tavaan\Engine\Event\OutboxRelay
 * @api 1.0
 */
interface OutboxRelayInterface
{
    /**
     * متد relay.
     *
     * @return mixed
     */
    public function relay(/* ... */): mixed;

    /**
     * متد retryDead.
     *
     * @return mixed
     */
    public function retryDead(/* ... */): mixed;

    /**
     * متد purge.
     *
     * @return mixed
     */
    public function purge(/* ... */): mixed;
}