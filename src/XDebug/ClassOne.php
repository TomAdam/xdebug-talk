<?php
namespace XDebug;

class ClassOne
{
    private $classTwo;

    public function __construct()
    {
        $this->classTwo = new ClassTwo(5);
    }

    public function breakClassTwo()
    {
        $this->classTwo->throwException('Oh dear');
    }
}
