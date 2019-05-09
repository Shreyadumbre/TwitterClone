<?php

session_start();

$link = mysqli_connect("shareddb-k.hosting.stackcp.net", "twitter-39374f67", "bkxj4lnfhz", "twitter-39374f67");

if(mysqli_connect_errno()){
    
    print_r(mysqli_connect_error());
    exit();
}

if($_GET['function'] == "logout"){
    
    session_unset();
}

function displayTweets($type){
    
    global $link;
    
    if($type == 'public'){
        
        $whereClause = "";
        
    }
    
    $query = "select * from tweets ".$whereClause." order by `datetime` desc limit 10";
    
    $result = mysqli_query($link, $query);
    
    if(mysqli_num_rows($result) == 0){
        
        echo "No Tweets to display";
    }else{
        
        while($row = mysqli_fetch_assoc($result)){
            
            echo $row['tweets'];
        }
        
    }
}

?>



