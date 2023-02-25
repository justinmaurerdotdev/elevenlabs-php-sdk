<?php

namespace ElevenLabs\V1\SDK\Endpoint;

class GetAudioFromSampleV1VoicesVoiceIdSamplesSampleIdAudioGet extends \ElevenLabs\V1\SDK\Runtime\Client\BaseEndpoint implements \ElevenLabs\V1\SDK\Runtime\Client\Endpoint
{
    protected $voice_id;
    protected $sample_id;
    protected $accept;
    /**
     * Returns the audio corresponding to a sample attached to a voice.
     *
     * @param string $voiceId Voice ID to be used, you can use https://api.elevenlabs.io/v1/voices to list all the available voices.
     * @param string $sampleId Sample ID to be used, you can use GET https://api.elevenlabs.io/v1/voices/{voice_id} to list all the available samples for a voice.
     * @param array $headerParameters {
     *     @var string $xi-api-key Your API key. This is required by most endpoints to access our API programatically. You can view your xi-api-key using the 'Profile' tab on the website.
     * }
     * @param array $accept Accept content header audio/*|application/json
     */
    public function __construct(string $voiceId, string $sampleId, array $headerParameters = array(), array $accept = array())
    {
        $this->voice_id = $voiceId;
        $this->sample_id = $sampleId;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }
    use \ElevenLabs\V1\SDK\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{voice_id}', '{sample_id}'), array($this->voice_id, $this->sample_id), '/v1/voices/{voice_id}/samples/{sample_id}/audio');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        if (empty($this->accept)) {
            return array('Accept' => array('audio/*', 'application/json'));
        }
        return $this->accept;
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
     * @throws \ElevenLabs\V1\SDK\Exception\GetAudioFromSampleV1VoicesVoiceIdSamplesSampleIdAudioGetUnprocessableEntityException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ElevenLabs\V1\SDK\Exception\GetAudioFromSampleV1VoicesVoiceIdSamplesSampleIdAudioGetUnprocessableEntityException($serializer->deserialize($body, 'ElevenLabs\\V1\\SDK\\Model\\HTTPValidationError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}