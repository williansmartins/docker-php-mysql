<?php

#phpinfo();

$con = mysqli_connect("db", "root", "root3", "sys") or die(mysqli_error);

echo "Database connected!";

$con->close();

?>