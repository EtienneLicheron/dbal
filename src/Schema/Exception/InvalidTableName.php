<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Schema\Exception;

use function sprintf;

/** @psalm-immutable */
final class InvalidTableName extends InvalidObjectName
{
    public static function new(string $tableName): self
    {
        return new self(sprintf('Invalid table name specified "%s".', $tableName));
    }
}
