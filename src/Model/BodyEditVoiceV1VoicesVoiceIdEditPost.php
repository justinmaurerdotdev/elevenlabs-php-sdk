<?php

namespace ElevenLabs\V1\SDK\Model;

class BodyEditVoiceV1VoicesVoiceIdEditPost extends \ArrayObject
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
     * The name that identifies this voice. This will be displayed in the dropdown of the website.
     *
     * @var string
     */
    protected $name;
    /**
     * Audio files to add to the voice
     *
     * @var string[]
     */
    protected $files;
    /**
     * Serialized labels dictionary for the voice.
     *
     * @var string
     */
    protected $labels;
    /**
     * The name that identifies this voice. This will be displayed in the dropdown of the website.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name that identifies this voice. This will be displayed in the dropdown of the website.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Audio files to add to the voice
     *
     * @return string[]
     */
    public function getFiles() : array
    {
        return $this->files;
    }
    /**
     * Audio files to add to the voice
     *
     * @param string[] $files
     *
     * @return self
     */
    public function setFiles(array $files) : self
    {
        $this->initialized['files'] = true;
        $this->files = $files;
        return $this;
    }
    /**
     * Serialized labels dictionary for the voice.
     *
     * @return string
     */
    public function getLabels() : string
    {
        return $this->labels;
    }
    /**
     * Serialized labels dictionary for the voice.
     *
     * @param string $labels
     *
     * @return self
     */
    public function setLabels(string $labels) : self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
}