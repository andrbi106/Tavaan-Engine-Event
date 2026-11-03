<?php

declare(strict_types=1);

namespace Tavaan\Engine\Event;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Event\Contracts\EventDispatcherInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * EventDispatcherServiceProvider — ثبت سرویس‌های موتور EventDispatcher.
 */
final class EventDispatcherServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(EventDispatcherInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new EventDispatcher($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('events', $this->app->get(EventDispatcherInterface::class));

        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Event\Console\Event_listCommand::class;
        $this->commands[] = \Tavaan\Engine\Event\Console\Event_outboxRelayCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            EventDispatcherInterface::class,
            'events',
        ];
    }
}