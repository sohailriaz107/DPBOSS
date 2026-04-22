<div class="liv-rslt">
	<h4>☔LIVE RESULT☔</h4>

	<div class="lv-mc">
		<?php
		$app_link_status = 1;
		$app_link_url = 'https://matkabooking.app/apk/com.matka.booking_1046.apk';
		$app_link_url = 'https://whatsapp.com/channel/0029Va5XWUC2ER6oRasyVA0j';
		$app_link_text = 'Join Us';

		$app_link_url = 'https://dpbossplay.live/download-app.php';
		$app_link_text = '🔥 DPBoss App<br>Fastest Play • Instant Withdraw';
		//$app_link_text = '🔥 Matka Play App<br>Fastest Play • Instant Withdraw';


		$live_ad_file = file_get_contents('txtdb/live-result-ad.txt');
		$live_ad_array = explode("|", $live_ad_file);
		$live_ad_Status = $live_ad_array[0];


		$live_ad_time1_start = date('Y-m-d') . ' ' . $live_ad_array[1];
		$live_ad_time1_close = date('Y-m-d') . ' ' . $live_ad_array[2];
		$live_ad_time2_start = date('Y-m-d') . ' ' . $live_ad_array[3];
		$live_ad_time2_close = date('Y-m-d') . ' ' . $live_ad_array[4];

		if ($live_ad_Status == 1) {
			if (time() >= strtotime($live_ad_time1_start) && time() <= strtotime($live_ad_time1_close)) {
		?>
				<span class="h8">Online Matka Play </span>
				<span class="h9">Super Fast Withdraw</span>
				<a href="https://dpbossfix.net/apk/com.dpbossplay_104.apk" class="d-ply" rel="nofollow">Click to Install App</a>


				</a>
			<?php }

			if (time() >= strtotime($live_ad_time2_start) && time() <= strtotime($live_ad_time2_close)) {
			?>
				<span class="h8">Online Matka Play </span>
				<span class="h9">Super Fast Withdraw</span>
				<a href="https://dpbossfix.net/apk/com.dpbossplay_104.apk" class="d-ply" rel="nofollow">Click to Install App</a>


				</a>
		<?php }
		} ?>





		<?php if (0) { ?>
			<a href="https://bit.ly/crickliveline247" class="" rel="nofollow">
				<img class="bblimg" src="images/crickliveline.jpg">
			<?php } ?>

			Sabse Tezz Live Result Yahi Milega

			<?php


			$freeGameFile = 'txtdb/free-game.txt';
			$freeGame = file($freeGameFile);

			$milan_morning_ank = $freeGame[2];
			$milan_morning_panna = $freeGame[3];
			$milan_morning_jodi = $freeGame[4];

			$kalyan_morning_ank = $freeGame[6];
			$kalyan_morning_panna = $freeGame[7];
			$kalyan_morning_jodi = $freeGame[8];

			$time_bazar_ank = $freeGame[10];
			$time_bazar_panna = $freeGame[11];
			$time_bazar_jodi = $freeGame[12];

			$milan_day_ank = $freeGame[14];
			$milan_day_panna = $freeGame[15];
			$milan_day_jodi = $freeGame[16];

			$kalyan_ank = $freeGame[18];
			$kalyan_panna = $freeGame[19];
			$kalyan_jodi = $freeGame[20];

			$milan_night_ank = $freeGame[22];
			$milan_night_panna = $freeGame[23];
			$milan_night_jodi = $freeGame[24];

			$kalyan_night_ank = $freeGame[26];
			$kalyan_night_panna = $freeGame[27];
			$kalyan_night_jodi = $freeGame[28];

			$rajdhani_night_ank = $freeGame[30];
			$rajdhani_night_panna = $freeGame[31];
			$rajdhani_night_jodi = $freeGame[32];

			$main_bazar_ank = $freeGame[34];
			$main_bazar_panna = $freeGame[35];
			$main_bazar_jodi = $freeGame[36];


			$ratan_khatri_ank = $freeGame[38];
			$ratan_khatri_panna = $freeGame[39];
			$ratan_khatri_jodi = $freeGame[40];



			$theData33 = file("txtdb/other-free-game.txt");
			$count_45 = 0;
			foreach ($theData33 as $line) {
				list($gameName, $open, $panna, $jodi, $close) = explode("|", $line);
				if ($gameName == 'SRIDEVI') {
					$sridevi_ank = $open;
					$sridevi_panna = $panna;
					$sridevi_jodi = $jodi;
				}
				if ($gameName == 'SRIDEVI NIGHT') {
					$sridevi_night_ank = $open;
					$sridevi_night_panna = $panna;
					$sridevi_night_jodi = $jodi;
				}
				if ($gameName == 'MAMA BHANJA') {
					$mama_bhanja_ank = $open;
					$mama_bhanja_panna = $panna;
					$mama_bhanja_jodi = $jodi;
				}
				if ($gameName == 'MAIN MORNING') {
					$main_morning_ank = $open;
					$main_morning_panna = $panna;
					$main_morning_jodi = $jodi;
				}
				if ($gameName == 'KARNATAKA DAY') {
					$karnata_day_ank = $open;
					$karnata_day_panna = $panna;
					$karnata_day_jodi = $jodi;
				}
				if ($gameName == 'MUMBAI MORNING') {
					$mumbai_morning_ank = $open;
					$mumbai_morning_panna = $panna;
					$mumbai_morning_jodi = $jodi;
				}
				if ($gameName == 'MAIN KALYAN') {
					$main_kalyan_ank = $open;
					$main_kalyan_panna = $panna;
					$main_kalyan_jodi = $jodi;
				}
				if ($gameName == 'MUMBAI PAREL') {
					$mumbai_parel_ank = $open;
					$mumbai_parel_panna = $panna;
					$mumbai_parel_jodi = $jodi;
				}
				if ($gameName == 'PRABHAT') {
					$prabhat_ank = $open;
					$prabhat_panna = $panna;
					$prabhat_jodi = $jodi;
				}
				if ($gameName == 'MAIN BAZAR MORNING') {
					$mumbai_parel_ank = $open;
					$mumbai_parel_panna = $panna;
					$mumbai_parel_jodi = $jodi;
				}

				if ($gameName == 'NEW TIME BAZAR') {
					$new_time_bazar_parel_ank = $open;
					$new_time_bazar_panna = $panna;
					$new_time_bazar_jodi = $jodi;
				}


				$count_45++;
			}



			date_default_timezone_set("Asia/Kolkata");
			$theData22 = file("txtdb/xzavierJoaquinosia.txt");
			natsort($theData22);
			foreach ($theData22 as $line) {
				list($order, $gameName, $gameResult, $timeOpen, $timeClose, $gameBgcolor, $gameFontcolor, $gameLinecolor, $frequency, $liveTimeBefore, $liveTimeAfter, $updateDate, $status, $expiryDate, $jodiLink, $panelLink, $temp_last_updated_result) = explode("|", $line);


				if ($gameName == 'SHRI SHUBH LAKSHMI' || $gameName == 'MP NIGHT' || $gameName == 'MP DAY' || $gameName == 'JYA' || $gameName == 'silvee' || $gameName == 'sai' || $gameName == 'gold line' || $gameName == 'sridevi star line') {
					continue;
				}

				$date1 = str_replace('/', '-', date('Y-m-d'));
				$date2 = str_replace('/', '-', $expiryDate);
				if (strtotime($date1) <= strtotime($date2)) {
					//do nothing;
				} else {
					continue;
				}


				$time = strtotime(date('d-m-Y ' . $timeOpen));
				$timeC = strtotime(date('d-m-Y ' . $timeClose));

				$t = strtotime(date('d-m-Y h:i A'));
				$day = strtolower(date("D", $t));
				// check if today is sunday
				if ($day == 'sun') {
					if ($gameName == 'TIME BAZAR') {
						$time = strtotime(date('d-m-Y 04:00'));
						$timeC = strtotime(date('d-m-Y 04:14'));
					}
					if ($gameName == 'MILAN BAJAR') {
						$time = strtotime(date('d-m-Y 04:15'));
						$timeC = strtotime(date('d-m-Y 04:16'));
					}
					if ($gameName == 'MADHURI	') {
						$time = strtotime(date('d-m-Y 13:10'));
						$timeC = strtotime(date('d-m-Y 15:15'));
					}
					if ($gameName == 'BIGCASH') {
						$time = strtotime(date('d-m-Y 14:00'));
						$timeC = strtotime(date('d-m-Y 16:00'));
					}
					if ($gameName == 'SUPER MATKA') {
						$time = strtotime(date('d-m-Y 13:30'));
						$timeC = strtotime(date('d-m-Y 15:00'));
					}
					if ($gameName == 'DILDAAR DAY') {
						$time = strtotime(date('d-m-Y 12:40'));
						$timeC = strtotime(date('d-m-Y 16:40'));
					}
					if ($gameName == 'SUNDAY BAZAR NIGHT') {
						$time = strtotime(date('d-m-Y 17:00'));
						$timeC = strtotime(date('d-m-Y 19:00'));
					}
					if ($gameName == 'KALYAN MORNING') {
						$time = strtotime(date('d-m-Y 12:01'));
						$timeC = strtotime(date('d-m-Y 14:40'));
					}
				}
				// check if today is sunday - end



				if ($gameName == 'MAIN MARKET' || $gameName == 'MAIN KALYAN' || $gameName == 'MAIN BAZAR MORNING' || $gameName == 'TIME BAZAR' || $gameName == 'BOMBAY DAY' || $gameName == 'KALYAN' || $gameName == 'MILAN DAY' || $gameName == 'MILAN NIGHT' || $gameName == 'KALYAN MORNING' || $gameName == 'MILAN MORNING' || $gameName == 'KALYAN NIGHT' || $gameName == 'RAJDHANI DAY' || $gameName == 'RAJDHANI NIGHT' || $gameName == 'MAIN BAZAR' || $gameName == 'SRIDEVI' || $gameName == 'SRIDEVI NIGHT' || $gameName == 'OLD MAIN MUMBAI' || $gameName == 'SUPER DAY' || $gameName == 'KARNATAKA DAY' || $gameName == 'MUMBAI MORNING' || $gameName == 'PRABHAT' || $gameName == 'KHAJANA' || $gameName == "NEW TIME BAZAR") {
					$show_extra_text = 1;
				} else {
					$show_extra_text = 0;
				}

				$ank_pass_open = '';
				$ank_pass_close = '';
				$jodi_pass = '';
				$panna_pass_open = '';
				$panna_pass_close = '';
				$free_game_pass_text_to_print = '';


				$game_result_tmp = str_replace("-", "", $gameResult);
				if (is_numeric($game_result_tmp)) {

					$result_array = explode('-', $gameResult);
					$result_panna_open = $result_array[0];
					$result_jodi_tmp = $result_array[1];
					$result_panna_close = $result_array[2];
					$result_ank_open = substr($result_jodi_tmp, 0, 1);
					$result_ank_close = substr($result_jodi_tmp, 1, 1);
					if (strlen($result_jodi_tmp) == 2) {
						$result_jodi = $result_jodi_tmp;
					} else {
						$result_jodi = '';
					}




					if ($gameName == 'MILAN MORNING' && $updateDate == date('d-m-Y')) {

						if (strpos($milan_morning_ank, $result_ank_open) !== false) {
							$ank_pass_open = 'ank_pass';
						}

						if (strpos($milan_morning_ank, $result_ank_close) !== false) {
							$ank_pass_close = 'ank_pass';
						}

						if (strpos($milan_morning_jodi, $result_jodi) !== false) {
							$jodi_pass = 'jodi_pass';
						}

						if (strpos($milan_morning_panna, $result_panna_open) !== false) {
							$panna_pass_open = 'panna_pass';
						}

						if (strpos($milan_morning_panna, $result_panna_close) !== false) {
							$panna_pass_close = 'panna_pass';
						}

						if ($ank_pass_open != '') {
							$free_game_pass_text_to_print .= 'मिलन मॉर्निंग फ्री अंक से ओपन ' . $result_ank_open . ' पास  <br>';
						}

						if ($ank_pass_close != '') {
							$free_game_pass_text_to_print .= 'मिलन मॉर्निंग फ्री अंक से क्लोज ' . $result_ank_close . ' पास  <br>';
						}

						if ($jodi_pass != '') {
							$free_game_pass_text_to_print .= 'मिलन मॉर्निंग फ्री अंक से जोड़ी  ' . $result_jodi . ' पास  <br>';
						}

						if ($panna_pass_open != '') {
							$free_game_pass_text_to_print .= 'मिलन मॉर्निंग फ्री अंक से ओपन पत्ती ' . $result_panna_open . ' पास <br>';
						}

						if ($panna_pass_close != '') {
							$free_game_pass_text_to_print .= 'मिलन मॉर्निंग फ्री अंक से क्लोज पत्ती ' . $result_panna_close . ' पास  <br>';
						}
					} elseif ($gameName == 'MILAN DAY' && $updateDate == date('d-m-Y')) {

						if (strpos($milan_day_ank, $result_ank_open) !== false) {
							$ank_pass_open = 'ank_pass';
						}

						if (strpos($milan_day_ank, $result_ank_close) !== false) {
							$ank_pass_close = 'ank_pass';
						}

						if (strpos($milan_day_jodi, $result_jodi) !== false) {
							$jodi_pass = 'jodi_pass';
						}

						if (strpos($milan_day_panna, $result_panna_open) !== false) {
							$panna_pass_open = 'panna_pass';
						}

						if (strpos($milan_day_panna, $result_panna_close) !== false) {
							$panna_pass_close = 'panna_pass';
						}

						if ($ank_pass_open != '') {
							$free_game_pass_text_to_print .= 'मिलन डे फ्री अंक से ओपन ' . $result_ank_open . ' पास <br>';
						}

						if ($ank_pass_close != '') {
							$free_game_pass_text_to_print .= 'मिलन डे फ्री अंक से क्लोज ' . $result_ank_close . ' पास  <br>';
						}

						if ($jodi_pass != '') {
							$free_game_pass_text_to_print .= 'मिलन डे फ्री अंक से जोड़ी  ' . $result_jodi . ' पास  <br>';
						}

						if ($panna_pass_open != '') {
							$free_game_pass_text_to_print .= 'मिलन डे फ्री अंक से ओपन पत्ती ' . $result_panna_open . ' पास  <br>';
						}

						if ($panna_pass_close != '') {
							$free_game_pass_text_to_print .= 'मिलन डे फ्री अंक से क्लोज पत्ती ' . $result_panna_close . ' पास <br>';
						}
					} elseif ($gameName == 'MILAN NIGHT' && $updateDate == date('d-m-Y')) {

						if (strpos($milan_night_ank, $result_ank_open) !== false) {
							$ank_pass_open = 'ank_pass';
						}

						if (strpos($milan_night_ank, $result_ank_close) !== false) {
							$ank_pass_close = 'ank_pass';
						}

						if (strpos($milan_night_jodi, $result_jodi) !== false) {
							$jodi_pass = 'jodi_pass';
						}

						if (strpos($milan_night_panna, $result_panna_open) !== false) {
							$panna_pass_open = 'panna_pass';
						}

						if (strpos($milan_night_panna, $result_panna_close) !== false) {
							$panna_pass_close = 'panna_pass';
						}

						if ($ank_pass_open != '') {
							$free_game_pass_text_to_print .= 'मिलन नाइट फ्री अंक से ओपन ' . $result_ank_open . ' पास <br>';
						}

						if ($ank_pass_close != '') {
							$free_game_pass_text_to_print .= 'मिलन नाइट फ्री अंक से क्लोज ' . $result_ank_close . ' पास <br>';
						}

						if ($jodi_pass != '') {
							$free_game_pass_text_to_print .= 'मिलन नाइट फ्री अंक से जोड़ी  ' . $result_jodi . ' पास <br>';
						}

						if ($panna_pass_open != '') {
							$free_game_pass_text_to_print .= 'मिलन नाइट फ्री अंक से ओपन पत्ती ' . $result_panna_open . ' पास <br>';
						}

						if ($panna_pass_close != '') {
							$free_game_pass_text_to_print .= 'मिलन नाइट फ्री अंक से क्लोज पत्ती ' . $result_panna_close . ' पास <br>';
						}
					} elseif ($gameName == 'TIME BAZAR' && $updateDate == date('d-m-Y')) {
						if (strpos($time_bazar_ank, $result_ank_open) !== false) {
							$ank_pass_open = 'ank_pass';
						}

						if (strpos($time_bazar_ank, $result_ank_close) !== false) {
							$ank_pass_close = 'ank_pass';
						}

						if (strpos($time_bazar_jodi, $result_jodi) !== false) {
							$jodi_pass = 'jodi_pass';
						}

						if (strpos($time_bazar_panna, $result_panna_open) !== false) {
							$panna_pass_open = 'panna_pass';
						}

						if (strpos($time_bazar_panna, $result_panna_close) !== false) {
							$panna_pass_close = 'panna_pass';
						}

						if ($ank_pass_open != '') {
							$free_game_pass_text_to_print .= 'टाइम बाजार फ्री अंक से ओपन ' . $result_ank_open . ' पास <br>';
						}

						if ($ank_pass_close != '') {
							$free_game_pass_text_to_print .= 'टाइम बाजार फ्री अंक से क्लोज ' . $result_ank_close . ' पास <br>';
						}

						if ($jodi_pass != '') {
							$free_game_pass_text_to_print .= 'टाइम बाजार फ्री अंक से जोड़ी  ' . $result_jodi . ' पास <br>';
						}

						if ($panna_pass_open != '') {
							$free_game_pass_text_to_print .= 'टाइम बाजार फ्री अंक से ओपन पत्ती ' . $result_panna_open . ' पास <br>';
						}

						if ($panna_pass_close != '') {
							$free_game_pass_text_to_print .= 'टाइम बाजार फ्री अंक से क्लोज पत्ती ' . $result_panna_close . ' पास <br>';
						}
					} elseif ($gameName == 'RAJDHANI NIGHT' && $updateDate == date('d-m-Y')) {

						if (strpos($rajdhani_night_ank, $result_ank_open) !== false) {
							$ank_pass_open = 'ank_pass';
						}

						if (strpos($rajdhani_night_ank, $result_ank_close) !== false) {
							$ank_pass_close = 'ank_pass';
						}

						if (strpos($rajdhani_night_jodi, $result_jodi) !== false) {
							$jodi_pass = 'jodi_pass';
						}

						if (strpos($rajdhani_night_panna, $result_panna_open) !== false) {
							$panna_pass_open = 'panna_pass';
						}

						if (strpos($rajdhani_night_panna, $result_panna_close) !== false) {
							$panna_pass_close = 'panna_pass';
						}

						if ($ank_pass_open != '') {
							$free_game_pass_text_to_print .= 'राजधानी नाईट फ्री अंक से ओपन ' . $result_ank_open . ' पास <br>';
						}

						if ($ank_pass_close != '') {
							$free_game_pass_text_to_print .= 'राजधानी नाईट फ्री अंक से क्लोज ' . $result_ank_close . ' पास <br>';
						}

						if ($jodi_pass != '') {
							$free_game_pass_text_to_print .= 'राजधानी नाईट फ्री अंक से जोड़ी  ' . $result_jodi . ' पास <br>';
						}

						if ($panna_pass_open != '') {
							$free_game_pass_text_to_print .= 'राजधानी नाईट फ्री अंक से ओपन पत्ती ' . $result_panna_open . ' पास <br>';
						}

						if ($panna_pass_close != '') {
							$free_game_pass_text_to_print .= 'राजधानी नाईट फ्री अंक से क्लोज पत्ती ' . $result_panna_close . ' पास <br>';
						}
					} elseif ($gameName == 'MAIN BAZAR' && $updateDate == date('d-m-Y')) {

						if (strpos($main_bazar_ank, $result_ank_open) !== false) {
							$ank_pass_open = 'ank_pass';
						}

						if (strpos($main_bazar_ank, $result_ank_close) !== false) {
							$ank_pass_close = 'ank_pass';
						}

						if (strpos($main_bazar_jodi, $result_jodi) !== false) {
							$jodi_pass = 'jodi_pass';
						}

						if (strpos($main_bazar_panna, $result_panna_open) !== false) {
							$panna_pass_open = 'panna_pass';
						}

						if (strpos($main_bazar_panna, $result_panna_close) !== false) {
							$panna_pass_close = 'panna_pass';
						}

						if ($ank_pass_open != '') {
							$free_game_pass_text_to_print .= 'मेन बाजार फ्री अंक से ओपन ' . $result_ank_open . ' पास <br>';
						}

						if ($ank_pass_close != '') {
							$free_game_pass_text_to_print .= 'मेन बाजार फ्री अंक से क्लोज ' . $result_ank_close . ' पास <br>';
						}

						if ($jodi_pass != '') {
							$free_game_pass_text_to_print .= 'मेन बाजार फ्री अंक से जोड़ी  ' . $result_jodi . ' पास <br>';
						}

						if ($panna_pass_open != '') {
							$free_game_pass_text_to_print .= 'मेन बाजार फ्री अंक से ओपन पत्ती ' . $result_panna_open . ' पास <br>';
						}

						if ($panna_pass_close != '') {
							$free_game_pass_text_to_print .= 'मेन बाजार फ्री अंक से क्लोज पत्ती ' . $result_panna_close . ' पास <br>';
						}
					} elseif ($gameName == 'KALYAN' && $updateDate == date('d-m-Y')) {

						if (strpos($kalyan_ank, $result_ank_open) !== false) {
							$ank_pass_open = 'ank_pass';
						}

						if (strpos($kalyan_ank, $result_ank_close) !== false) {
							$ank_pass_close = 'ank_pass';
						}

						if (strpos($kalyan_jodi, $result_jodi) !== false) {
							$jodi_pass = 'jodi_pass';
						}

						if (strpos($kalyan_panna, $result_panna_open) !== false) {
							$panna_pass_open = 'panna_pass';
						}

						if (strpos($kalyan_panna, $result_panna_close) !== false) {
							$panna_pass_close = 'panna_pass';
						}

						if ($ank_pass_open != '') {
							$free_game_pass_text_to_print .= 'कल्याण फ्री अंक से ओपन ' . $result_ank_open . ' पास <br>';
						}

						if ($ank_pass_close != '') {
							$free_game_pass_text_to_print .= 'कल्याण फ्री अंक से क्लोज ' . $result_ank_close . ' पास <br>';
						}

						if ($jodi_pass != '') {
							$free_game_pass_text_to_print .= 'कल्याण फ्री अंक से जोड़ी  ' . $result_jodi . ' पास <br>';
						}

						if ($panna_pass_open != '') {
							$free_game_pass_text_to_print .= 'कल्याण फ्री अंक से ओपन पत्ती ' . $result_panna_open . ' पास <br>';
						}

						if ($panna_pass_close != '') {
							$free_game_pass_text_to_print .= 'कल्याण फ्री अंक से क्लोज पत्ती ' . $result_panna_close . ' पास <br>';
						}
					} elseif ($gameName == 'KALYAN NIGHT' && $updateDate == date('d-m-Y')) {

						if (strpos($kalyan_night_ank, $result_ank_open) !== false) {
							$ank_pass_open = 'ank_pass';
						}

						if (strpos($kalyan_night_ank, $result_ank_close) !== false) {
							$ank_pass_close = 'ank_pass';
						}

						if (strpos($kalyan_night_jodi, $result_jodi) !== false) {
							$jodi_pass = 'jodi_pass';
						}

						if (strpos($kalyan_night_panna, $result_panna_open) !== false) {
							$panna_pass_open = 'panna_pass';
						}

						if (strpos($kalyan_night_panna, $result_panna_close) !== false) {
							$panna_pass_close = 'panna_pass';
						}

						if ($ank_pass_open != '') {
							$free_game_pass_text_to_print .= 'कल्याण नाईट फ्री अंक से ओपन ' . $result_ank_open . ' पास <br>';
						}

						if ($ank_pass_close != '') {
							$free_game_pass_text_to_print .= 'कल्याण नाईट फ्री अंक से क्लोज ' . $result_ank_close . ' पास <br>';
						}

						if ($jodi_pass != '') {
							$free_game_pass_text_to_print .= 'कल्याण नाईट फ्री अंक से जोड़ी  ' . $result_jodi . ' पास <br>';
						}

						if ($panna_pass_open != '') {
							$free_game_pass_text_to_print .= 'कल्याण नाईट फ्री अंक से ओपन पत्ती ' . $result_panna_open . ' पास <br>';
						}

						if ($panna_pass_close != '') {
							$free_game_pass_text_to_print .= 'कल्याण नाईट फ्री अंक से क्लोज पत्ती ' . $result_panna_close . ' पास <br>';
						}
					} elseif ($gameName == 'KALYAN MORNING' && $updateDate == date('d-m-Y')) {

						if (strpos($kalyan_morning_ank, $result_ank_open) !== false) {
							$ank_pass_open = 'ank_pass';
						}

						if (strpos($kalyan_morning_ank, $result_ank_close) !== false) {
							$ank_pass_close = 'ank_pass';
						}

						if (strpos($kalyan_morning_jodi, $result_jodi) !== false) {
							$jodi_pass = 'jodi_pass';
						}

						if (strpos($kalyan_morning_panna, $result_panna_open) !== false) {
							$panna_pass_open = 'panna_pass';
						}

						if (strpos($kalyan_morning_panna, $result_panna_close) !== false) {
							$panna_pass_close = 'panna_pass';
						}

						if ($ank_pass_open != '') {
							$free_game_pass_text_to_print .= 'कल्याण मॉर्निंग फ्री अंक से ओपन ' . $result_ank_open . ' पास <br>';
						}

						if ($ank_pass_close != '') {
							$free_game_pass_text_to_print .= 'कल्याण मॉर्निंग फ्री अंक से क्लोज ' . $result_ank_close . ' पास <br>';
						}

						if ($jodi_pass != '') {
							$free_game_pass_text_to_print .= 'कल्याण मॉर्निंग फ्री अंक से जोड़ी  ' . $result_jodi . ' पास <br>';
						}

						if ($panna_pass_open != '') {
							$free_game_pass_text_to_print .= 'कल्याण मॉर्निंग फ्री अंक से ओपन पत्ती ' . $result_panna_open . ' पास <br>';
						}

						if ($panna_pass_close != '') {
							$free_game_pass_text_to_print .= 'कल्याण मॉर्निंग फ्री अंक से क्लोज पत्ती ' . $result_panna_close . ' पास <br>';
						}
					} elseif ($gameName == 'SRIDEVI' && $updateDate == date('d-m-Y')) {

						if (strpos($sridevi_ank, $result_ank_open) !== false) {
							$ank_pass_open = 'ank_pass';
						}

						if (strpos($sridevi_ank, $result_ank_close) !== false) {
							$ank_pass_close = 'ank_pass';
						}

						if (strpos($sridevi_jodi, $result_jodi) !== false) {
							$jodi_pass = 'jodi_pass';
						}

						if (strpos($sridevi_panna, $result_panna_open) !== false) {
							$panna_pass_open = 'panna_pass';
						}

						if (strpos($sridevi_panna, $result_panna_close) !== false) {
							$panna_pass_close = 'panna_pass';
						}

						if ($ank_pass_open != '') {
							$free_game_pass_text_to_print .= 'श्रीदेवी  फ्री अंक से ओपन ' . $result_ank_open . ' पास <br>';
						}

						if ($ank_pass_close != '') {
							$free_game_pass_text_to_print .= 'श्रीदेवी  फ्री अंक से क्लोज ' . $result_ank_close . ' पास <br>';
						}

						if ($jodi_pass != '') {
							$free_game_pass_text_to_print .= 'श्रीदेवी फ्री अंक से जोड़ी  ' . $result_jodi . ' पास <br>';
						}

						if ($panna_pass_open != '') {
							$free_game_pass_text_to_print .= 'श्रीदेवी फ्री अंक से ओपन पत्ती ' . $result_panna_open . ' पास <br>';
						}

						if ($panna_pass_close != '') {
							$free_game_pass_text_to_print .= 'श्रीदेवी फ्री अंक से क्लोज पत्ती ' . $result_panna_close . ' पास <br>';
						}
					} elseif ($gameName == 'SRIDEVI NIGHT' && $updateDate == date('d-m-Y')) {

						if (strpos($sridevi_night_ank, $result_ank_open) !== false) {
							$ank_pass_open = 'ank_pass';
						}

						if (strpos($sridevi_night_ank, $result_ank_close) !== false) {
							$ank_pass_close = 'ank_pass';
						}

						if (strpos($sridevi_night_jodi, $result_jodi) !== false) {
							$jodi_pass = 'jodi_pass';
						}

						if (strpos($sridevi_night_panna, $result_panna_open) !== false) {
							$panna_pass_open = 'panna_pass';
						}

						if (strpos($sridevi_night_panna, $result_panna_close) !== false) {
							$panna_pass_close = 'panna_pass';
						}

						if ($ank_pass_open != '') {
							$free_game_pass_text_to_print .= 'श्रीदेवी नाईट फ्री अंक से ओपन ' . $result_ank_open . ' पास <br>';
						}

						if ($ank_pass_close != '') {
							$free_game_pass_text_to_print .= 'श्रीदेवी नाईट फ्री अंक से क्लोज ' . $result_ank_close . ' पास <br>';
						}

						if ($jodi_pass != '') {
							$free_game_pass_text_to_print .= 'श्रीदेवी नाईट फ्री अंक से जोड़ी  ' . $result_jodi . ' पास <br>';
						}

						if ($panna_pass_open != '') {
							$free_game_pass_text_to_print .= 'श्रीदेवी नाईट फ्री अंक से ओपन पत्ती ' . $result_panna_open . ' पास <br>';
						}

						if ($panna_pass_close != '') {
							$free_game_pass_text_to_print .= 'श्रीदेवी नाईट फ्री अंक से क्लोज पत्ती ' . $result_panna_close . ' पास <br>';
						}
					} elseif ($gameName == 'MAMA BHANJA' && $updateDate == date('d-m-Y')) {

						if (strpos($mama_bhanja_ank, $result_ank_open) !== false) {
							$ank_pass_open = 'ank_pass';
						}

						if (strpos($mama_bhanja_ank, $result_ank_close) !== false) {
							$ank_pass_close = 'ank_pass';
						}

						if (strpos($mama_bhanja_jodi, $result_jodi) !== false) {
							$jodi_pass = 'jodi_pass';
						}

						if (strpos($mama_bhanja_panna, $result_panna_open) !== false) {
							$panna_pass_open = 'panna_pass';
						}

						if (strpos($mama_bhanja_panna, $result_panna_close) !== false) {
							$panna_pass_close = 'panna_pass';
						}

						if ($ank_pass_open != '') {
							$free_game_pass_text_to_print .= 'मामा भांजा फ्री अंक से ओपन ' . $result_ank_open . ' पास <br>';
						}

						if ($ank_pass_close != '') {
							$free_game_pass_text_to_print .= 'मामा भांजा  फ्री अंक से क्लोज ' . $result_ank_close . ' पास <br>';
						}

						if ($jodi_pass != '') {
							$free_game_pass_text_to_print .= 'मामा भांजा  फ्री अंक से जोड़ी  ' . $result_jodi . ' पास <br>';
						}

						if ($panna_pass_open != '') {
							$free_game_pass_text_to_print .= 'मामा भांजा फ्री अंक से ओपन पत्ती ' . $result_panna_open . ' पास <br>';
						}

						if ($panna_pass_close != '') {
							$free_game_pass_text_to_print .= 'मामा भांजा  फ्री अंक से क्लोज पत्ती ' . $result_panna_close . ' पास <br>';
						}
					} elseif ($gameName == 'MAIN MORNING' && $updateDate == date('d-m-Y')) {

						if (strpos($main_morning_ank, $result_ank_open) !== false) {
							$ank_pass_open = 'ank_pass';
						}

						if (strpos($main_morning_ank, $result_ank_close) !== false) {
							$ank_pass_close = 'ank_pass';
						}

						if (strpos($main_morning_jodi, $result_jodi) !== false) {
							$jodi_pass = 'jodi_pass';
						}

						if (strpos($main_morning_panna, $result_panna_open) !== false) {
							$panna_pass_open = 'panna_pass';
						}

						if (strpos($main_morning_panna, $result_panna_close) !== false) {
							$panna_pass_close = 'panna_pass';
						}

						if ($ank_pass_open != '') {
							$free_game_pass_text_to_print .= 'मैन मॉर्निंग फ्री अंक से ओपन ' . $result_ank_open . ' पास <br>';
						}

						if ($ank_pass_close != '') {
							$free_game_pass_text_to_print .= 'मैन मॉर्निंग  फ्री अंक से क्लोज ' . $result_ank_close . ' पास <br>';
						}

						if ($jodi_pass != '') {
							$free_game_pass_text_to_print .= 'मैन मॉर्निंग  फ्री अंक से जोड़ी  ' . $result_jodi . ' पास <br>';
						}

						if ($panna_pass_open != '') {
							$free_game_pass_text_to_print .= 'मैन मॉर्निंग  फ्री अंक से ओपन पत्ती ' . $result_panna_open . ' पास <br>';
						}

						if ($panna_pass_close != '') {
							$free_game_pass_text_to_print .= 'मैन मॉर्निंग  फ्री अंक से क्लोज पत्ती ' . $result_panna_close . ' पास <br>';
						}
					} elseif ($gameName == 'KARNATAKA DAY' && $updateDate == date('d-m-Y')) {

						if (strpos($karnataka_day_ank, $result_ank_open) !== false) {
							$ank_pass_open = 'ank_pass';
						}

						if (strpos($karnataka_day_ank, $result_ank_close) !== false) {
							$ank_pass_close = 'ank_pass';
						}

						if (strpos($karnataka_day_jodi, $result_jodi) !== false) {
							$jodi_pass = 'jodi_pass';
						}

						if (strpos($karnataka_day_panna, $result_panna_open) !== false) {
							$panna_pass_open = 'panna_pass';
						}

						if (strpos($karnataka_day_panna, $result_panna_close) !== false) {
							$panna_pass_close = 'panna_pass';
						}

						if ($ank_pass_open != '') {
							$free_game_pass_text_to_print .= 'कर्नाटका डे  फ्री अंक से ओपन ' . $result_ank_open . ' पास <br>';
						}

						if ($ank_pass_close != '') {
							$free_game_pass_text_to_print .= 'कर्नाटका डे  फ्री अंक से क्लोज ' . $result_ank_close . ' पास <br>';
						}

						if ($jodi_pass != '') {
							$free_game_pass_text_to_print .= 'कर्नाटका डे  फ्री अंक से जोड़ी  ' . $result_jodi . ' पास <br>';
						}

						if ($panna_pass_open != '') {
							$free_game_pass_text_to_print .= 'कर्नाटका डे  फ्री अंक से ओपन पत्ती ' . $result_panna_open . ' पास <br>';
						}

						if ($panna_pass_close != '') {
							$free_game_pass_text_to_print .= 'कर्नाटका डे  फ्री अंक से क्लोज पत्ती ' . $result_panna_close . ' पास <br>';
						}
					} elseif ($gameName == 'MUMBAI MORNING' && $updateDate == date('d-m-Y')) {

						if (strpos($mumbai_morning_ank, $result_ank_open) !== false) {
							$ank_pass_open = 'ank_pass';
						}

						if (strpos($mumbai_morning_ank, $result_ank_close) !== false) {
							$ank_pass_close = 'ank_pass';
						}

						if (strpos($mumbai_morning_jodi, $result_jodi) !== false) {
							$jodi_pass = 'jodi_pass';
						}

						if (strpos($mumbai_morning_panna, $result_panna_open) !== false) {
							$panna_pass_open = 'panna_pass';
						}

						if (strpos($mumbai_morning_panna, $result_panna_close) !== false) {
							$panna_pass_close = 'panna_pass';
						}

						if ($ank_pass_open != '') {
							$free_game_pass_text_to_print .= 'मुंबई मॉर्निंग  फ्री अंक से ओपन ' . $result_ank_open . ' पास <br>';
						}

						if ($ank_pass_close != '') {
							$free_game_pass_text_to_print .= 'मुंबई मॉर्निंग  फ्री अंक से क्लोज ' . $result_ank_close . ' पास <br>';
						}

						if ($jodi_pass != '') {
							$free_game_pass_text_to_print .= 'मुंबई मॉर्निंग  फ्री अंक से जोड़ी  ' . $result_jodi . ' पास <br>';
						}

						if ($panna_pass_open != '') {
							$free_game_pass_text_to_print .= 'मुंबई मॉर्निंग  फ्री अंक से ओपन पत्ती ' . $result_panna_open . ' पास <br>';
						}

						if ($panna_pass_close != '') {
							$free_game_pass_text_to_print .= 'मुंबई मॉर्निंग  फ्री अंक से क्लोज पत्ती ' . $result_panna_close . ' पास <br>';
						}
					} elseif ($gameName == 'MUMBAI PAREL' && $updateDate == date('d-m-Y')) {

						if (strpos($mumbai_parel_ank, $result_ank_open) !== false) {
							$ank_pass_open = 'ank_pass';
						}

						if (strpos($mumbai_parel_ank, $result_ank_close) !== false) {
							$ank_pass_close = 'ank_pass';
						}

						if (strpos($mumbai_parel_jodi, $result_jodi) !== false) {
							$jodi_pass = 'jodi_pass';
						}

						if (strpos($mumbai_parel_panna, $result_panna_open) !== false) {
							$panna_pass_open = 'panna_pass';
						}

						if (strpos($mumbai_parel_panna, $result_panna_close) !== false) {
							$panna_pass_close = 'panna_pass';
						}

						if ($ank_pass_open != '') {
							$free_game_pass_text_to_print .= 'मुंबई परेल फ्री अंक से ओपन ' . $result_ank_open . ' पास <br>';
						}

						if ($ank_pass_close != '') {
							$free_game_pass_text_to_print .= 'मुंबई परेल फ्री अंक से क्लोज ' . $result_ank_close . ' पास <br>';
						}

						if ($jodi_pass != '') {
							$free_game_pass_text_to_print .= 'मुंबई परेल फ्री अंक से जोड़ी  ' . $result_jodi . ' पास <br>';
						}

						if ($panna_pass_open != '') {
							$free_game_pass_text_to_print .= 'मुंबई परेल फ्री अंक से ओपन पत्ती ' . $result_panna_open . ' पास <br>';
						}

						if ($panna_pass_close != '') {
							$free_game_pass_text_to_print .= 'मुंबई परेल फ्री अंक से क्लोज पत्ती ' . $result_panna_close . ' पास <br>';
						}
					} elseif ($gameName == 'PRABHAT' && $updateDate == date('d-m-Y')) {

						if (strpos($prabhat_ank, $result_ank_open) !== false) {
							$ank_pass_open = 'ank_pass';
						}

						if (strpos($prabhat_ank, $result_ank_close) !== false) {
							$ank_pass_close = 'ank_pass';
						}

						if (strpos($prabhat_jodi, $result_jodi) !== false) {
							$jodi_pass = 'jodi_pass';
						}

						if (strpos($prabhat_panna, $result_panna_open) !== false) {
							$panna_pass_open = 'panna_pass';
						}

						if (strpos($prabhat_panna, $result_panna_close) !== false) {
							$panna_pass_close = 'panna_pass';
						}

						if ($ank_pass_open != '') {
							$free_game_pass_text_to_print .= 'प्रभात फ्री अंक से ओपन ' . $result_ank_open . ' पास <br>';
						}

						if ($ank_pass_close != '') {
							$free_game_pass_text_to_print .= 'प्रभात फ्री अंक से क्लोज ' . $result_ank_close . ' पास <br>';
						}

						if ($jodi_pass != '') {
							$free_game_pass_text_to_print .= 'प्रभात फ्री अंक से जोड़ी  ' . $result_jodi . ' पास <br>';
						}

						if ($panna_pass_open != '') {
							$free_game_pass_text_to_print .= 'प्रभात फ्री अंक से ओपन पत्ती ' . $result_panna_open . ' पास <br>';
						}

						if ($panna_pass_close != '') {
							$free_game_pass_text_to_print .= 'प्रभात फ्री अंक से क्लोज पत्ती ' . $result_panna_close . ' पास <br>';
						}
					} elseif ($gameName == 'MAIN BAZAR MORNING' && $updateDate == date('d-m-Y')) {

						if (strpos($main_bazar_morning_ank, $result_ank_open) !== false) {
							$ank_pass_open = 'ank_pass';
						}

						if (strpos($main_bazar_morning_ank, $result_ank_close) !== false) {
							$ank_pass_close = 'ank_pass';
						}

						if (strpos($main_bazar_morning_jodi, $result_jodi) !== false) {
							$jodi_pass = 'jodi_pass';
						}

						if (strpos($main_bazar_morning_panna, $result_panna_open) !== false) {
							$panna_pass_open = 'panna_pass';
						}

						if (strpos($main_bazar_morning_panna, $result_panna_close) !== false) {
							$panna_pass_close = 'panna_pass';
						}

						if ($ank_pass_open != '') {
							$free_game_pass_text_to_print .= 'मैन बाजार मॉर्निंग फ्री अंक से ओपन ' . $result_ank_open . ' पास <br>';
						}

						if ($ank_pass_close != '') {
							$free_game_pass_text_to_print .= 'मैन बाजार मॉर्निंग फ्री अंक से क्लोज ' . $result_ank_close . ' पास <br>';
						}

						if ($jodi_pass != '') {
							$free_game_pass_text_to_print .= 'मैन बाजार मॉर्निंग फ्री अंक से जोड़ी  ' . $result_jodi . ' पास <br>';
						}

						if ($panna_pass_open != '') {
							$free_game_pass_text_to_print .= 'मैन बाजार मॉर्निंग फ्री अंक से ओपन पत्ती ' . $result_panna_open . ' पास <br>';
						}

						if ($panna_pass_close != '') {
							$free_game_pass_text_to_print .= 'मैन बाजार मॉर्निंग फ्री अंक से क्लोज पत्ती ' . $result_panna_close . ' पास <br>';
						}
					} elseif ($gameName == 'NEW TIME BAZAR' && $updateDate == date('d-m-Y')) {

						if (strpos($new_time_bazar_ank, $result_ank_open) !== false) {
							$ank_pass_open = 'ank_pass';
						}

						if (strpos($new_time_bazar_ank, $result_ank_close) !== false) {
							$ank_pass_close = 'ank_pass';
						}

						if (strpos($new_time_bazar_jodi, $result_jodi) !== false) {
							$jodi_pass = 'jodi_pass';
						}

						if (strpos($new_time_bazar_panna, $result_panna_open) !== false) {
							$panna_pass_open = 'panna_pass';
						}

						if (strpos($new_time_bazar_panna, $result_panna_close) !== false) {
							$panna_pass_close = 'panna_pass';
						}

						if ($ank_pass_open != '') {
							$free_game_pass_text_to_print .= 'न्यू टाइम बाज़ार फ्री अंक से ओपन ' . $result_ank_open . ' पास <br>';
						}

						if ($ank_pass_close != '') {
							$free_game_pass_text_to_print .= 'न्यू टाइम बाज़ार फ्री अंक से क्लोज ' . $result_ank_close . ' पास <br>';
						}

						if ($jodi_pass != '') {
							$free_game_pass_text_to_print .= 'न्यू टाइम बाज़ार फ्री अंक से जोड़ी  ' . $result_jodi . ' पास <br>';
						}

						if ($panna_pass_open != '') {
							$free_game_pass_text_to_print .= 'न्यू टाइम बाज़ार फ्री अंक से ओपन पत्ती ' . $result_panna_open . ' पास <br>';
						}

						if ($panna_pass_close != '') {
							$free_game_pass_text_to_print .= 'न्यू टाइम बाज़ार फ्री अंक से क्लोज पत्ती ' . $result_panna_close . ' पास <br>';
						}
					} elseif ($gameName == 'RATAN KHATRI' && $updateDate == date('d-m-Y')) {

						if (strpos($ratan_khatri_ank, $result_ank_open) !== false) {
							$ank_pass_open = 'ank_pass';
						}

						if (strpos($ratan_khatri_ank, $result_ank_close) !== false) {
							$ank_pass_close = 'ank_pass';
						}

						if (strpos($ratan_khatri_jodi, $result_jodi) !== false) {
							$jodi_pass = 'jodi_pass';
						}

						if (strpos($ratan_khatri_panna, $result_panna_open) !== false) {
							$panna_pass_open = 'panna_pass';
						}

						if (strpos($ratan_khatri_panna, $result_panna_close) !== false) {
							$panna_pass_close = 'panna_pass';
						}

						if ($ank_pass_open != '') {
							$free_game_pass_text_to_print .= 'रतन खत्री फ्री अंक से ओपन ' . $result_ank_open . ' पास <br>';
						}

						if ($ank_pass_close != '') {
							$free_game_pass_text_to_print .= 'रतन खत्री फ्री अंक से क्लोज ' . $result_ank_close . ' पास <br>';
						}

						if ($jodi_pass != '') {
							$free_game_pass_text_to_print .= 'रतन खत्री फ्री अंक से जोड़ी  ' . $result_jodi . ' पास <br>';
						}

						if ($panna_pass_open != '') {
							$free_game_pass_text_to_print .= 'रतन खत्री फ्री अंक से ओपन पत्ती ' . $result_panna_open . ' पास <br>';
						}

						if ($panna_pass_close != '') {
							$free_game_pass_text_to_print .= 'रतन खत्री फ्री अंक से क्लोज पत्ती ' . $result_panna_close . ' पास <br>';
						}
					} else {
						$free_game_pass_text_to_print = '';
					}
				}



				$time1 = strtotime(date('d-m-Y h:i A'));
				$startTime = strtotime('-' . $liveTimeBefore . ' minutes', $time);
				$starttimeC = strtotime('-' . $liveTimeBefore . ' minutes', $timeC);
				$endTime = strtotime('+' . $liveTimeAfter . ' minutes', $time);
				$endtimeC = strtotime('+' . $liveTimeAfter . ' minutes', $timeC);
				if ($status == 0) {
					# code...
				} else {

					if ($frequency == 7 || $frequency == 2) {
						if (strpos(date('h:i A', strtotime($timeOpen)), 'PM') && strpos(date('h:i A', strtotime($timeClose)), 'AM')) {
							if (date('A') == 'PM') {
								$starttimeC = strtotime('+1 day -' . $liveTimeBefore . ' minutes', $timeC);
								$endtimeC = strtotime('+1 day +' . $liveTimeAfter . ' minutes', $timeC);
							}
							if (date('H') <= 3) {
								$starttimeC = strtotime('-1 day -' . $liveTimeBefore . ' minutes', $timeC);
								if ($updateDate == date('d-m-Y', strtotime('-1 day', $time1))) {
									$updateDate = date('d-m-Y', strtotime('+1 day', strtotime($updateDate)));
								}
							}
							if ($time1 >= $startTime && $time1 <= $endTime) {
								if ($updateDate != date('d-m-Y')) {
									$gameResult = 'Loading...';
								}
			?>
								<!-- <div> -->
								<span class="h8"><?php echo $gameName ?></span>
								<span class="h9"><?php echo $gameResult ?></span>
								<?php
								//show Khabar line text
								$temp_khabar_line_time_open = strtotime('-3 minutes', $time);
								$temp_khabar_line_time_close = strtotime('-3 minutes', $timeC);
								if (time() >= $temp_khabar_line_time_open && $gameResult == 'Loading...' && $show_extra_text) {
									echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
								}

								if (time() >= $temp_khabar_line_time_close && strlen($gameResult) < 10 && $show_extra_text) {
									//echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
								}
								?>
								<button onclick="window.location.reload()">Refresh</button>
								<?php
								//show sabse tez sabpe pehle
								$temp_future_time = strtotime('+15 minutes', trim($temp_last_updated_result));
								if ($temp_future_time >= time() && $temp_last_updated_result != '' && $show_extra_text) {
									echo '<span class="e-sprg">सबसे तेज सबसे सही</span>';
								}
								if ($free_game_pass_text_to_print != '') {
									echo '<p>' . preg_replace('/(<br>)+$/', '', $free_game_pass_text_to_print) . '</p>';
								}
								?>
								<!-- </div> -->
								<?php } elseif ($time1 >= $starttimeC && $time1 <= $endtimeC) {
								if ($updateDate == date('d-m-Y')) { ?>
									<!-- <div> -->
									<span class="h8"><?php echo $gameName ?></span>
									<span class="h9"><?php echo $gameResult ?></span>
									<?php
									//show Khabar line text
									$temp_khabar_line_time_open = strtotime('-3 minutes', $time);
									$temp_khabar_line_time_close = strtotime('-3 minutes', $timeC);
									if (time() >= $temp_khabar_line_time_open && $gameResult == 'Loading...' && $show_extra_text) {
										echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
									}

									if (time() >= $temp_khabar_line_time_close && strlen($gameResult) < 10 && $show_extra_text) {
										//echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
									}
									?>
									<button onclick="window.location.reload()">Refresh</button>
									<?php
									//show sabse tez sabpe pehle
									$temp_future_time = strtotime('+15 minutes', trim($temp_last_updated_result));
									if ($temp_future_time >= time() && $temp_last_updated_result != '' && $show_extra_text) {
										echo '<span class="e-sprg">सबसे तेज सबसे सही</span>';
									}
									if ($free_game_pass_text_to_print != '') {
										echo '<p>' . preg_replace('/(<br>)+$/', '', $free_game_pass_text_to_print) . '</p>';
									}
									?>
									<!-- </div> -->
								<?php
								}
							}
						} else {
							if ($time1 >= $startTime && $time1 <= $endTime) {
								if ($updateDate != date('d-m-Y')) {
									$gameResult = 'Loading...';
								}
								?>
								<!-- <div> -->
								<span class="h8"><?php echo $gameName ?></span>
								<span class="h9"><?php echo $gameResult ?></span>
								<?php
								//show Khabar line text
								$temp_khabar_line_time_open = strtotime('-3 minutes', $time);
								$temp_khabar_line_time_close = strtotime('-3 minutes', $timeC);
								if (time() >= $temp_khabar_line_time_open && $gameResult == 'Loading...' && $show_extra_text) {
									echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
								}

								if (time() >= $temp_khabar_line_time_close && strlen($gameResult) < 10 && $show_extra_text) {
									//echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
								}
								?>
								<button onclick="window.location.reload()">Refresh</button>
								<?php
								//show sabse tez sabpe pehle
								$temp_future_time = strtotime('+15 minutes', trim($temp_last_updated_result));
								if ($temp_future_time >= time() && $temp_last_updated_result != '' && $show_extra_text) {
									echo '<span class="e-sprg">सबसे तेज सबसे सही</span>';
								}
								if ($free_game_pass_text_to_print != '') {
									echo '<p>' . preg_replace('/(<br>)+$/', '', $free_game_pass_text_to_print) . '</p>';
								}
								?>
								<!-- </div> -->
								<?php } elseif ($time1 >= $starttimeC && $time1 <= $endtimeC) {
								if ($updateDate == date('d-m-Y')) { ?>
									<!-- <div> -->
									<span class="h8"><?php echo $gameName ?></span>
									<span class="h9"> <?php echo $gameResult ?></span>
									<?php
									//show Khabar line text
									$temp_khabar_line_time_open = strtotime('-3 minutes', $time);
									$temp_khabar_line_time_close = strtotime('-3 minutes', $timeC);
									if (time() >= $temp_khabar_line_time_open && $gameResult == 'Loading...' && $show_extra_text) {
										echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
									}

									if (time() >= $temp_khabar_line_time_close && strlen($gameResult) < 10 && $show_extra_text) {
										//echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
									}
									?>
									<button onclick="window.location.reload()">Refresh</button>
									<?php
									//show sabse tez sabpe pehle
									$temp_future_time = strtotime('+15 minutes', trim($temp_last_updated_result));
									if ($temp_future_time >= time() && $temp_last_updated_result != '' && $show_extra_text) {
										echo '<span class="e-sprg">सबसे तेज सबसे सही</span>';
									}
									if ($free_game_pass_text_to_print != '') {
										echo '<p>' . preg_replace('/(<br>)+$/', '', $free_game_pass_text_to_print) . '</p>';
									}
									?>
									<!-- </div> -->
								<?php
								}
							}
						}
					} elseif ($frequency == 6) {
						if (strpos(date('h:i A', strtotime($timeOpen)), 'PM') && strpos(date('h:i A', strtotime($timeClose)), 'AM')) {
							if (date('A') == 'PM') {
								$starttimeC = strtotime('+1 day -' . $liveTimeBefore . ' minutes', $timeC);
								$endtimeC = strtotime('+1 day +' . $liveTimeAfter . ' minutes', $timeC);
							}
							if (date('A') == 'AM') {
								if ($updateDate == date('d-m-Y')) {
								} else {
									$updateDate = date('d-m-Y', strtotime('+1 day', strtotime($updateDate)));
								}
							}
						} else {
							if (date('A') == 'AM') {
								$starttimeC = strtotime('-1 day -' . $liveTimeBefore . ' minutes', $timeC);
								$endtimeC = strtotime('-1 day +' . $liveTimeAfter . ' minutes', $timeC);
								if ($updateDate != date('d-m-Y')) {
									$updateDate = date('d-m-Y', strtotime('+1 day', strtotime($updateDate)));
								}
							}
						}
						if ($day == "mon") {
							if ($time1 >= $startTime && $time1 <= $endTime) {
								if ($updateDate != date('d-m-Y')) {
									$gameResult = 'Loading...';
								}
								?>
								<!-- <div> -->
								<span class="h8"><?php echo $gameName ?></span>
								<span class="h9"><?php echo $gameResult ?></span>

								<?php if ($gameName == 'KALYAN' && $app_link_status) { ?>



									<hr><a href="<?php echo $app_link_url; ?>" target="_blank" style="color: yellow;background: red;padding: 5px;display: block;width: 250px;margin: auto;border: 1px solid black;"><?php echo $app_link_text; ?></a>
									<hr>

								<?php } ?>

								<?php
								//show Khabar line text
								$temp_khabar_line_time_open = strtotime('-3 minutes', $time);
								$temp_khabar_line_time_close = strtotime('-3 minutes', $timeC);
								if (time() >= $temp_khabar_line_time_open && $gameResult == 'Loading...' && $show_extra_text) {
									echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
								}

								if (time() >= $temp_khabar_line_time_close && strlen($gameResult) < 10 && $show_extra_text) {
									//echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
								}
								?>
								<button onclick="window.location.reload()">Refresh</button>
								<?php
								//show sabse tez sabpe pehle
								$temp_future_time = strtotime('+15 minutes', trim($temp_last_updated_result));
								if ($temp_future_time >= time() && $temp_last_updated_result != '' && $show_extra_text) {
									echo '<span class="e-sprg">सबसे तेज सबसे सही</span>';
								}
								if ($free_game_pass_text_to_print != '') {
									echo '<p>' . preg_replace('/(<br>)+$/', '', $free_game_pass_text_to_print) . '</p>';
								}
								?>
								<!-- </div> -->
								<?php } elseif ($time1 >= $starttimeC && $time1 <= $endtimeC) {
								if ($updateDate == date('d-m-Y')) { ?>
									<!-- <div> -->
									<span class="h8"><?php echo $gameName ?></span>
									<span class="h9"><?php echo $gameResult ?></span>

									<?php if ($gameName == 'KALYAN' && $app_link_status) { ?>

										<hr><a href="<?php echo $app_link_url; ?>" target="_blank" style="color: yellow;background: red;padding: 5px;display: block;width: 250px;margin: auto;border: 1px solid black;"><?php echo $app_link_text; ?></a>
										<hr>

									<?php } ?>

									<?php
									//show Khabar line text
									$temp_khabar_line_time_open = strtotime('-3 minutes', $time);
									$temp_khabar_line_time_close = strtotime('-3 minutes', $timeC);
									if (time() >= $temp_khabar_line_time_open && $gameResult == 'Loading...' && $show_extra_text) {
										echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
									}

									if (time() >= $temp_khabar_line_time_close && strlen($gameResult) < 10 && $show_extra_text) {
										//echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
									}
									?>
									<button onclick="window.location.reload()">Refresh</button>
									<?php
									//show sabse tez sabpe pehle
									$temp_future_time = strtotime('+15 minutes', trim($temp_last_updated_result));
									if ($temp_future_time >= time() && $temp_last_updated_result != '' && $show_extra_text) {
										echo '<span class="e-sprg">सबसे तेज सबसे सही</span>';
									}
									if ($free_game_pass_text_to_print != '') {
										echo '<p>' . preg_replace('/(<br>)+$/', '', $free_game_pass_text_to_print) . '</p>';
									}
									?>
									<!-- </div> -->
								<?php
								}
							} else {
							}
						} elseif ($day == 'sun') {
							if ($time1 >= $starttimeC && $time1 <= $endtimeC) {
								if ($updateDate == date('d-m-Y')) { ?>
									<!-- <div> -->
									<span class="h8"><?php echo $gameName ?></span>
									<span class="h9"><?php echo $gameResult ?></span>

									<?php if ($gameName == 'KALYAN' && $app_link_status) { ?>

										<hr><a href="<?php echo $app_link_url; ?>" target="_blank" style="color: yellow;background: red;padding: 5px;display: block;width: 250px;margin: auto;border: 1px solid black;"><?php echo $app_link_text; ?></a>
										<hr>

									<?php } ?>


									<?php
									//show Khabar line text
									$temp_khabar_line_time_open = strtotime('-3 minutes', $time);
									$temp_khabar_line_time_close = strtotime('-3 minutes', $timeC);
									if (time() >= $temp_khabar_line_time_open && $gameResult == 'Loading...' && $show_extra_text) {
										echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
									}

									if (time() >= $temp_khabar_line_time_close && strlen($gameResult) < 10 && $show_extra_text) {
										//echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
									}
									?>
									<button onclick="window.location.reload()">Refresh</button>
									<?php
									//show sabse tez sabpe pehle
									$temp_future_time = strtotime('+15 minutes', trim($temp_last_updated_result));
									if ($temp_future_time >= time() && $temp_last_updated_result != '' && $show_extra_text) {
										echo '<span class="e-sprg">सबसे तेज सबसे सही</span>';
									}
									if ($free_game_pass_text_to_print != '') {
										echo '<p>' . preg_replace('/(<br>)+$/', '', $free_game_pass_text_to_print) . '</p>';
									}
									?>
									<!-- </div> -->
								<?php
								}
							}
						} else {
							if ($time1 >= $startTime && $time1 <= $endTime) {
								if ($updateDate != date('d-m-Y')) {
									$gameResult = 'Loading...';
								}
								?>
								<!-- <div> -->
								<span class="h8"><?php echo $gameName ?></span>
								<span class="h9"><?php echo $gameResult ?></span>

								<?php if ($gameName == 'KALYAN' && $app_link_status) { ?>

									<hr><a href="<?php echo $app_link_url; ?>" target="_blank" style="color: yellow;background: red;padding: 5px;display: block;width: 250px;margin: auto;border: 1px solid black;"><?php echo $app_link_text; ?></a>
									<hr>

								<?php } ?>

								<?php
								//show Khabar line text
								$temp_khabar_line_time_open = strtotime('-3 minutes', $time);
								$temp_khabar_line_time_close = strtotime('-3 minutes', $timeC);
								if (time() >= $temp_khabar_line_time_open && $gameResult == 'Loading...' && $show_extra_text) {
									echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
								}

								if (time() >= $temp_khabar_line_time_close && strlen($gameResult) < 10 && $show_extra_text) {
									//echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
								}
								?>
								<button onclick="window.location.reload()">Refresh</button>
								<?php
								//show sabse tez sabpe pehle
								$temp_future_time = strtotime('+15 minutes', trim($temp_last_updated_result));
								if ($temp_future_time >= time() && $temp_last_updated_result != '' && $show_extra_text) {
									echo '<span class="e-sprg">सबसे तेज सबसे सही</span>';
								}
								if ($free_game_pass_text_to_print != '') {
									echo '<p>' . preg_replace('/(<br>)+$/', '', $free_game_pass_text_to_print) . '</p>';
								}
								?>
								<!-- </div> -->
								<?php } elseif ($time1 >= $starttimeC && $time1 <= $endtimeC) {
								if ($updateDate == date('d-m-Y')) { ?>
									<!-- <div> -->
									<span class="h8"><?php echo $gameName ?></span>
									<span class="h9"><?php echo $gameResult ?></span>

									<?php if ($gameName == 'KALYAN' && $app_link_status) { ?>

										<hr><a href="<?php echo $app_link_url; ?>" target="_blank" style="color: yellow;background: red;padding: 5px;display: block;width: 250px;margin: auto;border: 1px solid black;"><?php echo $app_link_text; ?></a>
										<hr>

									<?php } ?>


									<?php
									//show Khabar line text
									$temp_khabar_line_time_open = strtotime('-3 minutes', $time);
									$temp_khabar_line_time_close = strtotime('-3 minutes', $timeC);
									if (time() >= $temp_khabar_line_time_open && $gameResult == 'Loading...' && $show_extra_text) {
										echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
									}

									if (time() >= $temp_khabar_line_time_close && strlen($gameResult) < 10 && $show_extra_text) {
										//echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
									}
									?>
									<button onclick="window.location.reload()">Refresh</button>
									<?php
									//show sabse tez sabpe pehle
									$temp_future_time = strtotime('+15 minutes', trim($temp_last_updated_result));
									if ($temp_future_time >= time() && $temp_last_updated_result != '' && $show_extra_text) {
										echo '<span class="e-sprg">सबसे तेज सबसे सही</span>';
									}
									if ($free_game_pass_text_to_print != '') {
										echo '<p>' . preg_replace('/(<br>)+$/', '', $free_game_pass_text_to_print) . '</p>';
									}
									?>
									<!-- </div> -->
								<?php
								}
							}
						}
					} elseif ($frequency == 5) {
						if (strpos(date('h:i A', strtotime($timeOpen)), 'PM') && strpos(date('h:i A', strtotime($timeClose)), 'AM')) {
							if (date('A') == 'PM') {
								$starttimeC = strtotime('+1 day -' . $liveTimeBefore . ' minutes', $timeC);
								$endtimeC = strtotime('+1 day +' . $liveTimeAfter . ' minutes', $timeC);
							}
							if (date('A') == 'AM') {
								if ($updateDate == date('d-m-Y')) {
								} else {
									$updateDate = date('d-m-Y', strtotime('+1 day', strtotime($updateDate)));
								}
							}
						} else {
							if (date('A') == 'AM') {
								$starttimeC = strtotime('-1 day -' . $liveTimeBefore . ' minutes', $timeC);
								$endtimeC = strtotime('-1 day +' . $liveTimeAfter . ' minutes', $timeC);
								if ($updateDate != date('d-m-Y')) {
									$updateDate = date('d-m-Y', strtotime('+1 day', strtotime($updateDate)));
								}
							}
						}
						if ($day == "mon") {
							if ($time1 >= $startTime && $time1 <= $endTime) {
								if ($updateDate != date('d-m-Y')) {
									$gameResult = 'Loading...';
								}
								?>
								<!-- <div> -->
								<span class="h8"><?php echo $gameName ?></span>
								<span class="h9"><?php echo $gameResult ?></span>
								<?php
								//show Khabar line text
								$temp_khabar_line_time_open = strtotime('-3 minutes', $time);
								$temp_khabar_line_time_close = strtotime('-3 minutes', $timeC);
								if (time() >= $temp_khabar_line_time_open && $gameResult == 'Loading...' && $show_extra_text) {
									echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
								}

								if (time() >= $temp_khabar_line_time_close && strlen($gameResult) < 10 && $show_extra_text) {
									//echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
								}
								?>
								<button onclick="window.location.reload()">Refresh</button>
								<?php
								//show sabse tez sabpe pehle
								$temp_future_time = strtotime('+15 minutes', trim($temp_last_updated_result));
								if ($temp_future_time >= time() && $temp_last_updated_result != '' && $show_extra_text) {
									echo '<span class="e-sprg">सबसे तेज सबसे सही</span>';
								}
								if ($free_game_pass_text_to_print != '') {
									echo '<p>' . preg_replace('/(<br>)+$/', '', $free_game_pass_text_to_print) . '</p>';
								}
								?>
								<!-- </div> -->
								<?php } elseif ($time1 >= $starttimeC && $time1 <= $endtimeC) {
								if ($updateDate == date('d-m-Y')) { ?>
									<!-- <div> -->
									<span class="h8"><?php echo $gameName ?></span>
									<span class="h9"><?php echo $gameResult ?></span>
									<?php
									//show Khabar line text
									$temp_khabar_line_time_open = strtotime('-3 minutes', $time);
									$temp_khabar_line_time_close = strtotime('-3 minutes', $timeC);
									if (time() >= $temp_khabar_line_time_open && $gameResult == 'Loading...' && $show_extra_text) {
										echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
									}

									if (time() >= $temp_khabar_line_time_close && strlen($gameResult) < 10 && $show_extra_text) {
										//echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
									}
									?>
									<button onclick="window.location.reload()">Refresh</button>
									<?php
									//show sabse tez sabpe pehle
									$temp_future_time = strtotime('+15 minutes', trim($temp_last_updated_result));
									if ($temp_future_time >= time() && $temp_last_updated_result != '' && $show_extra_text) {
										echo '<span class="e-sprg">सबसे तेज सबसे सही</span>';
									}
									if ($free_game_pass_text_to_print != '') {
										echo '<p>' . preg_replace('/(<br>)+$/', '', $free_game_pass_text_to_print) . '</p>';
									}
									?>
									<!-- </div> -->
								<?php
								}
							} else {
							}
						} elseif ($day == 'sun') {
						} elseif ($day == 'sat') {
							if ($time1 >= $starttimeC && $time1 <= $endtimeC) {
								if ($updateDate == date('d-m-Y')) { ?>
									<!-- <div> -->
									<span class="h8"><?php echo $gameName ?></span>
									<span class="h9"><?php echo $gameResult ?></span>
									<?php
									//show Khabar line text
									$temp_khabar_line_time_open = strtotime('-3 minutes', $time);
									$temp_khabar_line_time_close = strtotime('-3 minutes', $timeC);
									if (time() >= $temp_khabar_line_time_open && $gameResult == 'Loading...' && $show_extra_text) {
										echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
									}

									if (time() >= $temp_khabar_line_time_close && strlen($gameResult) < 10 && $show_extra_text) {
										//echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
									}
									?>
									<button onclick="window.location.reload()">Refresh</button>
									<?php
									//show sabse tez sabpe pehle
									$temp_future_time = strtotime('+15 minutes', trim($temp_last_updated_result));
									if ($temp_future_time >= time() && $temp_last_updated_result != '' && $show_extra_text) {
										echo '<span class="e-sprg">सबसे तेज सबसे सही</span>';
									}
									if ($free_game_pass_text_to_print != '') {
										echo '<p>' . preg_replace('/(<br>)+$/', '', $free_game_pass_text_to_print) . '</p>';
									}
									?>
									<!-- </div> -->
								<?php
								}
							}
						} else {
							if ($time1 >= $startTime && $time1 <= $endTime) {
								if ($updateDate != date('d-m-Y')) {
									$gameResult = 'Loading...';
								}
								?>
								<!-- <div> -->
								<span class="h8"><?php echo $gameName ?></span>
								<span class="h9"><?php echo $gameResult ?></span>
								<?php
								//show Khabar line text
								$temp_khabar_line_time_open = strtotime('-3 minutes', $time);
								$temp_khabar_line_time_close = strtotime('-3 minutes', $timeC);
								if (time() >= $temp_khabar_line_time_open && $gameResult == 'Loading...' && $show_extra_text) {
									echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
								}

								if (time() >= $temp_khabar_line_time_close && strlen($gameResult) < 10 && $show_extra_text) {
									//echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
								}
								?>
								<button onclick="window.location.reload()">Refresh</button>
								<?php
								//show sabse tez sabpe pehle
								$temp_future_time = strtotime('+15 minutes', trim($temp_last_updated_result));
								if ($temp_future_time >= time() && $temp_last_updated_result != '' && $show_extra_text) {
									echo '<span class="e-sprg">सबसे तेज सबसे सही</span>';
								}
								if ($free_game_pass_text_to_print != '') {
									echo '<p>' . preg_replace('/(<br>)+$/', '', $free_game_pass_text_to_print) . '</p>';
								}
								?>
								<!-- </div> -->
								<?php } elseif ($time1 >= $starttimeC && $time1 <= $endtimeC) {
								if ($updateDate == date('d-m-Y')) { ?>
									<!-- <div> -->
									<span class="h8"><?php echo $gameName ?></span>
									<span class="h9"><?php echo $gameResult ?></span>
									<?php
									//show Khabar line text
									$temp_khabar_line_time_open = strtotime('-3 minutes', $time);
									$temp_khabar_line_time_close = strtotime('-3 minutes', $timeC);
									if (time() >= $temp_khabar_line_time_open && $gameResult == 'Loading...' && $show_extra_text) {
										echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
									}

									if (time() >= $temp_khabar_line_time_close && strlen($gameResult) < 10 && $show_extra_text) {
										//echo '<span class="e-sprg"> खबर लाइन चालू है  </span>';
									}
									?>
									<button onclick="window.location.reload()">Refresh</button>
									<?php
									//show sabse tez sabpe pehle
									$temp_future_time = strtotime('+15 minutes', trim($temp_last_updated_result));
									if ($temp_future_time >= time() && $temp_last_updated_result != '' && $show_extra_text) {
										echo '<span class="e-sprg">सबसे तेज सबसे सही</span>';
									}
									if ($free_game_pass_text_to_print != '') {
										echo '<p>' . preg_replace('/(<br>)+$/', '', $free_game_pass_text_to_print) . '</p>';
									}
									?>
									<!-- </div> -->
				<?php
								}
							}
						}
					}
				} //end else of status check

				?>

			<?php } //end foreach 
			?>
			<br>
	</div>
</div>