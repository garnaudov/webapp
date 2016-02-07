    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<div class="row">
            <div class="navigation_bar navbar navbar-dafault" id="nav">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive_menu">
                            <span class="sr-only">Открий навигация</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="responsive_menu">
                        <div class="home navigation_bar nav navbar-nav" >
                            <ul class="nav navbar-nav">
                                <a href="index.php"><li class="home navigation_bar" id="home_but" >Начало</li></a>
                                <a href="#"><li class="navigation_bar" id="for_site">За сайта</li></a>
                                <a href="gallery.php"><li class="navigation_bar" id="categories">Галерия</li></a>
								<?php if(isUserLoggedIn()){ 
									if ($loggedInUser->checkPermission(array(2))){ ?>
										<a href="upload.php"><li class="navigation_bar" id="categories">Качи</li></a>
								<?php }} ?>
                                <!--a href="login.php"><li class="navigation_bar" id="sign_in">Влезте</li></a>
                                <a href="register.php"><li class="navigation_bar" id="sign_up">Регистрирайте се</li></a-->
								<a href="logout.php"><li class="navigation_bar" id="sign_up">Излез</li></a>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>