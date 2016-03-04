<?php

namespace IQRF\Cloud\Request;

use IQRF\Cloud\IQRF,
	IQRF\Cloud\Utils;

/**
 * DataAPI
 * @author Roman Ondráček <ondracek.roman@centrum.cz>
 * @package IQRF\Cloud~Request
 */

class DataAPI {

	/**
	 * Get latest data from the Cloud (incoming from the API)
	 * @param int $gatewayID Gateway ID
	 * @param int $count The number of messages
	 * @return string $response Response to the request
	 */
	public function getLast($gatewayID, $count = 1) {
		$parameter = 'ver=' . IQRF::API_VER . '&uid=' . IQRF::getUserID()
				. '&gid=' . $gatewayID . '&cmd=dnlc&last=1&count=' . $count;
		return Utils::createRequest($parameter);
	}

	/**
	 * Get new data from the Cloud (incoming from the API)
	 * @param int $gatewayID Gateway ID
	 * @param int $count The number of messages
	 * @return string $response Response to the request
	 */
	public function getNew($gatewayID, $count = 1) {
		$parameter = 'ver=' . IQRF::API_VER . '&uid=' . IQRF::getUserID()
				. '&gid=' . $gatewayID . '&cmd=dnlc&new=1&count=' . $count;
		return Utils::createRequest($parameter);
	}

	/**
	 * Get data from message ID from the Cloud (incoming from the GW)
	 * @param int $gatewayID Gateway ID
	 * @param int $messageID From message ID
	 * @param int $count The number of messages
	 * @return string $response Response to the request
	 */
	public function getFrom($gatewayID, $messageID, $count = 1) {
		$parameter = 'ver=' . IQRF::API_VER . '&uid=' . IQRF::getUserID()
				. '&gid=' . $gatewayID . '&cmd=dnlc&from=' . $messageID . '&count=' . $count;
		return Utils::createRequest($parameter);
	}

	/**
	 * Get data to message ID from the Cloud (incoming from the GW)
	 * @param int $gatewayID Gateway ID
	 * @param int $messageID To message ID
	 * @param int $count The number of messages
	 * @return string $response Response to the request
	 */
	public function getTo($gatewayID, $messageID, $count = 1) {
		$parameter = 'ver=' . IQRF::API_VER . '&uid=' . IQRF::getUserID()
				. '&gid=' . $gatewayID . '&cmd=dnlc&to=' . $messageID . '&count=' . $count;
		return Utils::createRequest($parameter);
	}

	/**
	 * Get data from and to message IDs from the Cloud (incoming from the GW)
	 * @param int $gatewayID Gateway ID
	 * @param int $from From message ID
	 * @param int $to To message ID
	 * @return string $response Response to the request
	 */
	public function getFromTo($gatewayID, $from, $to) {
		$parameter = 'ver=' . IQRF::API_VER . '&uid=' . IQRF::getUserID()
				. '&gid=' . $gatewayID . '&cmd=dnlc&from=' . $from . '&to=' . $to;
		return Utils::createRequest($parameter);
	}

	/**
	 * Get data from time of message from the Cloud (incoming from the GW)
	 * @param int $gatewayID Gateway ID
	 * @param int $fromTime Time from sending message
	 * @param int $count The number of messages
	 * @return string $response Response to the request
	 */
	public function getFromTime($gatewayID, $fromTime, $count = 1) {
		$parameter = 'ver=' . IQRF::API_VER . '&uid=' . IQRF::getUserID()
				. '&gid=' . $gatewayID . '&cmd=dnlc&from_time=' . $fromTime . '&count=' . $count;
		return Utils::createRequest($parameter);
	}

	/**
	 * Get data to time of message from the Cloud (incoming from the GW)
	 * @param int $gatewayID Gateway ID
	 * @param int $toTime Time to sending message
	 * @param int $count The number of messages
	 * @return string $response Response to the request
	 */
	public function getToTime($gatewayID, $toTime, $count = 1) {
		$parameter = 'ver=' . IQRF::API_VER . '&uid=' . IQRF::getUserID()
				. '&gid=' . $gatewayID . '&cmd=dnlc&to_time=' . $toTime . '&count=' . $count;
		return Utils::createRequest($parameter);
	}

	/**
	 * Get data from time of message and to time of message from the Cloud (incoming from the GW)
	 * @param int $gatewayID Gateway ID
	 * @param int $fromTime Time from sending message
	 * @param int $toTime Time to sending message
	 * @return string $response Response to the request
	 */
	public function getFromTimeToTime($gatewayID, $fromTime, $toTime) {
		$parameter = 'ver=' . IQRF::API_VER . '&uid=' . IQRF::getUserID()
				. '&gid=' . $gatewayID . '&cmd=dnlc&from_time=' . $fromTime . '&to_time=' . $toTime;
		return Utils::createRequest($parameter);
	}

	/**
	 * Send data to IQRF Cloud
	 * @param int $gatewayID Gateway ID
	 * @param mixed $data Data
	 * @return string $response Response to the request
	 */
	public function send($gatewayID, $data) {
		$parameter = 'ver=' . IQRF::API_VER . '&uid=' . IQRF::getUserID()
				. '&gid=' . $gatewayID . '&cmd=uplc&data=' . $data;
		return Utils::createRequest($parameter);
	}

}
