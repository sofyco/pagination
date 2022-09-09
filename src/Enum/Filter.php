<?php declare(strict_types=1);

namespace Sofyco\Pagination\Enum;

final class Filter
{
    public const EQUAL = 'eq';
    public const NOT_EQUAL = 'neq';
    public const IN = 'in';
    public const NOT_IN = 'nin';
    public const LESS_THEN = 'lt';
    public const LESS_THEN_OR_EQUAL = 'lte';
    public const GREATER_THEN = 'gt';
    public const GREATER_THEN_OR_EQUAL = 'gte';
    public const LIKE = 'like';
    public const IS_NULL = 'absent';
    public const NOT_NULL = 'exists';

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
