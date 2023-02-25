<?php

namespace ElevenLabs\V1\SDK\Model;

class BodyTextToSpeechV1TextToSpeechVoiceIdPostVoiceSettings extends \ArrayObject
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
     * @var float
     */
    protected $stability;
    /**
     * 
     *
     * @var float
     */
    protected $similarityBoost;
    /**
     * 
     *
     * @return float
     */
    public function getStability() : float
    {
        return $this->stability;
    }
    /**
     * 
     *
     * @param float $stability
     *
     * @return self
     */
    public function setStability(float $stability) : self
    {
        $this->initialized['stability'] = true;
        $this->stability = $stability;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getSimilarityBoost() : float
    {
        return $this->similarityBoost;
    }
    /**
     * 
     *
     * @param float $similarityBoost
     *
     * @return self
     */
    public function setSimilarityBoost(float $similarityBoost) : self
    {
        $this->initialized['similarityBoost'] = true;
        $this->similarityBoost = $similarityBoost;
        return $this;
    }
}