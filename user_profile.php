<?php
	
	require('functions.php');

	session_start();

    if (isset($_GET['uid'])){
        $uid = $_GET['uid'];
    }
    else{
        $uid = $_SESSION['uid'];
    }


    // returns a pointer to the output of the query
    $result = run_query("SELECT * FROM rj04maha_users WHERE uid='$uid'");
    


    $user_data = $result->fetch_assoc();
    $content = '<h1>'.$user_data['first'].' '.$user_data['last'].'</h1>';

    $content .= '
    
    <h2>'.$user_data['major'].'</h2>
    <h3>'.$user_data['col'].'</h3>
    <p>Start year: '.$user_data['fyear'].'<br /> 
    Class of: '.$user_data['gyear'].'<br /> 
    Credits: '.$user_data['cred'].'</p>
    ';
    
    $content .= make_card("Biography",$user_data['bio']);
    $out = show_table('rj04maha_courses', $uid);
    $content .= make_card("Courses", $out);
    
    make_basic_page("Profile", $content, null);	
	
?>



