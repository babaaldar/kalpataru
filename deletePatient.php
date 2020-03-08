<?php
    include "include/connection.php";
    include "include/connection.php";
    include "include/html_head.php";
    include "include/checkuser.php";
    include "include/footer.php";
    include "include/javascripts.php";
    include "include/nav_header.php";
    include "include/doctor_sidebar.php";
    
    if (isset($_POST['patientid'])) {
        $pid1=$_POST['patientid'];
      $sql_delete="DELETE FROM patient_details where pid='".$pid1."'";
      mysqli_query($con, $sql_delete);
    }
    else {
      echo "error";
    }
?>