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
        $line = $trace[1]['line'] ?? null;

        // create signature path
        $path = "{$class}::{$method}";
        if ($line) {
            $path .= " @line:{$line}";
        }

        // call dd with path
        dd($path, ...$vars);
    }
}

if (!function_exists('dumpi')) {
    function dumpi(...$vars)
    {
        // get trace
        $trace = debug_backtrace();

        // get class and method
        $class = $trace[1]['class'];
        $method = $trace[1]['function'];
        $line = $trace[1]['line'] ?? null;

        // create signature path
        $path = "{$class}::{$method}";
        if ($line) {
            $path .= " @line:{$line}";
        }

        // call dd with path
        dump($path, ...$vars);
    }
}
