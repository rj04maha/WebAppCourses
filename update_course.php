<?php
	
require('functions.php');

session_start();

$table_name = 'rj04maha_courses';

$cid = $_GET['cid'];

//$uid = $_SESSION['uid'];
$result = run_query("SELECT * FROM $table_name WHERE cid='$cid'");
$row = $result->fetch_assoc();



$content = '<form action="update_course.php?cid='.$cid.'" method="post">
    <div class="form-group">
        <label for="sub">Subject</label>
        <input type="text" class="form-control" id="sub" name="sub" value="'.$row['sub'].'">
    </div>
    <div class="form-group">
        <label for="num">Number</label>
        <input type="text" class="form-control" id="num" name="num" value="'.$row['num'].'">
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="'.$row['title'].'">
    </div>
    <div class="form-group">
        <label for="descr">Description</label>
        <input type="text" class="form-control" id="descr" name="descr" value="'.$row['descr'].'">
    </div>
    <div class="form-group">
        <label for="year">Year</label>
        <input type="text" class="form-control" id="year" name="year" value="'.$row['year'].'">
    </div>
    <div class="form-group">
        <label for="sem">Semester</label>
        <input type="text" class="form-control" id="sem" name="sem" value="'.$row['sem'].'">
    <input type="submit">
</form>';


    $valid = false;
    
    
    foreach ($_POST as $field=>$value){
        if ($value != ''){
            $valid = true;
			$new_values .= "$field = '$value',";
        
        }
        else {
	        $valid = false;
	        break;
        }
     }


	$new_values = rtrim($new_values,",");
        
    if ($valid){
        $db = db_connect();
        $sql = "UPDATE $table_name SET $new_values WHERE cid='$cid'";
        $output = $db->query($sql);
        $db->close();
        $content = '<p>Course updated</p>';

    }

        
	// fix me later - redirect to login page 
    make_basic_page('Edit Course', $content);
    
?>



