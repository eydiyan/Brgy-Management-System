<?php
include_once('security.php');
include_once('includes/header.php');
include_once('includes/navbar.php');
?>



  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <section class="content">
      <div class="container-fluid">
        <div class="row">

        <div class="col-md-3">
           <br />
            <br />
             <br />
              <br />
               <br />
                <br />
            <div class="card card-primary card-outline">

              <?php   
                   
                      $id = $_GET['edit_btn'];
                      $query = "SELECT * FROM admin_barangay WHERE id='$id'";

                      $result = mysqli_query($db, $query);

                      foreach ($result as $row) 
                      {
                   ?>
              <div class="card-body box-profile">
                
                    <div class="text-center">
                      <a href="images/<?php echo $row['file']; ?>" data-toggle="lightbox" data-title="<?= $row['name']; ?>">
                      <?php echo '<img src="images/'.$row['file'].'" class="img-fluid mb-2"  width="80px;" alt="Image">'?>
                    </a>
                    </div>
                

                <h3 class="profile-username text-center"><?php echo $row['name']; ?></h3>

                <p class="text-muted text-center">ADMIN</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <p><b>USERNAME: &nbsp &nbsp &nbsp</b><b><?php echo $row['username']; ?></b></p>
                  </li>
                  <li class="list-group-item">
                    <p><b>EMAIL: &nbsp &nbsp &nbsp</b><b><?php echo $row['email']; ?></b></p>
                  </li>
                  
                </ul>
              <br />
                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>

              <?php
          }
          
        ?>
            
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <br />
            <br />
             <br />

              <br />
               <br />
                <br />
            <div class="card card-primary card-outline">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <div class="text-center">
                  <h3 class="profile-username text-center"><b>&nbsp &nbsp ADMIN PROFILE EDIT</b></h3>
                  </div>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                  <?php   
                   
                      $id = $_GET['edit_btn'];
                      $query = "SELECT * FROM admin_barangay WHERE id='$id'";

                      $result = mysqli_query($db, $query);

                      foreach ($result as $row) 
                      {
                   ?>
               
                  <div class="tab-pane" id="settings">

                   <form action="admin_code.php" method="POST" enctype="multipart/form-data">
                      <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                     <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">NAME</label>
                        <div class="col-sm-10">
                          <input type="text" style="text-transform:uppercase" class="form-control" id="inputName" name="edit_name" value="<?php echo $row['name']; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">USERNAME</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail" name="edit_username" value="<?php echo $row['username']; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">EMAIL</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName2" name="edit_email" value="<?php echo $row['email']; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">PASSWORD</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" name="edit_password" value="<?php echo $row['password']; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">UPLOAD PROFILE</label>
                        <div class="col-sm-10">
                          <input type="file" class="custom-file-input" name="admin_image" id="admin_image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                      </div>

                    
                <?php
          }
          
        ?>
               
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <a class="btn btn-secondary" href="admin_profile.php"> BACK</a>
                          <button type="submit" name="update_btn" class="btn btn-primary">SAVE</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
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