<?php

namespace ElevenLabs\V1\SDK\Model;

class AddVoiceResponseModel extends \ArrayObject
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
    protected $voiceId;
    /**
     * 
     *
     * @return string
     */
    public function getVoiceId() : string
    {
        return $this->voiceId;
    }
    /**
     * 
     *
     * @param string $voiceId
     *
     * @return self
     */
    public function setVoiceId(string $voiceId) : self
    {
        $this->initialized['voiceId'] = true;
        $this->voiceId = $voiceId;
        return $this;
    }
}