<?php 
session_start();
?>
<?php 
include 'Config.php';
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-3">
<?php 

$sql = "SELECT name, what, place,mobnum,time FROM alert where want_have='want'";
$sql1 = "SELECT name, what, place,mobnum,time FROM alert where want_have='have'";




$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        
        
        echo "<div class='container' id='myDiv1'>";
        echo "<div class='card bg-danger text-white'>";
        echo"<div class='card-body'>";
        echo "Looking for  :  " . $row["what"]; echo "<br>\n";
        echo "Name  :  " . $row["name"]; echo "<br> \n";
        echo "Place  :  " . $row["place"]; echo "<br> \n";
       // echo "Mobile Number  :  " . $row["mobnum"]; echo "<br> \n";
        
        echo "Time   :  " . $row["time"]; echo "<br> \n";
        $mbn=$row["mobnum"];
        $_SESSION["ph"]=$mbn;
        echo "<div align='right'>";
       include 'imageicon.php';
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "<br>";
        
      
                    
    }
    
   
    $result1 = $conn->query($sql1);
    while($row = $result1->fetch_assoc())
    {
        
        echo "<div class='container'  id='myDiv2'>";
        echo "<div class='card bg-success text-white'>";
        echo"<div class='card-body'>";
        echo "Has  :  " . $row["what"];
        echo "<br> \n";
        echo "Name  :  " . $row["name"];
        echo "<br> \n";
        echo "Place  :  " . $row["place"]; 
        // echo "Mobile Number  :  " . $row["mobnum"]; echo "<br> \n";
        echo "<br> \n";
        echo "Time   :  " . $row["time"];
        echo "<br> \n";
        $mbn1=$row["mobnum"];
        $_SESSION["ph1"]=$mbn1;
        echo "<div align='right'>";
        include 'imageicon1.php';
        echo "</div>";
        echo "</div>"; echo "</div>";
        echo "</div>";
        echo "<br>";
    }
} 
else 
{
    echo "0 results";
}


$conn->close();
?>
</div>

</body>
</html>


