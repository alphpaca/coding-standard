<?php

declare(strict_types=1);

use PhpCsFixer\RuleSet\Sets\PHP80MigrationSet;
use PhpCsFixer\RuleSet\Sets\SymfonySet;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->paths([__DIR__ . '/src', __DIR__ . '/tests']);

    $ecsConfig->sets([
        SymfonySet::class,
        PHP80MigrationSet::class,
    ]);
};
