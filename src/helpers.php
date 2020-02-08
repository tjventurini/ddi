<?php

/*
 |--------------------------------------------------------------------------
 | Tjventurini\DDI
 |--------------------------------------------------------------------------
 |
 | This file exposes the `ddi()` helper, extending the `dd()` helper
 | function.
 |
 */

if (!function_exists('ddi')) {
    function ddi(...$vars)
    {
        // get trace
        $trace = debug_backtrace();

        // get class and method
        $class = $trace[1]['class'];
        $method = $trace[1]['function'];

        // create signature path
        $path = "{$class}::{$method}";

        // call dd with path
        dd($path, ...$vars);
    }
}