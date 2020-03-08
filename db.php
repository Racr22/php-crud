<?php
    session_start();
    $conexion= mysqli_connect(
        'us-cdbr-iron-east-04.cleardb.net',
        'b2ced8a60c1f5b',
        '5e3208fb',
        'heroku_dde248a1a85b114'
    );
if(!$conexion){
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>
