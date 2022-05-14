<?php
session_start();
include_once('security.php');

//ADMIN DELETE
if(isset ($_GET['deleteid']))
{
    $id = $_GET['deleteid'];
    $query = "DELETE FROM `admin_barangay` WHERE id='$id'";
    $result = mysqli_query($db, $query);
    if($result)
    {
      $_SESSION['status'] = "YOUR DATA IS DELATED";
      header('Location: admin_profile.php');
    }
}



//PROFILING DELETE
if(isset ($_GET['profdelete']))
{
    $id = $_GET['profdelete'];
    $query = "DELETE FROM `profiling_data` WHERE id='$id'";
    $result = mysqli_query($db, $query);
    if($result)
    {
      $_SESSION['status'] = "YOUR DATA IS DELATED";
      header('Location: barangay_profiling.php');
    }
}

//PROFILING DELETE
if(isset ($_GET['r_profdelete']))
{
    $id = $_GET['r_profdelete'];
    $query = "DELETE FROM `p_request_profiling_data` WHERE id='$id'";
    $result = mysqli_query($db, $query);
    if($result)
    {
      $_SESSION['status'] = "THE REQUEST IS DECLINED";
      header('Location: barangay_profiling.php');
    }
}







//BARANGAY CLEARANCE
if(isset ($_GET['cleardelete']))
{
    $id = $_GET['cleardelete'];
    $query = "DELETE FROM `barangay_clearace` WHERE id='$id'";
    $result = mysqli_query($db, $query);
    if($result)
    {
      $_SESSION['status'] = "YOUR DATA IS DELATED";
      header('Location: barangay_clearance.php');
    }
}
//BARANGAY CLEARANCE
if(isset ($_GET['r_cleardelete']))
{
    $id = $_GET['r_cleardelete'];
    $query = "DELETE FROM `p_request_barangay_clearance` WHERE id='$id'";
    $result = mysqli_query($db, $query);
    if($result)
    {
      $_SESSION['status'] = "THE REQUEST IS DECLINED";
      header('Location: barangay_clearance.php');
    }
}


//BARANGAY ID
if(isset ($_GET['iddelete']))
{
    $id = $_GET['iddelete'];
    $query = "DELETE FROM `barangay_id` WHERE id='$id'";
    $result = mysqli_query($db, $query);
    if($result)
    {
      $_SESSION['status'] = "YOUR DATA IS DELATED";
      header('Location: barangay_id.php');
    }
}

//BARANGAY ID
if(isset ($_GET['r_iddelete']))
{
    $id = $_GET['r_iddelete'];
    $query = "DELETE FROM `p_request_barangay_id` WHERE id='$id'";
    $result = mysqli_query($db, $query);
    if($result)
    {
      $_SESSION['status'] = "THE REQUEST IS DECLINED";
      header('Location: barangay_id.php');
    }
}

//BARANGAY CERTIFICATION
if(isset ($_GET['certifidelete']))
{
    $id = $_GET['certifidelete'];
    $query = "DELETE FROM `certificate` WHERE id='$id'";
    $result = mysqli_query($db, $query);
    if($result)
    {
      $_SESSION['status'] = "YOUR DATA IS DELATED";
      header('Location: barangay_certification.php');
    }
}
//BARANGAY CERTIFICATION
if(isset ($_GET['r_certifidelete']))
{
    $id = $_GET['r_certifidelete'];
    $query = "DELETE FROM `p_request_barangay_certification` WHERE id='$id'";
    $result = mysqli_query($db, $query);
    if($result)
    {
      $_SESSION['status'] = "THE REQUEST IS DECLINED";
      header('Location: barangay_certification.php');
    }
}


?>