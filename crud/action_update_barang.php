<?php
    include "../config/connection.php";
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    if( $conn === false ) {
        echo "Koneksi Gagal</br>";
        die( print_r( sqlsrv_errors(), true));
    }

    $kdBrg = $_POST['kdBrg'];
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $kondisi = $_POST['kondisi'];
    $tsql = "UPDATE Barang SET nama='$nama', jenis='$jenis', kondisi='$kondisi' WHERE kdBrg='$kdBrg')";
    $stmt = sqlsrv_query( $conn, $tsql);
    if( $stmt === false ) {
        echo "Error in executing query.</br>";
        die( print_r( sqlsrv_errors(), true));
    }

header('location:../daftar_barang.php');
sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn);
?>