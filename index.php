<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header.php");

?>
<!DOCTYPE html>
<html lang="bg">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>
	
    <!-- Links -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    
        <script src='js/wow.min.js'></script>

    <script>
        new WOW().init();
    </script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
        <?php include("left-nav.php"); ?>
    </div>
<!--
    <video id="home-video" loop autoplay muted>
        <source src="video.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
-->
    <div class="home-page">
        <div id="myCarousel" class="carousel slide car1" data-ride="carousel">
      <!-- Wrapper for slides -->
       <div class="carousel-inner" role="listbox">
        <div class="item active carousel-1">
          <img src="carousel-img/img-smartphone.jpg" alt="Smartphone-image1" class="img-smarphone-1" width="100%">
        </div>
        <div class="item">
          <img src="carousel-img/img-smartphone2.jpg" alt="Smartphone-image2">
          </div>

        <div class="item">
          <img src="carousel-img/img-smartphone3.jpg" alt="Smartphone-image3">
        </div>
        </div>
      </div>
      
      <div class="description" id="description_all">
            <div class="description fadeInDown animated " id="short_description">Бързо. Лесно. Интуитивно.<br/></div>
            <div class="description wow fadeInDown animated " data-wwow-delay="900ms" id="main_description"
                 style="-webkit-animation-duration: 3s;-moz-animation-duration: 3s;animation-duration: 3s;">
                 
                      Добре дошли в BGapp- проект чрез който да изберете най-полезните,<br/>
                     най-интуитивните и функционални приложения.<br/>
                      В страниците ще откриете мобилен софтуер от всякакъв тип- от приложения,<br/>
                      създадени за забавление до тези, без които не можем да си представим ежедневието.<br/>
                      Всички те са подредени в 12 категории за да намерите всичко, от което се нуждаете бързо и лесно.<br/>
                      Селекцията ни от приложения е с активно българско присъствие, защото смятаме,<br/>
                      трудът на нашите разработчици не бива да остава неоценен.
            </div>
            </div>
        </div>
    </div>
        
    <div class="categories-container">
        <div id="categories-tile wow fadeInDown animated"> 
            <div class="categories_text"><i class="fa fa-th" id="icon-categories"></i>Категории</div>
        </div>   
            <div class="main-categories">
                
                <a href="pop-ups/business/index.html"><div class="all-categories" id="business">
                    <img class="categories-logos wow fadeInDown animated" id="business-logo" src="Categories-logos/logo-business.png" alt="Business logo">
                    <div class="logo-texts wow fadeInDown animated">Бизнес</div>
                </div></a>            
                <a href="pop-ups/comunication/index.html"><div class="all-categories" id="socials">
                    <img class="categories-logos wow fadeInDown animated" id="comunication-logo" src="Categories-logos/comunication-logo.png" alt="Comunication logo">
                    <div class="logo-texts wow fadeInDown animated">Социални мрежи и комуникация</div>
                </div>
                <a href="pop-ups/useful-apps/index.html"><div class="all-categories" id="useful">
                    <img class="categories-logos wow fadeInDown animated" id="useful-logo" src="Categories-logos/useful-logo.png" alt="Useful apps logo">
                    <div class="logo-texts wow fadeInDown animated">Полезни приложения</div>
                </div></a>
                <a href="pop-ups/funny-apps/index.html"><div class="all-categories" id="entertainment">
                    <img class="categories-logos wow fadeInDown animated" id="funny-logo" src="Categories-logos/funny-logo.png" alt="Funny apps logo">
                    <div class="logo-texts wow fadeInDown animated">Забавление</div>
                </div></a>
                <a href="pop-ups/photography/index.html"><div class="all-categories" id="photography">
                    <img class="categories-logos wow fadeInDown animated" id="photography-logo" src="Categories-logos/photography-logo.png" alt="Photography logo">
                    <div class="logo-texts wow fadeInDown animated ">Снимки и фотография</div>
                </div></a>
                <a href="pop-ups/video/index.html"><div class="all-categories" id="video">
                    <img class="categories-logos wow fadeInDown animated" id="video-logo" src="Categories-logos/video-logo.png" alt="Video logo">
                    <div class="logo-texts wow fadeInDown animated">Видео и клипове</div>
                </div></a>            
                <a href="pop-ups/education-apps/index.html"><div class="all-categories" id="education">
                    <img class="categories-logos wow fadeInDown animated" id="education-logo" src="Categories-logos/education-logo.png" alt="Education apps logo">
                    <div class="logo-texts wow fadeInDown animated">Образователни</div>
                </div></a>
                <a href="pop-ups/productivity/index.html"><div class="all-categories" id="productivity">
                    <img class="categories-logos wow fadeInDown animated" id="productivity-logo" src="Categories-logos/productivity-logo.png" alt="Productivity logo">
                    <div class="logo-texts wow fadeInDown animated">Производителност</div>
                </div></a>
                <a href="#"><div class="all-categories" id="music">
                    <img class="categories-logos wow fadeInDown animated" id="music-logo" src="Categories-logos/music-logo.png" alt="Music logo">
                    <div class="logo-texts wow fadeInDown animated">Музика</div>
                </div></a>
                <a href="pop-ups/heath-fitness-apps/index.html"><div class="all-categories" id="health">
                    <img class="categories-logos wow fadeInDown animated" id="sport-logo" src="Categories-logos/sport-logo.png" alt="Sport apps logo">
                    <div class="logo-texts wow fadeInDown animated">Здраве и фитнес</div>
                </div></a>
                <a href="#"><div class="all-categories" id="personalization">
                    <img class="categories-logos wow fadeInDown animated" id="personalization-logo" src="Categories-logos/personalization-logo.png" alt="Personalization logo">
                    <div class="logo-texts wow fadeInDown animated">Персонализиране</div>
                </div></a>            
                <a href="#"><div class="all-categories" id="navigation">
                    <img class="categories-logos wow fadeInDown animated" id="GPS-logo" src="Categories-logos/GPS-logo.png" alt="Navigation logo">
                    <div class="logo-texts wow fadeInDown animated">Навигация и GPS</div>
                </div></a>
        </div>
    </div>
        
  <div class="for-me-container">
        <div class="for-me-tile"> 
            <div class="categories_text"><i class="fa fa-user" id="icon-categories"></i>За мен</div>
        </div>
    <div class="">
      <h3 class="section-subheading text-muted inf-text wow fadeInDown animated">Информация за учебния ми прогрес и любими занимания</h3>
            
      </div>
      <div class="row text-center for-me-div">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary wow fadeInDown animated"></i>
                        <i class="fa fa-home fa-stack-1x fa-inverse wow fadeInDown animated"></i>
                    </span>
                    <h4 class="service-heading wow fadeInDown animated">Начално училище</h4>
                    <p class="text-muted wow fadeInDown animated">I-IV клас завърших с отличие</p>
                    <div class="effect-container">
                        <img class=" wow fadeInDown animated school img-style row1 img-rounded" src="school-img/sec-school.png">
                    </div>
                   
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary wow fadeInDown animated"></i>
                        <i class="fa fa-university fa-stack-1x fa-inverse wow fadeInDown animated"></i>
                    </span>
                    <h4 class="service-heading wow fadeInDown animated">Основно училище</h4>
                    <p class="text-muted wow fadeInDown animated">В момента уча в СОУ "Васил Левски"</p>
                     <div class="meffect-container wow fadeInDown animated">
                        <img class=" wow fadeInDown animated school img-style row1 img-rounded " src="school-img/sec-school.png">
                    </div>
                
                
      </div>
          <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary wow fadeInDown animated"></i>
                        <i class="fa fa-smile-o fa-stack-1x fa-inverse wow fadeInDown animated"></i>
                    </span>
                    <h4 class="service-heading wow fadeInDown animated">В свободното си време</h4>
                    <p class="text-muted inter wow fadeInDown animated">Интересувам се от фотография, технологии и иновативни джаджи.</p>
                     <div class="meffect-container wow fadeInDown animated">
                        <img class="school wow fadeInDown animated img-style row1 img-rounded " src="school-img/smart-photo.JPG">
                    </div>
                
                
      </div>
        </div>

                <footer>
        <div class="container foot">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright wow wobble animated">Copyright &copy; Georgi Arnaudov</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/Georgi_96_" target="_blank"><i class="fa fa-twitter wow wobble animated"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/bgapp1" target="_blank"><i class="fa fa-facebook wow wobble animated"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/profile/edit?trk=nav_responsive_sub_nav_edit_profile" target="_blank"><i class="fa fa-linkedin wow wobble animated"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p>Използвани източници:</p>
                    <ul class="list-inline">
                        <li><a href="http://hicomm.bg/" target="_blank">HiComm</a>
                        </li>
                        <li><a href="http://hicomm.bg/magazine/smartapps_archive" target="_blank">Списания "Smart Apps"</a>
                        </li></br>
                    <li><a href="https://play.google.com/store" target="_blank">Google Play Store</a>
                        </li>
                        <li><a href="https://www.microsoft.com/en-us/windows/apps-and-games" target="_blank">Winodws Store</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>   
      
      
          

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>

