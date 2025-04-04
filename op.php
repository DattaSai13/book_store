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
       .cont{
        width: 100vw;
        height: 100vh;
        background-image: url(https://t4.ftcdn.net/jpg/06/42/33/73/360_F_642337303_RRftmunXi0RBj8rWNQVg88Kj6h4PeslQ.jpg);
        background-size: cover;

      }
      .main{
        width: 40%;
        height: 60%;
        /* background-color: rgba(195, 255, 0, 0.545); */
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
      label{
        font-size: 25px;
        text-shadow: 0 0 1px black;
        
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
        <li><a href="salestable.php">Sales</a></li>
        <li><a href="history.html">History</a></li>
        <!-- <li>Edit</li> -->
    </ul>
</div>
    <div class="cont d-flex justify-content-center align-items-center">
        <div class="main p-2 d-flex justify-content-center align-items-center flex-column">
            <h1 class="text-dark">Book Details</h1>
            <form action="upop.php" method="get"  class="d-flex flex-column py-2 ">
                <label for="title">Title : <?php echo $title; ?></label>
                <label for="aut">Author : <?php echo $aut; ?></label>
                <label for="pri">Price : <?php echo $pri; ?></label>
                <label for="ct">Count : <?php echo $ct; ?></label>
                <input type="hidden" name="sno" value="<?php echo $sno; ?>">
                <input type="hidden" name="ct" value="<?php echo $ct; ?>">
                <input type="hidden" name="title" value="<?php echo $title; ?>">
                <input type="hidden" name="pri" value="<?php echo $pri; ?>">

                <label for="buy">Enter no. of books to buy:
                    <input type="number" name="buy" id="buy" min="1" max="<?php echo $ct; ?>" required>
                </label>
                <label for="date">Enter the date of purchase:
                  <input type="date" name="date" id="date" required>
                </label>
                <input class="btn btn-outline-info fw-bold" type="submit" value="BUY">

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

