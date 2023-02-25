<?php

namespace ElevenLabs\V1\SDK\Model;

class GetHistoryResponseModel extends \ArrayObject
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
     * @var HistoryItemResponseModel[]
     */
    protected $history;
    /**
     * 
     *
     * @return HistoryItemResponseModel[]
     */
    public function getHistory() : array
    {
        return $this->history;
    }
    /**
     * 
     *
     * @param HistoryItemResponseModel[] $history
     *
     * @return self
     */
    public function setHistory(array $history) : self
    {
        $this->initialized['history'] = true;
        $this->history = $history;
        return $this;
    }
}