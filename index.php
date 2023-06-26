<?php
session_start();
include ("db_config/connect.php");
include ("functions.php");

if(!isset($_SESSION['user_info'])){
    
echo '<script>window.location.href = "https://jobopportunityiul.000webhostapp.com/login.php";</script>';

}

$id=$_SESSION['user_info']['id'];

        $sql = "SELECT * FROM users WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        $row=mysqli_fetch_assoc($result);
        $_SESSION['user_info1']=$row;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xtra Blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ --> 
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    
    <?php
 if(isset($_GET['add']) && $_GET['add']==1)
 {
    ?>
               
               <div class="container">   
    <h2>Add Post</h2>
        
    <form method="POST" action="addpost.php"  enctype='multipart/form-data'>
   
          <div class="row mb-3">
              <div class="col-sm-3">
                  <label for="exp" class="form-label tm-new-badge">Experience Level</label>
              </div>
              <div class="col-sm-9">
                  <input type="text" name="exp" class="form-control" value="" require>
              </div>
          </div>
          <div class="row mb-3">
              <div class="col-sm-3">
                  <label for="title" class="form-label tm-new-badge">JOB Title</label>
              </div>
              <div class="col-sm-9">
                  <input type="text" class="form-control" name="title" value="" require>
              </div>
          </div>
          <div class="row mb-3">
              <div class="col-sm-3">
                  <label for="dis" class="form-label tm-new-badge">Discription</label>
              </div>
              <div class="col-sm-9">
                  <input type="text" name="dis" class="form-control" value="" require>
              </div>
          </div>
          <div class="row mb-3">
              <div class="col-sm-3">
                  <label for="res" class="form-label tm-new-badge">Responsibilities</label>
              </div>
              <div class="col-sm-9">
              <input type="text" class="form-control tm-new-badge" id="address" name="res" value="" require>
              </div>
          </div>
          <div class="row mb-3">
              <div class="col-sm-3">
                  <label for="qua" class="form-label tm-new-badge">Qualification</label>
              </div>
              <div class="col-sm-9">
                  <input type="text" name="qua" class="form-control" value="" require>
              </div>
          </div>
          <div class="row mb-3">
              <div class="col-sm-3">
                  <label for="type" class="form-label tm-new-badge">Job Type</label>
              </div>
              <div class="col-sm-9">
                  <input type="text" name="type" class="form-control" value="" require>
              </div>
          </div>
          <div class="row mb-3">
              <div class="col-sm-3">
                  <label for="place" class="form-label tm-new-badge">Work Place</label>
              </div>
              <div class="col-sm-9">
                  <input type="text" name="place" class="form-control" value="" require>
              </div>
          </div>
          <div class="row mb-3">
              <div class="col-sm-3">
                  <label for="location" class="form-label tm-new-badge">Location</label>
              </div>
              <div class="col-sm-9">
                  <input type="text" name="location" class="form-control" value="" require>
              </div>
          </div>

               
              <button type="submit"  value="Submit">Add Post</button>
             
            </form>
    </div>
<?php
}else{
   
?>
   <header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>
                <h1 class="text-center">JobConnect</h1>
            </div>
            <nav class="tm-nav" id="tm-nav">
                <ul>
                    <li class="tm-nav-item active"><a href="index.php" class="tm-nav-link">
                            <i class="fas fa-home"></i>
                            Home
                        </a></li>
                    <li class="tm-nav-item"><a href="Profile.php" class="tm-nav-link">
                            <i class="fas fa-pen"></i>
                            Profile
                        </a></li>
                    <li class="tm-nav-item"><a href="aboutus.php" class="tm-nav-link">
                            <i class="fas fa-users"></i>
                            About Us
                        </a></li>
                    <li class="tm-nav-item"><a href="index.php" class="tm-nav-link">
                            <i class="far fa-comments"></i>
                            Contact Us
                        </a></li>
                </ul>
            </nav>
           
    </header>
    
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fa fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>
            <?php if($_SESSION['user_info']['admin']==1){
               ?>
               <a href="index.php?add=1" class="btn">
               <span class="tm-new-badge">Add Post</span>

               </a>
         <?php   } ?>
            <!--job opportunities-->
            <div class="row tm-row" id="jobs">
               
    
                
            </div>
              <?php showjobs(); ?><!-- jobs enterd by user-->
            
            <!--navigation between job opportunities-->
            <div class="row tm-row tm-mt-100 tm-mb-75">
                <div class="tm-prev-next-wrapper">
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
                </div>
                <div class="tm-paging-wrapper">
                    <span class="d-inline-block mr-3">Page</span>
                    <nav class="tm-paging-nav d-inline-block">
                        <ul>
                            <li class="tm-paging-item active">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--footer-->
            <footer class="row tm-row">
                <hr class="col-12">
                 <div class="col-md-6 col-12 tm-color-gray">
                    Design: <a rel="nofollow" target="_parent" href="https://templatemo.com" class="tm-external-link">TemplateMo</a>
                </div>
                <div class="col-md-6 col-12 tm-color-gray tm-copyright">
                    Copyright 2020 Xtra Blog Company Co. Ltd.
                </div>
            </footer>
        </main>
    </div>
<?php } ?>
    <!-- <script src="js/templatemo-script.js"></script>


-->
<script src="js/main.js" type="module"></script>
</body>

</html>