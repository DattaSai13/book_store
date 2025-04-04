<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
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
            margin: 0;
            padding: 0;
        }
        .container{
        width: 100vw;
        height: 100vh;
        background-image: url(bg2.png);
        /* background-size: cover; */
 
        }
        table{
            border-collapse: separate;
            border-spacing: 0;
            overflow: hidden;
            /* border: 2px solid blue; */
            /* background-color:transparent; */
            border-radius:10px;
            margin-top:100px;
            /* border-radius: 10px; */
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
<body class="container py-2">
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
    <table border="2" class="table border-secondary">
        <tr align="center" class="table-primary  ">
            <th>Sno</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Count</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Purchase</th>
        </tr>
        <?php
        $con=mysqli_connect("localhost","root","","book_store");
        if($con){
            // echo "connected";
        $sql="SELECT * FROM `bdetails`";
        $que=$con->query($sql);
        if ($que->num_rows > 0) {
            while ($row = $que->fetch_assoc()) {
                echo "<tr align='center'>";
                echo "<td>{$row['Sno']}</td>";
                echo "<td>{$row['Title']}</td>";
                echo "<td>{$row['Author']}</td>";
                echo "<td>{$row['Price']}</td>";
                echo "<td>{$row['Count']}</td>";
                echo "<td><a class='text-info' href='edit.php?sno={$row['Sno']}'> <i class='fa-solid fa-pen-to-square'></i> </a></td>";
                echo "<td><a class='text-danger' href='delete.php?sno={$row['Sno']}' onclick='return dele()' ><i class='fa-solid fa-trash'></i></a></td>";
                echo "<td><a class='text-warning' href='op.php?sno={$row['Sno']}' onclick='return confirmation()' ><i class='fa-solid fa-cart-shopping'></i></a></td>";
                echo "</tr>";
                
            }
        } else {
            echo "<tr><td>No data found</td></tr>";
        }
    }
    else{
        echo "Not connected";
    }
        
        ?>
    </table>
    
    <script>
        function confirmation(){
            return confirm("Are you sure you want to buy this Book?");
        }
        function dele(){
            return confirm("Are your sure you want to delete this book?")
        }
    </script>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
  ></script>
  
</body>
</html>