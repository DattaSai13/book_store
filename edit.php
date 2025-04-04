<?php
  $con=mysqli_connect("localhost","root","","book_store");
  if($con){
    $sno=$_GET["sno"];
    $sql="SELECT * from bdetails WHERE sno='$sno'";
    $que=$con->query($sql);
    if($que->num_rows>0){
        while($row=$que->fetch_assoc()){
            $title=$row["Title"];
            $aut=$row["Author"];
            $pri=$row["Price"];
            $ct=$row["Count"];
        }
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
  />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />
    <style>
       *{
        .cont{
        width: 100vw;
        height: 100vh;
        background-image: url(bg2.png);
        /* background-size: cover; */

      }
      .main{
        width: 30%;
        height: 60%;
        background-color: rgba(219, 215, 215, 0.804);
        /* border: 2px solid gray; */
        box-shadow: 0 0 20px black;
        border-radius: 10px;
        padding: 10px;
        font-size: 25px;
      }
      input{
        margin: 5px;
        padding: 5px;
        border: 1px solid black;
        border-radius: 5px;
      }
      .nav{
            width: 100vw;
            height: auto;
            background-color: rgba(241, 243, 235, 0.867);
            box-shadow: 0 0 10px gray;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            left: 0;
        }
        ul{
            display: flex;
            gap: 20px;
            list-style: none;
            /* padding: 0 20px; */
        }
        a{
            color: rgb(2, 6, 21);
            text-decoration: none;
            font-size: 20px;
        }
    </style>

</head>
<body>
<div class="nav">
    <h1><i>Enchanted Pages</i></h1>
    <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="table.php">Table</a></li>
        <li><a href="history.html">History</a></li>
        <!-- <li>Edit</li> -->
    </ul>
</div>
    <div class="cont d-flex justify-content-center align-items-center">
        <div class="main p-2 d-flex justify-content-center align-items-center flex-column">
            <h1 class="text-danger ">Edit Details</h1>
            <form action="update.php" method="get"  class="d-flex flex-column py-2 ">
                <input type="number" name="sno" id="sno" value="<?php echo $sno; ?>" hidden>
                <input type="text" name="title" id="title" value="<?php echo $title; ?>" placeholder="Enter title">
                <input type="text" name="aut" id="aut" value="<?php echo $aut; ?>" placeholder="Enter author">
                <input type="number" name="pri" id="pri" value="<?php echo $pri; ?>" placeholder="Enter price">
                <input type="number" name="ct" id="ct" value="<?php echo $ct; ?>" placeholder="Enter count">
                <!-- <input type="submit" value="Submit"> -->
                <input class="btn btn-outline-info fw-bold" type="submit" value="Update">
            </form>
        </div>
    </div>

    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
  ></script>
</body>
</html>

