<?php
session_start();
include_once('security.php');
include_once('includes/header.php');
include_once('includes/navbar.php');
?>
<div class="content-wrapper">

<section class="content-header">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </section>
    <div class="row">
    <div class="col-md-6">
   
  </div>
</div>

    <section class="content">
      <div class="container-fluid">
       
        <div class="row">
          <div class="col-12">
    <div class="card">
              
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
<div class="row mb-2">
         

            <h3 class="text-danger"><b>&nbsp &nbsp PENDING REQUEST</b></h3>
          
          
        </div>

                 <?php 

                     $query = "SELECT * FROM p_request_barangay_clearance";
                      $result = mysqli_query($db, $query);
              ?>
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    
                    <th>FIRSTNAME</th>
                    <th>MID NAME</th>
                    <th>LASTNAME</th>
                    <th>ADDRESS</th>
                    <th class="">COMMUNITY TAX NUMBER</th>
                    <th class="">DATE ISSUED</th>
                    <th>PURPOSE</th>
                      <th>DATE</th>
                        
                        <th>ACTION</th>
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
                    
                    <td class="text-center"><br /><?php echo $row['firstname']; ?></td>
                    <td><br /><?php echo $row['midname']; ?></td>
                    <td><br /><?php echo $row['lastname']; ?></td>
                    <td><br /><?php echo $row['address']; ?></td>
                    <td><br /><?php echo $row['com_tax_number']; ?></td>
                    <td><br /><?php echo $row['date_issued']; ?></td>
                    <td><br /><?php echo $row['purpose']; ?></td>
                    <td><br /><?php echo $row['date']; ?></td>
                    
                    
                    <td class="text-center">
                      <br />
                          <button class="btn btn-success btn-xs"><a href="accept_request.php?clearance=<?php echo $row['id']; ?>"  target="_blank"><i class="fa fa-check"></i></a></button>
                          <button class="btn btn-danger btn-xs"><a href="delete.php?r_cleardelete=<?php echo $row['id']; ?>" target="_blank"><i class="fa fa-times "></i></a></button>
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
  
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

            
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
   
  </div>
</div>

    <section class="content">
      <div class="container-fluid">
<hr class="card card-primary card-outline">
        <div class="text-center">
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a class="btn btn-danger" href="barangay_profiling.php"> <i class="fa fa-address-book text-primary"> </i> &nbsp PROFILING</a>
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a class="btn btn-danger" href="barangay_clearance.php"><i class="fa fa-envelope text-primary"></i>&nbsp CLEARANCE</a>
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a class="btn btn-danger" href="barangay_id.php"> <i class="fa fa-id-card text-primary "></i>&nbspBARANGAY ID</a>
        &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a class="btn btn-danger" href="barangay_certification.php"> <i class="fa fa-folder text-primary"></i>&nbspCERTIFICATION</a>
      </div>
<hr class="card card-primary card-outline">
        <div class="row">

          <div class="col-12">
    <div class="card">
              
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
                <h3 class="text-primary"><i class="fa fa-database text-danger"></i><b>&nbsp &nbsp BARANGAY CLEARANCE DATA</b></h3>
              <?php 

                     $query = "SELECT * FROM barangay_clearace";
                      $result = mysqli_query($db, $query);
              ?>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    
                    <th>FIRSTNAME</th>
                    <th>MID NAME</th>
                    <th>LASTNAME</th>
                    <th>ADDRESS</th>
                    <th class="">COMMUNITY TAX NUMBER</th>
                    <th class="">DATE ISSUED</th>
                    <th>PURPOSE</th>
                      <th>DATE</th>
                        
                        <th>ACTION</th>
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
                    
                    <td class="text-center"><br /><?php echo $row['firstname']; ?></td>
                    <td><br /><?php echo $row['midname']; ?></td>
                    <td><br /><?php echo $row['lastname']; ?></td>
                    <td><br /><?php echo $row['address']; ?></td>
                    <td><br /><?php echo $row['com_tax_number']; ?></td>
                    <td><br /><?php echo $row['date_issued']; ?></td>
                    <td><br /><?php echo $row['purpose']; ?></td>
                    <td><br /><?php echo $row['date']; ?></td>
                    
                    
                    <td class="text-center">
                      <br />
                          <button class="btn btn-success btn-xs"><a href="accept_request.php?id=<?php echo $row['id']; ?>"  target="_blank"><i class="fa fa-check"></i></a></button>
                          <button class="btn btn-danger btn-xs"><a href="delete.php?cleardelete=<?php echo $row['id']; ?>" target="_blank"><i class="fa fa-trash "></i></a></button>
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