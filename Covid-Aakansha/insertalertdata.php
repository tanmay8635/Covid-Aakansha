
<?php
if (isset($_POST['submit']))
{
    
    $name=$_POST['fn'];
    $want_have=$_POST['slt'];
    $what=$_POST['what'];
    $where=$_POST['where'];
    $mobile_num=$_POST['mobilenum'];
    $useremail=$_POST['email'];
    include 'Config.php';
    $sql = "INSERT INTO alert (NAME,want_have,what,place,mobnum,email )VALUES ('$name','$want_have','$what','$where','$mobile_num','$useremail')";
    
    if ($conn->query($sql) === TRUE)
    {
       include 'modaltrue.php';
    }
    else
    {
        include 'modalfalse.php';
    }
    
    $conn->close();
}
?>