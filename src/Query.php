<?php declare(strict_types=1);

namespace Sofyco\Pagination;

use Sofyco\Pagination\Enum\Limit;

final class Query
{
    /**
     * @param array<string, array<string, string>> $filters
     * @param array<string, string>                $sorting
     * @param int                                  $skip
     * @param int                                  $limit
     */
    public function __construct(
        public readonly array $filters = [],
        public readonly array $sorting = [],
        public readonly int   $skip = 0,
        public readonly int   $limit = Limit::DEFAULT
    )
    {
    }
}
