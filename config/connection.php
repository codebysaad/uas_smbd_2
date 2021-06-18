<?php
    $serverName="DESKTOP-M77L49D\SQLBPSIMAN";
    $uid = "saad";
    $pwd = "saadadmin";
    $connectionInfo = array( "UID"=>$uid,
                             "PWD"=>$pwd,
                             "Database"=>"db_inventory",
                             "CharacterSet"=>"UTF-8");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    // if($conn){
    //     echo "Connection Successful";
    // }else{
    //     echo "Connection Failed";
    // }
?>