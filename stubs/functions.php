<?php

namespace React\Promise;

/**
 * @param array<array-key, mixed> $promisesOrValues
 *
 * @return PromiseInterface
 */
function all($promisesOrValues): PromiseInterface
{
}
/**
 * @param array<array-key, mixed> $promisesOrValues
 *
 * @return PromiseInterface
 */
function any($promisesOrValues): PromiseInterface
{
}
/**
 * @param array<array-key, mixed> $promisesOrValues
 * @param callable $mapFunc
 *
 * @return PromiseInterface
 */
function map($promisesOrValues, $mapFunc): PromiseInterface
{
}
/**
 * @param array<array-key, mixed> $promisesOrValues
 *
 * @return PromiseInterface
 */
function race($promisesOrValues): PromiseInterface
{
}
/**
 * @param array<array-key, mixed> $promisesOrValues
 * @param callable $reduceFunc
 * @param mixed|null $initialValue
 *
 * @return PromiseInterface
 */
function reduce($promisesOrValues, $reduceFunc, $initialValue = null): PromiseInterface
{
}
/**
 * @param mixed|null $promiseOrValue
 *
 * @return PromiseInterface
 */
function reject($promiseOrValue = null): PromiseInterface
{
}
/**
 * @param mixed|null $promiseOrValue
 *
 * @return PromiseInterface
 */
function resolve($promiseOrValue = null): PromiseInterface
{
}
/**
 * @param array<array-key, mixed> $promisesOrValues
 * @param int $howMany
 *
 * @return PromiseInterface
 */
function some($promisesOrValues, $howMany): PromiseInterface
{
}
