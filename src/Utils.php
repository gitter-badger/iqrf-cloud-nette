<?php

namespace ITManie\IQRF;

use GuzzleHttp\Client;

class Utils {

	/**
	 * Get IPv4 of server
	 * @return string IPv4 address
	 */
	public function getIPv4Addr() {
		$client = new Client(['base_uri' => 'https://api.ipify.org']);
		return $client->request('GET')->getBody()->getContents();
	}
	/**
	 * Create md5 hash for IQRF API signature
	 * @param string $parameterPart
	 * @param string $apiKey
	 * @param string $ipAddr IPv4 address of server
	 * @param int $time Epoch time
	 * @return string md5 hash
	 */
	public function createSignature($parameterPart, $apiKey, $ipAddr, $time) {
		$md5 = md5($parameterPart . '|' . $apiKey . '|' . $ipAddr . '|' . round($time / 600));
		return $md5;
	}

}
