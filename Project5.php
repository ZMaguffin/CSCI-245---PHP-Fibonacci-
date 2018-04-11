<!DOCTYPE html>
<html>
	<head>
		<title>Zack Maguffin</title>
	</head>
	
	<body>
		<p>
			<?php
			$fiboResult = array();
			$fiboResult[0] = 1;
			$fiboResult[1] = 1;
			for ($count = 1; $count <= 20; $count++){
			?>
				<p>The Fibonacci number at position <?= $count ?> is <?= $fiboResult[$count - 1]?> <br> </p>
			<?	
			$n = $count + 1;
			$fiboResult[$n] = $fiboResult[$n - 1] + $fiboResult[$n - 2];
			}	
			?>
		</p>
	</body>
</html>