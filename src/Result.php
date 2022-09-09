<?php declare(strict_types=1);

namespace Sofyco\Pagination;

final class Result
{
    public function __construct(public readonly int $count, public readonly iterable $items)
    {
    }
}
