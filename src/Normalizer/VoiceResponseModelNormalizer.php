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
class VoiceResponseModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'ElevenLabs\\V1\\SDK\\Model\\VoiceResponseModel';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'ElevenLabs\\V1\\SDK\\Model\\VoiceResponseModel';
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
        $object = new \ElevenLabs\V1\SDK\Model\VoiceResponseModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('voice_id', $data)) {
            $object->setVoiceId($data['voice_id']);
            unset($data['voice_id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        if (\array_key_exists('samples', $data) && is_array($data['samples'])) {
            $values = array();
            foreach ($data['samples'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ElevenLabs\\V1\\SDK\\Model\\SampleResponseModel', 'json', $context);
            }
            $object->setSamples($values);
            unset($data['samples']);
        }
        if (\array_key_exists('category', $data)) {
            $object->setCategory($data['category']);
            unset($data['category']);
        }
        if (\array_key_exists('fine_tuning', $data)) {
            $object->setFineTuning($this->denormalizer->denormalize($data['fine_tuning'], 'ElevenLabs\\V1\\SDK\\Model\\FineTuningResponseModel', 'json', $context));
            unset($data['fine_tuning']);
        }
        if (\array_key_exists('labels', $data)) {
            $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['labels'] as $key => $value_1) {
                $values_1[$key] = $value_1;
            }
            $object->setLabels($values_1);
            unset($data['labels']);
        }
        if (\array_key_exists('preview_url', $data)) {
            $object->setPreviewUrl($data['preview_url']);
            unset($data['preview_url']);
        }
        if (\array_key_exists('available_for_tiers', $data)) {
            $values_2 = array();
            foreach ($data['available_for_tiers'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setAvailableForTiers($values_2);
            unset($data['available_for_tiers']);
        }
        if (\array_key_exists('settings', $data)) {
            $object->setSettings($this->denormalizer->denormalize($data['settings'], 'ElevenLabs\\V1\\SDK\\Model\\VoiceSettingsResponseModel', 'json', $context));
            unset($data['settings']);
        }
        foreach ($data as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_3;
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
        $data['voice_id'] = $object->getVoiceId();
        $data['name'] = $object->getName();
        $values = array();
        foreach ($object->getSamples() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['samples'] = $values;
        $data['category'] = $object->getCategory();
        $data['fine_tuning'] = $this->normalizer->normalize($object->getFineTuning(), 'json', $context);
        $values_1 = array();
        foreach ($object->getLabels() as $key => $value_1) {
            $values_1[$key] = $value_1;
        }
        $data['labels'] = $values_1;
        $data['preview_url'] = $object->getPreviewUrl();
        $values_2 = array();
        foreach ($object->getAvailableForTiers() as $value_2) {
            $values_2[] = $value_2;
        }
        $data['available_for_tiers'] = $values_2;
        $data['settings'] = $this->normalizer->normalize($object->getSettings(), 'json', $context);
        foreach ($object as $key_1 => $value_3) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_3;
            }
        }
        return $data;
    }
}