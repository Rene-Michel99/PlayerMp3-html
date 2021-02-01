<?php
	$files = scandir("Music");

	$musics = array();
	$j = 0;
	for($i = 0; $i<count($files); $i++)
	{
		if(strpos($files[$i],".mp3") != null)
		{
			$musics[$j] = $files[$i];
			$j++;
		}
	}
	echo json_encode($musics);
?>