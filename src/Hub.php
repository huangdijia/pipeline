<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://github.com/huangdijia/pipeline
 * @document https://github.com/huangdijia/pipeline/blob/main/README.md
 * @contact  huangdijia@gmail.com
 */
namespace Huangdijia\Pipeline;

use Closure;
use Huangdijia\Pipeline\Contract\HubInterface;
use Psr\Container\ContainerInterface;

class Hub implements HubInterface
{
    /**
     * The container implementation.
     *
     * @var null|ContainerInterface
     */
    protected $container;

    /**
     * All of the available pipelines.
     *
     * @var array
     */
    protected $pipelines = [];

    /**
     * Create a new Hub instance.
     */
    public function __construct(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * Define the default named pipeline.
     */
    public function defaults(Closure $callback)
    {
        return $this->pipeline('default', $callback);
    }

    /**
     * Define a new named pipeline.
     *
     * @param string $name
     */
    public function pipeline($name, Closure $callback)
    {
        $this->pipelines[$name] = $callback;
    }

    /**
     * Send an object through one of the available pipelines.
     *
     * @param mixed $object
     * @param null|string $pipeline
     * @return mixed
     */
    public function pipe($object, $pipeline = null)
    {
        $pipeline = $pipeline ?: 'default';

        return call_user_func(
            $this->pipelines[$pipeline],
            new Pipeline($this->container),
            $object
        );
    }
}
