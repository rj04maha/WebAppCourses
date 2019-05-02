<?php
	
	require('functions.php');
	
	$table_name = $_GET['table_name'];
	
	if ($table_name) {
		$result = run_query("DROP TABLE $table_name");
		if ($result === TRUE) 
	    $content = "Table <b>$table_name</b> was dropped successfully";
		else 
			$content = "Table <b>$table_name</b> was NOT created successfully";			
	}
	else {
		$content = '<b>Usage format:</b> <pre>'.basename(__FILE__).'?table_name=</pre>';
	}
	make_basic_page("Table $table_name", $content);	
	
?>