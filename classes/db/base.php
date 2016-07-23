<?php

class db_base extends PDO {

    public function __construct($options = array()) {
        parent::__construct(
                core()->config()->getmysql_server(), core()->config()->getmysql_user(), core()->config()->getmysql_pw(), $options
        );
    }

    public function __destruct() {
        unset($this);
    }

    public function select($statement, $fetchMethode = 'fetchAll', $method = PDO::FETCH_OBJ) {
        $stmt = $this->query($statement);
        return $stmt->$fetchMethode($method);
    }

//    public function select($what, $from, $where = null, $fetchMethode = 'fetchAll', $method = PDO::FETCH_OBJ) {
//        if ($where) {
//            $stmt = $this->query("SELECT " . $what . " FROM " . $from . " WHERE " . $where);
//        } else {
//            $stmt = $this->query("SELECT " . $what . " FROM " . $from);
//        }
//        return $stmt->$fetchMethode($method);
//    }

    public function update($statement, $data) {
        $stmt = $this->prepare($statement);
        $stmt->execute($data);
        return $this->lastInsertId();
    }

    public function delete($statement) {
        $stmt = $this->prepare($statement);
        $stmt->execute();
    }

}
