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
            return new Result(0, []);
        }

        return new Result($count, \array_slice($this->builder->getArrayCopy(), $query->skip, $query->limit));
    }
}
