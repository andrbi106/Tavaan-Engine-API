<?php

declare(strict_types=1);

namespace Tavaan\Engine\Api;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * OpenApiGenerator — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Api\Contracts\OpenApiGeneratorInterface
 */
final class OpenApiGenerator implements Contracts\OpenApiGeneratorInterface
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
    public function generate(/* ... */): mixed
    {
        // TODO: پیاده‌سازی generate مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function toYaml(/* ... */): mixed
    {
        // TODO: پیاده‌سازی toYaml مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function toJson(/* ... */): mixed
    {
        // TODO: پیاده‌سازی toJson مطابق مستندات (سند §3 API).
        return null;
    }
}