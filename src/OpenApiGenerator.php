<?php

declare(strict_types=1);

namespace Tavaan\Engine\Api;

final class OpenApiGenerator
{
    public function generate()
    {
        return null;
    }
    public function toYaml()
    {
        return null;
    }
    public function toJson(): string
    {
        return json_encode($this->toArray(), JSON_UNESCAPED_UNICODE);
    }
}
