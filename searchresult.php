<?php include('server.php') ?>
<html>

<meta http-equiv="Content-Type" content="text/php; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="css/myCss.css"> <!-- linked myCss file -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="myScript.js"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="ckeditor/ckeditor.js"></script>
        
    <title>
        Your blogs</title>
</head>

<body><?php
if(isset($_SESSION['username'])){
    
  }else{
    header("location:index.php");
  }
        
        ?>
    <!-- loading screen-->
    <div id="loadscreen">

        <div class="loading">
        </div>
    </div><!-- loading screen -->
    <!-- editor -->
  <!-- editor ends -->
    <div id="topbar">
        <!-- topbar for search and title -->
        <nav class="navbar navbar-expand-xl navbar-dark fixed-top" style="background-color:black;height:55pt;">
    <a class="navbar_brand" href="index.php" id="headerfont">
      <font>WordBlocks</font>
    </a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color:white;outline:none;">
      <img src="images/menu.png" style="height:15pt;">
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" style="background-color:black;z-index:10;margin-top:;">
      <ul class="navbar-nav mr-auto" style="position:relative;left:50pt;width:50%;">
        <li class="nav-item active">
          <a class="nav-link custom-link" href="./userpage.php">Home <span class="sr-only">(current)</span></a>
        </li>   

      </ul>
      <form method="POST" action="searchresult.php" class="form-inline my-2 my-lg-0" style="margin-left:50pt;margin-right:50pt;">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search_field">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search_button">Search</button>
      </form>
      <ul class="navbar-nav navbar-right" id="options-position" style="margin-top: 10px;">
        <li class="nav-item" style="margin-bottom:6pt;">
        <a class="nav-link custom-link" href="userdetails.php"><i><b><?php echo $_SESSION['username'];?></b></i></a>
         </li>
      </ul>
      <ul class="navbar-nav navbar-right" id="options-position" style="margin-top: 10px;">
        <li class="nav-item" style="margin-bottom:6pt;"><form method="post" action="userpage.php">
        <input  type="submit" class="nav-link custom-link" style="background:none;border:none;" name="logout" value="Logout"></form>
      </div>
         
        </li>
      </ul>
    </div>
  </nav>
<center><div id="pagetag">Search Results</div></center>
<div class="feedcontainer" id="blogbox">
  <!-- <div class="blog">
      <div class="blog_title">
        10 Most Awesome Projects Built with Vue.JS
      </div>
      <div class="blog_details">2019-05-24 &middot; <b>athn</b> &middot; <span class="category">#vue.js<span></div>
      <div class="content">
        <p>Vue.JS is a progressive JavaScript Framework, probably the easiest to learn there is. For the last few years it has been gaining popularity and it still does. Let’s check out some projects that use vue.js and then you can say for yourself if it is cool or not.
        Task.al is a free mobile and web app that helps you keep track of all your tasks. With a simple intuitive design, Task.al enables you to organize your life and never again forget about tasks.
        </p>
      </div>
      <div class="blog_options">
          <img class="likes_image" src="./images/like.png" onclick="alert('hello');"><span class="likes"> 400</span>
          <img class="likes_image" style="float: right;margin-left:10px;" src="./images/trash.png" onclick="alert('hello');">
          <img class="likes_image" style="float: right;" src="./images/edit_blog.png" name = "edit_blog">
      </div>
    </div> -->
  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="myScript.js"></script>
<script src="ckeditor/ckeditor.js"></script>

<script>
 
</script>


</body>

</html>