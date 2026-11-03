<?php

declare(strict_types=1);

namespace Tavaan\Engine\Api\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\Api\JsonResource;
use Tavaan\Engine\Api\JsonResourceServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور JsonResource.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class JsonResourceTest extends TestCase
{
    private JsonResource $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new JsonResource($config);
    }

    /**
     * T-01: Resource با nested + whenLoaded
     */
    public function test_t01_resource__nested__when_loaded(): void
    {
        // TODO: پیاده‌سازی سناریوی T-01 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-01 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-02: Collection با pagination meta
     */
    public function test_t02_collection__pagination_meta(): void
    {
        // TODO: پیاده‌سازی سناریوی T-02 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-02 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-03: Versioning url/header
     */
    public function test_t03_versioning_urlheader(): void
    {
        // TODO: پیاده‌سازی سناریوی T-03 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-03 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-04: OpenAPI generation از routes
     */
    public function test_t04_open_api_generation__routes(): void
    {
        // TODO: پیاده‌سازی سناریوی T-04 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-04 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-05: Idempotency: دو POST با یک key → یک اثر
     */
    public function test_t05_idempotency__post___key(): void
    {
        // TODO: پیاده‌سازی سناریوی T-05 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-05 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-06: Rate limit → 429 + headers
     */
    public function test_t06_rate_limit__429__headers(): void
    {
        // TODO: پیاده‌سازی سناریوی T-06 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-06 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-07: `when()` فیلد مخفی برای guest
     */
    public function test_t07_when____guest(): void
    {
        // TODO: پیاده‌سازی سناریوی T-07 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-07 هنوز پیاده‌سازی نشده است.');
    }

}