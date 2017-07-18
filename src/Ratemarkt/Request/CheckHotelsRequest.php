<?php

namespace Ratemarkt\Request;

use Ratemarkt\Model\Pax;

class CheckHotelsRequest
{
    /**
     * @var string
     */
    private $destinationCode;

    /**
     * @var array
     */
    private $hotelCodes = [];

    /**
     * @var string
     */
    private $checkIn;

    /**
     * @var string
     */
    private $checkOut;

    /**
     * @var array
     */
    private $paxes = [];

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $nationality;

    /**
     * @return string
     */
    public function getDestinationCode()
    {
        return $this->destinationCode;
    }

    /**
     * @param string $destinationCode
     */
    public function setDestinationCode($destinationCode)
    {
        $this->destinationCode = $destinationCode;
    }

    /**
     * @return array
     */
    public function getHotelCodes()
    {
        return $this->hotelCodes;
    }

    /**
     * @param array $hotelCodes
     */
    public function setHotelCodes($hotelCodes)
    {
        $this->hotelCodes = $hotelCodes;
    }

    /**
     * @return string
     */
    public function getCheckIn()
    {
        return $this->checkIn;
    }

    /**
     * @param string $checkIn
     */
    public function setCheckIn($checkIn)
    {
        $this->checkIn = $checkIn;
    }

    /**
     * @return string
     */
    public function getCheckOut()
    {
        return $this->checkOut;
    }

    /**
     * @param string $checkOut
     */
    public function setCheckOut($checkOut)
    {
        $this->checkOut = $checkOut;
    }

    /**
     * @return array
     */
    public function getPaxes()
    {
        return $this->paxes;
    }

    /**
     * @param array $paxes
     */
    public function setPaxes($paxes)
    {
        $this->paxes = $paxes;
    }

    /**
     * @param Pax $pax
     */
    public function addPax(Pax $pax)
    {
        $this->paxes[] = $pax;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @param string $nationality
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
    }
}
