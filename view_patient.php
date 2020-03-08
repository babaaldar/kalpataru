<!DOCTYPE html>
<html>
<head>
    <?php

    include "include/connection.php";
    include "include/html_head.php";
    include "include/checkuser.php";

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
                        <h1>View Patient</h1>
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
                    <div class="col-sm-12">
                        <div class="card card-primary">

                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm" role="form">
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-head-fixed table-striped">
                                        <thead>
                                        <tr>
                                            <th>UHID Number</th>
                                            <th>SSA Number</th>
                                            <th>Aadhar No.</th>
                                            <th>Patient Name</th>
                                            <th>View Detail</th>
                                            <th>Update Patient</th>
                                            <th>Delete Patient</th>
                                        </tr>
                                        <tbody>
                                        <?php

                                        $profilerootpath="include/profile/";
                                        $res_pending = mysqli_query($con, "SELECT * FROM patient_details order by pid desc");

                                        while ($row = mysqli_fetch_assoc($res_pending)) {                                            
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


                                            echo "<tr>";
                                            echo "<td>" . $row['uhidno'] . "</td>";
                                            echo "<td>" . $row['ssano'] . "</td>";
                                            echo "<td>" . $row['adharnumber'] . "</td>";
                                            echo "<td>" . $row['patientname'] . "</td>";

                                            echo "<td>";
                                            echo "<button type='button' class='btn btn-link btn-danger btn-block' data-toggle = 'modal' data-target = '#studentdetails-" . $row['pid'] . "' style='color: white'> View </button>
											<div class=\"modal fade\" id='studentdetails-" . $row['pid'] . "'>
                                             <div class=\"modal-dialog modal-lg\">
                                              <div class=\"modal-content\">
                                               <div class=\"modal-header\">
                                                <h4 class=\"modal-title\">Patient Details</h4>
                                                  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">&times;</span>
                                                  </button>
                                                </div>
                                                <div class=\"modal-body\">
                                                  <div class=\"card card-primary\">
                                                    <div class=\"card-body\">
                                                      <div class=\"form-group\">
                                                        <label for=\"profile\">Profile Photo</label>
                                                         <img src='".$profilerootpath.$row['profile_p']."' class=\"form-control\" id=\"profile\" name=\"profile\"
                                                         type=\"file\" style=\"width:100px;height:100px;\">
                                                      </div>
                                                      <div class=\"form-group\">
                                                        <label for=\"uhidno\">UHID Number</label>
                                                          <input    value='" . $row['uhidno'] . "' disabled class=\"form-control\" id=\"uhidno\" name=\"uhidno\"
                                                             placeholder=\"Enter UHID Number\" type=\"text\" disabled>
                                                      </div>
                                                      <div class=\"form-group\">
                                                        <label for=\"ssano\">SSA Number</label>
                                                          <input  value='" . $row['ssano'] . "' disabled class=\"form-control\" id=\"ssano\" name=\"ssano\"
                                                           placeholder=\"Enter SSA Number\" type=\"text\" disabled>
                                                      </div>
                                                      <div class=\"form-group\">
                                        <label for=\"adharnumber\">Aadhar Number</label>
                                        <input  value='" . $row['adharnumber'] . "' disabled class=\"form-control\" id=\"adharnumber\" min=\"0\" name=\"adharnumber\"
                                               placeholder=\"Enter Adhar Number\"
                                               type=\"number\" disabled>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group\">
                                                <label for=\"patientname\">Name</label>
                                                <input  value='" . $row['patientname'] . "' disabled class=\"form-control\" id=\"patientname\" name=\"patientname\"
                                                       placeholder=\"Enter Patient Name\"
                                                       type=\"text\" disabled>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group\">
                                                <label for=\"patientphone\">Phone Number</label>
                                                <input  value='" . $row['patientphone'] . "' disabled class=\"form-control\" id=\"patientphone\" name=\"patientphone\"
                                                       placeholder=\"Enter Patient Phone\"
                                                       type=\"number\">
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group\">
                                                <label for=\"patientage\">Age</label>
                                                <input  value='" . $row['patientage'] . "' disabled class=\"form-control\" id=\"patientage\" name=\"patientage\"
                                                       placeholder=\"Enter Patient Age\"
                                                       type=\"text\">
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6\">

                                            <div class=\"form-group\">
                                                <label for=\"patientgender\">Gender</label>
                                                <select disabled class=\"form-control\" id=\"patientgender\" name=\"patientgender\">
                                                      <option value=\"\">" . $row['patientgender'] . "</option>
                                                 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"patientaddress\">Patient Address</label>
                                        <textarea  value=''  disabled disabled class=\"form-control\" id=\"patientaddress\"
                                                  name=\"patientaddress\" placeholder=\"Enter Patient Address\"
                                                  rows=\"4\"
                                        >" . $row['patientaddress'] . "</textarea>
                                    </div>

                                    <div class=\"form-group\">
                                        <label for=\"patientsymptoms\">Symptoms</label>
                                        <textarea  value=''  disabled class=\"form-control\" id=\"patientsymptoms\"
                                                  name=\"patientsymptoms\" placeholder=\"Enter Sympotoms\"
                                                  rows=\"4\"
                                        >" . $row['patientsymptoms'] . "</textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <div class=\"row\">
                                            <div class=\"col-sm-2\">
                                                <div class=\"custom-control custom-checkbox\">
                                                    <input   disabled class=\"custom-control-input disabled\" id=\"bpcheckbox\"
                                                           name=\"bpcheckbox\" type=\"checkbox\" " . $checkbox1 . "
                                                           value=\"bp\">
                                                    <label class=\"custom-control-label\" for=\"bpcheckbox\"> BP</label>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-2\">
                                                <div class=\"custom-control custom-checkbox\">
                                                    <input   disabled class=\"custom-control-input disabled\" id=\"sugarcheckbox\"
                                                           name=\"sugarcheckbox\" type=\"checkbox\" " . $checkbox2 . " 
                                                           
                                                           
                                                           value=\"sugar\">
                                                    <label class=\"custom-control-label\"
                                                           for=\"sugarcheckbox\">Sugar</label>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-2\">
                                                <div class=\"custom-control custom-checkbox\">
                                                    <input  disabled class=\"custom-control-input disabled\" id=\"heartcheckbox\"
                                                           name=\"heartcheckbox\" type=\"checkbox\" " . $checkbox3 . "
                                                           value=\"heart\">
                                                    <label class=\"custom-control-label\"
                                                           for=\"heartcheckbox\">Heart</label>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-2\">
                                                <div class=\"custom-control custom-checkbox\">
                                                    <input  disabled class=\"custom-control-input disabled\" id=\"kidneycheckbox\"
                                                           name=\"kidneycheckbox\" type=\"checkbox\" " . $checkbox4 . "
                                                           value=\"heart\">
                                                    <label class=\"custom-control-label\"
                                                           for=\"kidneycheckbox\">Kidney</label>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-2\">
                                                <div class=\"custom-control custom-checkbox\">
                                                    <input   disabled class=\"custom-control-input disabled\" id=\"paralysischeckbox\"
                                                           name=\"paralysischeckbox\"
                                                           type=\"checkbox\" " . $checkbox5 . "
                                                           value=\"heart\">
                                                    <label class=\"custom-control-label\" for=\"paralysischeckbox\">Paralysis</label>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-2\">
                                                <div class=\"custom-control custom-checkbox\">
                                                    <input   disabled class=\"custom-control-input disabled\" id=\"thyroidcheckbox\"
                                                           name=\"thyroidcheckbox\"
                                                           type=\"checkbox\" " . $checkbox6 . "
                                                           value=\"heart\">
                                                    <label class=\"custom-control-label\"
                                                           for=\"thyroidcheckbox\">Thyroid</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group\">
                                                <label for=\"patientbloodgroup\">Blood Group</label>
                                                <select disabled class=\"form-control\" id=\"patientbloodgroup\"
                                                        name=\"patientbloodgroup\">
                                                    <option value=\"\">" . $row['patientbloodgroup'] . "</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group\">
                                                <label for=\"patienthb\">Hb</label>
                                                <input  value='" . $row['patienthb'] . "' disabled class=\"form-control\" id=\"patienthb\" name=\"patienthb\"
                                                       placeholder=\"Enter Patient Hb\"
                                                       type=\"text\">
                                            </div>
                                        </div>

                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-4\">
                                            <div class=\"form-group\">
                                                <label for=\"patientkft\">KFT</label>
                                                <input  value='" . $row['patientkft'] . "' disabled class=\"form-control\" id=\"patientkft\" name=\"patientkft\"
                                                       placeholder=\"Enter Details\"
                                                       type=\"text\">
                                            </div>
                                        </div>
                                        <div class=\"col-sm-4\">

                                            <div class=\"form-group\">
                                                <label for=\"patientecg\">ECG</label>
                                                <input  value='" . $row['patientecg'] . "' disabled class=\"form-control\" id=\"patientecg\" name=\"patientecg\"
                                                       placeholder=\"Enter Details\"
                                                       type=\"text\">
                                            </div>
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <div class=\"form-group\">
                                                <label for=\"patienteco\">ECHO</label>
                                                <input  value='" . $row['patienteco'] . "' disabled class=\"form-control\" id=\"patienteco\" name=\"patienteco\"
                                                       placeholder=\"Enter Details\"
                                                       type=\"text\">
                                            </div>
                                        </div>
                                    </div>
<div class=\"form-group\">
                                        <label for=\"patientdiagnosis\">Diagnosis</label>
                                        <textarea  value=''  disabled class=\"form-control\" id=\"patientdiagnosis\"
                                                  name=\"patientdiagnosis\" placeholder=\"Enter Details\"
                                                  rows=\"4\"
                                        >" . $row['patientdiagnosis'] . "</textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"patienttreatment\">Treatment</label>
                                        <textarea  value=''  disabled class=\"form-control\" id=\"patienttreatment\"
                                                  name=\"patienttreatment\" placeholder=\"Enter Details\"
                                                  rows=\"4\"
                                        >" . $row['patienttreatment'] . "</textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"patientpriscription\">Plan</label>
                                        <textarea  value=''  disabled class=\"form-control\" id=\"patientpriscription\"
                                                  name=\"patientpriscription\" placeholder=\"Enter Details\"
                                                  rows=\"4\"
                                        >" . $row['patientpriscription'] . "</textarea>
                                    </div>

                                    <div class=\"form-group\">
                                        <label for=\"patientspecialadvise\">Special Advice</label>
                                        <textarea  value=''  disabled class=\"form-control\" id=\"patientspecialadvise\"
                                                  name=\"patientspecialadvise\" placeholder=\"Enter Details\"
                                                  rows=\"4\"
                                        >" . $row['patientspecialadvise'] . "</textarea>
                                    </div>

                                </div>
                                </div>
                     



            </div>
            <div class=\"modal-footer justify-content-between\">
              <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
             
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
 
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

												
                                            </td>";
                echo "<td> <a href='updatePatient.php?pid=".$row['pid']."' class=\"btn btn-danger btn-block\" style=\"color: white\">Update</a></td>";
                echo "<td> <a herf=\"#\" class=\"btn btn-danger btn-block\" style=\"color: white\"  name=".$row['pid']." onClick=\"scrollToBottom(event)\">Delete</a></td>"; 
                                            
                                        }
                                        ?>

                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
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

