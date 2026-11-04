<?php
declare(strict_types=1);

namespace Tavaan\Engine\Api\OpenApi;

/**
 * تولیدکنندهٔ مستندات OpenAPI 3.0 از routeها و controllerها.
 */
final class OpenApiGenerator
{
    /** @var array<string, mixed> */
    private array $spec = [];

    public function __construct(
        private readonly string $title = 'Tavaan API',
        private readonly string $version = '1.0.0',
    ) {
        $this->spec = [
            'openapi' => '3.0.0',
            'info' => ['title' => $this->title, 'version' => $this->version],
            'paths' => [],
        ];
    }

    /**
     * @param string $method HTTP method (GET, POST, ...)
     * @param string $path Route path
     * @param array<string, mixed> $operation OpenAPI operation spec
     */
    public function addOperation(string $method, string $path, array $operation): void
    {
        $method = strtolower($method);
        if (!isset($this->spec['paths'][$path])) {
            $this->spec['paths'][$path] = [];
        }
        $this->spec['paths'][$path][$method] = $operation;
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return $this->spec;
    }

    public function toJson(int $options = JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE): string
    {
        return json_encode($this->spec, $options);
    }
}
