
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






<!-- NEW SECTION -->
<h2 align="center">SECTION 1</h2>




  <?php
    $query5 = "SELECT * FROM headers";
    $queryrun5= mysqli_query($db,$query5);
    while($data5=mysqli_fetch_array($queryrun5)){
  ?>

         <form method="post" action="php/ucampai4.php">
         <div class="form-row">
             <div class="form-group col-md-12">
    <label for="scrapbook_head">Section 3 header</label>
    <input type="text" name="campaignsfours" class="form-control" id="campaignsfours" value="<?=$data5['campaignsfours']?>" placeholder="header"><br>
    <textarea class="form-control" name="campaignsfour" id="campaignsfour" rows="5" ><?=$data5['campaignsfour']?></textarea>
  </div>
        
        
        <?php
          }
        ?>

         </div>
         <input type="submit" name="save" class="btn btn-primary" value="Save Changes">
         </form>
         <br>
         <br>


    <form method="post" action="php/ucampaign4.php" enctype="multipart/form-data">
  <div class="form-row">
  <div class="form-group col-md-6">
  <label>Project Screenshot/Image (Minimum 600px X 600px, Maxsize 2mb)</label>
  <div class="custom-file">
    <input type="file" name="projectpic" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="projectpic">Choose Pic...</label>
  </div></div>
  

    <div class="form-group col-md-2 ml-auto">
        <input type="submit" name="addtocampaign4" class="btn btn-primary" value="Add To Campaign">
    </div>
  
</form>
<table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Project Image</th>
              <th>Project Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
         <?php
$query2="SELECT * FROM campaigns_four";
$queryrun2=mysqli_query($db,$query2);
$count=1;         
while($data2=mysqli_fetch_array($queryrun2)){
    ?>
     <tr>
         <div class="modal fade" id="modal<?=$data2['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Edit Campaign</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="post" action="php/ucampaign4.php" enctype="multipart/form-data">
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
              <td><img src="../assets/img/<?=$data2['projectpic']?>" class="oo img-thumbnail"></td>
         <td><?=$data2['projectname']?></td>
         <td>
             <a href="<?=$data2['projectlink']?>"> <button type="button" class="btn btn-success btn-sm">Visit</button></a>
         
         <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal<?=$data2['id']?>">
  Edit
</button> <a href="php/ucampaign4.php?del=<?=$data2['id']?>"><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
  Delete
             </button></a></td>
            </tr>            
         <?php $count++;
} ?>
             </tbody></table>  

</form>
</div>
<br>
<br>
<br>
<br>
















<!-- NEW SECTION -->
 <h2 align="center">SECTION 2</h2>




  <?php
    $query5 = "SELECT * FROM headers";
    $queryrun5= mysqli_query($db,$query5);
    while($data5=mysqli_fetch_array($queryrun5)){
  ?>

         <form method="post" action="php/ucampai3.php">
         <div class="form-row">
             <div class="form-group col-md-12">
    <label for="scrapbook_head">Section 2 header</label>
    <input type="text" name="campaignsthrees" class="form-control" id="campaignsthrees" value="<?=$data5['campaignsthrees']?>" placeholder="header"><br>
    <textarea class="form-control" name="campaignsthree" id="campaignsthree" rows="5" ><?=$data5['campaignsthree']?></textarea>
  </div>
        
        
        <?php
          }
        ?>

         </div>
         <input type="submit" name="save" class="btn btn-primary" value="Save Changes">
         </form>
         <br>
         <br>


    <form method="post" action="php/ucampaign3.php" enctype="multipart/form-data">
  <div class="form-row">
  <div class="form-group col-md-6">
  <label>Project Screenshot/Image (Minimum 600px X 600px, Maxsize 2mb)</label>
  <div class="custom-file">
    <input type="file" name="projectpic" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="projectpic">Choose Pic...</label>
  </div></div>
  

    <div class="form-group col-md-2 ml-auto">
        <input type="submit" name="addtocampaign3" class="btn btn-primary" value="Add To Campaign">
    </div>
  
</form>
<table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Project Image</th>
              <th>Project Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
         <?php
$query2="SELECT * FROM campaigns_three";
$queryrun2=mysqli_query($db,$query2);
$count=1;         
while($data2=mysqli_fetch_array($queryrun2)){
    ?>
     <tr>
         <div class="modal fade" id="modal<?=$data2['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Edit Campaign</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="post" action="php/ucampaign3.php" enctype="multipart/form-data">
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
              <td><img src="../assets/img/<?=$data2['projectpic']?>" class="oo img-thumbnail"></td>
         <td><?=$data2['projectname']?></td>
         <td>
             <a href="<?=$data2['projectlink']?>"> <button type="button" class="btn btn-success btn-sm">Visit</button></a>
         
         <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal<?=$data2['id']?>">
  Edit
</button> <a href="php/ucampaign3.php?del=<?=$data2['id']?>"><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
  Delete
             </button></a></td>
            </tr>            
         <?php $count++;
} ?>
             </tbody></table>  

</form>
</div>
<br>
<br>
<br>
<br>













<!-- section 3 -->
<h3>SECTION 3</h3>


  <?php
    $query5 = "SELECT * FROM headers";
    $queryrun5= mysqli_query($db,$query5);
    while($data5=mysqli_fetch_array($queryrun5)){
  ?>

         <form method="post" action="php/ucampai2.php">
         <div class="form-row">
             <div class="form-group col-md-12">
    <label for="scrapbook_head">New Section Header</label>
    <input type="text" name="campaignstwos" class="form-control" id="campaignstwos" value="<?=$data5['campaignstwos']?>" placeholder="header"><br>
    <textarea class="form-control" name="campaignstwo" id="campaignstwo" rows="5" ><?=$data5['campaignstwo']?></textarea>
  </div>
        
        
        <?php
          }
        ?>

         </div>
         <input type="submit" name="save" class="btn btn-primary" value="Save Changes">
         </form>
         <br>
         <br>



         <form method="post" action="php/ucampaign2.php" enctype="multipart/form-data">
  <div class="form-row">
  <div class="form-group col-md-6">
  <label>Project Screenshot/Image (Minimum 600px X 600px, Maxsize 2mb)</label>
  <div class="custom-file">
    <input type="file" name="projectpic" class="custom-file-input" id="profilepic">
    <label class="custom-file-label" for="projectpic">Choose Pic...</label>
  </div></div>
  

    <div class="form-group col-md-2 ml-auto">
        <input type="submit" name="addtocampaign2" class="btn btn-primary" value="Add To Campaign">
    </div>
  
</form>
<table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Project Image</th>
              <th>Project Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
         <?php
$query2="SELECT * FROM campaigns_two";
$queryrun2=mysqli_query($db,$query2);
$count=1;         
while($data2=mysqli_fetch_array($queryrun2)){
    ?>
     <tr>
         <div class="modal fade" id="modal<?=$data2['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Edit Campaign</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="post" action="php/ucampaign2.php" enctype="multipart/form-data">
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
              <td><img src="../assets/img/<?=$data2['projectpic']?>" class="oo img-thumbnail"></td>
         <td><?=$data2['projectname']?></td>
         <td>
             <a href="<?=$data2['projectlink']?>"> <button type="button" class="btn btn-success btn-sm">Visit</button></a>
         
         <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal<?=$data2['id']?>">
  Edit
</button> <a href="php/ucampaign2.php?del=<?=$data2['id']?>"><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
  Delete
             </button></a></td>
            </tr>            
         <?php $count++;
} ?>
             </tbody></table>  


</form>
</div>




<br><br>