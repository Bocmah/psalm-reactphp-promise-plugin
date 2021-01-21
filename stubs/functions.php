<?php

namespace React\Promise;

/**
 * @param array<array-key, mixed> $promisesOrValues
 *
 * @return ExtendedPromiseInterface
 */
function all($promisesOrValues): ExtendedPromiseInterface
{
}
/**
 * @param array<array-key, mixed> $promisesOrValues
 *
 * @return ExtendedPromiseInterface
 */
function any($promisesOrValues): ExtendedPromiseInterface
{
}
/**
 * @param array<array-key, mixed> $promisesOrValues
 * @param callable $mapFunc
 *
 * @return ExtendedPromiseInterface
 */
function map($promisesOrValues, $mapFunc): ExtendedPromiseInterface
{
}
/**
 * @param array<array-key, mixed> $promisesOrValues
 *
 * @return ExtendedPromiseInterface
 */
function race($promisesOrValues): ExtendedPromiseInterface
{
}
/**
 * @param array<array-key, mixed> $promisesOrValues
 * @param callable $reduceFunc
 * @param mixed|null $initialValue
 *
 * @return ExtendedPromiseInterface
 */
function reduce($promisesOrValues, $reduceFunc, $initialValue = null): ExtendedPromiseInterface
{
}
/**
 * @param mixed|null $promiseOrValue
 *
 * @return ExtendedPromiseInterface
 */
function reject($promiseOrValue = null): ExtendedPromiseInterface
{
}
/**
 * @param mixed|null $promiseOrValue
 *
 * @return ExtendedPromiseInterface
 */
function resolve($promiseOrValue = null): ExtendedPromiseInterface
{
}
/**
 * @param array<array-key, mixed> $promisesOrValues
 * @param int $howMany
 *
 * @return ExtendedPromiseInterface
 */
function some($promisesOrValues, $howMany): ExtendedPromiseInterface
{
}
