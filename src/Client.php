<?php

namespace ElevenLabs\V1\SDK;

class Client extends \ElevenLabs\V1\SDK\Runtime\Client\Client
{
    /**
     * Returns metadata about all your generated audio.
     *
     * @param array $headerParameters {
     *     @var string $xi-api-key Your API key. This is required by most endpoints to access our API programatically. You can view your xi-api-key using the 'Profile' tab on the website.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ElevenLabs\V1\SDK\Exception\GetGeneratedItemsV1HistoryGetUnprocessableEntityException
     *
     * @return null|\ElevenLabs\V1\SDK\Model\GetHistoryResponseModel|\Psr\Http\Message\ResponseInterface
     */
    public function getGeneratedItemsV1HistoryGet(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ElevenLabs\V1\SDK\Endpoint\GetGeneratedItemsV1HistoryGet($headerParameters), $fetch);
    }
    /**
     * Returns the audio of an history item.
     *
     * @param string $historyItemId History item ID to be used, you can use GET https://api.elevenlabs.io/v1/history to receive a list of history items and their IDs.
     * @param array $headerParameters {
     *     @var string $xi-api-key Your API key. This is required by most endpoints to access our API programatically. You can view your xi-api-key using the 'Profile' tab on the website.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header audio/mpeg|application/json
     * @throws \ElevenLabs\V1\SDK\Exception\GetAudioFromHistoryItemV1HistoryHistoryItemIdAudioGetUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getAudioFromHistoryItemV1HistoryHistoryItemIdAudioGet(string $historyItemId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT, array $accept = array())
    {
        return $this->executeEndpoint(new \ElevenLabs\V1\SDK\Endpoint\GetAudioFromHistoryItemV1HistoryHistoryItemIdAudioGet($historyItemId, $headerParameters, $accept), $fetch);
    }
    /**
     * Delete a number of history items by their IDs.
     *
     * @param \ElevenLabs\V1\SDK\Model\BodyDeleteHistoryItemsV1HistoryDeletePost $requestBody 
     * @param array $headerParameters {
     *     @var string $xi-api-key Your API key. This is required by most endpoints to access our API programatically. You can view your xi-api-key using the 'Profile' tab on the website.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ElevenLabs\V1\SDK\Exception\DeleteHistoryItemsV1HistoryDeletePostUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteHistoryItemsV1HistoryDeletePost(\ElevenLabs\V1\SDK\Model\BodyDeleteHistoryItemsV1HistoryDeletePost $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ElevenLabs\V1\SDK\Endpoint\DeleteHistoryItemsV1HistoryDeletePost($requestBody, $headerParameters), $fetch);
    }
    /**
     * Delete a history item by its ID
     *
     * @param string $historyItemId History item ID to be used, you can use GET https://api.elevenlabs.io/v1/history to receive a list of history items and their IDs.
     * @param array $headerParameters {
     *     @var string $xi-api-key Your API key. This is required by most endpoints to access our API programatically. You can view your xi-api-key using the 'Profile' tab on the website.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ElevenLabs\V1\SDK\Exception\DeleteHistoryItemV1HistoryHistoryItemIdDeleteUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteHistoryItemV1HistoryHistoryItemIdDelete(string $historyItemId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ElevenLabs\V1\SDK\Endpoint\DeleteHistoryItemV1HistoryHistoryItemIdDelete($historyItemId, $headerParameters), $fetch);
    }
    /**
     * Download one or more history items. If one history item ID is provided, we will return a single audio file. If more than one history item IDs are provided, we will provide the history items packed into a .zip file.
     *
     * @param \ElevenLabs\V1\SDK\Model\BodyDownloadHistoryItemsV1HistoryDownloadPost $requestBody 
     * @param array $headerParameters {
     *     @var string $xi-api-key Your API key. This is required by most endpoints to access our API programatically. You can view your xi-api-key using the 'Profile' tab on the website.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ElevenLabs\V1\SDK\Exception\DownloadHistoryItemsV1HistoryDownloadPostUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function downloadHistoryItemsV1HistoryDownloadPost(\ElevenLabs\V1\SDK\Model\BodyDownloadHistoryItemsV1HistoryDownloadPost $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ElevenLabs\V1\SDK\Endpoint\DownloadHistoryItemsV1HistoryDownloadPost($requestBody, $headerParameters), $fetch);
    }
    /**
     * Removes a sample by its ID.
     *
     * @param string $voiceId Voice ID to be used, you can use https://api.elevenlabs.io/v1/voices to list all the available voices.
     * @param string $sampleId Sample ID to be used, you can use GET https://api.elevenlabs.io/v1/voices/{voice_id} to list all the available samples for a voice.
     * @param array $headerParameters {
     *     @var string $xi-api-key Your API key. This is required by most endpoints to access our API programatically. You can view your xi-api-key using the 'Profile' tab on the website.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ElevenLabs\V1\SDK\Exception\DeleteSampleV1VoicesVoiceIdSamplesSampleIdDeleteUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteSampleV1VoicesVoiceIdSamplesSampleIdDelete(string $voiceId, string $sampleId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ElevenLabs\V1\SDK\Endpoint\DeleteSampleV1VoicesVoiceIdSamplesSampleIdDelete($voiceId, $sampleId, $headerParameters), $fetch);
    }
    /**
     * Returns the audio corresponding to a sample attached to a voice.
     *
     * @param string $voiceId Voice ID to be used, you can use https://api.elevenlabs.io/v1/voices to list all the available voices.
     * @param string $sampleId Sample ID to be used, you can use GET https://api.elevenlabs.io/v1/voices/{voice_id} to list all the available samples for a voice.
     * @param array $headerParameters {
     *     @var string $xi-api-key Your API key. This is required by most endpoints to access our API programatically. You can view your xi-api-key using the 'Profile' tab on the website.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header audio/*|application/json
     * @throws \ElevenLabs\V1\SDK\Exception\GetAudioFromSampleV1VoicesVoiceIdSamplesSampleIdAudioGetUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getAudioFromSampleV1VoicesVoiceIdSamplesSampleIdAudioGet(string $voiceId, string $sampleId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT, array $accept = array())
    {
        return $this->executeEndpoint(new \ElevenLabs\V1\SDK\Endpoint\GetAudioFromSampleV1VoicesVoiceIdSamplesSampleIdAudioGet($voiceId, $sampleId, $headerParameters, $accept), $fetch);
    }
    /**
     * Converts text into speech using a voice of your choice and returns audio.
     *
     * @param string $voiceId Voice ID to be used, you can use https://api.elevenlabs.io/v1/voices to list all the available voices.
     * @param \ElevenLabs\V1\SDK\Model\BodyTextToSpeechV1TextToSpeechVoiceIdPost $requestBody 
     * @param array $headerParameters {
     *     @var string $xi-api-key Your API key. This is required by most endpoints to access our API programatically. You can view your xi-api-key using the 'Profile' tab on the website.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @param array $accept Accept content header audio/mpeg|application/json
     * @throws \ElevenLabs\V1\SDK\Exception\TextToSpeechV1TextToSpeechVoiceIdPostUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function textToSpeechV1TextToSpeechVoiceIdPost(string $voiceId, \ElevenLabs\V1\SDK\Model\BodyTextToSpeechV1TextToSpeechVoiceIdPost $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT, array $accept = array())
    {
        return $this->executeEndpoint(new \ElevenLabs\V1\SDK\Endpoint\TextToSpeechV1TextToSpeechVoiceIdPost($voiceId, $requestBody, $headerParameters, $accept), $fetch);
    }
    /**
     * Converts text into speech using a voice of your choice and returns audio as an audio stream.
     *
     * @param string $voiceId Voice ID to be used, you can use https://api.elevenlabs.io/v1/voices to list all the available voices.
     * @param \ElevenLabs\V1\SDK\Model\BodyTextToSpeechV1TextToSpeechVoiceIdStreamPost $requestBody 
     * @param array $headerParameters {
     *     @var string $xi-api-key Your API key. This is required by most endpoints to access our API programatically. You can view your xi-api-key using the 'Profile' tab on the website.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ElevenLabs\V1\SDK\Exception\TextToSpeechV1TextToSpeechVoiceIdStreamPostUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function textToSpeechV1TextToSpeechVoiceIdStreamPost(string $voiceId, \ElevenLabs\V1\SDK\Model\BodyTextToSpeechV1TextToSpeechVoiceIdStreamPost $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ElevenLabs\V1\SDK\Endpoint\TextToSpeechV1TextToSpeechVoiceIdStreamPost($voiceId, $requestBody, $headerParameters), $fetch);
    }
    /**
     * Gets extended information about the users subscription
     *
     * @param array $headerParameters {
     *     @var string $xi-api-key Your API key. This is required by most endpoints to access our API programatically. You can view your xi-api-key using the 'Profile' tab on the website.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ElevenLabs\V1\SDK\Exception\GetUserSubscriptionInfoV1UserSubscriptionGetUnprocessableEntityException
     *
     * @return null|\ElevenLabs\V1\SDK\Model\ExtendedSubscriptionResponseModel|\Psr\Http\Message\ResponseInterface
     */
    public function getUserSubscriptionInfoV1UserSubscriptionGet(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ElevenLabs\V1\SDK\Endpoint\GetUserSubscriptionInfoV1UserSubscriptionGet($headerParameters), $fetch);
    }
    /**
     * Gets information about the user
     *
     * @param array $headerParameters {
     *     @var string $xi-api-key Your API key. This is required by most endpoints to access our API programatically. You can view your xi-api-key using the 'Profile' tab on the website.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ElevenLabs\V1\SDK\Exception\GetUserInfoV1UserGetUnprocessableEntityException
     *
     * @return null|\ElevenLabs\V1\SDK\Model\UserResponseModel|\Psr\Http\Message\ResponseInterface
     */
    public function getUserInfoV1UserGet(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ElevenLabs\V1\SDK\Endpoint\GetUserInfoV1UserGet($headerParameters), $fetch);
    }
    /**
     * Gets a list of all available voices for a user.
     *
     * @param array $headerParameters {
     *     @var string $xi-api-key Your API key. This is required by most endpoints to access our API programatically. You can view your xi-api-key using the 'Profile' tab on the website.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ElevenLabs\V1\SDK\Exception\GetVoicesV1VoicesGetUnprocessableEntityException
     *
     * @return null|\ElevenLabs\V1\SDK\Model\GetVoicesResponseModel|\Psr\Http\Message\ResponseInterface
     */
    public function getVoicesV1VoicesGet(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ElevenLabs\V1\SDK\Endpoint\GetVoicesV1VoicesGet($headerParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\ElevenLabs\V1\SDK\Model\VoiceSettingsResponseModel|\Psr\Http\Message\ResponseInterface
     */
    public function getDefaultVoiceSettingsV1VoicesSettingsDefaultGet(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ElevenLabs\V1\SDK\Endpoint\GetDefaultVoiceSettingsV1VoicesSettingsDefaultGet(), $fetch);
    }
    /**
     * Returns the settings for a specific voice.
     *
     * @param string $voiceId Voice ID to be used, you can use https://api.elevenlabs.io/v1/voices to list all the available voices.
     * @param array $headerParameters {
     *     @var string $xi-api-key Your API key. This is required by most endpoints to access our API programatically. You can view your xi-api-key using the 'Profile' tab on the website.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ElevenLabs\V1\SDK\Exception\GetVoiceSettingsV1VoicesVoiceIdSettingsGetUnprocessableEntityException
     *
     * @return null|\ElevenLabs\V1\SDK\Model\VoiceSettingsResponseModel|\Psr\Http\Message\ResponseInterface
     */
    public function getVoiceSettingsV1VoicesVoiceIdSettingsGet(string $voiceId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ElevenLabs\V1\SDK\Endpoint\GetVoiceSettingsV1VoicesVoiceIdSettingsGet($voiceId, $headerParameters), $fetch);
    }
    /**
     * Deletes a voice by its ID.
     *
     * @param string $voiceId Voice ID to be used, you can use https://api.elevenlabs.io/v1/voices to list all the available voices.
     * @param array $headerParameters {
     *     @var string $xi-api-key Your API key. This is required by most endpoints to access our API programatically. You can view your xi-api-key using the 'Profile' tab on the website.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ElevenLabs\V1\SDK\Exception\DeleteVoiceV1VoicesVoiceIdDeleteUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteVoiceV1VoicesVoiceIdDelete(string $voiceId, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ElevenLabs\V1\SDK\Endpoint\DeleteVoiceV1VoicesVoiceIdDelete($voiceId, $headerParameters), $fetch);
    }
    /**
     * Returns metadata about a specific voice.
     *
     * @param string $voiceId Voice ID to be used, you can use https://api.elevenlabs.io/v1/voices to list all the available voices.
     * @param array $queryParameters {
     *     @var bool $with_settings If set will return settings information corresponding to the voice, requires authorization.
     * }
     * @param array $headerParameters {
     *     @var string $xi-api-key Your API key. This is required by most endpoints to access our API programatically. You can view your xi-api-key using the 'Profile' tab on the website.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ElevenLabs\V1\SDK\Exception\GetVoiceV1VoicesVoiceIdGetUnprocessableEntityException
     *
     * @return null|\ElevenLabs\V1\SDK\Model\VoiceResponseModel|\Psr\Http\Message\ResponseInterface
     */
    public function getVoiceV1VoicesVoiceIdGet(string $voiceId, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ElevenLabs\V1\SDK\Endpoint\GetVoiceV1VoicesVoiceIdGet($voiceId, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * Edit your settings for a specific voice.
     *
     * @param string $voiceId Voice ID to be used, you can use https://api.elevenlabs.io/v1/voices to list all the available voices.
     * @param \ElevenLabs\V1\SDK\Model\V1VoicesVoiceIdSettingsEditPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $xi-api-key Your API key. This is required by most endpoints to access our API programatically. You can view your xi-api-key using the 'Profile' tab on the website.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ElevenLabs\V1\SDK\Exception\EditVoiceSettingsV1VoicesVoiceIdSettingsEditPostUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function editVoiceSettingsV1VoicesVoiceIdSettingsEditPost(string $voiceId, \ElevenLabs\V1\SDK\Model\V1VoicesVoiceIdSettingsEditPostBody $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ElevenLabs\V1\SDK\Endpoint\EditVoiceSettingsV1VoicesVoiceIdSettingsEditPost($voiceId, $requestBody, $headerParameters), $fetch);
    }
    /**
     * Add a new voice to your collection of voices in VoiceLab.
     *
     * @param \ElevenLabs\V1\SDK\Model\BodyAddVoiceV1VoicesAddPost $requestBody 
     * @param array $headerParameters {
     *     @var string $xi-api-key Your API key. This is required by most endpoints to access our API programatically. You can view your xi-api-key using the 'Profile' tab on the website.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ElevenLabs\V1\SDK\Exception\AddVoiceV1VoicesAddPostUnprocessableEntityException
     *
     * @return null|\ElevenLabs\V1\SDK\Model\AddVoiceResponseModel|\Psr\Http\Message\ResponseInterface
     */
    public function addVoiceV1VoicesAddPost(\ElevenLabs\V1\SDK\Model\BodyAddVoiceV1VoicesAddPost $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ElevenLabs\V1\SDK\Endpoint\AddVoiceV1VoicesAddPost($requestBody, $headerParameters), $fetch);
    }
    /**
     * Edit a voice created by you.
     *
     * @param string $voiceId Voice ID to be used, you can use https://api.elevenlabs.io/v1/voices to list all the available voices.
     * @param \ElevenLabs\V1\SDK\Model\BodyEditVoiceV1VoicesVoiceIdEditPost $requestBody 
     * @param array $headerParameters {
     *     @var string $xi-api-key Your API key. This is required by most endpoints to access our API programatically. You can view your xi-api-key using the 'Profile' tab on the website.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \ElevenLabs\V1\SDK\Exception\EditVoiceV1VoicesVoiceIdEditPostUnprocessableEntityException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function editVoiceV1VoicesVoiceIdEditPost(string $voiceId, \ElevenLabs\V1\SDK\Model\BodyEditVoiceV1VoicesVoiceIdEditPost $requestBody, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \ElevenLabs\V1\SDK\Endpoint\EditVoiceV1VoicesVoiceIdEditPost($voiceId, $requestBody, $headerParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \ElevenLabs\V1\SDK\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}