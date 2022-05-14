<?php
session_start();
include_once('security.php');
include_once('includes/header.php');
include_once('includes/navbar.php');
?>

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

            <h1>ADMIN PROFILE</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="row">
    <div class="col-md-6">
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <div class="modal-content card card-danger">
        <div class="card-header">
          <h5 class="modal-title" id="exampleModalLabel">ADD ADMIN PROFILE</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      <div class="modal-body">
        <form action="admin_code.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputName1">NAME</label>
                    <input type="text" class="form-control" style="text-transform:uppercase"  id="exampleInputName1" name="name" placeholder="Enter Fullname">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUsername1">USERNAME</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" name="username" placeholder="Enter Username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">EMAIL ADDRESS</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">PASSWORD</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">CONFIRM PASSWORD</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="cpassword" placeholder="Confirm Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">UPLOAD IMAGE</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="admin_image" id="admin_image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="modal-footer card-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" name="registerbtn" class="btn btn-primary">Submit</button>
                </div>
              </form>
      </div>
      
    </div>
  </div>
  </div>
  </div>
</div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
    <div class="card">
              <div class="card-header">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">ADD ADMIN PROFILE </button>
              </div>
            <div class="text-center">
              <br />
              <br />
                                  <?php                                          
                            if(isset($_SESSION['success']) && $_SESSION['success'] !='');
                            {
                              echo '<h2 class=" text-success"><b>' .$_SESSION['success'].'</b></h2>';
                              unset($_SESSION['success']);
                            }
                            if(isset($_SESSION['status']) && $_SESSION['status'] !='');
                            {
                              echo '<h2 class=" text-danger"><b>' .$_SESSION['status'].'</b></h2>';
                              unset($_SESSION['status']);
                            } 

                            ?>
                                    </div>
              <div class="card-body">
                
              <?php 

                     $query = "SELECT * FROM admin_barangay";
                      $result = mysqli_query($db, $query);
              ?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="text-center">NO.</th>
                    <th>NAME</th>
                    <th>USERNAME</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th class="text-center">IMAGE</th>
                    <th class="text-center">ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                                      if(mysqli_num_rows($result) >0)
                                      {
                                        while ($row = mysqli_fetch_assoc($result)) 
                                        {

                                          ?> 
                  <tr>
                    <td class="text-center"><br /><?php echo $row['id']; ?></td>
                    <td><br /><?php echo $row['name']; ?></td>
                    <td><br /><?php echo $row['username']; ?></td>
                    <td><br /><?php echo $row['email']; ?></td>
                    <td><br /><?php echo $row['password']; ?></td>

                    <td class="text-center"><a href="images/<?php echo $row['file']; ?>" data-toggle="lightbox" data-title="<?php echo $row['username']; ?>"><?php echo '<img src="images/'.$row['file'].'" class="img-circle"  width="80px;" alt="Image">'?>
                    </a></td>
                    <td class="text-center">
                      <br />
                          <button class="btn btn-success btn-xs"><a href="admin_profile_edit.php?edit_btn=<?php echo $row['id']; ?>"  target="_blank"><i class="fa fa-edit"></i></a></button>
                          <button class="btn btn-danger btn-xs"><a href="delete.php?deleteid=<?php echo $row['id']; ?>" target="_blank"><i class="fa fa-trash "></i></a></button>
                      </td>
                  </tr>
                 <?php 
                                        
                                    }
                                    }
                                    

                                  ?>
                  </tfoot>
                </table>
              </div>
            </div>


</div>
</div>
</div>

</section>





</div>



<?php

include_once('includes/script.php');
include_once('includes/footer.php');
?>