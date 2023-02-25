<?php

namespace ElevenLabs\V1\SDK\Model;

class InvoiceResponseModel extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var int
     */
    protected $amountDueCents;
    /**
     * 
     *
     * @var int
     */
    protected $nextPaymentAttemptUnix;
    /**
     * 
     *
     * @return int
     */
    public function getAmountDueCents() : int
    {
        return $this->amountDueCents;
    }
    /**
     * 
     *
     * @param int $amountDueCents
     *
     * @return self
     */
    public function setAmountDueCents(int $amountDueCents) : self
    {
        $this->initialized['amountDueCents'] = true;
        $this->amountDueCents = $amountDueCents;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNextPaymentAttemptUnix() : int
    {
        return $this->nextPaymentAttemptUnix;
    }
    /**
     * 
     *
     * @param int $nextPaymentAttemptUnix
     *
     * @return self
     */
    public function setNextPaymentAttemptUnix(int $nextPaymentAttemptUnix) : self
    {
        $this->initialized['nextPaymentAttemptUnix'] = true;
        $this->nextPaymentAttemptUnix = $nextPaymentAttemptUnix;
        return $this;
    }
}