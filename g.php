<?php
$a = 5;
if ($a > 0) {
	while (true) {
		$a = $a-1;
		echo "\r   $a\n";

		sleep(1);
		if ($a == 0) {
			break;
		}
	}
}


?>
