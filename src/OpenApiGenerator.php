<?php

declare(strict_types=1);

namespace Tavaan\Engine\Api;

final class OpenApiGenerator
{
    public function generate(/* ... */): mixed
    {
        return null;
    }
    public function toYaml(/* ... */): mixed
    {
        return null;
    }
    public function toJson(/* ... */): mixed
    {
        return json_encode($this->toArray(), JSON_UNESCAPED_UNICODE);
    }
}
