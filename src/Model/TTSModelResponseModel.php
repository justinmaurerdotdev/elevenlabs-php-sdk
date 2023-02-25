<?php

namespace ElevenLabs\V1\SDK\Model;

class TTSModelResponseModel extends \ArrayObject
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
    protected $modelId;
    /**
     * 
     *
     * @var string
     */
    protected $displayName;
    /**
     * 
     *
     * @var LanguageResponseModel[]
     */
    protected $supportedLanguages;
    /**
     * 
     *
     * @return string
     */
    public function getModelId() : string
    {
        return $this->modelId;
    }
    /**
     * 
     *
     * @param string $modelId
     *
     * @return self
     */
    public function setModelId(string $modelId) : self
    {
        $this->initialized['modelId'] = true;
        $this->modelId = $modelId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDisplayName() : string
    {
        return $this->displayName;
    }
    /**
     * 
     *
     * @param string $displayName
     *
     * @return self
     */
    public function setDisplayName(string $displayName) : self
    {
        $this->initialized['displayName'] = true;
        $this->displayName = $displayName;
        return $this;
    }
    /**
     * 
     *
     * @return LanguageResponseModel[]
     */
    public function getSupportedLanguages() : array
    {
        return $this->supportedLanguages;
    }
    /**
     * 
     *
     * @param LanguageResponseModel[] $supportedLanguages
     *
     * @return self
     */
    public function setSupportedLanguages(array $supportedLanguages) : self
    {
        $this->initialized['supportedLanguages'] = true;
        $this->supportedLanguages = $supportedLanguages;
        return $this;
    }
}