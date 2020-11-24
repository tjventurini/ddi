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

if (!function_exists('ddi_dump_path')) {
    function ddi_dumpi_path(...$vars)
    {
        // get trace
        $trace = debug_backtrace();

        // get class and method
        $file = $trace[1]['file'];
        $class = $trace[2]['class'] ?? null;
        $method = $trace[2]['function'];
        $line = $trace[1]['line'] ?? null;

        // fill the path
        $path = '';
        if (preg_match('/\{closure\}/', $method)) {
            $path .= "{$file}:{$line}";
        } else {
            $path .= "{$class}::{$method} @line:{$line}";
        }

        // return the path
        return $path;
    }
}

if (!function_exists('ddi')) {
    function ddi(...$vars)
    {
        // get the path to use it as header
        $path = ddi_dumpi_path();

        // call dd with path
        dd($path, ...$vars);
    }
}

if (!function_exists('dumpi')) {
    function dumpi(...$vars)
    {
        // get the path to use it as header
        $path = ddi_dumpi_path();

        // call dd with path
        dump($path, ...$vars);
    }
}
