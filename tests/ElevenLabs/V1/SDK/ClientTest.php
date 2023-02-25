<?php

namespace ElevenLabs\V1\SDK;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\BaseUriPlugin;
use Http\Discovery\Psr17FactoryDiscovery;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase {

	private Client $client;

	public function setUp(): void {
		$base_uri_plugin = new BaseUriPlugin(Psr17FactoryDiscovery::findUriFactory()->createUri('https://api.elevenlabs.io/v1'), [
			// Always replace the host, even if this one is provided on the sent request. Available for AddHostPlugin.
			'replace' => true,
		]);
		$this->client = Client::create(null,[$base_uri_plugin]);
		// The '4' here is the number of directory levels above the current file
		$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__,4));
		$dotenv->load();

	}

	public function testCreds(): void {
		$this->assertNotEmpty($_ENV['ELEVENLABS_API_KEY']);
	}
//
//	public function testTextToSpeechV1TextToSpeechVoiceIdPost() {
//		$this->client->TextToSpeechV1TextToSpeechVoiceIdPost();
//	}
//
//	public function testTextToSpeechV1TextToSpeechVoiceIdStreamPost() {
//		$this->client->TextToSpeechV1TextToSpeechVoiceIdStreamPost();
//	}
//
//	public function testEditVoiceSettingsV1VoicesVoiceIdSettingsEditPost() {
//		$this->client->EditVoiceSettingsV1VoicesVoiceIdSettingsEditPost();
//	}
//
//	public function testDeleteHistoryItemsV1HistoryDeletePost() {
//		$this->client->DeleteHistoryItemsV1HistoryDeletePost();
//	}
//
//	public function testCreate() {
//		$this->client->Create();
//	}
//
//	public function testAddVoiceV1VoicesAddPost() {
//		$this->client->addVoiceV1VoicesAddPost();
//	}
//
//	public function testDeleteVoiceV1VoicesVoiceIdDelete() {
//		$this->client->deleteVoiceV1VoicesVoiceIdDelete();
//	}
//
//	public function testDownloadHistoryItemsV1HistoryDownloadPost() {
//		$this->client->downloadHistoryItemsV1HistoryDownloadPost();
//	}
//
//	public function testGetVoiceV1VoicesVoiceIdGet() {
//		$this->client->GetVoiceV1VoicesVoiceIdGet();
//	}
//
//	public function testGetAudioFromSampleV1VoicesVoiceIdSamplesSampleIdAudioGet() {
//		$this->client->GetAudioFromSampleV1VoicesVoiceIdSamplesSampleIdAudioGet();
//	}
//
//	public function testGetDefaultVoiceSettingsV1VoicesSettingsDefaultGet() {
//		$this->client->GetDefaultVoiceSettingsV1VoicesSettingsDefaultGet();
//	}
//
//	public function testGetGeneratedItemsV1HistoryGet() {
//		$this->client->getGeneratedItemsV1HistoryGet();
//	}
//
//	public function testDeleteHistoryItemV1HistoryHistoryItemIdDelete() {
//		$this->client->geleteHistoryItemV1HistoryHistoryItemIdDelete();
//	}
//
//	public function testGetUserSubscriptionInfoV1UserSubscriptionGet() {
//		$this->client->getUserSubscriptionInfoV1UserSubscriptionGet();
//	}
//
//	public function testGetAudioFromHistoryItemV1HistoryHistoryItemIdAudioGet() {
//		$this->client->getAudioFromHistoryItemV1HistoryHistoryItemIdAudioGet();
//	}
//
//	public function testGetVoiceSettingsV1VoicesVoiceIdSettingsGet() {
//		$this->client->getVoiceSettingsV1VoicesVoiceIdSettingsGet();
//	}
//
//	public function testEditVoiceV1VoicesVoiceIdEditPost() {
//		$this->client->editVoiceV1VoicesVoiceIdEditPost();
//	}
//
//	public function testDeleteSampleV1VoicesVoiceIdSamplesSampleIdDelete() {
//		$this->client->deleteSampleV1VoicesVoiceIdSamplesSampleIdDelete();
//	}
//
//	public function testGetUserInfoV1UserGet() {
//		$this->client->getUserInfoV1UserGet();
//	}
//
	public function testGetVoicesV1VoicesGet() {
		$header = ['xi-api-key' => $_ENV['ELEVENLABS_API_KEY']];
		$get_voices_response = $this->client->getVoicesV1VoicesGet($header);
		$voices = $get_voices_response->getVoices();
		$this->assertIsArray($voices);
		$this->assertInstanceOf('ElevenLabs\V1\SDK\Model\VoiceResponseModel', $voices[0]);
	}
}
