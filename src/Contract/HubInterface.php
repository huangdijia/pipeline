<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://github.com/huangdijia/pipeline
 * @document https://github.com/huangdijia/pipeline/blob/main/README.md
 * @contact  huangdijia@gmail.com
 */
namespace Huangdijia\Pipeline\Contract;

interface HubInterface
{
    /**
     * Send an object through one of the available pipelines.
     *
     * @param mixed $object
     * @param null|string $pipeline
     * @return mixed
     */
    public function pipe($object, $pipeline = null);
}
