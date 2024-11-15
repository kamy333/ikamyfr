<?php
//require_once("../config/config.php");

class MySQLDatabasePDO
{
    private $connection;
    public $last_query;

    function __construct()
    {
        $this->open_connection();
    }

    public function open_connection()
    {
        try {
            $this->connection = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME.";charset=utf8", DB_USER, DB_PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public function close_connection()
    {
        $this->connection = null;
    }

    public function query($sql)
    {
        $this->last_query = $sql;
        try {
            $result = $this->connection->query($sql);
        } catch (PDOException $e) {
            $this->confirm_query(false, $e->getMessage());
        }
        return $result;
    }

    public function query2(string $sql, array $params=[])
    {
        $this->last_query = $sql;
        try {
            $stmt = $this->connection->prepare($sql);
            $stmt->execute($params);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


        } catch (PDOException $e) {
            $this->confirm_query(false, $e->getMessage());
        }
        return $result;

    }

    public function escape_value($string)
    {
        return $this->connection->quote($string);
    }

    public function fetch_array($result_set)
    {
        return $result_set->fetch(PDO::FETCH_ASSOC);
    }

    public function num_rows($result_set)
    {
        return $result_set->rowCount();
    }

    public function insert_id()
    {
        return $this->connection->lastInsertId();
    }

    public function affected_rows()
    {
        return $this->connection->rowCount();
    }

    private function confirm_query($result, $errorMessage = "")
    {
        global $Nav;
        if ($Nav->server_name == "localhost") {
            $output = "<br><b><span style='color: deepskyblue'>Query failed.</span></b><br>" . $errorMessage;
            $output .= "<br><b><span style='color: deepskyblue'>Last query executed SQL:</span></b><br>" . $this->last_query;
        } else {
            $output = "<br><b><span style='color: deepskyblue'>Query failed. Contact system admin.</span></b><br>";
        }

        if (!$result) {
            log_queries('Query failed', $this->last_query);
            die($output);
        }
    }

    public function free_result($result)
    {
        $result->closeCursor();
    }
}

$database = new MySQLDatabasePDO();

