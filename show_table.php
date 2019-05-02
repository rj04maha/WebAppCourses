<?php
	
	require('functions.php');
	
	$db = db_connect();
    
    $sql = "SHOW COLUMNS FROM rj04maha_courses";

    // returns a pointer to the output of the query
    $output = $db->query($sql);

    echo '<table>
            <tr>';
    while($column = $output->fetch_array()){
        //echo 'Column name and data table: <b>'.$column['Field'].'</b>, ';
        //echo $column['Type']. '</br>';
        echo '<th>'.$column['Field'].'</th>';
    }
    echo '</tr>
        </table>';
	
?>



