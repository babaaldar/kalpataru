<?php
include "include/connection.php";
?>
<!DOCTYPE html>
<html>
<head>
    <?php
    include "include/html_head.php";
    include "include/checkuser.php";

    if (!isset($_SESSION['login'])) {
        header("Location: index.php");
        exit();
    }
    ?>
    <link rel="stylesheet" href="./include/plugins/fontawesome-free/css/fontawesome.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
    <?php
    include "include/nav_header.php";
    include "include/doctor_sidebar.php";
    ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Update Patient</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <?php
         $profilerootpath="include/profile/";
         $pid=$_GET['pid'];
         $sql_query="SELECT * FROM patient_details where pid='$pid'";
         $res_update = mysqli_query($con, $sql_query);
         while ($row = mysqli_fetch_assoc($res_update)) {
            
            $old_profile_photo=$row['profile_p'];
            
            $checkbox1 = '';
            $checkbox2 = '';
            $checkbox3 = '';
            $checkbox4 = '';
            $checkbox5 = '';
            $checkbox6 = '';

             
            if (!empty($row['bpcheckbox'])) {
                $checkbox1 = "checked";
            }

            if (!empty($row['sugarcheckbox'])) {
                $checkbox2 = "checked";
            }

            if (!empty($row['heartcheckbox'])) {
                $checkbox3 = "checked";
            }


            if (!empty($row['kidneycheckbox'])) {
                $checkbox4 = "checked";
            }

            if (!empty($row['paralysischeckbox'])) {
                $checkbox5 = "checked";
            }

            if (!empty($row['thyroidcheckbox'])) {
                $checkbox6 = "checked";
            }
        ?>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- Small boxes (Stat box) -->
                <!--                <div class="container-fluid">-->
                <!--                    <div class="row mb-2">-->
                <!--                        <div class="col-12">-->
                <!--                            <h3 class="text-center">Add Patient</h3>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->

                <!-- /.container-fluid -->
                <div class="row">
                    <div class="col-sm-8 offset-sm-2">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Patient Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm" role="form" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="uhidno">UHID Number *</label>
                                        <input class="form-control" id="uhidno" name="uhidno"
                                        value="<?php echo $row['uhidno']?>" placeholder="Enter UH ID Number" type="text" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="ssano">SSA Number</label>
                                        <input class="form-control" id="ssano" name="ssano"
                                        value="<?php echo $row['ssano']?>" placeholder="Enter SSA Number" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="adharnumber">Aadhar Number</label>
                                        <input class="form-control" id="adharnumber" min="0" name="adharnumber"
                                        value="<?php echo $row['adharnumber']?>" placeholder="Enter Aadhar Number"
                                               type="number">
                                    </div>
                                    <div class="row">
                                       <div class="col-sm-3">
                                          <div class="form-group">
                                              <img src="<?php echo $profilerootpath.$row['profile_p']?>" class="form-control" id="profile1" name="profile1" 
                                                type="file" style="margin-left: auto; margin-right: auto; width:100px;height:100px;">
                                         </div>
                                       </div>
                                       <div class="col-sm-9">
                                          <div class="form-group">                      
                                             <label for="profile">Profile photo</label>                       
                                             <input class="form-control" id="profile" min="0" name="profile"
                                             placeholder="Upload photo" type="file" accept="image/*">
                                           </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="patientname">Name *</label>
                                                <input class="form-control" id="patientname" name="patientname"
                                                value="<?php echo $row['patientname']?>" placeholder="Enter Patient Name"
                                                       type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="patientphone">Phone Number</label>
                                                <input class="form-control" id="patientphone" name="patientphone"
                                                value="<?php echo $row['patientphone']?>" placeholder="Enter Phone Number"
                                                       type="number">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="patientage">Age</label>
                                                <input class="form-control" id="patientage" name="patientage"
                                                value="<?php echo $row['patientage']?>" placeholder="Enter Age"
                                                       type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <label for="patientgender">Gender</label>
                                                <select class="form-control" id="patientgender" name="patientgender">
                                                    <option value="">Select</option>
                                                    <option value="Male" <?php if($row['patientgender']=="Male") echo "selected"; ?>>Male</option>
                                                    <option value="Female" <?php if($row['patientgender']=="Female") echo "selected"; ?>>Female</option>
                                                    <option value="Other" <?php if($row['patientgender']=="Other") echo "selected"; ?>>Other</option>
                                                </select>
                                            </div>
                                        </div>        
                                    </div>
                                    <div class="form-group">
                                        <label for="patientaddress">Address</label>
                                        <textarea class="form-control" id="patientaddress"
                                                  name="patientaddress" placeholder="Enter Address"
                                                  rows="4"><?php echo $row['patientaddress']?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="patientsymptoms">Symptoms</label>
                                        <textarea class="form-control" id="patientsymptoms"
                                                  name="patientsymptoms" placeholder="Enter Sympotoms"
                                                  rows="4"
                                        ><?php echo $row['patientsymptoms']?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="bpcheckbox"
                                                           name="bpcheckbox" type="checkbox"
                                                           value="bp" <?php echo $checkbox1 ?>>
                                                    <label class="custom-control-label" for="bpcheckbox">BP</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="sugarcheckbox"
                                                           name="sugarcheckbox" type="checkbox"
                                                           value="sugar" <?php echo $checkbox2 ?>>
                                                    <label class="custom-control-label"
                                                           for="sugarcheckbox">Sugar</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="heartcheckbox"
                                                           name="heartcheckbox" type="checkbox"
                                                           value="heart" <?php echo $checkbox3 ?>>
                                                    <label class="custom-control-label"
                                                           for="heartcheckbox">Heart</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="kidneycheckbox"
                                                           name="kidneycheckbox" type="checkbox"
                                                           value="heart" <?php echo $checkbox4 ?>>
                                                    <label class="custom-control-label"
                                                           for="kidneycheckbox">Kidney</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="paralysischeckbox"
                                                           name="paralysischeckbox"
                                                           type="checkbox"
                                                           value="heart" <?php echo $checkbox5 ?>>
                                                    <label class="custom-control-label" for="paralysischeckbox">Paralysis</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="thyroidcheckbox"
                                                           name="thyroidcheckbox"
                                                           type="checkbox"
                                                           value="heart" <?php echo $checkbox6 ?>>
                                                    <label class="custom-control-label"
                                                           for="thyroidcheckbox">Thyroid</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="patientbloodgroup">Blood Group</label>
                                                <select class="form-control" id="patientbloodgroup"
                                                        name="patientbloodgroup">
                                                    <option value="">Select</option>
                                                    <option value="A+" <?php if($row['patientbloodgroup']=="A+") echo "selected"; ?>>A+</option>
                                                    <option value="A-" <?php if($row['patientbloodgroup']=="A-") echo "selected"; ?>>A-</option>
                                                    <option value="B+" <?php if($row['patientbloodgroup']=="B+") echo "selected"; ?>>B+</option>
                                                    <option value="B-" <?php if($row['patientbloodgroup']=="B-") echo "selected"; ?>>B-</option>
                                                    <option value="AB+" <?php if($row['patientbloodgroup']=="AB+") echo "selected"; ?>>AB+</option>
                                                    <option value="AB-" <?php if($row['patientbloodgroup']=="AB-") echo "selected"; ?>>AB-</option>
                                                    <option value="O+" <?php if($row['patientbloodgroup']=="O+") echo "selected"; ?>>O+</option>
                                                    <option value="O-" <?php if($row['patientbloodgroup']=="O-") echo "selected"; ?>>O-</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="patienthb">Hb</label>
                                                <input class="form-control" id="patienthb" name="patienthb"
                                                value="<?php echo $row['patienthb']?>" placeholder="Enter Patient HB"
                                                       type="text">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="patientkft">KFT</label>
                                                <input class="form-control" id="patientkft" name="patientkft"
                                                value="<?php echo $row['patientkft']?>" placeholder="Enter Details"
                                                       type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">

                                            <div class="form-group">
                                                <label for="patientecg">ECG</label>
                                                <input class="form-control" id="patientecg" name="patientecg"
                                                value="<?php echo $row['patientecg']?>" placeholder="Enter Details"
                                                       type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="patienteco">ECHO</label>
                                                <input class="form-control" id="patienteco" name="patienteco"
                                                value="<?php echo $row['patienteco']?>" placeholder="Enter Details"
                                                       type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="patientdiagnosis">Diagnosis</label>
                                        <textarea class="form-control" id="patientdiagnosis"
                                                  name="patientdiagnosis" placeholder="Enter Details"
                                                  rows="4"
                                        ><?php echo $row['patientdiagnosis']?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="patienttreatment">Treatment</label>
                                        <textarea class="form-control" id="patienttreatment"
                                                  name="patienttreatment" placeholder="Enter Details"
                                                  rows="4"
                                        ><?php echo $row['patienttreatment']?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="patientpriscription">Plan</label>
                                        <textarea class="form-control" id="patientpriscription"
                                                  name="patientpriscription" placeholder="Enter Details"
                                                  rows="4"
                                        ><?php echo $row['patientpriscription']?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="patientspecialadvise">Special Advice</label>
                                        <textarea class="form-control" id="patientspecialadvise"
                                                  name="patientspecialadvise" placeholder="Enter Details"
                                                  rows="4"
                                        ><?php echo $row['patientspecialadvise']?></textarea>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <input class="btn btn-primary" type="submit" value="Update Patient" name="update_patient">
                                    <a class="btn btn-primary" style="background-color:red" href="view_patient.php">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div><!-- /.container-fluid -->
        </section>
         <?php } ?>
        <!-- /.content -->
    </div>

    <?php
    include "include/footer.php";
    ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
