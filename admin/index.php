<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login/');
}
include('../include/db.php');
$query="SELECT * FROM personal_setup,aboutus_setup,basic_setup,admin_users";
$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Admin Panel</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.css" rel="stylesheet">

    <style>
        .oo{
            height: 200px;
        }
        
        .ooo{
            height: 100px;
        }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Hye, <?=$_SESSION['username']?></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="php/logout.php">Logout</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Setup/Edit</span>
          
        </h6>
        
         <!-- <li class="nav-item">
            <a class="nav-link" href="?editseo=true">
              <span data-feather="at-sign"></span>
              Edit SEO
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="?editportfolio=true">
              <span data-feather="archive"></span>
              Edit First Blog
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?edituidesign=true">
              <span data-feather="archive"></span>
              Edit Second Blog
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?editwork=true">
              <span data-feather="archive"></span>
              Edit Third Blog
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?editforthblog=true">
              <span data-feather="archive"></span>
              Edit Forth Blog
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?editevents=true">
              <span data-feather="archive"></span>
              Events
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?editnotification=true">
              <span data-feather="archive"></span>
              Portraits
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?editdocumentary=true">
              <span data-feather="archive"></span>
              Documentary
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?editwedding=true">
              <span data-feather="archive"></span>
              Weddings
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?editprojects=true">
              <span data-feather="archive"></span>
              Projects
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="?editcampaign4=true">
              <span data-feather="archive"></span>
              Add new section campaigns 4
            </a>
          </li> -->
          
          
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Account Settings</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="?editprofile=true">
              <span data-feather="user"></span>
              Edit Profile
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<?php
     if(isset($_GET['editabout'])){
        include('php/about.php');
     }else if(isset($_GET['editportfolio'])){
      include('php/portfolio.php');
     }else if(isset($_GET['edituidesign'])){
      include('php/uidesign.php');
     }else if(isset($_GET['editwork'])){
      include('php/work.php');
     }else if(isset($_GET['editevents'])){
      include('php/events.php');
     }else if(isset($_GET['editnotification'])){
      include('php/notification.php');
     }else if(isset($_GET['editdocumentary'])){
      include('php/documentary.php');
     }else if(isset($_GET['editwedding'])){
      include('php/wedding.php');
     }else if(isset($_GET['editprojects'])){
      include('php/projects.php');
     }else if(isset($_GET['editforthblog'])){
      include('php/forthblog.php');
    
     }else if(isset($_GET['editprofile'])){ ?>
        <h2>Edit Profile</h2>
    <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
      <div class="alert alert-success text-center" role="alert">
  Successfully Updated !
</div>
      <?php
  }  
 } 
?> 
         <form method="post" action="php/uprofile.php">
         <div class="form-row">
             <div class="form-group col-md-6">
    <label for="ptitle">Name</label>
    <input type="text" name="username" value="<?=$data['username']?>" class="form-control" id="ptitle" placeholder="Monu Giri">
  </div>
        <div class="form-group col-md-6">
    <label for="psubtitle">Password</label>
    <input type="text" name="userpass" value="<?=$data['user_pass']?>" class="form-control" id="psubtitle" placeholder="*************">
  </div>
        <div class="form-group col-md-12">
    <label for="psubtitle">Email Id</label>
    <input type="text" name="userid" value="<?=$data['user_id']?>" class="form-control" id="psubtitle" placeholder="admin@admin.com">
  </div>
         </div>
         <input type="submit" name="uprofile" class="btn btn-primary" value="Save Changes">
         </form>
    <?php }else{
         include('php/welcome.php');
     } ?>
     
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="js/dashboard.js"></script></body>
</html>
