<?php 

/**
 * This is a partial file to create the header for each page. $title variable must be set prior to set page title.
 */

include_once $_SERVER['DOCUMENT_ROOT'] . "/presentation/utility/header.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
	<head>
	
		<!-- Main font on header -->
		<link rel="preconnect" href="https://fonts.gstatic.com"/>
		<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@578&amp;display=swap" rel="stylesheet"/>

		<!-- styles for the site -->		
		<link href="/resources/default/css/styles.css" type="text/css" rel="stylesheet"/>
		
		<!-- styles for the profile card -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
		
		<title>
			<?php
    			if(isset($title)) {
    			    echo $title;
    			} else {
    			    echo "Marc's Site";    
    			}
			?>
		</title>
	</head>
	<body>
	
		<div class="header">
  			<a href="<?echo $navService->moveToHomePage();?>" class="logo">Marc D. Teixeira</a>
  			<div class="header-right">
  				<a href="<?echo $navService->moveToHomePage();?>" class="<?echo $navService->getButtonClass("/index.php");?>" >Home</a>
    			<a href="<?echo $navService->moveToProjectsPage();?>" class="<?echo $navService->getButtonClass("/ProjectsPage.php");?>" >Projects</a>
    			<a href="<?echo $navService->moveToContactPage();?>" class="<?echo $navService->getButtonClass("/ContactPage.php");?>" >Contact</a>
    			<a href="<?echo $navService->moveToAboutPage();?>" class="<?echo $navService->getButtonClass("/AboutPage.php");?>" >About</a>
  			</div>
		</div>