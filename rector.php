<?php

declare(strict_types=1);

use PLUS\GrumPHPConfig\RectorSettings;
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->parallel(240);
    $rectorConfig->importNames();
    $rectorConfig->importShortClasses();

    $rectorConfig->paths(
        [
            //remove that you don't need
            __DIR__ . '/src',
            #__DIR__ . '/extensions',
        ]
    );

    // define sets of rules
    $rectorConfig->sets(
        [
            ...RectorSettings::sets(),
        ]
    );

    // remove some rules
    // ignore some files
    $rectorConfig->skip(
        [
            ...RectorSettings::skip(),

            /**
             * do not touch these files
             */
            __DIR__ . '/src/Example',
            __DIR__ . '/src/Example.php',
        ]
    );
};
