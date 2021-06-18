<?php
    include "../config/connection.php";
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    if( $conn === false ) {
        echo "Koneksi Gagal</br>";
        die( print_r( sqlsrv_errors(), true));
    }

    $nup = $_POST['nup'];
    $kdBrg = $_POST['kdBrg'];
    $pic = $_POST['pic'];
    $queryKdBrg = "(SELECT kdBrg from Barang WHERE kdBrg='$kdBrg')";
    $queryPic = "(SELECT id from Users WHERE id='$pic')";
    $tsql = "INSERT INTO Inventory values('$nup', '$kdBrg', '$pic')";
    $stmt = sqlsrv_query( $conn, $tsql);
    if( $stmt === false ) {
        echo "Error in executing query.</br>";
        die( print_r( sqlsrv_errors(), true));
    }

header('location:../daftar_inventory.php');
sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn);
?>