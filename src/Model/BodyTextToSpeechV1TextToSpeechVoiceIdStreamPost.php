<?php

namespace ElevenLabs\V1\SDK\Model;

class BodyTextToSpeechV1TextToSpeechVoiceIdStreamPost extends \ArrayObject
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
     * @var BodyTextToSpeechV1TextToSpeechVoiceIdStreamPostVoiceSettings
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
     * @return BodyTextToSpeechV1TextToSpeechVoiceIdStreamPostVoiceSettings
     */
    public function getVoiceSettings() : BodyTextToSpeechV1TextToSpeechVoiceIdStreamPostVoiceSettings
    {
        return $this->voiceSettings;
    }
    /**
     * Voice settings overriding stored setttings for the given voice. They are applied only on the given TTS request.
     *
     * @param BodyTextToSpeechV1TextToSpeechVoiceIdStreamPostVoiceSettings $voiceSettings
     *
     * @return self
     */
    public function setVoiceSettings(BodyTextToSpeechV1TextToSpeechVoiceIdStreamPostVoiceSettings $voiceSettings) : self
    {
        $this->initialized['voiceSettings'] = true;
        $this->voiceSettings = $voiceSettings;
        return $this;
    }
}