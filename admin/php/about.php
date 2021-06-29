<h2>Edit Home Section</h2>
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
        <form method="post" action="php/uabout.php">
         <div class="form-row">
           <div class="form-group col-md-12">
            <label for="ptitle">Get to know me</label>
             <textarea class="form-control" id="ptitle" rows="5" name="ptitle" placeholder="I am a person who is positive about every aspect of life. There are many things I like to do, to see, and to experience. I like to read, I like to write; I like to think, I like to dream; I like to talk, I like to listen. I like to see the sunrise in the morning, I like to see the moonlight at night; I like to feel the music flowing on my face, I like to smell the wind coming from the ocean. I like to look at the clouds in the sky with a blank mind, I like to do thought experiment when I cannot sleep in the middle of the night. I like flowers in spring, rain in summer, leaves in autumn, and snow in winter. I like to sleep early, I like to get up late; I like to be alone, I like to be surrounded by people. I like country’s peace, I like metropolis’ noise; I like the beautiful west lake in Hangzhou, I like the flat cornfield in Champaign. I like delicious food and comfortable shoes; I like good books and romantic movies. I like the land and the nature, I like people. And, I like to laugh."><?=$data['heading']?></textarea>
          </div>
          <div class="form-group col-md-12">
            <label for="psubtitle">First Heading</label>
            <input type="text" name="psubtitle" value="<?=$data['subheading']?>" class="form-control" id="psubtitle" placeholder="Creations">
          </div>
          <div class="form-group col-md-12">
            <label for="exampleFormControlTextarea1">Second Header</label>
            <input type="text" name="shortdesc" value="<?=$data['shortdesc'];?>" class="form-control" id="psubtitle" placeholder="Testimonial">
          </div>
          <div class="form-group col-md-12">
            <label for="exampleFormControlTextarea1">Third Header</label>
            <textarea class="form-control" name="headerone" id="exampleFormControlTextarea1" rows="3" placeholder="A new header"><?=$data['headerone'];?></textarea>
          </div>
          <div class="form-group col-md-12">
            <label for="exampleFormControlTextarea1">Long Description About You (You can Use Html Code)</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="longdesc" placeholder="I am a person who is positive about every aspect of life. There are many things I like to do, to see, and to experience. I like to read, I like to write; I like to think, I like to dream; I like to talk, I like to listen. I like to see the sunrise in the morning, I like to see the moonlight at night; I like to feel the music flowing on my face, I like to smell the wind coming from the ocean. I like to look at the clouds in the sky with a blank mind, I like to do thought experiment when I cannot sleep in the middle of the night. I like flowers in spring, rain in summer, leaves in autumn, and snow in winter. I like to sleep early, I like to get up late; I like to be alone, I like to be surrounded by people. I like country’s peace, I like metropolis’ noise; I like the beautiful west lake in Hangzhou, I like the flat cornfield in Champaign. I like delicious food and comfortable shoes; I like good books and romantic movies. I like the land and the nature, I like people. And, I like to laugh."><?=$data['longdesc'];?>
            </textarea>
          </div>
        </div>
        <input type="submit" name="save" class="btn btn-primary" value="Save Changes">
      </form>
         <br>
         <br>
         <!--  -->