<?php

declare(strict_types=1);

namespace Tavaan\Engine\Api;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Api\Contracts\JsonResourceInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * JsonResourceServiceProvider — ثبت سرویس‌های موتور JsonResource.
 */
final class JsonResourceServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(JsonResourceInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new JsonResource($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Api\Console\Api_docsCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            JsonResourceInterface::class,
        ];
    }
}