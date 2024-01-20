<?php declare(strict_types=1);

namespace Sofyco\Pagination\Adapter\InMemory;

use Sofyco\Pagination\Adapter\AdapterInterface;
use Sofyco\Pagination\Query;
use Sofyco\Pagination\Result;

final readonly class ArrayObjectAdapter implements AdapterInterface
{
    /**
     * @param \ArrayObject<int, mixed> $builder
     */
    public function __construct(private \ArrayObject $builder)
    {
    }

    public function getResult(Query $query): Result
    {
        if (0 === $count = $this->builder->count()) {
            $items = [];
        } else {
            $items = \array_slice(array: $this->builder->getArrayCopy(), offset: $query->skip, length: $query->limit);
        }

        return new Result(skip: $query->skip, limit: $query->limit, count: $count, items: $items);
    }
}
