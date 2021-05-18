<?php

use App\StringSymmetry;
//use App\StackSymmetry;
//use App\QueueSymmetry;

require_once "vendor/autoload.php";

$test = new StringSymmetry("abcdeffedcba1234");
$stack = new SplStack();
foreach ($test->convertData() as $value) {
    $stack->unshift($value);
}
$queue = new SplQueue();
foreach ($test->convertData() as $value) {
    $queue->enqueue($value);
}
echo $stack->shift();
echo $stack->shift();
echo $queue->dequeue();
echo $queue->dequeue();


