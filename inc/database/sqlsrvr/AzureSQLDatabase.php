<?php

class AzureSQLDatabase {
    private $serverName;
    private $database;
    private $username;
    private $password;
    private $pdo;

    public function __construct($serverName, $database, $username, $password) {
        $this->serverName = $serverName;
        $this->database = $database;
        $this->username = $username;
        $this->password = $password;

        $this->connect();
    }

    private function connect() {
        try {
            $dsn = "sqlsrv:Server=$this->serverName;Database=$this->database";
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $this->logError($e->getMessage());
            die("Database connection failed. Please try again later.");
        }
    }

    private function logError($message) {
        // Log errors to a file
        file_put_contents('db_errors.log', date('Y-m-d H:i:s') . " - " . $message . PHP_EOL, FILE_APPEND);
    }

    private function sanitizeInput($data) {
        // Simple sanitization (can be expanded as needed)
        return htmlspecialchars(strip_tags($data));
    }

    // Create
    public function create($table, $data) {
        try {
            $columns = implode(", ", array_keys($data));
            $placeholders = ":" . implode(", :", array_keys($data));
            $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";

            $stmt = $this->pdo->prepare($sql);

            foreach ($data as $key => &$value) {
                $value = $this->sanitizeInput($value);
                $stmt->bindParam(":$key", $value);
            }

            return $stmt->execute();
        } catch (PDOException $e) {
            $this->logError($e->getMessage());
            return false;
        }
    }

    // Read with pagination
    public function read($table, $conditions = [], $limit = null, $offset = null) {
        try {
            $sql = "SELECT * FROM $table";

            if (!empty($conditions)) {
                $clauses = [];
                foreach ($conditions as $column => $value) {
                    $clauses[] = "$column = :$column";
                }
                $sql .= " WHERE " . implode(" AND ", $clauses);
            }

            if ($limit) {
                $sql .= " OFFSET $offset ROWS FETCH NEXT $limit ROWS ONLY";
            }

            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($conditions);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $this->logError($e->getMessage());
            return false;
        }
    }

    // Update
    public function update($table, $data, $conditions) {
        try {
            $setClauses = [];
            foreach ($data as $column => $value) {
                $setClauses[] = "$column = :$column";
            }
            $setPart = implode(", ", $setClauses);

            $conditionClauses = [];
            foreach ($conditions as $column => $value) {
                $conditionClauses[] = "$column = :condition_$column";
            }
            $conditionPart = implode(" AND ", $conditionClauses);

            $sql = "UPDATE $table SET $setPart WHERE $conditionPart";

            $stmt = $this->pdo->prepare($sql);

            foreach ($data as $key => &$value) {
                $value = $this->sanitizeInput($value);
                $stmt->bindParam(":$key", $value);
            }

            foreach ($conditions as $key => &$value) {
                $value = $this->sanitizeInput($value);
                $stmt->bindParam(":condition_$key", $value);
            }

            return $stmt->execute();
        } catch (PDOException $e) {
            $this->logError($e->getMessage());
            return false;
        }
    }

    // Delete
    public function delete($table, $conditions) {
        try {
            $clauses = [];
            foreach ($conditions as $column => $value) {
                $clauses[] = "$column = :$column";
            }
            $sql = "DELETE FROM $table WHERE " . implode(" AND ", $clauses);

            $stmt = $this->pdo->prepare($sql);

            foreach ($conditions as $key => &$value) {
                $value = $this->sanitizeInput($value);
                $stmt->bindParam(":$key", $value);
            }

            return $stmt->execute();
        } catch (PDOException $e) {
            $this->logError($e->getMessage());
            return false;
        }
    }

    // Begin Transaction
    public function beginTransaction() {
        $this->pdo->beginTransaction();
    }

    // Commit Transaction
    public function commit() {
        $this->pdo->commit();
    }

    // Rollback Transaction
    public function rollback() {
        $this->pdo->rollBack();
    }
}



// Example Usage
$db = new AzureSQLDatabase(getenv('DB_SERVER'), getenv('DB_DATABASE'), getenv('DB_USERNAME'), getenv('DB_PASSWORD'));

// Create
$db->create('users', ['name' => 'John Doe', 'email' => 'john.doe@example.com']);

// Read with pagination
$users = $db->read('users', [], 10, 0);
print_r($users);

// Update
$db->update('users', ['name' => 'Jane Doe'], ['email' => 'john.doe@example.com']);

// Delete
$db->delete('users', ['email' => 'john.doe@example.com']);
