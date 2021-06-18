<?php
    include "../config/connection.php";
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    if( $conn === false ) {
        echo "Koneksi Gagal</br>";
        die( print_r( sqlsrv_errors(), true));
    }

    $id = $_POST['id'];
    $username = $_POST['username'];
    $pasword = $_POST['pasword'];
    $access = $_POST['access'];
    $tsql = "INSERT INTO Users values('$id','$username','$pasword', '$access')";
    $stmt = sqlsrv_query( $conn, $tsql);
    if( $stmt === false ) {
        echo "Error in executing query.</br>";
        die( print_r( sqlsrv_errors(), true));
    }

header('location:../daftar_user.php');
sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn);
?>