<?php 
session_start();
$current =  date("Y/m/d h:i");
$expire = date("Y/m/d h:i",strtotime('+60 seconds', time()));
$get_link = $_GET['link'];
print_r($_SESSION);
//unset($_SESSION['Download_User']);

if(isset($_SESSION['Download_User']['ip']) && in_array($get_link, $_SESSION['Download_User']['click']['link'])){
	foreach ($_SESSION['Download_User']['click']['dl_exprtime'] as $key => $value) {
		if($current >= $_SESSION['Download_User']['click']['dl_exprtime'][$key]){
			unset($_SESSION['Download_User']['click']['dl_exprtime'][$key]);
			unset($_SESSION['Download_User']['click']['link'][$key]);
			
		}

	}
	$header = 'Location: ' . $_SERVER['HTTP_REFERER'];
}else{
	$_SESSION['Download_User']['ip'] = $_SERVER['REMOTE_ADDR'];
	$_SESSION['Download_User']['dl_time'] = $current;
	$_SESSION['Download_User']['click']['dl_exprtime'][] =  $expire;
	$_SESSION['Download_User']['click']['link'][] =  $get_link;
	$header = "Location: http://".$get_link;
}
//echo $header;
 header($header);
 die();
?>