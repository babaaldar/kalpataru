<?php
include("include/connection.php");

$sql = "SELECT * FROM doctors WHERE user_id='" . $_POST['uname'] . "'    and password='" . $_POST["password"] . "'";
$res = mysqli_query($con, $sql);

if (mysqli_num_rows($res) == 1) {
    $row = $res->fetch_assoc();
    if ($row["type"] == "Doc") {

        $_SESSION["login"] = "True";

        echo '
    <script>
    window.location.href="./addpatient.php";
    </script>
    ';
    }

} else {
    echo '
    <script>
    alert("Wrong user name or password");
    window.location.href="./index.php";
    </script>
    ';

}
?>
