<?php
if(str_contains($_SERVER['HTTP_HOST'], 'www')){
	header('Location: http://http://13.200.172.176/');
   }else{
	   header("Location: ./Views/index.php");
   }
   exit;
?>
