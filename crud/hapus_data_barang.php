<?php
    include "../config/connection.php";
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    if( $conn === false ) {
        echo "Koneksi Gagal</br>";
        die( print_r( sqlsrv_errors(), true));
    }
    $kdBrg = $_GET['kdBrg'];
    $tsql = "DELETE Barang WHERE kdBrg = '$kdBrg'";
    $stmt = sqlsrv_query( $conn, $tsql);
    if( $stmt === false ) {
        echo "Error in executing query.</br>";
        die( print_r( sqlsrv_errors(), true));
    }else{
        $message="Hapus barang berhasil";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    header('location:../daftar_barang.php');
    sqlsrv_free_stmt( $stmt);
    sqlsrv_close( $conn);
?>