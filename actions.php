<?php

    include("functions.php");
    if($_GET['action'] == "loginsignup"){
        
        $error = "";
        
        if(!$_POST['email']){
            
            $error = "Please enter an emil adress";
        }
        else if(!$_POST['password']){
            
            $error = "Please enter a password";
        }
        else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        
           $error = "Not a valid email address";
}
        
        if($error != ""){
            echo $error;
            exit();
        }
        
        if($_POST['login'] == "0"){
            
            $query = "SELECT * FROM users WHERE email = '". mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
            
            $result = mysqli_query($link, $query);
            
            if(mysqli_num_rows($result) > 0) {
                $error = "Email ID already exists.";
            }
            
             else{
                 
                 $query = "Insert into users (`email`,`password`) values ('".mysqli_real_escape_string($link, $_POST['email'])."','".mysqli_real_escape_string($link, $_POST['password'])."')";
                 
                 if(mysqli_query($link, $query)){
                     
                     $_SESSION['id'] = mysqli_insert_id($link);
                     
                     $query = "update users set password = '".md5(md5($_SESSION['id']).$_POST['password'])."' where id = ".$_SESSION['id']." limit 1 ";
                     
                     mysqli_query($link,$query);
                     
                     $error = "success";
                     
                     
                 }else{
                     
                      $error = "something wrong";
                 }
                 
             }
        if($error != ""){
            echo $error;
            exit();
        }
            
        }
        
        else{
            
             $query = "SELECT * FROM users WHERE email = '". mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
            
             $result = mysqli_query($link, $query);
            
            $row = mysqli_fetch_assoc($result);
                
                if($row['password'] == md5(md5($row['id']).$_POST['password'])){
                    
                    $error = "success";
                    
                    $_SESSION['id'] = $row['id'];
                    
                }else{
                    
                    $error =  "Cannot find the username/password. Please try again.";
                }
            
            if($error != ""){
            echo $error;
            exit();
        }
            
        }
        
        
        
    }


?>