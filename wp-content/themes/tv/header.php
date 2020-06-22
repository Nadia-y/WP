<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
   
	<title><?php bloginfo('description'); ?></title>
	
	<?php wp_head(); ?>
</head>

<body>
  <header class="header" id="header">
   <div class="wrapper">
     <div class="container">
      <div class="row">
        <div class="col-lg-4">
            <a class="navbar-brand" href="#"> 
              <img class="mobilapp" src="<?php the_field('mobilapp') ?>" alt=''>
            </a>
        </div>
        <div class=" col-lg-3 ml-auto menu__link">
            <a class="link" href="tel:<?php the_field('phone') ?>"><?php the_field('phone') ?>  <span> <img class="logo__a"src="https://www.a1.by/medias/sys_master/images/hdc/hab/8977035460638.svg" class="img" data-mobile-src="https://www.a1.by/medias/sys_master/images/h35/h85/8977036181534.svg" data-desktop-src="https://www.a1.by/medias/sys_master/images/hdc/hab/8977035460638.svg" alt="" title=""></span> </a>
            <a class="link" href="tel:<?php the_field('phone') ?>"><?php the_field('phone') ?>  <span>  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Слой_1" x="0px" y="0px" viewBox="0 334.9 595.3 162" enable-background="new 0 334.9 595.3 162" xml:space="preserve" class="mdl-js" height="40px"   width="35px">
            <path fill="#E30613" d="M52.9,342.4c-11,0-24.2,10.6-34.9,28.4C6.6,389.4,0,412.2,0,432.1c0,29.2,16.3,58.5,52.9,58.5  s52.9-29.3,52.9-58.5c0-19.9-6.6-42.8-18-61.2C77.1,353,63.9,342.4,52.9,342.4z M338.6,386h37v96.5h39.7V386h37v-35.7H338.6V386  L338.6,386z M537.1,386h58.2v-35.7h-58.2c-53.5,0-82,26.6-82,66.2s28.6,66.2,82,66.2h58.2v-35.8h-58.2c-24.8,0-40.9-8.9-40.9-30.4  S512.3,386,537.1,386z M257.9,350.4l-21.2,79l-21.2-79h-70.1v132.4h39.7V375l28.9,107.6h45.5l28.9-107.7v107.7h39.7V350.4H257.9z"/>
            </svg> </a>
        </div>
       </div>
     </div>
    </div>
   <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container wrap" style="background: #212529c4;" >  
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse header__menu" id="navbarSupportedContent">

            <?php
			  wp_nav_menu(
				array(
          'theme_location' => 'menu-1',
         
          'container'       => false,
     
          'menu_class'      => 'navbar-nav m-auto',
         
          
				)
			);
			?>

                  <!-- <ul class="navbar-nav m-auto">
                      <li class="nav-item active menu">
                        <a class="nav-link active " style="color:white" href="#activities__title">Триколор тв </a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" style="color:white" href="#ntv">нтв плюс</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" style="color:white" href="#">цифровое тв</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " style="color:white" href="#">оплата тв</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " style="color:white" href="#">3G/4G интернет</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " style="color:white"  href="#contacts">контакты</a>
                      </li>
                  </ul> -->
            </div>
          </div> 
        </nav>
        <div class="container">
          <div class="row">
            <div class="col-lg-12" >
              <div class="sputnic__tv-title">
				<h1> <?php the_field('sputnic__tv-title') ?> </h1>
              <div class="sputnic__tv-offer">
                <img class="sputnic__tv-img"  src="assets/img/ntv-plus.png" alt=""> 
                <img class="sputnic__tv-img"  src="assets/img/tricolor.jpg" alt=""> 
                <img class="sputnic__tv-img"  src="assets/img/Belarus-24.jpg" alt=""> 
              </div>
                  <p class="title__text"> <?php the_field('title__text') ?> </p>
              </div>
            </div>
        </div>
      </div>
    </header>