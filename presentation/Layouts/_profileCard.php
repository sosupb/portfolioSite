<?php
/**
 * This is a partial file to display a profile card on the main page.
 */

//must include library in header <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

?>

<div class="profileCard">
    <img src="<?php echo '/resources/default/img/headShot.jpg';?>" alt="Marc" style="width:100%">
    <h1>Marc Teixeira</h1>
    <p class="profileTitle">Software Engineer, Programmer</p>
    <p style="color: white">Grand Canyon University</p>
    <a href="https://www.twitter.com/sosupb" target="_blank"><i class="fa fa-twitter"></i></a>
    <a href="https://www.linkedin.com/in/marc-teixeira-79ba3aba/" target="_blank"><i class="fa fa-linkedin"></i></a>
    <a href="https://www.instagram.com/teixeirajr.marc/" target="blank"><i class="fa fa-instagram"></i></a>
    <a href="https://www.facebook.com/marc.teixeira.7" target="blank"><i class="fa fa-facebook"></i></a>
    <p class="profileButton">
    	<a href="<?echo $navService->moveToContactPage();?>">Contact</a>
    </p>
</div>



