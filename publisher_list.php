<?php
    session_start();
    require_once "./functions/database_functions.php";
    $conn = db_connect();

    $query = "SELECT * FROM publisher ORDER BY publisherid";
    $result = mysqli_query($conn, $query);
    if(!$result){
        echo "Can't retrieve data " . mysqli_error($conn);
        exit;
    }
    if(mysqli_num_rows($result) == 0){
        echo "Empty publisher ! Something wrong! check again";
        exit;
    }

    $title = "List Of Publishers";
    require "./template/header.php";
?>


            <img src="https://images.unsplash.com/photo-1531988042231-d39a9cc12a9a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="d-block" height="650px" width="100%"><br><br>
   <h3 style="color:maroon;font-size:28px;font-family:Monospace">About Publishers:-</h3><br>
            <p style="font-size:20px;font-family:cursive">If an author signs with a publisher, they can expect that publisher to do everything; from copy editing, to media training authors and illustrators, creating marketing materials to promote the book, deciding which retailers to approach to stock the book, and persuading newspaper and magazine editors to run reviews.<br><br>A publisher is a professional who prepares and manages the distribution of books and other materials. Publishers often work with magazines and books, but they can also work with journals and music production.A publisher primarily manages the publication process of books. This task includes working with and overseeing editors, designers and marketers to work on books and collaborate with their authors.
   </p>
            <div style="margin-left:470px">   
    <p class="lead" style="color:maroon;font-size:28px;font-family:cursive">List of Publishers</p>
    <ul>
    <?php 
        while($row = mysqli_fetch_assoc($result)){
            $count = 0; 
            $query = "SELECT publisherid FROM books";
            $result2 = mysqli_query($conn, $query);
            if(!$result2){
                echo "Can't retrieve data " . mysqli_error($conn);
                exit;
            }
            while ($pubInBook = mysqli_fetch_assoc($result2)){
                if($pubInBook['publisherid'] == $row['publisherid']){
                    $count++;
                }
            }
    ?>
        <li>
            <span class="badge"><?php echo $count; ?></span>
            <a style="font-size:20px;font-family:Monospace" href="bookPerPub.php?pubid=<?php echo $row['publisherid']; ?>"><?php echo $row['publisher_name']; ?></a>
        </li>
    <?php } ?>
        <li>
            <a style="font-size:20px;font-family:Monospace" href="books.php">List full of books</a>
        </li>
    </ul>
        </div>
