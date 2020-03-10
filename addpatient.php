<?php
include("include/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <?php
    include "include/html_head.php";
    include("include/checkuser.php");
    ?>

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
                        <h1>Add Patient</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

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
                                               placeholder="Enter UHID Number" type="text" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="ssano">SSA Number</label>
                                        <input class="form-control" id="ssano" name="ssano"
                                               placeholder="Enter SSA Number" type="text">
                                    </div>


                                    <div class="form-group">
                                        <label for="adharnumber">Aadhar Number</label>
                                        <input class="form-control" id="adharnumber" min="0" name="adharnumber"
                                               placeholder="Enter Aadhar Number"
                                               type="number">
                                    </div>

                                    <div class="form-group" style="position: relative; overflow: hidden; display: inline-block;">
                                        <label for="profile">Profile Photo</label>
                                        <input class="form-control" id="profile" min="0" name="profile"
                                               placeholder="Upload photo" type="file" accept="image/*">
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="patientname">Name *</label>
                                                <input class="form-control" id="patientname" name="patientname"
                                                       placeholder="Enter Patient Name"
                                                       type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="patientphone">Phone Number</label>
                                                <input class="form-control" id="patientphone" name="patientphone"
                                                       placeholder="Enter Phone Number"
                                                       type="number">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="patientage">Age</label>
                                                <input class="form-control" id="patientage" name="patientage"
                                                       placeholder="Enter Age"
                                                       type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">

                                            <div class="form-group">
                                                <label for="patientgender">Gender</label>
                                                <select class="form-control" id="patientgender" name="patientgender">
                                                    <option value="">Select</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="patientaddress">Address</label>
                                        <textarea class="form-control" id="patientaddress"
                                                  name="patientaddress" placeholder="Enter Address"
                                                  rows="4"
                                        ></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="patientsymptoms">Symptoms</label>
                                        <textarea class="form-control" id="patientsymptoms"
                                                  name="patientsymptoms" placeholder="Enter Sympotoms"
                                                  rows="4"
                                        ></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="bpcheckbox"
                                                           name="bpcheckbox" type="checkbox"
                                                           value="bp">
                                                    <label class="custom-control-label" for="bpcheckbox">BP</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="sugarcheckbox"
                                                           name="sugarcheckbox" type="checkbox"
                                                           value="sugar">
                                                    <label class="custom-control-label"
                                                           for="sugarcheckbox">Sugar</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="heartcheckbox"
                                                           name="heartcheckbox" type="checkbox"
                                                           value="heart">
                                                    <label class="custom-control-label"
                                                           for="heartcheckbox">Heart</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="kidneycheckbox"
                                                           name="kidneycheckbox" type="checkbox"
                                                           value="heart">
                                                    <label class="custom-control-label"
                                                           for="kidneycheckbox">Kidney</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="paralysischeckbox"
                                                           name="paralysischeckbox"
                                                           type="checkbox"
                                                           value="heart">
                                                    <label class="custom-control-label" for="paralysischeckbox">Paralysis</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="thyroidcheckbox"
                                                           name="thyroidcheckbox"
                                                           type="checkbox"
                                                           value="heart">
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
                                                    <option value="A+">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="AB-">AB-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="patienthb">Hb</label>
                                                <input class="form-control" id="patienthb" name="patienthb"
                                                       placeholder="Enter Patient HB"
                                                       type="text">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="patientkft">KFT</label>
                                                <input class="form-control" id="patientkft" name="patientkft"
                                                       placeholder="Enter Details"
                                                       type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">

                                            <div class="form-group">
                                                <label for="patientecg">ECG</label>
                                                <input class="form-control" id="patientecg" name="patientecg"
                                                       placeholder="Enter Details"
                                                       type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="patienteco">ECHO</label>
                                                <input class="form-control" id="patienteco" name="patienteco"
                                                       placeholder="Enter Details"
                                                       type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="patientdiagnosis">Diagnosis</label>
                                        <textarea class="form-control" id="patientdiagnosis"
                                                  name="patientdiagnosis" placeholder="Enter Details"
                                                  rows="4"
                                        ></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="patienttreatment">Treatment</label>
                                        <textarea class="form-control" id="patienttreatment"
                                                  name="patienttreatment" placeholder="Enter Details"
                                                  rows="4"
                                        ></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="patientpriscription">Plan</label>
                                        <textarea class="form-control" id="patientpriscription"
                                                  name="patientpriscription" placeholder="Enter Details"
                                                  rows="4"
                                        ></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="patientspecialadvise">Special Advice</label>
                                        <textarea class="form-control" id="patientspecialadvise"
                                                  name="patientspecialadvise" placeholder="Enter Details"
                                                  rows="4"
                                        ></textarea>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <input class="btn btn-primary" type="submit" value="Add Patient" name="add_patient">
                                    <button class="btn btn-primary" type="reset" value="Reset">Clear</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div><!-- /.container-fluid -->
        </section>
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
if (isset($_POST['add_patient'])) {
    $uhidno = $_POST['uhidno'];
    $ssano = $_POST['ssano'];
    $adharnumber = $_POST['adharnumber'];

      $profile = time().'_'.basename($_FILES['profile']['name']);
      $tmpFilePath = basename($_FILES['profile']['tmp_name']);
      $target_dir = "include/profile/";
      $target_file = $target_dir.time().'_'. basename($_FILES["profile"]["name"]);
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      if($tmpFilePath != ""){
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" && $imageFileType != "GIF" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed."; 
                $profile='default.png';
                }
            else{
                if(move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)){
                echo "<alert>The Patient got added";
                }
                else{
                    echo "The Pofile file is not image";
                }
             }
         }
         else{
            $profile='default.png';
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

    $query = "INSERT INTO `patient_details` 
(`uhidno`, `ssano`, `adharnumber`,`profile_p`, `patientname`, `patientphone`, `patientage`, `patientgender`, `patientaddress`, `patientsymptoms`, `bpcheckbox`, `sugarcheckbox`, `heartcheckbox`, `kidneycheckbox`, `paralysischeckbox`, `thyroidcheckbox`, `patientdiagnosis`, `patientbloodgroup`, `patienthb`, `patientkft`, `patientecg`, `patienteco`, `patienttreatment`, `patientpriscription`, `patientspecialadvise`) 
VALUES
('$uhidno', '$ssano', '$adharnumber', '$profile', '$patientname', '$patientphone', '$patientage', '$patientgender', '$patientaddress', '$patientsymptoms', '$bpcheckbox', '$sugarcheckbox', '$heartcheckbox', '$kidneycheckbox', '$paralysischeckbox', '$thyroidcheckbox', '$patientdiagnosis', '$patientbloodgroup', '$patienthb', '$patientkft', '$patientecg','$patienteco', '$patienttreatment', '$patientpriscription', '$patientspecialadvise');
";

    if(mysqli_query($con, $query))
    {
        //echo "<script>alert('Patient details added successfully');</script>";
        //header("Location: addpatient.php");
    }
    else{
        //echo '<script>alert("Welcome to Geeks for Geeks");</script>';
        //header("Location: addpatient.php");
    }

}

?>


</body>
</html>