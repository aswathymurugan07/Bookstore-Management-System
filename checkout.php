<?php
    // the shopping cart needs sessions, to start one
    /*
        Array of session(
            cart => array (
                book_isbn (get from $_GET['book_isbn']) => number of books
            ),
            items => 0,
            total_price => '0.00'
        )
    */
    session_start();
    require_once "./functions/database_functions.php";
    // print out header here
    $title = "Checking out";
    require "./template/header.php";

    if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
?>
    <table class="table">
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
            <?php
                foreach($_SESSION['cart'] as $isbn => $qty){
                    $conn = db_connect();
                    $book = mysqli_fetch_assoc(getBookByIsbn($conn, $isbn));
            ?>
        <tr>
            <td><?php echo $book['book_title'] . " by " . $book['book_author']; ?></td>
            <td><?php echo "$" . $book['book_price']; ?></td>
            <td><?php echo $qty; ?></td>
            <td><?php echo "$" . $qty * $book['book_price']; ?></td>
        </tr>
        <?php } ?>
        <tr>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th><?php echo $_SESSION['total_items']; ?></th>
            <th><?php echo "$" . $_SESSION['total_price']; ?></th>
        </tr>
    </table>
    <form method="post" action="purchase.php" class="form-horizontal">
        <?php if(isset($_SESSION['err']) && $_SESSION['err'] == 1){ ?>
            <p class="text-danger">All fields have to be filled</p>
            <?php } ?>
            <div  style="margin-left:-300px">
        <div class="form-group">
            <label for="name" class="control-label col-md-4">Name: </label>
            <div class="col-md-4">
                <input type="text" name="name" class="col-md-7" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="address" class="control-label col-md-4">Address: </label>
            <div class="col-md-4">
                <input type="text" name="address" class="col-md-7" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="city" class="control-label col-md-4">City: </label>
            <div class="col-md-4">
                <input type="text" name="city" class="col-md-7" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="zip_code" class="control-label col-md-4">Contact: </label>
            <div class="col-md-4">
                <input type="text" name="zip_code" class="col-md-7" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="country" class="control-label col-md-4">Country: </label>
            <div class="col-md-4">
                <input type="text" name="country" class="col-md-7" class="form-control">
            </div>
        </div>
        </div><br>
        <div class="form-group">
            <input type="submit" style="margin-left:270px" name="submit" value="Purchase" class="btn btn-success">
        </div>
    </form>
    <img style="float:right;margin-top:-300px" src="https://ashmagautam.files.wordpress.com/2013/11/mcj038257400001.jpg" height="300px" width="500px">
    <p style="font-size:14px;color:red;font-family:cursive;margin-left:150px" class="lead">*Please click Purchase to confirm your purchase.</p>
<?php
    } else {
        echo "<p class=\"text-warning\">Your cart is empty! Please make sure you add some books in it!</p>";
    }
    if(isset($conn)){ mysqli_close($conn); }
    
?>