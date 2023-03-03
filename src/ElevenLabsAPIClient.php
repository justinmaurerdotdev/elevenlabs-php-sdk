<?php

namespace ElevenLabs\V1\SDK;

use ElevenLabs\V1\SDK\Model\BodyAddVoiceV1VoicesAddPost;
use ElevenLabs\V1\SDK\Model\BodyDeleteHistoryItemsV1HistoryDeletePost;
use ElevenLabs\V1\SDK\Model\BodyDownloadHistoryItemsV1HistoryDownloadPost;
use ElevenLabs\V1\SDK\Model\BodyEditVoiceV1VoicesVoiceIdEditPost;
use ElevenLabs\V1\SDK\Model\BodyTextToSpeechV1TextToSpeechVoiceIdPost;
use ElevenLabs\V1\SDK\Model\BodyTextToSpeechV1TextToSpeechVoiceIdStreamPost;
use ElevenLabs\V1\SDK\Model\V1VoicesVoiceIdSettingsEditPostBody;
use Http\Client\Common\Plugin\BaseUriPlugin;
use Http\Discovery\Psr17FactoryDiscovery;

class ElevenLabsAPIClient {
	private Client $client;
	private array $headers;
	private string $api_base = 'https://api.elevenlabs.io/v1';

	public function __construct() {
		$base_uri_plugin = new BaseUriPlugin(Psr17FactoryDiscovery::findUriFactory()->createUri($this->api_base), [
			// Always replace the host, even if this one is provided on the sent request. Available for AddHostPlugin.
			'replace' => true,
		]);
		$this->client = Client::create(null,[$base_uri_plugin]);
		// The '4' here is the number of directory levels above the current file
		$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__,4));
		$dotenv->safeLoad();
		$this->headers['xi-api-key'] = constant('ELEVENLABS_API_KEY') ?? $_ENV['ELEVENLABS_API_KEY'];
	}

	public function add_voice(BodyAddVoiceV1VoicesAddPost $body) {
		return $this->client->addVoiceV1VoicesAddPost($body, $this->headers);
	}

	public function delete_history_items(BodyDeleteHistoryItemsV1HistoryDeletePost $body) {
		return $this->client->deleteHistoryItemsV1HistoryDeletePost($body, $this->headers);
	}

	public function delete_history_item(string $id) {
		return $this->client->deleteHistoryItemV1HistoryHistoryItemIdDelete($id, $this->headers);
	}

	public function delete_sample(string $voice_id, string $sample_id) {
		return $this->client->deleteSampleV1VoicesVoiceIdSamplesSampleIdDelete($voice_id, $sample_id, $this->headers);
	}

	public function delete_voice(string $voice_id) {
		return $this->client->deleteVoiceV1VoicesVoiceIdDelete($voice_id, $this->headers);
	}

	public function download_history_items(BodyDownloadHistoryItemsV1HistoryDownloadPost $body) {
		return $this->client->downloadHistoryItemsV1HistoryDownloadPost($body, $this->headers);
	}

	public function edit_voice_settings(string $voice_id, V1VoicesVoiceIdSettingsEditPostBody $body) {
		return $this->client->editVoiceSettingsV1VoicesVoiceIdSettingsEditPost($voice_id, $body, $this->headers);
	}

	public function edit_voice(string $voice_id, BodyEditVoiceV1VoicesVoiceIdEditPost $body) {
		return $this->client->editVoiceV1VoicesVoiceIdEditPost($voice_id, $body, $this->headers);
	}

	public function get_audio_from_history_item(string $history_item_id) {
		return $this->client->getAudioFromHistoryItemV1HistoryHistoryItemIdAudioGet($history_item_id, $this->headers);
	}

	public function get_audio_from_sample(string $voice_id, string $sample_id) {
		return $this->client->getAudioFromSampleV1VoicesVoiceIdSamplesSampleIdAudioGet($voice_id, $sample_id, $this->headers);
	}

	public function get_default_voice_settings() {
		return $this->client->getDefaultVoiceSettingsV1VoicesSettingsDefaultGet();
	}

	public function get_generated_items() {
		return $this->client->getGeneratedItemsV1HistoryGet($this->headers);
	}

	public function get_user_info() {
		return $this->client->getUserInfoV1UserGet($this->headers);
	}

	public function get_user_subscription_info() {
		return $this->client->getUserSubscriptionInfoV1UserSubscriptionGet($this->headers);
	}

	public function get_voices() {
		return $this->client->getVoicesV1VoicesGet($this->headers);
	}

	public function get_voice(string $voice_id) {
		return $this->client->getVoiceV1VoicesVoiceIdGet($voice_id, $this->headers);
	}

	public function text_to_speech(string $voice_id, BodyTextToSpeechV1TextToSpeechVoiceIdPost $body) {
		return $this->client->textToSpeechV1TextToSpeechVoiceIdPost($voice_id, $body, $this->headers, $this->client::FETCH_RESPONSE, ['audio/mpeg','application/json']);
	}

	public function text_to_speech_stream(string $voice_id, BodyTextToSpeechV1TextToSpeechVoiceIdStreamPost $body) {
		return $this->client->textToSpeechV1TextToSpeechVoiceIdStreamPost($voice_id, $body, $this->headers);
	}
}