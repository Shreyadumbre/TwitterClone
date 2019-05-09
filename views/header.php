<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="http://shreyadumbre-com.stackstaging.com/views/style.css">
    <title>Hello, world!</title>
  </head>
 
    
    <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Twitter</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="?page=timeline">Your Timeline</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="?page=tweet">Your Tweets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=profile">Public Profiles</a>
      </li>
    </ul>
    <div class="form-inline pull-xs-right">

        <?php if($_SESSION['id']) { ?>
        
        <a class="btn btn-outline-success my-2 my-sm-0" href = "?function=logout" >Logout</a>
        
        <?php } else { ?>
        
      <button class="btn btn-outline-success my-2 my-sm-0"  data-toggle="modal" data-target="#exampleModal" >Login/Sign Up</button>
        
        <?php } ?>
      
    </div>
  </div>
</nav>
    
    
