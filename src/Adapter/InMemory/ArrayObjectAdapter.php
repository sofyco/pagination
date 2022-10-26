<?php declare(strict_types=1);

namespace Sofyco\Pagination\Adapter\InMemory;

use Sofyco\Pagination\Adapter\AdapterInterface;
use Sofyco\Pagination\Query;
use Sofyco\Pagination\Result;

final class ArrayObjectAdapter implements AdapterInterface
{
    /**
     * @param \ArrayObject<int, mixed> $builder
     */
    public function __construct(private readonly \ArrayObject $builder)
    {
    }

    public function getResult(Query $query): Result
    {
        if (0 === $count = $this->builder->count()) {
            $items = [];
        } else {
            $items = \array_slice($this->builder->getArrayCopy(), $query->skip, $query->limit);
        }

        return new Result(skip: $query->skip, limit: $query->limit, count: $count, items: $items);
    }
}
