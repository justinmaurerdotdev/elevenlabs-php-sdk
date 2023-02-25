<?php

namespace ElevenLabs\V1\SDK\Endpoint;

class TextToSpeechV1TextToSpeechVoiceIdPost extends \ElevenLabs\V1\SDK\Runtime\Client\BaseEndpoint implements \ElevenLabs\V1\SDK\Runtime\Client\Endpoint
{
    protected $voice_id;
    protected $accept;
    /**
     * Converts text into speech using a voice of your choice and returns audio.
     *
     * @param string $voiceId Voice ID to be used, you can use https://api.elevenlabs.io/v1/voices to list all the available voices.
     * @param \ElevenLabs\V1\SDK\Model\BodyTextToSpeechV1TextToSpeechVoiceIdPost $requestBody 
     * @param array $headerParameters {
     *     @var string $xi-api-key Your API key. This is required by most endpoints to access our API programatically. You can view your xi-api-key using the 'Profile' tab on the website.
     * }
     * @param array $accept Accept content header audio/mpeg|application/json
     */
    public function __construct(string $voiceId, \ElevenLabs\V1\SDK\Model\BodyTextToSpeechV1TextToSpeechVoiceIdPost $requestBody, array $headerParameters = array(), array $accept = array())
    {
        $this->voice_id = $voiceId;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
        $this->accept = $accept;
    }
    use \ElevenLabs\V1\SDK\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(array('{voice_id}'), array($this->voice_id), '/v1/text-to-speech/{voice_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ElevenLabs\V1\SDK\Model\BodyTextToSpeechV1TextToSpeechVoiceIdPost) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        if (empty($this->accept)) {
            return array('Accept' => array('audio/mpeg', 'application/json'));
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
     * @throws \ElevenLabs\V1\SDK\Exception\TextToSpeechV1TextToSpeechVoiceIdPostUnprocessableEntityException
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
            throw new \ElevenLabs\V1\SDK\Exception\TextToSpeechV1TextToSpeechVoiceIdPostUnprocessableEntityException($serializer->deserialize($body, 'ElevenLabs\\V1\\SDK\\Model\\HTTPValidationError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}