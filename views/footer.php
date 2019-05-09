<html>
     <script src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<body>
    
    <style>
        .pointer {cursor: pointer;}
        #loginalert{
    
    display: none;
}
    
    </style>
<footer class="footer">
      <div class="container">
        <span class="text-muted">&copy;shreyadumbre</span>
      </div>
    </footer>
    

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="alert alert-danger" id="loginalert"></div>
       <form>
           <input type="hidden" id="login" name="login" value="1">
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label" >Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" id="email"  placeholder="Email Id">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" placeholder="Password">
    </div>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="loginbtn">Login</button>
          <a id="togglelogin" class="pointer">Sign Up</a>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">

        $("#togglelogin").click(function(){
            
           
            if($("#login").val() == "1"){
                
              $("#login").val("0");
              $("#exampleModalLabel").html("Sign Up");
             $("#loginbtn").html("Sign Up");    
                $("#togglelogin").html("Login");
            }
            else{
                
                $("#login").val("1");
              $("#exampleModalLabel").html("Login");
             $("#loginbtn").html("Login");    
                $("#togglelogin").html("Sign Up");
            }
        })
    
    $("#loginbtn").click(function(){
        
        $.ajax({
            
            type: "POST",
            url: "actions.php?action=loginsignup",
            data: "email="+$("#email").val()+ "&password="+$("#password").val()+"&login="+$("#login").val(),
            success: function(result){
                
                if(result == "success"){
                    
                    window.location.assign("http://shreyadumbre-com.stackstaging.com/index.php");
                   
                    
                }else{
                    
                    $("#loginalert").html(result).show();
                }
            }
            
        });
    })


</script>
</body>
    
    </html>