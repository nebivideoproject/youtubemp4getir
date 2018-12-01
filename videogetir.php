<?php
require_once "LittleYoutube.php";
use LittleYoutube\LittleYoutube;

if($_GET['url'])
{
    $url = $_GET['url'];
	$video = LittleYoutube::video($url);
	$veri = $video->data['video'];
	$yonlendir = $veri['encoded']['0']['url'];
	header("Location: $yonlendir");
}
else
{
	header("Location: index.php");
}
?>