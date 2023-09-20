<?php
session_start();
?>

<html>
<head>
<body>

	
	<?php
		echo 'セッション破棄しました';
		
		$_SESSION[] = [];
		
		if (isset($_COOKIE['PHPSESSID'])) {
			
			setcookie('PHPSESSID', '', time() - 1800, '/');
		}
		
		session_destroy();
		
		echo 'セッション';
		echo '<pre>'
		var_dump($_SESSION);
		echo '</pre>'
			
		echo 'Cookie';
		echo '<pre>'
		var_dump($_COOKIE);
		echo '</pre>'
	?>
</body>
</head>
</html>