<?php
    $_SERVER="localhost";
    $USER="root";
    $PASSWORD="";
    $DATABASE="hotelphp";
    $conn = mysqli_connect($_SERVER,$USER,$PASSWORD,$DATABASE);
    mysqli_query($conn,'set names "utf8"');
    ?>  