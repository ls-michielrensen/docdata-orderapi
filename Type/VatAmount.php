<?php
namespace CL\DocData\Component\OrderApi\Type;

class VatAmount extends AbstractObject {

    /**
     * @var int
     */
    protected $_;

    /**
     * @var string
     */
    protected $currency = 'EUR';

    /**
     * @var float
     */
    protected $rate;

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     */
    public function setRate( $rate )
    {
        $this->rate = $rate;
    }

    /**
     * @param int $number
     */
    public function __construct($number)
    {
        $this->_ = $number;
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
    public function getCurrency()
    {
        return $this->currency;
    }
    
    /**
     * Convert the object into an array
     *
     * @return array
     */
    public function toArray()
    {
        return [
            '_'        => $this->_,
            'currency' => $this->getCurrency(),
            'rate'     => $this->getRate(),
        ];
    }
}