<script src="./include/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="./include/plugins/jquery-validation/additional-methods.min.js"></script>

<!--   Core JS Files   -->
<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap-material-design.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Plugin for the momentJs  -->
<script src="assets/js/plugins/moment.min.js"></script>
<!--  Plugin for Sweet Alert -->
<script src="assets/js/plugins/sweetalert2.js"></script>
<!-- Forms Validations Plugin -->
<script src="assets/js/plugins/jquery.validate.min.js"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="assets/js/plugins/bootstrap-selectpicker.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="assets/js/plugins/jquery.dataTables.min.js"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="assets/js/plugins/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="assets/js/plugins/fullcalendar.min.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="assets/js/plugins/jquery-jvectormap.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="assets/js/plugins/nouislider.min.js"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="assets/js/plugins/arrive.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/demo/demo.js"></script>
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
    
    function scrollToBottom(event) {

    var pid = event.target.name;
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                type: 'POST',
                url: 'deletePatient.php',
                data: {patientid: pid}
            }).done(function (data) {
                console.log(data);
                if (data == "error") {
                    swal("Error!", "Erro occur try again!", "error");
                } else {
                    swal("Deleted!", "Patient Successfully deleted!", "success");
                    setTimeout(function () {
                        window.location.href = "view_patient.php";
                    }, 1000);
                }
            }).fail(function () {
                alert("Error occur. Try again later");
            });

        }
    })
    }
</script>

</body>
</html>