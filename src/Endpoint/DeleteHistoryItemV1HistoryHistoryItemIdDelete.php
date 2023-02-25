<?php

namespace ElevenLabs\V1\SDK\Endpoint;

class DeleteHistoryItemV1HistoryHistoryItemIdDelete extends \ElevenLabs\V1\SDK\Runtime\Client\BaseEndpoint implements \ElevenLabs\V1\SDK\Runtime\Client\Endpoint
{
    protected $history_item_id;
    /**
     * Delete a history item by its ID
     *
     * @param string $historyItemId History item ID to be used, you can use GET https://api.elevenlabs.io/v1/history to receive a list of history items and their IDs.
     * @param array $headerParameters {
     *     @var string $xi-api-key Your API key. This is required by most endpoints to access our API programatically. You can view your xi-api-key using the 'Profile' tab on the website.
     * }
     */
    public function __construct(string $historyItemId, array $headerParameters = array())
    {
        $this->history_item_id = $historyItemId;
        $this->headerParameters = $headerParameters;
    }
    use \ElevenLabs\V1\SDK\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{history_item_id}'), array($this->history_item_id), '/v1/history/{history_item_id}');
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
     * @throws \ElevenLabs\V1\SDK\Exception\DeleteHistoryItemV1HistoryHistoryItemIdDeleteUnprocessableEntityException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \ElevenLabs\V1\SDK\Exception\DeleteHistoryItemV1HistoryHistoryItemIdDeleteUnprocessableEntityException($serializer->deserialize($body, 'ElevenLabs\\V1\\SDK\\Model\\HTTPValidationError', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}