<?php

require('functions.php');

session_start();

$table_name = 'rj04maha_courses';

$uid = $_SESSION['uid'];

$content = '<form action="insert_course.php" method="post">
    <div class="form-group">
        <label for="sub">Subject</label>
        <input type="text" class="form-control" id="sub" name="sub" value="">
    </div>
    <div class="form-group">
        <label for="num">Number</label>
        <input type="text" class="form-control" id="num" name="num" value="">
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="">
    </div>
    <div class="form-group">
        <label for="descr">Description</label>
        <input type="text" class="form-control" id="descr" name="descr" value="">
    </div>
    <div class="form-group">
        <label for="year">Year</label>
        <input type="text" class="form-control" id="year" name="year" value="">
    </div>
    <div class="form-group">
        <label for="sem">Semester</label>
        <input type="text" class="form-control" id="sem" name="sem" value="">
    <input type="submit">
</form>';



	$valid = false;
    
    $fields = '';
    $values = '';
    
    foreach ($_POST as $field=>$value){
        if ($value != ''){
            $valid = true;
            $fields .= $field.',';
            $values .= "'$value',";
        
        }
        else {
	        $valid = false;
	        break;
        }
     }


     $fields .= 'uid';
     $values .= $uid;


    if ($valid){
        $db = db_connect();
        $sql = "INSERT INTO $table_name ($fields) VALUES ($values)";
        $output = $db->query($sql);
        $db->close();
        $content = "Course inserted";
    }

    make_basic_page('Insert Course', $content);
    
?>



