<?php
	
require('functions_database.php');
	
/* -----------------------------------------------------------------------
	 These are the global variables
----------------------------------------------------------------------- */
$website_name = 'CSIS-390 Project 3';
$author = 'Author Name';

$default_pages = array(	
	'login.php' => 'Login',
	'insert_user.php' => 'Join',
	'show_users.php' => 'Users');
								
$user_pages = array(	
	'user_profile.php' => 'Profile',
	'update_user.php' => 'Edit',
	'manage_courses.php' => 'Manage Courses',
	'insert_course.php' => 'Insert Course',
	'logout.php' => 'Logout');								
								
$admin_pages = array(	
	'manage_users.php' => 'Manage users',
	'admin_manage_courses.php' => 'Manage courses',
    'show_users.php' => 'Users',
	'show_table_data.php?table_name=rj04maha_courses' => 'Show courses',
	'show_table_columns.php?table_name=rj04maha_users' => 'Columns users',
	'show_table_columns.php?table_name=rj04maha_courses' => 'Columns courses',
	'logout.php' => 'Logout');						


/* -----------------------------------------------------------------------
	 Select menu
----------------------------------------------------------------------- */
function select_menu() {
	global $default_pages;
	global $user_pages;
	global $admin_pages;		
	
	session_start();
	if ($_SESSION['admin'])
		$pages = $admin_pages;
	elseif ($_SESSION['uid']) 
		$pages = $user_pages;
	else
		$pages = $default_pages;
		
  return $pages;
}


/* ------------------------------------------------------------------------------------------------------
	 Echos a basic web page with a navbar in the header, a Bootstrap main container and a custom footer
------------------------------------------------------------------------------------------------------ */
function make_basic_page($page_name, $content, $style=null) {
	global $website_name;
	global $author;
	
	$pages = select_menu();
		
	echo 	make_top($website_name, $page_name, $style).'
				<header>
					'.make_navbar($pages, $website_name, $page_name).'
				</header>		
				<main class="container">
					'.$content.'
				</main>
				<footer>
					'.make_footer($pages, $author).'
				</footer>'.
				make_bottom();
}

								
/* -----------------------------------------------------------------------
	 This creates the top of every web page and slices in the
	 website name, page name and optional style, i.e., embedded CSS	 
----------------------------------------------------------------------- */								
function make_top($website_name, $page_name, $style=null) {
	if ($style != null) 
		$style = '<style>'.$style.'</style>';
	
	return '
		<!DOCTYPE html>
		<html lang="en">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>'.$website_name.' - '.$page_name.'</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/custom.css">
		'.$style.'
		<body>
	';	
}


/* -----------------------------------------------------------------------
	 Creates the bottom of every web page to include the bootstrap javascript
----------------------------------------------------------------------- */								
function make_bottom() {
	return '
			<!-- javascript -->
			<script src="js/jquery.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/custom.js"></script>
		</body>
		</html>
	';
}


/* -----------------------------------------------------------------------
	 This creates the nav menu from the pages array and active page name
	 Also, slices the website name into the navbar brand area
----------------------------------------------------------------------- */
function make_navbar($pages, $website_name, $active_page) {
	$menu = '';
	foreach ( $pages as $link => $name ) {
		$active = '';
		if ($active_page == $name) 
			$active = 'active';	
		$menu .= '<a class="nav-item nav-link '.$active.'" href="'.$link.'">'.$name.'</a>';
	}

	return '
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		  <a class="navbar-brand" href=".">'.$website_name.'</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" 
		  				aria-controls="mainnav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="main-nav">
		    <div class="navbar-nav">
		    	'.$menu.'
		    </div>
		  </div>
		</nav>
	';
}


/* -----------------------------------------------------------------------
	 This creates the page footer with links at bottom
----------------------------------------------------------------------- */
function make_footer($pages, $author=null) {
  $menu = ''; 
	foreach ( $pages as $link => $name ) {
		$menu .= '
			<li><a href="'.$link.'">'.$name.'</a></li>';
	}    
	
	return '  
		<footer>
	    <ul>'.$menu.'</ul>
	    <p>
	      &copy; 2019 '.$author.'<br>
	      Built with <a href="https://getbootstrap.com/">Bootstrap 4</a><br>
	      <small>Valid HTML5 + ARIA + SVG 1.1 + MathML 2.0</small>
	    </p>
		</footer>
	';
}


/* --------------------------------------------------------------------------------
	Creates a Bootstrap row with columns that can have four different configuration 
	depending on whether or not side_menu or aside_content are present
-------------------------------------------------------------------------------- */								
function make_main_content($main_article, $side_menu=null, $aside_content=null) {
	// If both side_menu and aside are present
	if ($side_menu && $aside_content) {
		$main_content = '
			<div class="row justify-content-end"> 
				<nav class="col-sm-4 col-lg-3">
					'.$side_menu.'
				</nav>
				<article class="col-sm-8 col-lg-6">
					'.$main_article.'
				</article>
				<aside class="col-sm-4 col-lg-3">
					'.$aside_content.'
				</aside>
			</div>					
		';
	}
	else if ($side_menu) {	  // Side menu only	
		$main_content = '
			<div class="row justify-content-end"> 
				<nav class="col-sm-4 col-lg-3">
					'.$side_menu.'
				</nav>
				<article class="col-sm-8 col-lg-9">
					'.$main_article.'
				</article>
			</div>			
		';
	}
	else if ($aside_content) {		// Aside only
		$main_content = '
			<div class="row justify-content-end"> 
				<article class="col-sm-8 col-lg-9">
					'.$main_article.'
				</article>
				<aside class="col-sm-4 col-lg-3">
					'.$aside_content.'
				</aside>
			</div>			
		';
	}
	else {		// No side menu and no aside
		$main_content = '
			<article>
				'.$main_article.'
			</article>			
		';
	}
	return $main_content;
}


/* -----------------------------------------------------------------------
	 This creates a bootstrap card with the given title, content and
	 background style (primary, success, danger, etc.)
----------------------------------------------------------------------- */
function make_card($title, $content, $style='primary') {
	return '
		<div class="card bg-'.$style.'">
		  <h5 class="card-header text-light">'.$title.'</h5>
		  <div class="card-body bg-light">
		    '.$content.'
		  </div>
		</div>';
}


/* ----------------------------------------------------------------------------
	 This creates a bootstrap list group from the given title, list and style
---------------------------------------------------------------------------- */
function make_listgroup($title, $list, $style='primary') {
	
	$content  = '';
	foreach ($list as $url => $name) {
		$content .= '<a class="list-group-item" href="'.$url.'">'.$name.'</a>';
	}
	
	return '
		<div class="card bg-'.$style.'">
			<h5 class="card-header text-light">'.$title.'</h5>
			<ul class="list-group list-group-flush">
				'.$content.'
			</ul>
		</div>';
}

/* ----------------------------------------------------------------------------
	 Calls the header function to redirect to the specified file name
---------------------------------------------------------------------------- */
function redirect($file_name) {
	header("Location: $file_name");
}
	
?>