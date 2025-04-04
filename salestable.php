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
            border-radius:10px;
            margin-top:100px;
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
        <tr align="center" class="table-primary">
            <th>Sno</th>
            <th>Date</th>
            <th>Title</th>
            <th>Quantity</th>
            <th>Cost</th>
        </tr>
        <?php
        $con=mysqli_connect("localhost","root","","book_store");
        if($con){
            // echo "connected";
        $sql="SELECT * FROM `sales` ORDER BY `Date` ASC";
        $que=$con->query($sql);
        if ($que->num_rows > 0) {
            while ($row = $que->fetch_assoc()) {
                echo "<tr align='center'>";
                echo "<td>{$row['Sno']}</td>";
                echo "<td>{$row['Date']}</td>";
                echo "<td>{$row['Title']}</td>";
                echo "<td>{$row['Quantity']}</td>";
                echo "<td>{$row['Cost']}</td>";
                echo "</tr>";
            }
            $sql3 = "SELECT * FROM sales ORDER BY Date ASC";
            $que3 = $con->query($sql3);
            $sql1 = "SELECT SUM(Quantity) AS total_sales FROM sales";
            $que1 = $con->query($sql1);
            $total_sales = 0;
            if ($que1) {
                $row1 = $que1->fetch_assoc();
                $total_sales = $row1['total_sales'];
            }
            
            $sql2 = "SELECT SUM(Cost) AS total_cost FROM sales";
            $que2 = $con->query($sql2);
            $total_cost = 0;
            if ($que2) {
                $row2 = $que2->fetch_assoc();
                $total_cost = $row2['total_cost'];
            }
            
            echo "<tr align='center'>";
            echo "<td colspan='3'><b>Total no.of Sales: $total_sales</b></td>";
            echo "<td colspan='2'><b>Total Cost: $total_cost</b></td>";
            echo "</tr>";
            
        } else {
            echo "<tr><td>No data found</td></tr>";
        }
    }
    else{
        echo "Not connected";
    }
        
        ?>
    </table>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
  ></script>
</body>
</html>