# Tavaan Engine — API

> **لایهٔ API** — موتور API در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.api` |
| نام | `API` |
| عنوان فارسی | لایهٔ API |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Api` |
| نوع | `engine` |

## توضیحات

M6 — JsonResource با when/whenLoaded/whenHas/whenCounted/mergeWhen/whenPivotLoaded، AnonymousResourceCollection با meta/links صفحه‌بندی، Versioning (url/header/query + هدرهای Deprecation/Sunset)، Idempotency-Key با قفل in-progress و RFC 9457، Throttle (نام‌دار و عددی، per-user/key/IP، هدرهای X-RateLimit-*)، OpenAPI 3.1 generator خودنوشته (attribute-based + FormRequest rules + YAML emitter داخلی).

## خطاها (Exceptions)

- `Tavaan\Engine\Api\Exceptions\ApiException`

## کلاس‌های اصلی

- `src/ApiResolver.php`
- `src/Attributes/Api.php`
- `src/Attributes/ApiParam.php`
- `src/Attributes/ApiResponse.php`
- `src/Console/ApiDocsCommand.php`
- `src/JsonResource.php`
- `src/Middleware/ApiVersionMiddleware.php`
- `src/Middleware/IdempotencyMiddleware.php`
- `src/Middleware/ThrottleMiddleware.php`
- `src/OpenApi/Yaml.php`
- `src/OpenApiGenerator.php`
- `src/Resources/AnonymousResourceCollection.php`
- `src/Resources/MergeValue.php`
- `src/Resources/MissingValue.php`
- `src/Resources/ResourceCollection.php`
- `src/api.php`

## Service Providerها

- `Tavaan\Engine\Api\JsonResourceServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `config`
- `http`

**موتورهای اختیاری:**

- `validation`
- `orm`
- `cache`
- `router`

## دستورات CLI

- `api:docs`

## پیکربندی

- فایل پیکربندی: `config/api.php`
- کلید: `api`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-API.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-API`** (این مخزن) | موتور API |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
