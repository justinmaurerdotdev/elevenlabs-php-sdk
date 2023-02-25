<?php

namespace ElevenLabs\V1\SDK\Model;

class BodyDownloadHistoryItemsV1HistoryDownloadPost extends \ArrayObject
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
     * A list of history items to download, you can get IDs of history items and other metadata using the GET https://api.elevenlabs.io/v1/history endpoint.
     *
     * @var string[]
     */
    protected $historyItemIds;
    /**
     * A list of history items to download, you can get IDs of history items and other metadata using the GET https://api.elevenlabs.io/v1/history endpoint.
     *
     * @return string[]
     */
    public function getHistoryItemIds() : array
    {
        return $this->historyItemIds;
    }
    /**
     * A list of history items to download, you can get IDs of history items and other metadata using the GET https://api.elevenlabs.io/v1/history endpoint.
     *
     * @param string[] $historyItemIds
     *
     * @return self
     */
    public function setHistoryItemIds(array $historyItemIds) : self
    {
        $this->initialized['historyItemIds'] = true;
        $this->historyItemIds = $historyItemIds;
        return $this;
    }
}