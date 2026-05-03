<?php
    $hostName   = "127.0.0.1";
    $dbName     = "webtech";
    $dbUserName = "root";
    $dbPassword = "";

    function getConnection() {
        $con = mysqli_connect(
            $GLOBALS['hostName'],
            $GLOBALS['dbUserName'],
            $GLOBALS['dbPassword'],
            $GLOBALS['dbName']
        );

        if (!$con) {
            die(json_encode([
                'status'  => false,
                'message' => 'DB connection failed: ' . mysqli_connect_error()
            ]));
        }

        return $con;
    }
?>