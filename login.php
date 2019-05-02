<?php
	
require('functions.php');

$this_script = basename(__FILE__);
$page_name = 'Login';
$link_to = 'user_profile.php';
$admin_email = 'rj04maha@siena.edu';

// The content should be a login form
$content = '

	<form class="signin" method="post" action="login.php">
	
	  <label for="email" class="sr-only">Email</label>
	  <input type="text" id="email" name="email" class="form-control" placeholder="Email" required autofocus>
	
	  <label for="pwd" class="sr-only">Password</label>
	  <input type="password" id="pwd" name="pwd" class="form-control" placeholder="Password" required>
	
	  <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
	
	</form>

';

// Here you can add embedded CSS for the login form
$style = '

.signin {
		width: 320px;
	  margin: 30px auto;
	}
	input.form-control  {
		padding: 10px;
		margin-bottom: 10px;	
	}

';


// Process the form if any data was posted
if ($_POST) {
	
	// Here we have to fetch the stored password and uid
    $submitted_pwd = $_POST["pwd"];
    $submitted_email = $_POST["email"];
    
    $result = run_query("SELECT uid, pwd FROM rj04maha_users WHERE email='$submitted_email'");
    $row = $result->fetch_assoc();
    $stored_uid = $row['uid'];
    $stored_pwd = $row['pwd'];
    
	// Check to see if a password was submitted and if if matches the stored password
	if ($submitted_pwd && $submitted_pwd == $stored_pwd) {
		// Start a session
        session_start();
		// Store the uid as a session variable
        $_SESSION['uid'] = $stored_uid;
        if ($submitted_email == $admin_email){
            $_SESSION['admin'] = true;
            $content = '<p>Welcome to admin controls</p>';
        }
        else{
		// Replace the content with a hyperlink to the user's profile
		$content = '<p><a class="btn btn-primary" href="'.$link_to.'">Go to User Profile</a></p>';
        }
	}
}

make_basic_page($page_name, $content, $style);

?>