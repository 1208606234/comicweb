<?php 
	$num = "";
	for($i=0;$i<4;$i++)
	{
		$num.=rand(0,9);
	}
	$im = imagecreate(100,30);
	$blue = ImageColorAllocate($im,0,0,255);
	$white = ImageColorAllocate($im,255,255,255);
	imagestring($im,5,30,6,$num,$white);
	header('content-type:image/gif');
	imagegif($im);
 ?>