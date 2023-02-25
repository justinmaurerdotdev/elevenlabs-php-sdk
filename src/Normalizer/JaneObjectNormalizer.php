<?php

namespace ElevenLabs\V1\SDK\Normalizer;

use ElevenLabs\V1\SDK\Runtime\Normalizer\CheckArray;
use ElevenLabs\V1\SDK\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = array('ElevenLabs\\V1\\SDK\\Model\\AddVoiceResponseModel' => 'ElevenLabs\\V1\\SDK\\Normalizer\\AddVoiceResponseModelNormalizer', 'ElevenLabs\\V1\\SDK\\Model\\BodyAddVoiceV1VoicesAddPost' => 'ElevenLabs\\V1\\SDK\\Normalizer\\BodyAddVoiceV1VoicesAddPostNormalizer', 'ElevenLabs\\V1\\SDK\\Model\\BodyDeleteHistoryItemsV1HistoryDeletePost' => 'ElevenLabs\\V1\\SDK\\Normalizer\\BodyDeleteHistoryItemsV1HistoryDeletePostNormalizer', 'ElevenLabs\\V1\\SDK\\Model\\BodyDownloadHistoryItemsV1HistoryDownloadPost' => 'ElevenLabs\\V1\\SDK\\Normalizer\\BodyDownloadHistoryItemsV1HistoryDownloadPostNormalizer', 'ElevenLabs\\V1\\SDK\\Model\\BodyEditVoiceV1VoicesVoiceIdEditPost' => 'ElevenLabs\\V1\\SDK\\Normalizer\\BodyEditVoiceV1VoicesVoiceIdEditPostNormalizer', 'ElevenLabs\\V1\\SDK\\Model\\BodyTextToSpeechV1TextToSpeechVoiceIdPost' => 'ElevenLabs\\V1\\SDK\\Normalizer\\BodyTextToSpeechV1TextToSpeechVoiceIdPostNormalizer', 'ElevenLabs\\V1\\SDK\\Model\\BodyTextToSpeechV1TextToSpeechVoiceIdPostVoiceSettings' => 'ElevenLabs\\V1\\SDK\\Normalizer\\BodyTextToSpeechV1TextToSpeechVoiceIdPostVoiceSettingsNormalizer', 'ElevenLabs\\V1\\SDK\\Model\\BodyTextToSpeechV1TextToSpeechVoiceIdStreamPost' => 'ElevenLabs\\V1\\SDK\\Normalizer\\BodyTextToSpeechV1TextToSpeechVoiceIdStreamPostNormalizer', 'ElevenLabs\\V1\\SDK\\Model\\BodyTextToSpeechV1TextToSpeechVoiceIdStreamPostVoiceSettings' => 'ElevenLabs\\V1\\SDK\\Normalizer\\BodyTextToSpeechV1TextToSpeechVoiceIdStreamPostVoiceSettingsNormalizer', 'ElevenLabs\\V1\\SDK\\Model\\ExtendedSubscriptionResponseModel' => 'ElevenLabs\\V1\\SDK\\Normalizer\\ExtendedSubscriptionResponseModelNormalizer', 'ElevenLabs\\V1\\SDK\\Model\\FineTuningResponseModel' => 'ElevenLabs\\V1\\SDK\\Normalizer\\FineTuningResponseModelNormalizer', 'ElevenLabs\\V1\\SDK\\Model\\GetHistoryResponseModel' => 'ElevenLabs\\V1\\SDK\\Normalizer\\GetHistoryResponseModelNormalizer', 'ElevenLabs\\V1\\SDK\\Model\\GetVoicesResponseModel' => 'ElevenLabs\\V1\\SDK\\Normalizer\\GetVoicesResponseModelNormalizer', 'ElevenLabs\\V1\\SDK\\Model\\HTTPValidationError' => 'ElevenLabs\\V1\\SDK\\Normalizer\\HTTPValidationErrorNormalizer', 'ElevenLabs\\V1\\SDK\\Model\\HistoryItemResponseModel' => 'ElevenLabs\\V1\\SDK\\Normalizer\\HistoryItemResponseModelNormalizer', 'ElevenLabs\\V1\\SDK\\Model\\InvoiceResponseModel' => 'ElevenLabs\\V1\\SDK\\Normalizer\\InvoiceResponseModelNormalizer', 'ElevenLabs\\V1\\SDK\\Model\\LanguageResponseModel' => 'ElevenLabs\\V1\\SDK\\Normalizer\\LanguageResponseModelNormalizer', 'ElevenLabs\\V1\\SDK\\Model\\SampleResponseModel' => 'ElevenLabs\\V1\\SDK\\Normalizer\\SampleResponseModelNormalizer', 'ElevenLabs\\V1\\SDK\\Model\\SubscriptionResponseModel' => 'ElevenLabs\\V1\\SDK\\Normalizer\\SubscriptionResponseModelNormalizer', 'ElevenLabs\\V1\\SDK\\Model\\TTSModelResponseModel' => 'ElevenLabs\\V1\\SDK\\Normalizer\\TTSModelResponseModelNormalizer', 'ElevenLabs\\V1\\SDK\\Model\\UserResponseModel' => 'ElevenLabs\\V1\\SDK\\Normalizer\\UserResponseModelNormalizer', 'ElevenLabs\\V1\\SDK\\Model\\ValidationError' => 'ElevenLabs\\V1\\SDK\\Normalizer\\ValidationErrorNormalizer', 'ElevenLabs\\V1\\SDK\\Model\\VoiceResponseModel' => 'ElevenLabs\\V1\\SDK\\Normalizer\\VoiceResponseModelNormalizer', 'ElevenLabs\\V1\\SDK\\Model\\VoiceSettingsResponseModel' => 'ElevenLabs\\V1\\SDK\\Normalizer\\VoiceSettingsResponseModelNormalizer', 'ElevenLabs\\V1\\SDK\\Model\\V1VoicesVoiceIdSettingsEditPostBody' => 'ElevenLabs\\V1\\SDK\\Normalizer\\V1VoicesVoiceIdSettingsEditPostBodyNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\ElevenLabs\\V1\\SDK\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}