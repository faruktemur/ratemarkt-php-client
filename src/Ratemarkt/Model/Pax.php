<?php

namespace Ratemarkt\Model;

/**
 * Class Pax
 * @package Ratemarkt\Model
 */
class Pax
{
    /**
     * @var array
     */
    private $childrenAges = [];

    /**
     * @var integer
     */
    private $numberOfAdults;

    /**
     * @return array
     */
    public function getChildrenAges()
    {
        return $this->childrenAges;
    }

    /**
     * @param array $childrenAges
     */
    public function setChildrenAges($childrenAges)
    {
        $this->childrenAges = $childrenAges;
    }

    /**
     * @return int
     */
    public function getNumberOfAdults()
    {
        return $this->numberOfAdults;
    }

    /**
     * @param int $numberOfAdults
     */
    public function setNumberOfAdults($numberOfAdults)
    {
        $this->numberOfAdults = $numberOfAdults;
    }
}
