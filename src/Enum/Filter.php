<?php declare(strict_types=1);

namespace Sofyco\Pagination\Enum;

enum Filter: string
{
    case EQUAL = 'eq';
    case NOT_EQUAL = 'neq';
    case IN = 'in';
    case NOT_IN = 'nin';
    case LESS_THEN = 'lt';
    case LESS_THEN_OR_EQUAL = 'lte';
    case GREATER_THEN = 'gt';
    case GREATER_THEN_OR_EQUAL = 'gte';
    case LIKE = 'like';
    case IS_NULL = 'absent';
    case NOT_NULL = 'exists';

    public const OPERATORS = [
        self::EQUAL,
        self::NOT_EQUAL,
        self::IN,
        self::NOT_IN,
        self::LESS_THEN,
        self::LESS_THEN_OR_EQUAL,
        self::GREATER_THEN,
        self::GREATER_THEN_OR_EQUAL,
        self::LIKE,
        self::IS_NULL,
        self::NOT_NULL,
    ];
}
