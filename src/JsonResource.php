<?php

declare(strict_types=1);

namespace Tavaan\Engine\Api;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * JsonResource — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Api\Contracts\JsonResourceInterface
 */
final class JsonResource implements Contracts\JsonResourceInterface
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
    public function make(/* ... */): mixed
    {
        // TODO: پیاده‌سازی make مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function collection(/* ... */): mixed
    {
        // TODO: پیاده‌سازی collection مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(/* ... */): mixed
    {
        // TODO: پیاده‌سازی toArray مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function when(/* ... */): mixed
    {
        // TODO: پیاده‌سازی when مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function whenLoaded(/* ... */): mixed
    {
        // TODO: پیاده‌سازی whenLoaded مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function whenCounted(/* ... */): mixed
    {
        // TODO: پیاده‌سازی whenCounted مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function mergeWhen(/* ... */): mixed
    {
        // TODO: پیاده‌سازی mergeWhen مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function response(/* ... */): mixed
    {
        // TODO: پیاده‌سازی response مطابق مستندات (سند §3 API).
        return null;
    }
}