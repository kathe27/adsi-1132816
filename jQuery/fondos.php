<?php  
	if ($_POST):
		
		$bg = $_POST['bg'];

		if ($bg == 'bg1'): 
			echo 'url(imgs/bgc1.jpg)';
		endif;
		if ($bg == 'bg2'): 
			echo 'url(imgs/bgc2.jpg)';
		endif;
		if ($bg == 'bg3'): 
			echo 'url(imgs/bgc3.jpeg)';
		endif;

	endif;
	