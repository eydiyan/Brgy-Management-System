<?php
    define('DBINFO','mysql:host=localhost;dbname=barangay_profiling');
    define('DBUSER','root');
    define('DBPASS','admin1234');

    function performQuery($query){
        $con = new PDO(DBINFO,DBUSER,DBPASS);
        $stmt = $con->prepare($query);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

    function fetchAll($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->query($query);
        return $stmt->fetchAll();
    }

?>