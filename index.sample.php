<?php
	error_reporting(E_ERROR);
	ini_set('memory_limit','256M');

	include_once(__DIR__ ."/class/Gis.php");
	include_once(__DIR__ ."/class/Common.php");
	include_once(__DIR__ ."/class/KmlSuperOverlay.php");

	// !! with ending '/'
	define("MAP_SOURCE_ROOT","./mapsources/");
	// !! with ending '/'
	define("URL_BASE","/kmlsuperoverlays/");

	KmlSuperOverlay::controller(array_filter(explode("/",explode(URL_BASE,$_REQUEST['qs'])[1])),URL_BASE);
?>