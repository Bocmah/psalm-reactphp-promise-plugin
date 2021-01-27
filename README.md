# Psalm plugin for ReactPHP Promise package
A [Psalm](https://github.com/vimeo/psalm) plugin for [reactphp/promise](https://github.com/reactphp/promise).
## Overview
This package brings support for template parameters in `PromiseInterface`. So you can type-hint resolution template
parameter, e.g. `PromiseInterface<User>` instead of plain `PromiseInterface`.

It also adds an `otherwise()` method to `PromiseInterface` as a stub, which allows Psalm to recognize constructs like

```php
$promise
    ->then(
        function () {
            echo 'Success' . PHP_EOL;
        }
    )
    ->otherwise(
        function (\Throwable $error) {
            echo 'Failure: ' . $error->getMessage() . PHP_EOL
        }
    );
```

## Prerequisites
You should have [Psalm](https://github.com/vimeo/psalm) installed.

## Installation
Install plugin as a dev dependency via composer:

`composer require --dev bocmah/psalm-reactphp-promise-plugin`

Then enable the plugin:

`./vendor/bin/psalm-plugin enable bocmah/psalm-reactphp-promise-plugin`
