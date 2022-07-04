<?php

namespace jc21\Util;

/**
 * Class to store size data
 */
class Size
{
    /**
     * Class data
     *
     * @var int
     */
    private int $size;

    /**
     * Constructor
     *
     * @param int $size
     */
    public function __construct(int $size)
    {
        $this->size = $size;
    }

    /**
     * Return the size in GB
     *
     * @return string
     */
    public function GB()
    {
        return (string) $this->size / 1024^3 . " gb";
    }

    /**
     * Return the size in MB
     *
     * @return string
     */
    public function MB()
    {
        return (string) $this->size / 1024^2 . " mb";
    }

    /**
     * Return the size in KB
     *
     * @return string
     */
    public function KB()
    {
        return (string) $this->size / 1024 . " kb";
    }

    /**
     * Return the size in bytes
     *
     * @return int
     */
    public function bytes()
    {
        return $this->size;
    }
}