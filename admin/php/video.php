 <h2>Edit Video Section</h2>
         <!-- <?php
         //if(isset($_GET['msg'])){
             
  //if($_GET['msg']=='updated'){
      ?>
      <div class="alert alert-success text-center" role="alert">
  Project Successfully Added !
</div>
      <?php
  //}  
  //if($_GET['msg']=='error'){
      ?>
      <div class="alert alert-danger text-center" role="alert">
  something wrong with your image please check type or size !
</div>
      <?php
  //} }
?> -->





         <!-- <form method="post" action="php/uvideo.php" enctype="multipart/form-data">
  <div class="form-row">
  <div class="form-group col-md-6">
  <label>Project Screenshot/Image (Minimum 600px X 600px, Maxsize 2mb)</label>
  <div class="custom-file">
    <input type="file" name="projectpic" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="projectpic">Choose Pic...</label>
  </div></div> -->
  
   <!-- <div class="form-group col-md-6 mt-auto">
      <label for="name">Project Name</label>
      <input type="name" name="projectname" class="form-control" id="name" placeholder="ToDo List Maker">
    </div>
    
   
    
    <div class="form-group col-md-12">
      <label for="email">Project Link</label>
      <input type="text" name="projectlink" class="form-control" id="email" placeholder="https://whomonugiri.github.io/todo-list-maker/">
    </div> -->
<!--     <div class="form-group col-md-2 ml-auto">
        <input type="submit" name="addtovideo" class="btn btn-primary" value="Add To Video">
    </div>
  
</form>
<table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Project Image</th>
              <th></th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
         <?php
//$query2="SELECT * FROM video";
//$queryrun2=mysqli_query($db,$query2);
//$count=1;         
//while($data2=mysqli_fetch_array($queryrun2)){
    ?>
     <tr>
         <div class="modal fade" id="modal<?//=$data2['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Edit Video</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="post" action="php/uvideo.php" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?//=$data2['id']?>">
  <div class="form-row">
  <div class="form-group col-md-12">
      <img src="../assets/img/<?//=$data2['projectpic']?>" class="oo img-thumbnail">
  </div>
  <div class="form-group col-md-6">
  <label>Project Screenshot/Image (Minimum 600px X 600px, Maxsize 2mb)</label>
  <div class="custom-file">
    <input type="file" name="projectpic" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="projectpic">Choose Pic...</label>
  </div></div>
  
   

      </div>
      
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="pupdate" value="Update">
          </form>
      </div>
    </div>
  </div>
</div>   
          <td>#<?=$count?></td>
              <td><img src="../assets/img/<?//=$data2['projectpic']?>" class="oo img-thumbnail"></td>
         <td><?//=$data2['projectname']?></td>
         <td>
             <a href="<?//=$data2['projectlink']?>"> <button type="button" class="btn btn-success btn-sm">Visit</button></a>
         
         <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal<?//=$data2['id']?>">
  Edit
</button> <a href="php/uvideo.php?del=<?//=$data2['id']?>"><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
  Delete
             </button></a></td>
            </tr>            
         <?php //$count++;
//} ?>
             </tbody></table>   -->




<?php 
include('../include/connection.php');
if (isset($_POST['submit'])) {
     $name =$_POST['name'];

    $image = $_FILES['photo']['name'];
    $image_tmp = $_FILES['photo']['tmp_name'];

    $location ="../../assets/img/";

    $image_div = explode('.', $image);

    $image_uniq =strtolower(end($image_div));

    $image_uniq_name = substr(md5(time()),0,10).'.'.$image_uniq;

    $stmt_ins = $conn -> prepare("INSERT INTO video( projectname, projectpic) VALUES (?, ?)");

    $stmt_ins -> bind_param("ss",$name, $image_uniq_name);

    if ($stmt_ins -> execute()) {
        move_uploaded_file($image_tmp, $location.$image_uniq_name);
        echo"<script>alert('Data inserted successfully.');</script>";
    }

}
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>File Uploads</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="text-center mb-5">File upload and Edit</h1>
        </div> 
      </div>

      <div class="row justify-content-center">
       <div class="col-lg-8">
         <form class="row g-3" method="post" enctype="multipart/form-data">
          <div class="col-md-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
           <div class="col-md-6">
             <label for="photo" class="form-label">Choose Photo</label>
            <input type="file" class="form-control" id="photo" name="photo">
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </div>
        </form>
       </div>
      </div>
    </div>


    <!-- Data show -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="text-center mb-5">Show All Data</h1>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <table class="table table-striped">
              <thead>
                 <tr>
                   <th>SL</th>
                   <th>Name</th>
                   <th>Photo</th>
                   <th>Action</th>
                 </tr>
              </thead>
              <tbody>
                <?php 
                  $stmt_view = $conn -> prepare("SELECT * FROM video");

                  $stmt_view -> execute();

                  $view_result = $stmt_view -> get_result();


                  while ($row = $view_result -> fetch_assoc()) {
                   ?>

                   <tr>
                     <td><?php echo $row['id'];?></td>
                     <td><?php echo $row['projectname'];?></td>
                     <td><img src="images/users/<?php echo $row['projectpic'];?>" style="width: 100px;height: 120px;"></td>
                     <td>
                       <a href="upload_edit.php?id=<?php echo $row['id'];?>" class="badge bg-primary">Edit</a>
                       ||
                       <a href="upload_delete.php?id=<?php echo $row['id'];?>" class="badge bg-danger">Delete</a>
                     </td>
                   </tr>


                   <?php
                  }
                 ?>
          
              </tbody>
            </table>
          </div>
        </div>
      </div> 
    </section>



    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>