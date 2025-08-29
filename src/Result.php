<?php declare(strict_types=1);

namespace Sofyco\Pagination;

class Result
{
    public function __construct(public int $skip, public int $limit, public int $count, public iterable $items)
    {
    }
}
