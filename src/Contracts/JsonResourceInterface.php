<?php

declare(strict_types=1);

namespace Tavaan\Engine\Api\Contracts;

/**
 * قرارداد JsonResource.
 *
 * @see \Tavaan\Engine\Api\JsonResource
 * @api 1.0
 */
interface JsonResourceInterface
{
    /**
     * متد make.
     *
     * @return mixed
     */
    public function make(/* ... */): mixed;

    /**
     * متد collection.
     *
     * @return mixed
     */
    public function collection(/* ... */): mixed;

    /**
     * متد toArray.
     *
     * @return mixed
     */
    public function toArray(/* ... */): mixed;

    /**
     * متد when.
     *
     * @return mixed
     */
    public function when(/* ... */): mixed;

    /**
     * متد whenLoaded.
     *
     * @return mixed
     */
    public function whenLoaded(/* ... */): mixed;

    /**
     * متد whenCounted.
     *
     * @return mixed
     */
    public function whenCounted(/* ... */): mixed;

    /**
     * متد mergeWhen.
     *
     * @return mixed
     */
    public function mergeWhen(/* ... */): mixed;

    /**
     * متد response.
     *
     * @return mixed
     */
    public function response(/* ... */): mixed;
}