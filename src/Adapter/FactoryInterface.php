<?php declare(strict_types=1);

namespace Sofyco\Pagination\Adapter;

interface FactoryInterface
{
    /**
     * @param class-string $builderClassName
     * @param class-string $adapterClassName
     */
    public function add(string $builderClassName, string $adapterClassName): void;

    public function create(object $builder): AdapterInterface;
}
