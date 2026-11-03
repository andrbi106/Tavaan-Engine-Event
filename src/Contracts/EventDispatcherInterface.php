<?php

declare(strict_types=1);

namespace Tavaan\Engine\Event\Contracts;

/**
 * قرارداد EventDispatcher.
 *
 * @see \Tavaan\Engine\Event\EventDispatcher
 * @api 1.0
 */
interface EventDispatcherInterface
{
    /**
     * متد listen.
     *
     * @return mixed
     */
    public function listen(/* ... */): mixed;

    /**
     * متد subscribe.
     *
     * @return mixed
     */
    public function subscribe(/* ... */): mixed;

    /**
     * متد dispatch.
     *
     * @return mixed
     */
    public function dispatch(/* ... */): mixed;

    /**
     * متد until.
     *
     * @return mixed
     */
    public function until(/* ... */): mixed;

    /**
     * متد push.
     *
     * @return mixed
     */
    public function push(/* ... */): mixed;

    /**
     * متد hasListeners.
     *
     * @return mixed
     */
    public function hasListeners(/* ... */): mixed;

    /**
     * متد getListeners.
     *
     * @return mixed
     */
    public function getListeners(/* ... */): mixed;

    /**
     * متد forget.
     *
     * @return mixed
     */
    public function forget(/* ... */): mixed;

    /**
     * متد extend.
     *
     * @return mixed
     */
    public function extend(/* ... */): mixed;

    /**
     * متد fake.
     *
     * @return mixed
     */
    public function fake(/* ... */): mixed;

    /**
     * متد assertDispatched.
     *
     * @return mixed
     */
    public function assertDispatched(/* ... */): mixed;
}