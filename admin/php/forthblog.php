 <h2>Edit Forth Blog Section</h2>
         <?php
         if(isset($_GET['msg'])){
             
  if($_GET['msg']=='updated'){
      ?>
      <div class="alert alert-success text-center" role="alert">
  Project Successfully Added !
</div>
      <?php
  }  
  if($_GET['msg']=='error'){
      ?>
      <div class="alert alert-danger text-center" role="alert">
  something wrong with your image please check type or size !
</div>
      <?php
  } }
?>




  <?php
    $query5 = "SELECT * FROM headers";
    $queryrun5= mysqli_query($db,$query5);
    while($data5=mysqli_fetch_array($queryrun5)){
  ?>

         <form method="post" action="php/ucampai8.php">
         <div class="form-row">
             <div class="form-group col-md-12">
    <label for="scrapbook_head">New Section Header</label>
    <input type="text" name="campaignsfives" class="form-control" id="campaignsfives" value="<?=$data5['campaignsfives']?>" placeholder="header"><br>
    <textarea class="form-control" name="campaignsfive" id="campaignsfive" rows="5" ><?=$data5['campaignsfive']?></textarea>
  </div>
        
        
        <?php
          }
        ?>

         </div>
         <input type="submit" name="save" class="btn btn-primary" value="Save Changes">
         </form>
         <br>
         <br>












         <form method="post" action="php/uforthblog.php" enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Project Screenshot/Image (Minimum 600px X 600px, Maxsize 2mb)</label>
              <div class="custom-file">
                <input type="file" name="projectpic" class="custom-file-input" id="profilepic">
                <label class="custom-file-label" for="projectpic">Choose Pic...</label>
              </div>
            </div>
  
   <!-- <div class="form-group col-md-6 mt-auto">
      <label for="name">Project Name</label>
      <input type="name" name="projectname" class="form-control" id="name" placeholder="ToDo List Maker">
    </div>
    
   
    
    <div class="form-group col-md-12">
      <label for="email">Project Link</label>
      <input type="text" name="projectlink" class="form-control" id="email" placeholder="https://whomonugiri.github.io/todo-list-maker/">
    </div> -->
    <div class="form-group col-md-2 ml-auto">
        <input type="submit" name="addtoforthblog" class="btn btn-primary" value="Add To Blog">
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
$query2="SELECT * FROM forthblog";
$queryrun2=mysqli_query($db,$query2);
$count=1;         
while($data2=mysqli_fetch_array($queryrun2)){
    ?>
     <tr>
         <div class="modal fade" id="modal<?=$data2['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Edit Scapbook</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="post" action="php/uforthblog.php" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?=$data2['id']?>">
  <div class="form-row">
  <div class="form-group col-md-12">
      <img src="../assets/img/<?=$data2['projectpic']?>" class="oo img-thumbnail">
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

            <?php
              $file = $data2['projectpic'];
              $ext = pathinfo($file, PATHINFO_EXTENSION);
              if($ext == "mp4" || $ext == "mov"){
                echo "<td><video width='50%' controls>";
                echo "<source src='../assets/img/$file' type='video/mp4' autoplay='autoplay'>";
                echo "</video></td>";
              } else {
                echo "<td><img src='../assets/img/$file' class='oo img-thumbnail'>";
              }
            ?>

            


         <td><?=$data2['projectname']?></td>
         <td>
             
         
         <a href="php/uforthblog.php?del=<?=$data2['id']?>"><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
  Delete
             </button></a></td>
            </tr>            
         <?php $count++;
} ?>
             </tbody></table>  