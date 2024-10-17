


<?php 
if (isset($_POST['submit']))
{
   $name=$_POST['fn'];
   $mobilenumber=$_POST['mobilenum'];
   $emailid=$_POST['email'];
   $nm1=$_POST['mobile_num'];
   
}
?>
<!-- Email  -->
<?php 



    //mobile sms :
    $fields = array(
    "sender_id" => "FSTSMS",
    "message" => " Mr "  .  "$name".  " is Looking for Plasma / Oxygen / funds " . " \nConatct Deatils is : = ".$mobilenumber,
    "language" => "english",
    "route" => "p",
    "numbers" => "$nm1",
    "flash" => "0"
    );
   
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($fields),
        CURLOPT_HTTPHEADER => array(
            "authorization: X3N0kbIBjCe9dOxfQKrzvWJUt4scla1n8Yhw2GD5mM67AFiVRyBdD3TXxRvEj9lbW4KpMhwa0gGH1yVk",
            "accept: */*",
            "cache-control: no-cache",
            "content-type: application/json"
        ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err)
    {
        echo"<html>";
        echo"   <head>";
        echo"  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6' crossorigin='anonymous'>";
        echo"   </head>";
        echo"   <body>";
        echo"   <div class='container-fluid'>";
        
        echo " <div class='alert alert-primary' role='alert'>
       Incorrect Mobile Number</div>";
        echo "<br>";
      //  echo "<a href='".$link_address."'>Re-Verify</a>";
        echo"   </body>";
        echo"</html>";
        
    } else
    {
        echo"<html>";
        echo"   <head>";
        echo"  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6' crossorigin='anonymous'>";
        echo"   </head>";
        echo"   <body>";
        echo"   <div class='container-fluid'>";
        
        echo " <div class='alert alert-primary' role='alert'>
        Message Successfully Sent.</div>";
        echo "<br>";
        header("refresh:2;url=HomePage.php");
        
        echo"   </body>";
        echo"</html>";
        
    }



?>
