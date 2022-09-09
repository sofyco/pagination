<?php declare(strict_types=1);

namespace Sofyco\Pagination\Adapter;

use Sofyco\Pagination\Query;
use Sofyco\Pagination\Result;

interface AdapterInterface
{
    public function getResult(Query $query): Result;
}
