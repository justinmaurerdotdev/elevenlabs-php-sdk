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
class ExtendedSubscriptionResponseModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'ElevenLabs\\V1\\SDK\\Model\\ExtendedSubscriptionResponseModel';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'ElevenLabs\\V1\\SDK\\Model\\ExtendedSubscriptionResponseModel';
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
        $object = new \ElevenLabs\V1\SDK\Model\ExtendedSubscriptionResponseModel();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('tier', $data)) {
            $object->setTier($data['tier']);
            unset($data['tier']);
        }
        if (\array_key_exists('character_count', $data)) {
            $object->setCharacterCount($data['character_count']);
            unset($data['character_count']);
        }
        if (\array_key_exists('character_limit', $data)) {
            $object->setCharacterLimit($data['character_limit']);
            unset($data['character_limit']);
        }
        if (\array_key_exists('can_extend_character_limit', $data)) {
            $object->setCanExtendCharacterLimit($data['can_extend_character_limit']);
            unset($data['can_extend_character_limit']);
        }
        if (\array_key_exists('allowed_to_extend_character_limit', $data)) {
            $object->setAllowedToExtendCharacterLimit($data['allowed_to_extend_character_limit']);
            unset($data['allowed_to_extend_character_limit']);
        }
        if (\array_key_exists('next_character_count_reset_unix', $data)) {
            $object->setNextCharacterCountResetUnix($data['next_character_count_reset_unix']);
            unset($data['next_character_count_reset_unix']);
        }
        if (\array_key_exists('voice_limit', $data)) {
            $object->setVoiceLimit($data['voice_limit']);
            unset($data['voice_limit']);
        }
        if (\array_key_exists('can_extend_voice_limit', $data)) {
            $object->setCanExtendVoiceLimit($data['can_extend_voice_limit']);
            unset($data['can_extend_voice_limit']);
        }
        if (\array_key_exists('can_use_instant_voice_cloning', $data)) {
            $object->setCanUseInstantVoiceCloning($data['can_use_instant_voice_cloning']);
            unset($data['can_use_instant_voice_cloning']);
        }
        if (\array_key_exists('available_models', $data)) {
            $values = array();
            foreach ($data['available_models'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ElevenLabs\\V1\\SDK\\Model\\TTSModelResponseModel', 'json', $context);
            }
            $object->setAvailableModels($values);
            unset($data['available_models']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('next_invoice', $data)) {
            $object->setNextInvoice($this->denormalizer->denormalize($data['next_invoice'], 'ElevenLabs\\V1\\SDK\\Model\\InvoiceResponseModel', 'json', $context));
            unset($data['next_invoice']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        $data['tier'] = $object->getTier();
        $data['character_count'] = $object->getCharacterCount();
        $data['character_limit'] = $object->getCharacterLimit();
        $data['can_extend_character_limit'] = $object->getCanExtendCharacterLimit();
        $data['allowed_to_extend_character_limit'] = $object->getAllowedToExtendCharacterLimit();
        $data['next_character_count_reset_unix'] = $object->getNextCharacterCountResetUnix();
        $data['voice_limit'] = $object->getVoiceLimit();
        $data['can_extend_voice_limit'] = $object->getCanExtendVoiceLimit();
        $data['can_use_instant_voice_cloning'] = $object->getCanUseInstantVoiceCloning();
        $values = array();
        foreach ($object->getAvailableModels() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['available_models'] = $values;
        $data['status'] = $object->getStatus();
        $data['next_invoice'] = $this->normalizer->normalize($object->getNextInvoice(), 'json', $context);
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
}