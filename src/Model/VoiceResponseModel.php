<?php

namespace ElevenLabs\V1\SDK\Model;

class VoiceResponseModel extends \ArrayObject
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
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var SampleResponseModel[]
     */
    protected $samples;
    /**
     * 
     *
     * @var string
     */
    protected $category;
    /**
     * 
     *
     * @var FineTuningResponseModel
     */
    protected $fineTuning;
    /**
     * 
     *
     * @var string[]
     */
    protected $labels;
    /**
     * 
     *
     * @var string
     */
    protected $previewUrl;
    /**
     * 
     *
     * @var string[]
     */
    protected $availableForTiers;
    /**
     * 
     *
     * @var VoiceSettingsResponseModel
     */
    protected $settings;
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
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
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
     * 
     *
     * @return SampleResponseModel[]
     */
    public function getSamples() : array
    {
        return $this->samples;
    }
    /**
     * 
     *
     * @param SampleResponseModel[] $samples
     *
     * @return self
     */
    public function setSamples(array $samples) : self
    {
        $this->initialized['samples'] = true;
        $this->samples = $samples;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCategory() : string
    {
        return $this->category;
    }
    /**
     * 
     *
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category) : self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * 
     *
     * @return FineTuningResponseModel
     */
    public function getFineTuning() : FineTuningResponseModel
    {
        return $this->fineTuning;
    }
    /**
     * 
     *
     * @param FineTuningResponseModel $fineTuning
     *
     * @return self
     */
    public function setFineTuning(FineTuningResponseModel $fineTuning) : self
    {
        $this->initialized['fineTuning'] = true;
        $this->fineTuning = $fineTuning;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getLabels() : iterable
    {
        return $this->labels;
    }
    /**
     * 
     *
     * @param string[] $labels
     *
     * @return self
     */
    public function setLabels(iterable $labels) : self
    {
        $this->initialized['labels'] = true;
        $this->labels = $labels;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPreviewUrl() : string
    {
        return $this->previewUrl;
    }
    /**
     * 
     *
     * @param string $previewUrl
     *
     * @return self
     */
    public function setPreviewUrl(string $previewUrl) : self
    {
        $this->initialized['previewUrl'] = true;
        $this->previewUrl = $previewUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getAvailableForTiers() : array
    {
        return $this->availableForTiers;
    }
    /**
     * 
     *
     * @param string[] $availableForTiers
     *
     * @return self
     */
    public function setAvailableForTiers(array $availableForTiers) : self
    {
        $this->initialized['availableForTiers'] = true;
        $this->availableForTiers = $availableForTiers;
        return $this;
    }
    /**
     * 
     *
     * @return VoiceSettingsResponseModel
     */
    public function getSettings() : VoiceSettingsResponseModel
    {
        return $this->settings;
    }
    /**
     * 
     *
     * @param VoiceSettingsResponseModel $settings
     *
     * @return self
     */
    public function setSettings(VoiceSettingsResponseModel $settings) : self
    {
        $this->initialized['settings'] = true;
        $this->settings = $settings;
        return $this;
    }
}