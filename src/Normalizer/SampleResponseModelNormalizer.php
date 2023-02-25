<?php

namespace ElevenLabs\V1\SDK\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use ElevenLabs\V1\SDK\Runtime\Normalizer\CheckArray;
use ElevenLabs\V1\SDK\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SampleResponseModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'ElevenLabs\\V1\\SDK\\Model\\SampleResponseModel';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'ElevenLabs\\V1\\SDK\\Model\\SampleResponseModel';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \ElevenLabs\V1\SDK\Model\SampleResponseModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sample_id', $data)) {
            $object->setSampleId($data['sample_id']);
            unset($data['sample_id']);
        }
        if (\array_key_exists('file_name', $data)) {
            $object->setFileName($data['file_name']);
            unset($data['file_name']);
        }
        if (\array_key_exists('mime_type', $data)) {
            $object->setMimeType($data['mime_type']);
            unset($data['mime_type']);
        }
        if (\array_key_exists('size_bytes', $data)) {
            $object->setSizeBytes($data['size_bytes']);
            unset($data['size_bytes']);
        }
        if (\array_key_exists('hash', $data)) {
            $object->setHash($data['hash']);
            unset($data['hash']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['sample_id'] = $object->getSampleId();
        $data['file_name'] = $object->getFileName();
        $data['mime_type'] = $object->getMimeType();
        $data['size_bytes'] = $object->getSizeBytes();
        $data['hash'] = $object->getHash();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}