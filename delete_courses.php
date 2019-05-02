<?php

require('functions.php');

$table_name = 'rj04maha_courses';
$cid = $_GET['cid'];
$sql = "DELETE FROM $table_name WHERE cid='$cid'";
run_query($sql);
echo $sql;

/*
$page_name = 'Delete Course';
$link_to = 'manage_courses.php';
	
session_start();

if (isset($_GET['cid'])) {
    $cid = $_GET['cid'];
    $_SESSION['cid'] = $cid;
}
else 
    $cid = $_SESSION['cid'];
    
if ($cid){
    $sql = "DELETE FROM $table_name WHERE cid='$cid'";
    run_query($sql);
    $content .= '
        <h2>'.$page_name.'</h2>
        <div>'.$sql.'</div>
        ';
}

$content .= '<p><a class="btn btn-primary" href="'.$link_to.'">Go to list of courses</a></p>';
    
//make_basic_page($page_name, $content);
*/



?>