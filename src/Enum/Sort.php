<?php declare(strict_types=1);

namespace Sofyco\Pagination\Enum;

enum Sort: string
{
    case ASC = 'asc';
    case DESC = 'desc';

    public const array DIRECTIONS = [
        self::ASC,
        self::DESC,
    ];
}
