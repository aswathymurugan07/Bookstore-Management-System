<?php
    session_start();
    require_once "./functions/admin.php";
    $title = "List customers";
    require_once "./template/header.php";
    require_once "./functions/database_functions.php";
    $conn = db_connect();
    $result1 = getAll($conn);
    $sql = "SELECT * FROM customers";
    $result = mysqli_query($conn, $sql);
?>
    <body style="background-color:lavender">
    <a href="admin_signout.php" style="margin-left:1100px"class="btn btn-primary">Sign out!</a>
    <h2 style="color:maroon;font-family:Times New Roman;font-size:24px"><b><center>CUSTOMER DETAILS</center></b></h2><br>
    <?php

        if (mysqli_num_rows($result) > 0) {
    ?>
    <table class="table" style="margin-top: 20px">
        <tr>
            <th>Customer_id</th>
            <th>Name</th>
            <th>Address</th>
            <th>City</th>
            <th>Contact</th>
            <th>Country</th>
            
        </tr>
        <?php
    $i=0;
    while($row = mysqli_fetch_assoc($result)) {
       ?>
        <tr>
            <td><?php echo $row['customerid']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['zip_code']; ?></td>
            <td><?php echo $row['country']; ?></td>
            
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