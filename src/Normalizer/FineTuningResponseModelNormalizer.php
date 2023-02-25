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
class FineTuningResponseModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'ElevenLabs\\V1\\SDK\\Model\\FineTuningResponseModel';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'ElevenLabs\\V1\\SDK\\Model\\FineTuningResponseModel';
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
        $object = new \ElevenLabs\V1\SDK\Model\FineTuningResponseModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('is_allowed_to_fine_tune', $data)) {
            $object->setIsAllowedToFineTune($data['is_allowed_to_fine_tune']);
            unset($data['is_allowed_to_fine_tune']);
        }
        if (\array_key_exists('fine_tuning_requested', $data)) {
            $object->setFineTuningRequested($data['fine_tuning_requested']);
            unset($data['fine_tuning_requested']);
        }
        if (\array_key_exists('finetuning_state', $data)) {
            $object->setFinetuningState($data['finetuning_state']);
            unset($data['finetuning_state']);
        }
        if (\array_key_exists('verification_attempts_count', $data)) {
            $object->setVerificationAttemptsCount($data['verification_attempts_count']);
            unset($data['verification_attempts_count']);
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
        $data['is_allowed_to_fine_tune'] = $object->getIsAllowedToFineTune();
        $data['fine_tuning_requested'] = $object->getFineTuningRequested();
        $data['finetuning_state'] = $object->getFinetuningState();
        $data['verification_attempts_count'] = $object->getVerificationAttemptsCount();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}