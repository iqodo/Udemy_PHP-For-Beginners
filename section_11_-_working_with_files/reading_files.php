<?php 

	$file = "example.txt";

	if($handle = fopen($file, 'r')) {

		//echo $content =  fread($handle, 10); // Each bite equals a character
		echo $content =  fread($handle, filesize($file));
		fclose($handle);

	} else {

		Echo "The application was not able to write on the file";

	}

?>