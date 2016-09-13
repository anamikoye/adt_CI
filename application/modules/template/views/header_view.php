<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Bootstrap tags that must come first before any other tag -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- about this site -->
<meta name="description" content="A web platform that helps to expose the touring experiences.">
<meta name="keywords" content="HTML, CSS, XML, XHTML, JavaScript">
<meta name="author" content="Star Sarifi Tours">
<meta name="Resource-type" content="Document">
<link rel="shortcut icon" type="img/x-icon" href="<?php echo base_url() .'assets/template/favicon/favicon.png'?>"/>
<!-- #GOOGLE FONT -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">
<!-- #APP SCREEN / ICONS -->
<link rel="apple-touch-icon" href="<?php echo base_url().'img/splash/sptouch-icon-iphone.png'?>">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url().'assets/template/img/splash/touch-icon-ipad.png'?>">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url().'assets/template/img/splash/touch-icon-iphone-retina.png'?>">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url().'assets/template/img/splash/touch-icon-ipad-retina.png'?>">
<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<!-- Startup image for web apps -->
<link rel="apple-touch-startup-image" href="<?php echo base_url().'assets/template/img/splash/ipad-landscape.png'?>" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
<link rel="apple-touch-startup-image" href="<?php echo base_url().'assets/template/img/splash/ipad-portrait.png'?>" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
<link rel="apple-touch-startup-image" href="<?php echo base_url().'assets/template/img/splash/iphone.png'?>" media="screen and (max-device-width: 320px)">


 	<?php      	
		$this->load->view('utils/dynamic_files');//..............this is to autoload the dynamic css and js files
	?>
<!-- Here is the title of Each page Module -->
<title>webADT | <?php echo $title; ?></title>

</head>

<body class="smart-style-0">
