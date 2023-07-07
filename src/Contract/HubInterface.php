<?php

declare(strict_types=1);
/**
 * This file is part of huangdijia/pipeline.
 *
 * @link     https://github.com/huangdijia/pipeline
 * @document https://github.com/huangdijia/pipeline/blob/main/README.md
 * @contact  Deeka Wong <huangdijia@gmail.com>
 */
namespace Huangdijia\Pipeline\Contract;

interface HubInterface
{
    /**
     * Send an object through one of the available pipelines.
     *
     * @param mixed $object
     * @param string|null $pipeline
     * @return mixed
     */
    public function pipe($object, $pipeline = null);
}
