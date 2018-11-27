<?php
/*
$db_username = 'root';
$db_password = '';
$db_name = 'bolt2';
*/
$db_username = 'root';
$db_password = '';
$db_name = 'bolt';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
$base_path_products = 'Admin/pages/product/upload/';

function ViToUsd($input){
$usd_rate = '33';
$vid_rate = '740';
$output=($input/$vid_rate)/$usd_rate;
$output=number_format($output,2);
	return $output;
}
?>