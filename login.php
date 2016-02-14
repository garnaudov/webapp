<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}

//Prevent the user visiting the logged in page if he/she is already logged in
if(isUserLoggedIn()) { header("Location: account.php"); die(); }

//Forms posted
if(!empty($_POST))
{
	$errors = array();
	$username = sanitize(trim($_POST["username"]));
	$password = trim($_POST["password"]);
	
	//Perform some validation
	//Feel free to edit / change as required
	if($username == "")
	{
		$errors[] = lang("ACCOUNT_SPECIFY_USERNAME");
	}
	if($password == "")
	{
		$errors[] = lang("ACCOUNT_SPECIFY_PASSWORD");
	}

	if(count($errors) == 0)
	{
		//A security note here, never tell the user which credential was incorrect
		if(!usernameExists($username))
		{
			$errors[] = lang("ACCOUNT_USER_OR_PASS_INVALID");
		}
		else
		{
			$userdetails = fetchUserDetails($username);
			//See if the user's account is activated
			if($userdetails["active"]==0)
			{
				$errors[] = lang("ACCOUNT_INACTIVE");
			}
			else
			{
				//Hash the password and use the salt from the database to compare the password.
				$entered_pass = generateHash($password,$userdetails["password"]);
				
				if($entered_pass != $userdetails["password"])
				{
					//Again, we know the password is at fault here, but lets not give away the combination incase of someone bruteforcing
					$errors[] = lang("ACCOUNT_USER_OR_PASS_INVALID");
				}
				else
				{
					//Passwords match! we're good to go'
					
					//Construct a new logged in user object
					//Transfer some db data to the session object
					$loggedInUser = new loggedInUser();
					$loggedInUser->email = $userdetails["email"];
					$loggedInUser->user_id = $userdetails["id"];
					$loggedInUser->hash_pw = $userdetails["password"];
					$loggedInUser->title = $userdetails["title"];
					$loggedInUser->displayname = $userdetails["display_name"];
					$loggedInUser->username = $userdetails["user_name"];
					
					//Update last sign in
					$loggedInUser->updateLastSignIn();
					$_SESSION["userCakeUser"] = $loggedInUser;
					
					//Redirect to user account page
					header("Location: account.php");
					die();
				}
			}
		}
	}
}

require_once("models/header.php");




echo resultBlock($errors,$successes);

?>
<!DOCTYPE html>
<html lang="bg">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Влезте</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="login-assets/login-css/bootstrap.min.css" rel="stylesheet">
            <link href="css/animate.css" rel="stylesheet">
    
        <script src='js/wow.min.js'></script>

    <script>
        new WOW().init();
    </script>
        
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="login-css/styles.css" rel="stylesheet">
	</head>

<div id="loginModal" class="modal show"  role="dialog" aria-hidden="true">
    <img src="backimg.jpg" class="img-responsive" id="back-img">
<?php include("left-nav.php"); ?>
  <div class="modal-dialog">
  <div class="modal-content login-container wow fadeInDown animated">
      <div class="modal-header">
          <h1 class="text-center" id="login-text">Влезте</h1>
      </div>
      <div class="modal-body">
          <?php echo "<form class='form col-md-12 center-block' name='login' action='".$_SERVER['PHP_SELF']."' method='post'>" ?>
            <div class="form-group">
              <input type='text' name='username' class="form-control input-lg" placeholder="Име">
            </div>
            <div class="form-group">
              <input type='password' name='password' class="form-control input-lg" placeholder="Парола">
            </div>
            <div class="form-group">
              <button  type='submit' value='Login' class="btn btn-primary btn-lg btn-block submit">Влезте</button>
              <span class="pull-right register-text"><a href="register.php">Регистритрайте се</a></span>
              <span class="pull-left register-text"><a href="#">Забравена парола</a></span>
              <span class="pull-left register-text" id="activate-mail"><a href="#">Препрати активиращ и-мейл</a></span>
            </div>
          </form>
      </div>
  </div>
  </div>
</div>
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="login-java/bootstrap.min.js"></script>
	</body>
</html>

