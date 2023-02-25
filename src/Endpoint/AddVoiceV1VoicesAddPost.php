<?php

namespace ElevenLabs\V1\SDK\Endpoint;

class AddVoiceV1VoicesAddPost extends \ElevenLabs\V1\SDK\Runtime\Client\BaseEndpoint implements \ElevenLabs\V1\SDK\Runtime\Client\Endpoint
{
    /**
     * Add a new voice to your collection of voices in VoiceLab.
     *
     * @param \ElevenLabs\V1\SDK\Model\BodyAddVoiceV1VoicesAddPost $requestBody 
     * @param array $headerParameters {
     *     @var string $xi-api-key Your API key. This is required by most endpoints to access our API programatically. You can view your xi-api-key using the 'Profile' tab on the website.
     * }
     */
    public function __construct(\ElevenLabs\V1\SDK\Model\BodyAddVoiceV1VoicesAddPost $requestBody, array $headerParameters = array())
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \ElevenLabs\V1\SDK\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/v1/voices/add';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \ElevenLabs\V1\SDK\Model\BodyAddVoiceV1VoicesAddPost) {
            $bodyBuilder = new \Http\Message\MultipartStream\MultipartStreamBuilder($streamFactory);
            $formParameters = $serializer->normalize($this->body, 'json');
            foreach ($formParameters as $key => $value) {
                $value = is_int($value) ? (string) $value : $value;
                $bodyBuilder->addResource($key, $value);
            }
            return array(array('Content-Type' => array('multipart/form-data; boundary="' . ($bodyBuilder->getBoundary() . '""'))), $bodyBuilder->build());
        }
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
     * @throws \ElevenLabs\V1\SDK\Exception\AddVoiceV1VoicesAddPostUnprocessableEntityException
     *
     * @return null|\ElevenLabs\V1\SDK\Model\AddVoiceResponseModel
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'ElevenLabs\\V1\\SDK\\Model\\AddVoiceResponseModel', 'json');
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ElevenLabs\V1\SDK\Exception\AddVoiceV1VoicesAddPostUnprocessableEntityException($serializer->deserialize($body, 'ElevenLabs\\V1\\SDK\\Model\\HTTPValidationError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}