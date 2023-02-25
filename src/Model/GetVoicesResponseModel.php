<?php

namespace ElevenLabs\V1\SDK\Model;

class GetVoicesResponseModel extends \ArrayObject
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
     * @var VoiceResponseModel[]
     */
    protected $voices;
    /**
     * 
     *
     * @return VoiceResponseModel[]
     */
    public function getVoices() : array
    {
        return $this->voices;
    }
    /**
     * 
     *
     * @param VoiceResponseModel[] $voices
     *
     * @return self
     */
    public function setVoices(array $voices) : self
    {
        $this->initialized['voices'] = true;
        $this->voices = $voices;
        return $this;
    }
}