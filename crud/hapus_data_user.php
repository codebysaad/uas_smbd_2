<?php
    include "../config/connection.php";
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    if( $conn === false ) {
        echo "Koneksi Gagal</br>";
        die( print_r( sqlsrv_errors(), true));
    }
    $id = $_GET['id'];
    $tsql = "DELETE Users WHERE id = '$id'";
    $stmt = sqlsrv_query( $conn, $tsql);
    if( $stmt === false ) {
        echo "Error in executing query.</br>";
        die( print_r( sqlsrv_errors(), true));
    }else{
        $message="Hapus user berhasil";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    header('location:../daftar_user.php');
    sqlsrv_free_stmt( $stmt);
    sqlsrv_close( $conn);
?>