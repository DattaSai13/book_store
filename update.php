<?php
$con = mysqli_connect("localhost", "root", "", "book_store");
if ($con) {
    $sno=$_GET["sno"];
    $title=$_GET["title"];
    $aut=$_GET["aut"]; 
    $pri=$_GET["pri"];
    $ct=$_GET["ct"];
    if($title!="" && $aut!="" && $pri!="" && $ct!=""){
     
    $sql="UPDATE `bdetails` SET `Title`='$title',`Author`='$aut',`Price`='$pri',Count='$ct' WHERE `Sno`='$sno'";

    $que=$con->query($sql);
    if($que){
        // echo "Data updated";
        echo "<script> alert('Updated Successfully');
        window.location.href='table.php'</script>";
    }
    else{
        echo "Data not updated";
    }
} 
else{
    echo "details are empty";
}
}
else {
    echo "Connection not successful: ";
}
?>
