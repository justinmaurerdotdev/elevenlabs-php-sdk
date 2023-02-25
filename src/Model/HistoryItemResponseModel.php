<?php

namespace ElevenLabs\V1\SDK\Model;

class HistoryItemResponseModel extends \ArrayObject
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
    protected $historyItemId;
    /**
     * 
     *
     * @var string
     */
    protected $voiceId;
    /**
     * 
     *
     * @var string
     */
    protected $voiceName;
    /**
     * 
     *
     * @var string
     */
    protected $text;
    /**
     * 
     *
     * @var int
     */
    protected $dateUnix;
    /**
     * 
     *
     * @var int
     */
    protected $characterCountChangeFrom;
    /**
     * 
     *
     * @var int
     */
    protected $characterCountChangeTo;
    /**
     * 
     *
     * @var string
     */
    protected $contentType;
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $settings;
    /**
     * 
     *
     * @return string
     */
    public function getHistoryItemId() : string
    {
        return $this->historyItemId;
    }
    /**
     * 
     *
     * @param string $historyItemId
     *
     * @return self
     */
    public function setHistoryItemId(string $historyItemId) : self
    {
        $this->initialized['historyItemId'] = true;
        $this->historyItemId = $historyItemId;
        return $this;
    }
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
    /**
     * 
     *
     * @return string
     */
    public function getVoiceName() : string
    {
        return $this->voiceName;
    }
    /**
     * 
     *
     * @param string $voiceName
     *
     * @return self
     */
    public function setVoiceName(string $voiceName) : self
    {
        $this->initialized['voiceName'] = true;
        $this->voiceName = $voiceName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * 
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text) : self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDateUnix() : int
    {
        return $this->dateUnix;
    }
    /**
     * 
     *
     * @param int $dateUnix
     *
     * @return self
     */
    public function setDateUnix(int $dateUnix) : self
    {
        $this->initialized['dateUnix'] = true;
        $this->dateUnix = $dateUnix;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCharacterCountChangeFrom() : int
    {
        return $this->characterCountChangeFrom;
    }
    /**
     * 
     *
     * @param int $characterCountChangeFrom
     *
     * @return self
     */
    public function setCharacterCountChangeFrom(int $characterCountChangeFrom) : self
    {
        $this->initialized['characterCountChangeFrom'] = true;
        $this->characterCountChangeFrom = $characterCountChangeFrom;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCharacterCountChangeTo() : int
    {
        return $this->characterCountChangeTo;
    }
    /**
     * 
     *
     * @param int $characterCountChangeTo
     *
     * @return self
     */
    public function setCharacterCountChangeTo(int $characterCountChangeTo) : self
    {
        $this->initialized['characterCountChangeTo'] = true;
        $this->characterCountChangeTo = $characterCountChangeTo;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContentType() : string
    {
        return $this->contentType;
    }
    /**
     * 
     *
     * @param string $contentType
     *
     * @return self
     */
    public function setContentType(string $contentType) : self
    {
        $this->initialized['contentType'] = true;
        $this->contentType = $contentType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getSettings() : iterable
    {
        return $this->settings;
    }
    /**
     * 
     *
     * @param mixed[] $settings
     *
     * @return self
     */
    public function setSettings(iterable $settings) : self
    {
        $this->initialized['settings'] = true;
        $this->settings = $settings;
        return $this;
    }
}