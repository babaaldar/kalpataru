<html>
    <head>
        <?php
          include "include/javascripts.php";
        ?>
            <?php

                include "include/connection.php";
                include "include/html_head.php";
                include "include/checkuser.php";

            ?>
            <?php
                    include "include/nav_header.php";
                    include "include/doctor_sidebar.php";
                    include "include/footer.php";
            ?>
        <script src="./include/plugins/jquery-validation/jquery.validate.min.js"></script>
        <script src="./include/plugins/jquery-validation/additional-methods.min.js"></script>


        <script src="assets/js/plugins/moment.min.js"></script>
        <!--  Plugin for Sweet Alert -->
        <script src="assets/js/plugins/sweetalert2.js"></script>
        <!-- Forms Validations Plugin -->
        <script src="assets/js/plugins/jquery.validate.min.js"></script>
        <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
        <script src="assets/js/plugins/jquery.bootstrap-wizard.js"></script>
        <script>
               function scrollToBottom(event) {
                var pid = event.target.name;
                console.log("PID: "+pid);
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
    </head>
    <body>

    </body>
</html>