<?php
$con = mysqli_connect("localhost", "root", "", "book_store");

if ($con) {
    
    $title = $_GET["title"];
    $aut = $_GET["aut"];
    $pri = $_GET["pri"];
    $ct = $_GET["ct"];

    
    if ($title != "" && $aut != "" && $pri != "" && $ct != "") {
       
        $sql = "SELECT * FROM `bdetails` WHERE `Title` = '$title'";
        $que = $con->query($sql);

        if ($que->num_rows > 0) {
            echo "<script> alert('Book Already Exists');
            window.location.href='table.php'</script>";
        } else {
            $sql = "INSERT INTO `bdetails`(`Title`, `Author`, `Price`, `Count`) 
                    VALUES ('$title','$aut','$pri','$ct')";
            $que = $con->query($sql);

            if ($que) {
                echo "<script> alert('Added Successfully');
                window.location.href='table.php'</script>";
            } else {
                echo "Not inserted";
            }
        }
    } else {
        echo "Details are empty";
    }
} else {
    echo "Connection not successful";
}
?>
