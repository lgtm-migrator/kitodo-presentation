<?php

/**
 * (c) Kitodo. Key to digital objects e.V. <contact@kitodo.org>
 *
 * This file is part of the Kitodo and TYPO3 projects.
 *
 * @license GNU General Public License version 3 or later.
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

/**
 * Commands to be executed by TYPO3, where the key of the array
 * is the name of the command (to be called as the first argument after "typo3").
 * Required parameter is the "class" of the command which needs to be a subclass
 * of \Symfony\Component\Console\Command\Command.
 *
 * This file is deprecated in TYPO3 v10 and will be removed in TYPO3 v11.
 * See Deprecation: #89139 - Console Commands configuration format Commands.php
 * https://docs.typo3.org/c/typo3/cms-core/master/en-us/Changelog/10.3/Deprecation-89139-ConsoleCommandsConfigurationFormatCommandsPhp.html
 */
return [
    'kitodo:harvest' => [
        'class' => Kitodo\Dlf\Command\HarvestCommand::class
    ],
    'kitodo:index' => [
        'class' => Kitodo\Dlf\Command\IndexCommand::class
    ],
    'kitodo:reindex' => [
        'class' => Kitodo\Dlf\Command\ReindexCommand::class
    ]
];
