<h2>Edit Headers Section</h2>
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





    <?php
      $query5 = "SELECT * FROM headers";
                  $queryrun5= mysqli_query($db,$query5);
                  while($data5=mysqli_fetch_array($queryrun5)){
                ?>






         <form method="post" action="php/uheaders.php">
         <div class="form-row">
             <div class="form-group col-md-12">
    <label for="ptitles">Brand Design</label>
    <textarea class="form-control" name="ptitles" id="ptitles" rows="5" ><?=$data5['headings']?></textarea>
  </div>
        <div class="form-group col-md-12">
    <label for="psubtitles">Scrapbook</label>
    <textarea class="form-control" name="psubtitles" id="psubtitles" rows="5" ><?=$data5['subheadings']?></textarea>
  </div>
    <div class="form-group col-md-12">
    <label for="exampleFormControlTextarea1">Campaigns</label>
    <textarea class="form-control" name="shortdescs" id="exampleFormControlTextarea1" rows="5" ><?=$data5['shortdescs'];?></textarea>
  </div>
        <div class="form-group col-md-12">
    <label for="exampleFormControlTextarea1">UI Design</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="longdescs"><?=$data5['longdescs'];?>
    </textarea>
  </div>    
        
        <?php
                    }
                  ?>

         </div>
         <input type="submit" name="save" class="btn btn-primary" value="Save Changes">
         </form>
         <br>
         <br>
         <!--  -->