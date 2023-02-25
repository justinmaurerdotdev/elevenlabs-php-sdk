<?php

namespace ElevenLabs\V1\SDK\Model;

class SampleResponseModel extends \ArrayObject
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
    protected $sampleId;
    /**
     * 
     *
     * @var string
     */
    protected $fileName;
    /**
     * 
     *
     * @var string
     */
    protected $mimeType;
    /**
     * 
     *
     * @var int
     */
    protected $sizeBytes;
    /**
     * 
     *
     * @var string
     */
    protected $hash;
    /**
     * 
     *
     * @return string
     */
    public function getSampleId() : string
    {
        return $this->sampleId;
    }
    /**
     * 
     *
     * @param string $sampleId
     *
     * @return self
     */
    public function setSampleId(string $sampleId) : self
    {
        $this->initialized['sampleId'] = true;
        $this->sampleId = $sampleId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFileName() : string
    {
        return $this->fileName;
    }
    /**
     * 
     *
     * @param string $fileName
     *
     * @return self
     */
    public function setFileName(string $fileName) : self
    {
        $this->initialized['fileName'] = true;
        $this->fileName = $fileName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMimeType() : string
    {
        return $this->mimeType;
    }
    /**
     * 
     *
     * @param string $mimeType
     *
     * @return self
     */
    public function setMimeType(string $mimeType) : self
    {
        $this->initialized['mimeType'] = true;
        $this->mimeType = $mimeType;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSizeBytes() : int
    {
        return $this->sizeBytes;
    }
    /**
     * 
     *
     * @param int $sizeBytes
     *
     * @return self
     */
    public function setSizeBytes(int $sizeBytes) : self
    {
        $this->initialized['sizeBytes'] = true;
        $this->sizeBytes = $sizeBytes;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHash() : string
    {
        return $this->hash;
    }
    /**
     * 
     *
     * @param string $hash
     *
     * @return self
     */
    public function setHash(string $hash) : self
    {
        $this->initialized['hash'] = true;
        $this->hash = $hash;
        return $this;
    }
}