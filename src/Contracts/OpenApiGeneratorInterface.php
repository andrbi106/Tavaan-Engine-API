<?php

declare(strict_types=1);

namespace Tavaan\Engine\Api\Contracts;

/**
 * قرارداد OpenApiGenerator.
 *
 * @see \Tavaan\Engine\Api\OpenApiGenerator
 * @api 1.0
 */
interface OpenApiGeneratorInterface
{
    /**
     * متد generate.
     *
     * @return mixed
     */
    public function generate(/* ... */): mixed;

    /**
     * متد toYaml.
     *
     * @return mixed
     */
    public function toYaml(/* ... */): mixed;

    /**
     * متد toJson.
     *
     * @return mixed
     */
    public function toJson(/* ... */): mixed;
}