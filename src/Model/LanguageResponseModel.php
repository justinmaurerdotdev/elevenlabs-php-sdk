<?php

namespace ElevenLabs\V1\SDK\Model;

class LanguageResponseModel extends \ArrayObject
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
    protected $isoCode;
    /**
     * 
     *
     * @var string
     */
    protected $displayName;
    /**
     * 
     *
     * @return string
     */
    public function getIsoCode() : string
    {
        return $this->isoCode;
    }
    /**
     * 
     *
     * @param string $isoCode
     *
     * @return self
     */
    public function setIsoCode(string $isoCode) : self
    {
        $this->initialized['isoCode'] = true;
        $this->isoCode = $isoCode;
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
}