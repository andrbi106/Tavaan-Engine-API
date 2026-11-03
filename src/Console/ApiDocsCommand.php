<?php

declare(strict_types=1);

namespace Tavaan\Engine\Api\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * api:docs command.
 */
final class ApiDocsCommand implements CommandInterface
{
    public function name(): string
    {
        return 'api:docs';
    }

    public function description(): string
    {
        return 'Run api:docs (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
