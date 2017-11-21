<?php

class CMySQLConn
{

    public function __construct()
    {
        $this->setMySQLPDOConnection();
    }

    public function getMySQLConnection()
    {
        return $this->connection;
    }

    public function __destruct()
    {
        $this->connection = null;
    }

    private $servername;

    private $username;

    private $password;

    private $dbname;

    private $connection;

    private function readAuthMySQL()
    {
        $filename = 'pwd/mysqlauth.json';
        $fd = fopen($filename, "r");
        if (! $fd)
            exit("Can't open file" . $filename . " !");
        $str = fread($fd, filesize($filename));
        fclose($fd);
        $jsdec = json_decode($str);
        
        $this->servername = $jsdec[1]->{'servername'};
        $this->username = $jsdec[1]->{'username'};
        $this->password = $jsdec[1]->{'password'};
        $this->dbname = $jsdec[1]->{'dbname'};
    }

    private function setMySQLPDOConnection()
    {
        $this->readAuthMySQL();
        try {
            $this->connection = new PDO("mysql:dbname=$this->dbname;host=$this->servername", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if (! $this->connection) {
                die("Connection failed!");
            }
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
}

?>
