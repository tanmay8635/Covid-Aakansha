<?php 
  $nm2=$_SESSION["ph1"];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container text-dark">
   
<button type="button" class="btn btn-primary" aria-hidden="true" data-toggle="modal" data-target="#myModal2">

          <span class="glyphicon glyphicon-hand-left"></span> Ask?
        </button>
        <!-- The Modal -->
  <div class="modal " id="myModal2">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title text-left text-black">Form-Respond</h3>
          <button type="button" class="close" data-dismiss="modal">X</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" align="left">
        
        
        <!-- Form -->
         <form action="ask.php" method="post">
  <div class="form-group">
    <label for="name">Hi, your Name ?</label><br>
    <input type="text" name="fn" class="form-control" placeholder="Enter Name" required>
  </div><br>
  

  <div class="form-group">
    <label for="phone">How to reach you?</label>
    <input type="text" class="form-control" name="mobilenum" placeholder="987654310"  required>
    
  </div><br>
   <div class="form-group">
    <label for="email">Your Email?</label>
    <input type="email" class="form-control" name="email" placeholder="abc@gmail.com"  required>
    
  </div>
     <input type="text"  name="mobile_num1" value="<?php echo $nm2?>" readonly>
  
<p class="font-weight-light text-muted">
Your contact information will be shared with the person        </p>
       <div class=" justify-content-center" align="center">
         <button type="submit" class="btn btn-outline-warning" name="submit">Submit</button>
        </div>
   
        </form> 
        </div>
        
      
      </div>
    </div>
  </div>
    </div>
  </body>
</html>
