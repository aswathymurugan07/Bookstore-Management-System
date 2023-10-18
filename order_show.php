<?php
    session_start();
    require_once "./functions/admin.php";
    $title = "List customers";
    require_once "./template/header.php";
    require_once "./functions/database_functions.php";
    $conn = db_connect();
    $result1 = getAll($conn);
    $sql = "SELECT * FROM orders";
    $result = mysqli_query($conn, $sql);
?>
    <body style="background-color:lavender">
    <a href="admin_signout.php" style="margin-left:1100px"class="btn btn-primary">Sign out!</a>
    <h2 style="color:maroon;font-family:Times New Roman;font-size:24px"><b><center>ORDER DETAILS</center></b></h2><br>
    <?php

        if (mysqli_num_rows($result) > 0) {
    ?>
    <table class="table" style="margin-top: 20px">
        <tr>
            <th>Order_id</th>
            <th>Customer_id</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Customer_name</th>
            <th>Customer_Address</th>
            
            
        </tr>
        <?php
    $i=0;
    while($row = mysqli_fetch_assoc($result)) {
       ?>
        <tr>
            <td><?php echo $row['orderid']; ?></td>
            <td><?php echo $row['customerid']; ?></td>
            <td><?php echo $row['amount']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['ship_name']; ?></td>
            <td><?php echo $row['ship_address']; ?></td>
            
            
        </tr>
        <?php
    $i++;
    }
    echo "</table>";
} else {
    echo "0 results";
}
mysqli_close($conn);

?>
    </table>
        </body>