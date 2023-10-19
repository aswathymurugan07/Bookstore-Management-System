<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
    <style>
    .nav-link{color: black;font-weight: 700;}
    .navbar{height:4.5pc;}
    .text1
    {   position: absolute;
        top: 12pc;color:rgb(29, 136, 136);
        left: 5pc;font-size:40px;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 600;
    }
    .text2
    {   position: absolute;
        top: 16pc;
        left: 5pc;font-size:30px;
        color:rgb(29, 136, 136);
        font-family:Arial, Helvetica, sans-serif;
        font-weight: 600;
    }
    .text3
    {   position: relative;
        top: 3pc;
        left: 8pc;font-size:30px;
        font-family:Arial, Helvetica, sans-serif;
        font-weight: 600;
    }
    .text4{
        position: relative;
        top: 3pc;
        left: 8pc;font-size:15px;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-weight: 500;color:rgb(29, 136, 136);
    }
    .text5{
        position: absolute;top:37pc;
        left: 43pc;font-size:18px;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-weight: 200;color:rgb(79, 74, 74);
    }
    .brand1{
        position:absolute;left:200px;
        top:25px;font-weight: 800;
        color:rgb(29, 136, 136);
    }
    .brand
    {
        position:relative;
        top:7px;left:10px;
        font-weight: 800;
    }
    .col{
      background-color: rgb(29, 136, 136);
    }

</style>
  </head>

  <body>

    <nav class="navbar-fixed-top navbar-inverse col">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">BOOKSMART</a>
        </div>

        <!--/.navbar-collapse -->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right ">
              <!-- link to publiser_list.php -->
              <li><a href="publisher_list.php"><span class="glyphicon glyphicon-paperclip"></span>&nbsp; Publisher</a></li>
              <!-- link to books.php -->
              <li><a href="books.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Books</a></li>
              <!-- link to contacts.php -->
              <li><a href="contact.php"><span class="glyphicon glyphicon-bookmark"></span>&nbsp; Feedback</a></li>
              <!-- link to shopping cart -->
              <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; My Cart</a></li>
              <li><a href="login.html"><span class="glyphicon glyphicon-user"></span>&nbsp; Login</a></li>
              <li><a href="admin.php"><span class="glyphicon"></span>&nbsp; Admin </a></li>
            </ul>
        </div>
      </div>
    </nav>
    <?php
      if(isset($title) && $title == "Index") {
    ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
   
    <div><img src="https://img.freepik.com/free-photo/creative-composition-world-book-day_23-2148883765.jpg" height="500" width="100%">
    <h1 class="text1">The more that you read, </h1>
    <h2 class="text2">the more things you will know.</h2>
    <a href="#learn"><button type="button" class="btn btn-primary" style="position:absolute;left:5pc;top:20pc;padding:10px;font-size:14px;">
    Learn More</button></a>
   </div>
   <div class="container mx-4 py-5">
     <p id="learn" class="text4">ABOUT US</p>
     <h5 class="text3">Books are a uniquely<br> portable magic. </h5>
     <p class="text5">There are many communities made specifically for book lovers of any possible<br> 
      genre, whether to buy, browse, or talk about the books that have impacted your<br>
      life.Most of these sites let you get involved in active conversation<br><br>Whether you're looking for a textbook, a comic book, a romance, or a<br>
       cookbook, the chances are very good that you'll find it with one of the book<br>
        websites listed below.Whatever you're looking for, there's a good chance<br> you'll be able to find it here.<br>
       </p>
           
   </div><br><br><br><br><br><br>
   
      </div><br><br><br>

    <?php } ?>

    <div class="container" id="main">