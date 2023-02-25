<?php

namespace ElevenLabs\V1\SDK\Exception;

class DownloadHistoryItemsV1HistoryDownloadPostUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \ElevenLabs\V1\SDK\Model\HTTPValidationError
     */
    private $hTTPValidationError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\ElevenLabs\V1\SDK\Model\HTTPValidationError $hTTPValidationError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Validation Error');
        $this->hTTPValidationError = $hTTPValidationError;
        $this->response = $response;
    }
    public function getHTTPValidationError() : \ElevenLabs\V1\SDK\Model\HTTPValidationError
    {
        return $this->hTTPValidationError;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}