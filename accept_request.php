<?php 
	session_start();
    include_once('security.php');
	include_once('function.php');
	$id = $_GET['id'];
    $query = "select * from `p_request_profiling_data` where `id` = '$id'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
            $firstname = $row['firstname'];
    		$midname = $row['midname'];
    		$lastname = $row['lastname'];
    		$email = $row['email'];
    		$contact_number = $row['contact_number'];
    		$gender = $row['gender'];
    		$occupation = $row['occupation'];
    		$birthday = $row['birthday'];
    		$civil_status= $row['civil_status'];
    		$religion = $row['religion'];
    		$address = $row['address'];
    		$file = $row['file'];
            $query = "INSERT INTO profiling_data (id, firstname, midname, lastname, email, contact_number, gender, occupation, birthday, civil_status, religion, address, date, file) VALUE (NULL, '$firstname', '$midname', '$lastname', '$email', '$contact_number', '$gender', '$occupation', '$birthday', '$civil_status', '$religion', '$address', CURRENT_TIMESTAMP, '$file');";
        }
        $query .= "DELETE FROM `p_request_profiling_data` WHERE `p_request_profiling_data`.`id` = '$id';";
        if(performQuery($query)){
            $_SESSION['success'] = "THE REQUEST FOR REGISTRATION HAS BEEN ACCEPTED";
            header('Location: barangay_profiling.php');
        }else{
            $_SESSION['status'] = "THE REQUEST HAS BEEN DECLINED";
            header('Location: barangay_profiling.php');
        }
    }else{
        echo "Error occured.";
    }

    //CLEARANCE

    $id = $_GET['clearance'];
    $query = "select * from `p_request_barangay_clearance` where `id` = '$id'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
            $firstname = $row['firstname'];
            $midname = $row['midname'];
            $lastname = $row['lastname'];
            $address = $row['address'];
            $com_tax_number = $row['com_tax_number'];
            $date_issued = $row['date_issued'];
            $purpose = $row['purpose'];
            
            $query = "INSERT INTO barangay_clearace (id, firstname, midname, lastname, address, com_tax_number, date_issued, date, purpose) VALUE (NULL, '$firstname', '$midname', '$lastname', '$address', '$com_tax_number', '$date_issued', CURRENT_TIMESTAMP, '$purpose');";
        }
        $query .= "DELETE FROM `p_request_barangay_clearance` WHERE `p_request_barangay_clearance`.`id` = '$id';";
        if(performQuery($query)){
            $_SESSION['success'] = "THE REQUEST FOR REGISTRATION HAS BEEN ACCEPTED";
            header('Location: barangay_clearance.php');
        }else{
            $_SESSION['status'] = "THE REQUEST HAS BEEN DECLINED";
            header('Location: barangay_clearance.php');
        }
    }else{
        echo "Error occured.";
    }

    //BARANGAY ID
    $id = $_GET['bid'];
    $query = "select * from `p_request_barangay_id` where `id` = '$id'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
            $firstname = $row['firstname'];
            $midname = $row['midname'];
            $lastname = $row['lastname'];
            $address = $row['address'];
            $occupation = $row['occupation'];
            $gender = $row['gender'];
            $place_birth = $row['place_birth'];
            $birthdate = $row['birthdate'];
            $civil_status= $row['civil_status'];
            $tin_no = $row['tin_no'];
            $gsis_no = $row['gsis_no'];
            $sss_no = $row['sss_no'];
            $emergency_contact = $row['emergency_contact'];
            $contact_number = $row['contact_number'];
            $contact_address = $row['contact_address'];
            $query = "INSERT INTO barangay_id (id, firstname, midname, lastname, address, occupation, gender, place_birth, birthdate, civil_status, tin_no, gsis_no, sss_no,emergency_contact, contact_number, contact_address) VALUE (NULL, '$firstname', '$midname', '$lastname', '$address', '$occupation', '$gender', '$place_birth', '$birthdate', '$civil_status', '$tin_no', '$gsis_no', '$sss_no', '$emergency_contact', '$contact_number', '$contact_address');";
        }
        $query .= "DELETE FROM `p_request_barangay_id` WHERE `p_request_barangay_id`.`id` = '$id';";
        if(performQuery($query)){
            $_SESSION['success'] = "THE REQUEST FOR REGISTRATION HAS BEEN ACCEPTED";
            header('Location: barangay_id.php');
        }else{
           $_SESSION['status'] = "THE REQUEST HAS BEEN DECLINED";
            header('Location: barangay_id.php');
        }
    }else{
        echo "Error occured.";
    }



//CERTIFICATION

    $id = $_GET['cert'];
    $query = "select * from `p_request_barangay_certification` where `id` = '$id'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
            $firstname = $row['firstname'];
            $midname = $row['midname'];
            $lastname = $row['lastname'];
            $birthdate = $row['birthdate'];
            $age = $row['age'];
            $address = $row['address'];
            $file = $row['file'];

            
            $query = "INSERT INTO certificate (id, firstname, midname, lastname, birthdate, age, address, date, file) VALUE (NULL, '$firstname', '$midname', '$lastname', '$birthdate', '$age', '$address', CURRENT_TIMESTAMP, '$file');";
        }
        $query .= "DELETE FROM `p_request_barangay_certification` WHERE `p_request_barangay_certification`.`id` = '$id';";
        if(performQuery($query)){
            $_SESSION['success'] = "THE REQUEST FOR REGISTRATION HAS BEEN ACCEPTED";
            header('Location: barangay_certification.php');
        }else{
            $_SESSION['status'] = "THE REQUEST HAS BEEN DECLINED";
            header('Location: barangay_certification.php');
        }
    }else{
        echo "Error occured.";
    }


?>