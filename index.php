<?php
session_start();
include_once('security.php');
include_once('includes/header.php');
include_once('includes/navbar.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"> <?php echo $_SESSION['email']; ?></a></li>
              <li class="breadcrumb-item active"></li>
               <!-- Small modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fas fa-sign-out-alt"></i></i></button>

      <div class="modal bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header"><h4>Logout <i class="fa fa-lock"></i></h4></div>
            <div class="modal-body"><i class="fa fa-question-circle"></i> Are you sure you want to log-off?</div>

            <form action="logout.php" method="POST">
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

            </div>
            </form>
          </div>
        </div>

        

      </div>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php

                                                $query = "SELECT id FROM profiling_data ORDER BY id"; 
                                                $result = mysqli_query($db, $query);
                                                $row = mysqli_num_rows($result);
                                                echo '<h3>'.$row.'</h3>';

                                                ?>

                <p>TOTAL: PROFILING</p>
                 <?php

                                                $query = "SELECT id FROM p_request_profiling_data ORDER BY id"; 
                                                $result = mysqli_query($db, $query);
                                                $row = mysqli_num_rows($result);
                                                echo '<h3>PENDING: '.$row.'</h3>';

                                                ?>
              </div> 
              <div class="icon">
                <i class="fa fa-address-book"></i>
              </div>
              <a href="barangay_profiling.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php

                                                $query = "SELECT id FROM barangay_clearace ORDER BY id"; 
                                                $result = mysqli_query($db, $query);
                                                $row = mysqli_num_rows($result);
                                                echo '<h3>'.$row.'<sup style="font-size: 20px"></sup></h3>';

                                                ?>
            

                <p>TOTAL: BARANGAY CLEARANCE</p>
                 <?php

                                                $query = "SELECT id FROM p_request_barangay_clearance ORDER BY id"; 
                                                $result = mysqli_query($db, $query);
                                                $row = mysqli_num_rows($result);
                                                echo '<h3>PENDING: '.$row.'</h3>';

                                                ?>
              </div>
              <div class="icon">
                <i class="fa fa-envelope"></i>
              </div>
              <a href="barangay_clearance.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php

                                                $query = "SELECT id FROM barangay_id ORDER BY id"; 
                                                $result = mysqli_query($db, $query);
                                                $row = mysqli_num_rows($result);
                                                echo '<h3>'.$row.'</h3>';

                                                ?>
                

                <p>TOTAL: BARANGAY ID</p>
                 <?php

                                                $query = "SELECT id FROM p_request_barangay_id ORDER BY id"; 
                                                $result = mysqli_query($db, $query);
                                                $row = mysqli_num_rows($result);
                                                echo '<h3>PENDING: '.$row.'</h3>';

                                                ?>
                              </div>
              <div class="icon">
                <i class="fa fa-id-card"></i>
              </div>
              <a href="barangay_id.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php

                                                $query = "SELECT id FROM certificate ORDER BY id"; 
                                                $result = mysqli_query($db, $query);
                                                $row = mysqli_num_rows($result);
                                                echo '<h3>'.$row.'<sup style="font-size: 20px"></sup></h3>';

                                                ?>


                <p>TOTAL: CERTIFICATION</p>
                <?php

                                                $query = "SELECT id FROM p_request_barangay_certification ORDER BY id"; 
                                                $result = mysqli_query($db, $query);
                                                $row = mysqli_num_rows($result);
                                                echo '<h3>PENDING: '.$row.'</h3>';

                                                ?>
              </div>
              <div class="icon">
                <i class="fa fa-folder"></i>
              </div>
              <a href="barangay_certification.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
  </div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<?php
include_once('includes/script.php');
include_once('includes/footer.php');
?>

