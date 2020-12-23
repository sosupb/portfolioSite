<?php 

    include_once $_SERVER['DOCUMENT_ROOT'] . "/presentation/utility/header.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
	<head>
		<link rel="preconnect" href="https://fonts.gstatic.com"/>
		<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@578&amp;display=swap" rel="stylesheet"/>
		<link href="/resources/default/css/styles.css" type="text/css" rel="stylesheet"/>
		
		<title><?=$title?></title>
	</head>
	<body>
	
		<div class="header">
  			<a href="<?echo $navService->moveToHomePage();?>" class="logo">Marc D. Teixeira</a>
  			<div class="header-right">
    			<a href="<?echo $navService->moveToHomePage();?>" class="" >Home</a>
    			<a href="<?echo $navService->moveToContactPage();?>" class="" >Contact</a>
    			<a href="<?echo $navService->moveToAboutMePage();?>" class="" >About Me</a>
  			</div>
		</div>