<?php
$con = mysqli_connect("localhost", "root", "", "book_store");
if ($con) {
    $sno=$_GET["sno"];
    $ct=$_GET["ct"];
    $pri=$_GET["pri"];
    $buy=$_GET["buy"];
    $title=$_GET["title"];
    $date=$_GET["date"];
    if( $buy!=""){
         $nct=$ct-$buy;
    $sql="UPDATE `bdetails` SET Count='$nct' WHERE `Sno`='$sno'";
    $que=$con->query($sql);
    if($que){
        // echo "Data updated";
        echo "<script> alert('Thank you for buying a book! We hope you enjoy it.');
        window.location.href='table.php'</script>";
    }
    else{
        echo "Data not updated";
    }
     $cost=$buy*$pri;
    $sql1="INSERT INTO `sales`( `Date`, `Title`, `Quantity`, `Cost`) VALUES ('$date','$title','$buy','$cost')";
    $que1=$con->query($sql1);
    if($que1){
        echo "cost";
    }
    else{
        echo "not";
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
