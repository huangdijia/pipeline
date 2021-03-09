# Pipeline

## Installation

```bash
composer require huangdijia/pipeline
```

## Usage

```php
class FooPipeline
{
    public function handle($passable, Closure $next)
    {
        return $next($passable);
    }
}

class BarPipeline
{
    public function handle($passable, Closure $next)
    {
        return $next($passable);
    }
}

$pipes = [
    FooPipeline::class,
    BarPipeline::class,
];

$result = (new Pipeline($container))
    ->send($passable)
    ->through($pipes)
    ->then(function($passable) {
        var_dump($passable);
    });
```
