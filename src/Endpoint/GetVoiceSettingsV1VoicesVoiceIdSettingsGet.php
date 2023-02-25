<?php

namespace ElevenLabs\V1\SDK\Endpoint;

class GetVoiceSettingsV1VoicesVoiceIdSettingsGet extends \ElevenLabs\V1\SDK\Runtime\Client\BaseEndpoint implements \ElevenLabs\V1\SDK\Runtime\Client\Endpoint
{
    protected $voice_id;
    /**
     * Returns the settings for a specific voice.
     *
     * @param string $voiceId Voice ID to be used, you can use https://api.elevenlabs.io/v1/voices to list all the available voices.
     * @param array $headerParameters {
     *     @var string $xi-api-key Your API key. This is required by most endpoints to access our API programatically. You can view your xi-api-key using the 'Profile' tab on the website.
     * }
     */
    public function __construct(string $voiceId, array $headerParameters = array())
    {
        $this->voice_id = $voiceId;
        $this->headerParameters = $headerParameters;
    }
    use \ElevenLabs\V1\SDK\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{voice_id}'), array($this->voice_id), '/v1/voices/{voice_id}/settings');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('xi-api-key'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('xi-api-key', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \ElevenLabs\V1\SDK\Exception\GetVoiceSettingsV1VoicesVoiceIdSettingsGetUnprocessableEntityException
     *
     * @return null|\ElevenLabs\V1\SDK\Model\VoiceSettingsResponseModel
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ElevenLabs\\V1\\SDK\\Model\\VoiceSettingsResponseModel', 'json');
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ElevenLabs\V1\SDK\Exception\GetVoiceSettingsV1VoicesVoiceIdSettingsGetUnprocessableEntityException($serializer->deserialize($body, 'ElevenLabs\\V1\\SDK\\Model\\HTTPValidationError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}