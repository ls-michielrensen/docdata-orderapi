<?php

namespace CL\DocData\Component\OrderApi\Type;

/**
 * @author Tijs Verkoyen <php-docdatapayments@verkoyen.eu>
 */
abstract class AbstractPaymentInfo extends AbstractObject
{
    /**
     * @var string
     */
    protected $cardHolder;

    /**
     * @var string
     */
    protected $cardCountry;

    /**
     * @var string
     */
    protected $panLast4;

    /**
     * @param string $cardCountry
     */
    public function setCardCountry($cardCountry)
    {
        $this->cardCountry = $cardCountry;
    }

    /**
     * @return string
     */
    public function getCardCountry()
    {
        return $this->cardCountry;
    }

    /**
     * @param string $cardHolder
     */
    public function setCardHolder($cardHolder)
    {
        $this->cardHolder = $cardHolder;
    }

    /**
     * @return string
     */
    public function getCardHolder()
    {
        return $this->cardHolder;
    }

    /**
     * @param string $panLast4
     */
    public function setPanLast4($panLast4)
    {
        $this->panLast4 = $panLast4;
    }

    /**
     * @return string
     */
    public function getPanLast4()
    {
        return $this->panLast4;
    }
}
