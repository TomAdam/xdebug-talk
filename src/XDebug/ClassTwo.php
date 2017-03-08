<?php
namespace XDebug;

class ClassTwo
{
    private $x;

    /**
     * @param int $x
     */
    public function __construct($x)
    {
        $x++;
        $this->x = $x;
    }

    /**
     * @param string $message
     */
    public function throwException($message)
    {
        throw new \RuntimeException($message);
    }
}
