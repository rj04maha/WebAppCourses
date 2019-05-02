<?php
	
	require('functions.php');
	
    $table_name = $_GET['table_name'];

	$db = db_connect();
    
    $sql = "SHOW FULL COLUMNS FROM $table_name";
    $cols = $db->query($sql);

    $out = '<h1>Columns of '.$table_name.'</h1>';

    while($col = $cols->fetch_assoc()) { 
        $out .= '<ol>';
        foreach ($col as $key=>$value) {
            $out .= '<li><b>'.$key.':</b> '.$value.'</li>';
        }
        $out .= '</ol>';
    }
	
    make_basic_page($table_name, $out, $style=null);
?>



