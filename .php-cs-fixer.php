<?php

declare(strict_types=1);
/**
 * This file is part of huangdijia/pipeline.
 *
 * @link     https://github.com/huangdijia/pipeline
 * @document https://github.com/huangdijia/pipeline/blob/main/README.md
 * @contact  Deeka Wong <huangdijia@gmail.com>
 */
use Huangdijia\PhpCsFixer\Config;

require __DIR__ . '/vendor/autoload.php';

return (new Config())
    ->setHeaderComment(
        projectName: 'huangdijia/pipeline',
        projectLink: 'https://github.com/huangdijia/pipeline',
        projectDocument: 'https://github.com/huangdijia/pipeline/blob/main/README.md',
        contacts: [
            'Deeka Wong' => 'huangdijia@gmail.com',
        ],
    )
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('public')
            ->exclude('runtime')
            ->exclude('vendor')
            ->in(__DIR__)
            ->append([
                __FILE__,
            ])
    )
    ->setUsingCache(false);
