<?php
class DataBase {
    public function db_connect() {
        $connection = new mysqli('localhost', 'root', '', 'sec2');
        if ($connection->connect_errno > 0) {
            die('Unable to connect to database [' . $db->connect_error . ']');
        } else {
            return $connection;
        }
    }

    function selectColumn($query) {
        $connection = $this->db_connect();
        $row = $coconnectionnn->query($query)->fetch_array();
        $result = $row[0];
        return $result;
    }

    function query($query) {
        $connection = $this->db_connect();
        $result = $connection->query($query);
        if (!$result) {
            die("An error with the server has occurred:" . mysqli_error($connection));
        } else {
            return $result;
        }
    }
}
