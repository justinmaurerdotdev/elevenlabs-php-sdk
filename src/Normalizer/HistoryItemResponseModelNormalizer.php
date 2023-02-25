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
class HistoryItemResponseModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'ElevenLabs\\V1\\SDK\\Model\\HistoryItemResponseModel';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'ElevenLabs\\V1\\SDK\\Model\\HistoryItemResponseModel';
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
        $object = new \ElevenLabs\V1\SDK\Model\HistoryItemResponseModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('history_item_id', $data)) {
            $object->setHistoryItemId($data['history_item_id']);
            unset($data['history_item_id']);
        }
        if (\array_key_exists('voice_id', $data)) {
            $object->setVoiceId($data['voice_id']);
            unset($data['voice_id']);
        }
        if (\array_key_exists('voice_name', $data)) {
            $object->setVoiceName($data['voice_name']);
            unset($data['voice_name']);
        }
        if (\array_key_exists('text', $data)) {
            $object->setText($data['text']);
            unset($data['text']);
        }
        if (\array_key_exists('date_unix', $data)) {
            $object->setDateUnix($data['date_unix']);
            unset($data['date_unix']);
        }
        if (\array_key_exists('character_count_change_from', $data)) {
            $object->setCharacterCountChangeFrom($data['character_count_change_from']);
            unset($data['character_count_change_from']);
        }
        if (\array_key_exists('character_count_change_to', $data)) {
            $object->setCharacterCountChangeTo($data['character_count_change_to']);
            unset($data['character_count_change_to']);
        }
        if (\array_key_exists('content_type', $data)) {
            $object->setContentType($data['content_type']);
            unset($data['content_type']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
            unset($data['state']);
        }
        if (\array_key_exists('settings', $data)) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data['settings'] as $key => $value) {
                $values[$key] = $value;
            }
            $object->setSettings($values);
            unset($data['settings']);
        }
        foreach ($data as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $object[$key_1] = $value_1;
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
        $data['history_item_id'] = $object->getHistoryItemId();
        $data['voice_id'] = $object->getVoiceId();
        $data['voice_name'] = $object->getVoiceName();
        $data['text'] = $object->getText();
        $data['date_unix'] = $object->getDateUnix();
        $data['character_count_change_from'] = $object->getCharacterCountChangeFrom();
        $data['character_count_change_to'] = $object->getCharacterCountChangeTo();
        $data['content_type'] = $object->getContentType();
        $data['state'] = $object->getState();
        $values = array();
        foreach ($object->getSettings() as $key => $value) {
            $values[$key] = $value;
        }
        $data['settings'] = $values;
        foreach ($object as $key_1 => $value_1) {
            if (preg_match('/.*/', (string) $key_1)) {
                $data[$key_1] = $value_1;
            }
        }
        return $data;
    }
}