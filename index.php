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
	
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/agency.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">

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
            <div class="description" id="short_description">Бързо. Лесно. Интуитивно.<br/></div>
            <div class="description" id="main_description">
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
        <div id="categories-tile"> 
            <div class="categories_text"><i class="fa fa-th" id="icon-categories"></i>Категории</div>
        </div>   
            <div class="main-categories">
                
                <a href="pop-ups/business/index.html"><div class="all-categories" id="business">
                    <img class="categories-logos" id="business-logo" src="Categories-logos/logo-business.png" alt="Business logo">
                    <div class="logo-texts">Бизнес</div>
                </div></a>            
                <a href="pop-ups/comunication/index.html"><div class="all-categories" id="socials">
                    <img class="categories-logos" id="comunication-logo" src="Categories-logos/comunication-logo.png" alt="Comunication logo">
                    <div class="logo-texts">Социални мрежи и комуникация</div>
                </div>
                <a href="pop-ups/useful-apps/index.html"><div class="all-categories" id="useful">
                    <img class="categories-logos" id="useful-logo" src="Categories-logos/useful-logo.png" alt="Useful apps logo">
                    <div class="logo-texts">Полезни приложения</div>
                </div></a>
                <a href="pop-ups/funny-apps/index.html"><div class="all-categories" id="entertainment">
                    <img class="categories-logos" id="funny-logo" src="Categories-logos/funny-logo.png" alt="Funny apps logo">
                    <div class="logo-texts">Забавление</div>
                </div></a>
                <a href="pop-ups/photography/index.html"><div class="all-categories" id="photography">
                    <img class="categories-logos" id="photography-logo" src="Categories-logos/photography-logo.png" alt="Photography logo">
                    <div class="logo-texts">Снимки и фотография</div>
                </div></a>
                <a href="pop-ups/video/index.html"><div class="all-categories" id="video">
                    <img class="categories-logos" id="video-logo" src="Categories-logos/video-logo.png" alt="Video logo">
                    <div class="logo-texts">Видео и клипове</div>
                </div></a>            
                <a href="pop-ups/education-apps/index.html"><div class="all-categories" id="education">
                    <img class="categories-logos" id="education-logo" src="Categories-logos/education-logo.png" alt="Education apps logo">
                    <div class="logo-texts">Образователни</div>
                </div></a>
                <a href="pop-ups/productivity/index.html"><div class="all-categories" id="productivity">
                    <img class="categories-logos" id="productivity-logo" src="Categories-logos/productivity-logo.png" alt="Productivity logo">
                    <div class="logo-texts">Производителност</div>
                </div></a>
                <a href="#"><div class="all-categories" id="music">
                    <img class="categories-logos" id="music-logo" src="Categories-logos/music-logo.png" alt="Music logo">
                    <div class="logo-texts">Музика</div>
                </div></a>
                <a href="pop-ups/heath-fitness-apps/index.html"><div class="all-categories" id="health">
                    <img class="categories-logos" id="sport-logo" src="Categories-logos/sport-logo.png" alt="Sport apps logo">
                    <div class="logo-texts">Здраве и фитнес</div>
                </div></a>
                <a href="#"><div class="all-categories" id="personalization">
                    <img class="categories-logos" id="personalization-logo" src="Categories-logos/personalization-logo.png" alt="Personalization logo">
                    <div class="logo-texts">Персонализиране</div>
                </div></a>            
                <a href="#"><div class="all-categories" id="navigation">
                    <img class="categories-logos" id="GPS-logo" src="Categories-logos/GPS-logo.png" alt="Navigation logo">
                    <div class="logo-texts">Навигация и GPS</div>
                </div></a>
        </div>
    </div>
        
  <div class="for-me-container">
        <div class="for-me-tile"> 
            <div class="categories_text"><i class="fa fa-user" id="icon-categories"></i>За мен</div>
        </div>
    <div class="">
      <h3 class="section-subheading text-muted inf-text">Информация за учебния ми прогрес и любими занимания</h3>
            
      </div>
      <div class="row text-center for-me-div">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-home fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Начално училище</h4>
                    <p class="text-muted">I-IV клас завърших с отличие</p>
                    <div class="effect-container">
                        <img class="school img-style row1 img-rounded" src="school-img/sec-school.png">
                    </div>
                   
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-university fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Основно училище</h4>
                    <p class="text-muted">В момента уча в СОУ "Васил Левски"</p>
                     <div class="meffect-container">
                        <img class="school img-style row1 img-rounded " src="school-img/sec-school.png">
                    </div>
                
                
      </div>
          <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">В свободното си време</h4>
                    <p class="text-muted inter">Интересувам се от фотография, технологии и иновативни джаджи.</p>
                     <div class="meffect-container">
                        <img class="school img-style row1 img-rounded " src="school-img/smart-photo.JPG">
                    </div>
                
                
      </div>
        </div>

                <footer>
        <div class="container foot">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Georgi Arnaudov</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/Georgi_96_" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/bgapp1" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/profile/edit?trk=nav_responsive_sub_nav_edit_profile" target="_blank"><i class="fa fa-linkedin"></i></a>
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

