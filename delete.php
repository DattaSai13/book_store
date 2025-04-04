<?php

$con=mysqli_connect("localhost","root","","book_store");
if($con){
    $sno=$_GET["sno"];
    $sql="DELETE FROM `bdetails` WHERE `Sno`='$sno'";
    $que=$con->query($sql);
    if($que){
        // echo "Deleted successfully";
        echo "<script> alert('Deleted Successfully');
        window.location.href='table.php'</script>";
    }
    else{
        echo "row not deleted";
    }
}
else{
    echo "Connection not Successful";
}