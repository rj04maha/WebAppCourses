<?php
	
require('functions.php');

session_start();
session_destroy();

$content = '<a class="btn btn-primary"href="login.php">Login</a>';


make_basic_page("Logout", $content);	
	
?>