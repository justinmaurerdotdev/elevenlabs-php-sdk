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
class VoiceSettingsResponseModelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'ElevenLabs\\V1\\SDK\\Model\\VoiceSettingsResponseModel';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'ElevenLabs\\V1\\SDK\\Model\\VoiceSettingsResponseModel';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
	    $object = new \ElevenLabs\V1\SDK\Model\VoiceSettingsResponseModel();
	    if (is_array($data)) {
		    if ( isset( $data['$ref'] ) ) {
			    return new Reference( $data['$ref'], $context['document-origin'] );
		    }
		    if ( isset( $data['$recursiveRef'] ) ) {
			    return new Reference( $data['$recursiveRef'], $context['document-origin'] );
		    }
		    if ( \array_key_exists( 'stability', $data ) && \is_int( $data['stability'] ) ) {
			    $data['stability'] = (double) $data['stability'];
		    }
		    if ( \array_key_exists( 'similarity_boost', $data ) && \is_int( $data['similarity_boost'] ) ) {
			    $data['similarity_boost'] = (double) $data['similarity_boost'];
		    }
		    if ( null === $data || false === \is_array( $data ) ) {
			    return $object;
		    }
		    if ( \array_key_exists( 'stability', $data ) ) {
			    $object->setStability( $data['stability'] );
			    unset( $data['stability'] );
		    }
		    if ( \array_key_exists( 'similarity_boost', $data ) ) {
			    $object->setSimilarityBoost( $data['similarity_boost'] );
			    unset( $data['similarity_boost'] );
		    }
		    foreach ( $data as $key => $value ) {
			    if ( preg_match( '/.*/', (string) $key ) ) {
				    $object[ $key ] = $value;
			    }
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
        $data['stability'] = $object->getStability();
        $data['similarity_boost'] = $object->getSimilarityBoost();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}