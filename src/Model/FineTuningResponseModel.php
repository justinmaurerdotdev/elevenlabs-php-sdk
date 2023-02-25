<?php

namespace ElevenLabs\V1\SDK\Model;

class FineTuningResponseModel extends \ArrayObject
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
     * @var bool
     */
    protected $isAllowedToFineTune;
    /**
     * 
     *
     * @var bool
     */
    protected $fineTuningRequested;
    /**
     * 
     *
     * @var string
     */
    protected $finetuningState;
    /**
     * 
     *
     * @var int
     */
    protected $verificationAttemptsCount;
    /**
     * 
     *
     * @return bool
     */
    public function getIsAllowedToFineTune() : bool
    {
        return $this->isAllowedToFineTune;
    }
    /**
     * 
     *
     * @param bool $isAllowedToFineTune
     *
     * @return self
     */
    public function setIsAllowedToFineTune(bool $isAllowedToFineTune) : self
    {
        $this->initialized['isAllowedToFineTune'] = true;
        $this->isAllowedToFineTune = $isAllowedToFineTune;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFineTuningRequested() : bool
    {
        return $this->fineTuningRequested;
    }
    /**
     * 
     *
     * @param bool $fineTuningRequested
     *
     * @return self
     */
    public function setFineTuningRequested(bool $fineTuningRequested) : self
    {
        $this->initialized['fineTuningRequested'] = true;
        $this->fineTuningRequested = $fineTuningRequested;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFinetuningState() : string
    {
        return $this->finetuningState;
    }
    /**
     * 
     *
     * @param string $finetuningState
     *
     * @return self
     */
    public function setFinetuningState(string $finetuningState) : self
    {
        $this->initialized['finetuningState'] = true;
        $this->finetuningState = $finetuningState;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getVerificationAttemptsCount() : int
    {
        return $this->verificationAttemptsCount;
    }
    /**
     * 
     *
     * @param int $verificationAttemptsCount
     *
     * @return self
     */
    public function setVerificationAttemptsCount(int $verificationAttemptsCount) : self
    {
        $this->initialized['verificationAttemptsCount'] = true;
        $this->verificationAttemptsCount = $verificationAttemptsCount;
        return $this;
    }
}