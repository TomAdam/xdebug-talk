<?php

include '../src/XDebug/ClassOne.php';
include '../src/XDebug/ClassTwo.php';

$classOne = new \XDebug\ClassOne();
$classOne->breakClassTwo();
