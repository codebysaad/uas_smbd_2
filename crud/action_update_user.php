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
    $tsql = "UPDATE Users SET username='$username', pasword='$pasword', access='$access' WHERE id='$id'";
    $stmt = sqlsrv_query( $conn, $tsql);
    if( $stmt === false ) {
        echo "Error in executing query.</br>";
        die( print_r( sqlsrv_errors(), true));
    }else{
        echo "Berhasil Update";
        echo "ID: $id, Username: $username, pasword=$pasword, access=$access";
    }

header('location:../daftar_user.php');
sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn);
?>