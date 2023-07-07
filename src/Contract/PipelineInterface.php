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

use Closure;

interface PipelineInterface
{
    /**
     * Set the traveler object being sent on the pipeline.
     *
     * @param mixed $traveler
     * @return $this
     */
    public function send($traveler);

    /**
     * Set the stops of the pipeline.
     *
     * @param array|dynamic $stops
     * @return $this
     */
    public function through($stops);

    /**
     * Set the method to call on the stops.
     *
     * @param string $method
     * @return $this
     */
    public function via($method);

    /**
     * Run the pipeline with a final destination callback.
     *
     * @return mixed
     */
    public function then(Closure $destination);
}
