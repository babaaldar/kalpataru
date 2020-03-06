<?php


session_start();
//Destroy entire session
session_destroy();


$helper = array_keys($_SESSION);
foreach ($helper as $key) {
    unset($_SESSION[$key]);
}


echo '
	<script>
	window.location.href = ("./index.php");		
	</script>
 
	';
?>
