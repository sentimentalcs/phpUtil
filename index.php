<?php
/**
 * Created by PhpStorm.
 * User: farewell
 * Date: 2017/6/18
 * Time: 21:37
 */

    include __DIR__.'/vendor/autoload.php';

    echo \phpUtil\Curl::http_get();
    echo \phpUtil\test\Test::test();