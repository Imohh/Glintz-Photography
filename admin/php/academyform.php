   <h2>Academy Form Detail</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Phone Number</th>
              <th>Email</th>
              <th>Message</th>
              <th>Location</th>
              <th>Gender</th>
              <th>Prior Training</th>
              <th>Photo Category</th>
              <th>New Session</th>
              <th>Health</th>
            </tr>
          </thead>
          <tbody>
            
             <?php
    $query="SELECT * FROM academy_form";
      $queryrun=mysqli_query($db,$query);
      $count=0;
      while($data=mysqli_fetch_array($queryrun)){
          ?>
          <tr>
          <td>#<?=$count+1?></td>
              <td><?=$data['cname']?></td>
              <td><?=$data['cnumber']?></td>
              <td><?=$data['cemail']?></td>
              <td><?=$data['cmessage']?></td>
              <td><?=$data['clocation']?></td>
              <td><?=$data['csex']?></td>
              <td><?=$data['cphoto_training']?></td>
              <td><?=$data['cphoto_category']?></td>
              <td><?=$data['cnew_session']?></td>
              <td><?=$data['chealth']?></td>
            </tr>
          <?php
              $count++;
      }
      if($count==0){ ?>
          <td colspan="5" align="center"> Currenty There Is No User in this section</td>
      <?php }
        ?>
              
          </tbody>
        </table>
      </div>