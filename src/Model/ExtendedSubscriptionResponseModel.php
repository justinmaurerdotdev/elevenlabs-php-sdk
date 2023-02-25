<?php

namespace ElevenLabs\V1\SDK\Model;

class ExtendedSubscriptionResponseModel extends \ArrayObject
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
     * @var string
     */
    protected $tier;
    /**
     * 
     *
     * @var int
     */
    protected $characterCount;
    /**
     * 
     *
     * @var int
     */
    protected $characterLimit;
    /**
     * 
     *
     * @var bool
     */
    protected $canExtendCharacterLimit;
    /**
     * 
     *
     * @var bool
     */
    protected $allowedToExtendCharacterLimit;
    /**
     * 
     *
     * @var int
     */
    protected $nextCharacterCountResetUnix;
    /**
     * 
     *
     * @var int
     */
    protected $voiceLimit;
    /**
     * 
     *
     * @var bool
     */
    protected $canExtendVoiceLimit;
    /**
     * 
     *
     * @var bool
     */
    protected $canUseInstantVoiceCloning;
    /**
     * 
     *
     * @var TTSModelResponseModel[]
     */
    protected $availableModels;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var InvoiceResponseModel
     */
    protected $nextInvoice;
    /**
     * 
     *
     * @return string
     */
    public function getTier() : string
    {
        return $this->tier;
    }
    /**
     * 
     *
     * @param string $tier
     *
     * @return self
     */
    public function setTier(string $tier) : self
    {
        $this->initialized['tier'] = true;
        $this->tier = $tier;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCharacterCount() : int
    {
        return $this->characterCount;
    }
    /**
     * 
     *
     * @param int $characterCount
     *
     * @return self
     */
    public function setCharacterCount(int $characterCount) : self
    {
        $this->initialized['characterCount'] = true;
        $this->characterCount = $characterCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCharacterLimit() : int
    {
        return $this->characterLimit;
    }
    /**
     * 
     *
     * @param int $characterLimit
     *
     * @return self
     */
    public function setCharacterLimit(int $characterLimit) : self
    {
        $this->initialized['characterLimit'] = true;
        $this->characterLimit = $characterLimit;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCanExtendCharacterLimit() : bool
    {
        return $this->canExtendCharacterLimit;
    }
    /**
     * 
     *
     * @param bool $canExtendCharacterLimit
     *
     * @return self
     */
    public function setCanExtendCharacterLimit(bool $canExtendCharacterLimit) : self
    {
        $this->initialized['canExtendCharacterLimit'] = true;
        $this->canExtendCharacterLimit = $canExtendCharacterLimit;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAllowedToExtendCharacterLimit() : bool
    {
        return $this->allowedToExtendCharacterLimit;
    }
    /**
     * 
     *
     * @param bool $allowedToExtendCharacterLimit
     *
     * @return self
     */
    public function setAllowedToExtendCharacterLimit(bool $allowedToExtendCharacterLimit) : self
    {
        $this->initialized['allowedToExtendCharacterLimit'] = true;
        $this->allowedToExtendCharacterLimit = $allowedToExtendCharacterLimit;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNextCharacterCountResetUnix() : int
    {
        return $this->nextCharacterCountResetUnix;
    }
    /**
     * 
     *
     * @param int $nextCharacterCountResetUnix
     *
     * @return self
     */
    public function setNextCharacterCountResetUnix(int $nextCharacterCountResetUnix) : self
    {
        $this->initialized['nextCharacterCountResetUnix'] = true;
        $this->nextCharacterCountResetUnix = $nextCharacterCountResetUnix;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getVoiceLimit() : int
    {
        return $this->voiceLimit;
    }
    /**
     * 
     *
     * @param int $voiceLimit
     *
     * @return self
     */
    public function setVoiceLimit(int $voiceLimit) : self
    {
        $this->initialized['voiceLimit'] = true;
        $this->voiceLimit = $voiceLimit;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCanExtendVoiceLimit() : bool
    {
        return $this->canExtendVoiceLimit;
    }
    /**
     * 
     *
     * @param bool $canExtendVoiceLimit
     *
     * @return self
     */
    public function setCanExtendVoiceLimit(bool $canExtendVoiceLimit) : self
    {
        $this->initialized['canExtendVoiceLimit'] = true;
        $this->canExtendVoiceLimit = $canExtendVoiceLimit;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getCanUseInstantVoiceCloning() : bool
    {
        return $this->canUseInstantVoiceCloning;
    }
    /**
     * 
     *
     * @param bool $canUseInstantVoiceCloning
     *
     * @return self
     */
    public function setCanUseInstantVoiceCloning(bool $canUseInstantVoiceCloning) : self
    {
        $this->initialized['canUseInstantVoiceCloning'] = true;
        $this->canUseInstantVoiceCloning = $canUseInstantVoiceCloning;
        return $this;
    }
    /**
     * 
     *
     * @return TTSModelResponseModel[]
     */
    public function getAvailableModels() : array
    {
        return $this->availableModels;
    }
    /**
     * 
     *
     * @param TTSModelResponseModel[] $availableModels
     *
     * @return self
     */
    public function setAvailableModels(array $availableModels) : self
    {
        $this->initialized['availableModels'] = true;
        $this->availableModels = $availableModels;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return InvoiceResponseModel
     */
    public function getNextInvoice() : InvoiceResponseModel
    {
        return $this->nextInvoice;
    }
    /**
     * 
     *
     * @param InvoiceResponseModel $nextInvoice
     *
     * @return self
     */
    public function setNextInvoice(InvoiceResponseModel $nextInvoice) : self
    {
        $this->initialized['nextInvoice'] = true;
        $this->nextInvoice = $nextInvoice;
        return $this;
    }
}