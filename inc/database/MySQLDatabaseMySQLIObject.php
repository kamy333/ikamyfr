<?php

class MySQLDatabaseMySQLIObject
{
    private $connection;
    public $last_query;

    public function __construct()
    {
        $this->open_connection();
    }

    public function open_connection()
    {
        $this->connection = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

        if ($this->connection->connect_error) {
            die("Database connection failed: " . $this->connection->connect_error);
        }

        $this->connection->set_charset("utf8");
    }

    public function close_connection()
    {
        if (isset($this->connection)) {
            $this->connection->close();
        }
    }

    public function query($sql)
    {
        $this->last_query = $sql;
//        echo BR.$sql.BR;
        $result = $this->connection->query($sql);
        $this->confirm_query($result);
        return $result;
    }

    public function query2_array($sql, $where = '')
    {
        if (!empty($where)) {
            $sql .= " WHERE " . $this->escape_value($where);
        }

        $this->last_query = $sql;
        $stmt = $this->connection->prepare($sql);
        if ($stmt) {
            $stmt->execute();
            $result = $stmt->get_result();
            $response = [];

            while ($row = $result->fetch_assoc()) {
                $response[] = $row;
            }
            $stmt->close();

            return $response;
        }
        return [];
    }

    public function query_with_like($sql, $query)
    {
        $this->last_query = $sql;
        $stmt = $this->connection->prepare($sql);
        if ($stmt) {
            $likeQuery = "%" . $query . "%";
            $stmt->bind_param("s", $likeQuery);
            $stmt->execute();
            $result = $stmt->get_result();
            $response = [];

            while ($row = $result->fetch_assoc()) {
                $response[] = $row;
            }
            $stmt->close();

            return $response;
        }
        return [];
    }

    public function escape_value($string)
    {
        return $this->connection->real_escape_string($string);
    }

    public function fetch_array($result_set)
    {
        return $result_set->fetch_assoc();
    }

    public function num_rows($result_set)
    {
        return $result_set->num_rows;
    }

    public function insert_id()
    {
        return $this->connection->insert_id;
    }

    public function affected_rows()
    {
        return $this->connection->affected_rows;
    }

    private function confirm_query($result)
    {
        if (!$result) {
            $output = "<br><b><span style='color: deepskyblue'>Query failed.</span></b><br>" . $this->connection->error;
            $output .= "<br><b><span style='color: deepskyblue'>Last query executed:</span></b> <br>" . $this->last_query;
            die($output);
        }
    }

    public function free_result($result)
    {
        $result->free();
    }
}

// Usage
$database = new MySQLDatabaseMySQLIObject();

?>
