<?php
require_once ("include/cmysqlconn.php");

$CMySqlConnection = new CMySQLConn();

$connection = $CMySqlConnection->getMySQLConnection();
createTables($connection);
echo "install";
unset($CMySqlConnection);

function createTables($connection)
{
    $filename = 'db/installtables.json';
    $fd = fopen($filename, "r");
    if (! $fd)
        exit("Can't open file " . $filename . "!");
    $str = fread($fd, filesize($filename));
    fclose($fd);
    $jsdec = json_decode($str);
    foreach ($jsdec as $e) {
        $dbtablename = $e->{'tablename'};
        $sql = $e->{'sql'};
        
        try {
            $result = $connection->exec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

?>