</div>


<?php
include "include/javascripts.php";
?>

<script src="./include/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="./include/plugins/jquery-validation/additional-methods.min.js"></script>

<script>
    $(function () {

        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });


</script>

<?php
if (isset($_POST['update_patient'])) {

    //$sql_query_photo="SELECT profile_p from `patient_details` where pid='$pid'";
    //mysqli_query($con, $sql_query_photo)


    $uhidno = $_POST['uhidno'];
    $ssano = $_POST['ssano'];
    $adharnumber = $_POST['adharnumber'];

      
      $tmpFilePath = basename($_FILES['profile']['tmp_name']);
      $target_dir = "include/profile/";
      $target_file = $target_dir.time().'_'. basename($_FILES["profile"]["name"]);
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      if($tmpFilePath != ""){
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" && $imageFileType != "GIF" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed."; 
                $profile=$old_profile_photo;
                }
            else{
                if(move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)){
                $profile = time().'_'.basename($_FILES['profile']['name']);
                echo "<alert>The Patient got added";
                }
                else{
                    echo "The Pofile file is not uploaded";
                }
             }
         }
         else{
            $profile=$old_profile_photo;
         }
    $patientname = $_POST['patientname'];
    $patientphone = $_POST['patientphone'];
    $patientage = $_POST['patientage'];
    $patientgender = $_POST['patientgender'];
    $patientaddress = $_POST['patientaddress'];
    $patientsymptoms = $_POST['patientsymptoms'];


    //=============checkbox isset=======================

    if (isset($_POST['bpcheckbox'])) {
        $bpcheckbox = $_POST['bpcheckbox'];
    } else {
        $bpcheckbox = '';
    }

    if (isset($_POST['sugarcheckbox'])) {
        $sugarcheckbox = $_POST['sugarcheckbox'];
    } else {
        $sugarcheckbox = '';
    }

    if (isset($_POST['heartcheckbox'])) {
        $heartcheckbox = $_POST['heartcheckbox'];
    } else {
        $heartcheckbox = '';
    }

    if (isset($_POST['kidneycheckbox'])) {
        $kidneycheckbox = $_POST['kidneycheckbox'];
    } else {
        $kidneycheckbox = '';
    }

    if (isset($_POST['paralysischeckbox'])) {
        $paralysischeckbox = $_POST['paralysischeckbox'];
    } else {
        $paralysischeckbox = '';
    }

    if (isset($_POST['thyroidcheckbox'])) {
        $thyroidcheckbox = $_POST['thyroidcheckbox'];
    } else {
        $thyroidcheckbox = '';
    }

    //================================================


    $patientdiagnosis = $_POST['patientdiagnosis'];
    $patientbloodgroup = $_POST['patientbloodgroup'];
    $patienthb = $_POST['patienthb'];
    $patientkft = $_POST['patientkft'];
    $patientecg = $_POST['patientecg'];
    $patienteco = $_POST['patienteco'];
    $patienttreatment = $_POST['patienttreatment'];
    $patientpriscription = $_POST['patientpriscription'];
    $patientspecialadvise = $_POST['patientspecialadvise'];

    $query = "UPDATE `patient_details` SET uhidno = '$uhidno', ssano = '$ssano', adharnumber = '$adharnumber', profile_p = '$profile', patientname ='$patientname', patientphone ='$patientphone', patientage ='$patientage', patientgender = '$patientgender', patientaddress = '$patientaddress', patientsymptoms = '$patientsymptoms', bpcheckbox ='$bpcheckbox', sugarcheckbox ='$sugarcheckbox', heartcheckbox ='$heartcheckbox', kidneycheckbox ='$kidneycheckbox', paralysischeckbox ='$paralysischeckbox', thyroidcheckbox = '$thyroidcheckbox', patientdiagnosis = '$patientdiagnosis', patientbloodgroup = '$patientbloodgroup', patienthb ='$patienthb', patientkft ='$patientkft', patientecg ='$patientecg', patienteco ='$patienteco', patienttreatment ='$patienttreatment', patientpriscription ='$patientpriscription', patientspecialadvise ='$patientspecialadvise' where pid='$pid'";
    if(mysqli_query($con, $query))
    {
        echo "<script>alert('Patient details Updated successfully');</script>";
        header("Location: view_patient.php");
    }
    else{
        echo '<script>alert("Welcome to Geeks for Geeks");</script>';
        header("Location: addpatient.php");
    }

}

?>


</body>
</html>