<?php

namespace Bocmah\PsalmReactPhpPromisePlugin\stubs;

use React\Promise\PromiseInterface;

/**
 * @psalm-template T
 */
interface PromisorInterface
{
    /**
     * Returns the promise of the deferred.
     *
     * @return PromiseInterface<T>
     */
    public function promise(): PromiseInterface;
}