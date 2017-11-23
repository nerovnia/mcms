<?php
require_once ("include/cmysqlconn.php");


function api_setip($comp, $ip) {
    $CMySqlConnection = new CMySQLConn();
    $connection = $CMySqlConnection->getMySQLConnection();
    $sql = "INSERT INTO workstations (cname, ip, ctime) VALUES(\"" . $comp . "\",\"" . $ip . "\", now());";
    try {
        $result = $connection->exec($sql);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}