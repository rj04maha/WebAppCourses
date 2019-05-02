<?php
	
	require('functions.php');
	$page_name = 'Users';
    

    // returns a pointer to the output of the query
    $result = run_query("SELECT uid, first, last, major, col FROM rj04maha_users");
    


    while($row = $result->fetch_assoc()){
        $list .= 
            '<a href="user_profile.php?uid='.$row['uid'].'"
            class = "list-group-item list-group-item-action"> 
            '.$row['first'].' '.$row['last'].' || Major: '.$row['major'].' || College: '.$row['col'].'
            </a>';
            
    }

    $content .= '
        <h2>Users</h2>
        <div class="list-group">
            '.$list.'
        </div>';
                
    
    
    make_basic_page($page_name, $content, null);	
	
?>



