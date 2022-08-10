<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Doctrine\Set\DoctrineSetList;
use Rector\PHPUnit\Set\PHPUnitSetList;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Symfony\Set\SymfonySetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src'
    ]);

    $rectorConfig->sets([
        DoctrineSetList::DOCTRINE_CODE_QUALITY,
        LevelSetList::UP_TO_PHP_80,
        PHPUnitSetList::PHPUNIT_CODE_QUALITY,
        SymfonySetList::SYMFONY_54,
        SymfonySetList::SYMFONY_CODE_QUALITY,
        SymfonySetList::SYMFONY_STRICT,
    ]);
};
