<?php declare(strict_types=1);

namespace Sofyco\Pagination;

use Sofyco\Pagination\Enum\Limit;

/**
 * @property array<string, array<string, string>> $filters
 * @property array<string, string>                $sorting
 */
final readonly class Query
{
    public function __construct(public array $filters = [], public array $sorting = [], public int $skip = 0, public int $limit = Limit::DEFAULT)
    {
    }
}
