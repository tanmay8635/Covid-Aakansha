
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container p-3 my-3 bg-warning text-black " align="center">
<div class="row">
<div class="col-12">
 <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#myModal">
    Create Alert
  </button>
    <!-- The Modal -->
  <div class="modal " id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="modal-title text-left">Create Alert</h3>
          <button type="button" class="close" data-dismiss="modal">X</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" align="left">
        
        
        <!-- Form -->
         <form action="insertalertdata.php" method="post">
  <div class="form-group">
    <label for="name">Hi, your Name ?</label><br>
    <input type="text" name="fn" class="form-control" placeholder="Enter Name" required>
  </div><br>
  <!-- select option in form -->
  <label for="wanthave">I Want/Have</label>
  <select name="slt"  class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="want">Want</option>
  <option value="have">Have</option>
</select>
<br>
  <div class="form-group">
    <label for="what">What ?</label>
    <input type="text" class="form-control" name="what" placeholder="Plasma/Oxygen/Funds" required >
  </div><br>
  <div class="form-group">
    <label for="where">Where ? </label>
    <input type="text" class="form-control" name="where" placeholder="Need / Supply Location" >
    <h6>Where is donor or seeker from? (Area and City)</h6>
  </div><br>
  <div class="form-group">
    <label for="phone">How to reach you?</label>
    <input type="text" class="form-control" name="mobilenum" placeholder="987654310"  required>
    
  </div><br>
   <div class="form-group">
    <label for="email">Your Email?</label>
    <input type="email" class="form-control" name="email" placeholder="abc@gmail.com"  required>
    
  </div>
<p class="font-weight-light text-muted">
        Your information is safe with us. Your contact will not be shared with anyone. Contact information people who take interest in your alert will be shared with you over sms and email.
        </p>
        <div class=" justify-content-center" align="center">
         <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
   
        </form> 
        </div>
        
      
      </div>
    </div>
  </div>
  
  </div>
</div>
</div>
</body>
</html>