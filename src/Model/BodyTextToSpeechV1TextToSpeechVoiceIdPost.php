<?php

namespace ElevenLabs\V1\SDK\Model;

class BodyTextToSpeechV1TextToSpeechVoiceIdPost extends \ArrayObject
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
     * The text that will get converted into speech. Currently only English text is supported.
     *
     * @var string
     */
    protected $text;
    /**
     * Voice settings overriding stored setttings for the given voice. They are applied only on the given TTS request.
     *
     * @var BodyTextToSpeechV1TextToSpeechVoiceIdPostVoiceSettings
     */
    protected $voiceSettings;
    /**
     * The text that will get converted into speech. Currently only English text is supported.
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * The text that will get converted into speech. Currently only English text is supported.
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
     * Voice settings overriding stored setttings for the given voice. They are applied only on the given TTS request.
     *
     * @return BodyTextToSpeechV1TextToSpeechVoiceIdPostVoiceSettings
     */
    public function getVoiceSettings() : BodyTextToSpeechV1TextToSpeechVoiceIdPostVoiceSettings
    {
        return $this->voiceSettings;
    }
    /**
     * Voice settings overriding stored setttings for the given voice. They are applied only on the given TTS request.
     *
     * @param BodyTextToSpeechV1TextToSpeechVoiceIdPostVoiceSettings $voiceSettings
     *
     * @return self
     */
    public function setVoiceSettings(BodyTextToSpeechV1TextToSpeechVoiceIdPostVoiceSettings $voiceSettings) : self
    {
        $this->initialized['voiceSettings'] = true;
        $this->voiceSettings = $voiceSettings;
        return $this;
    }
}