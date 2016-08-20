<?php

/**
 * Handels the Datebase Connection and gives the Possibility to
 * Update, Select, Delete, Insert Data 
 * @author Artur Stalbaum
 * @since 11.08.2016
 */
class db_base extends PDO {

    /**
     * Constructor creates the Object
     * @param array $options
     */
    public function __construct($options = array()) {
        parent::__construct(
                core()->config()->getmysql_server(), core()->config()->getmysql_user(), core()->config()->getmysql_pw(), $options
        );
    }

    /**
     * Destructor 
     */
    public function __destruct() {
        unset($this);
    }

    /**
     * Select in the Database
     * @param string $statement
     * @param type $fetchMethode
     * @param type $method
     * @return type
     */
    public function select($statement, $fetchMethode = 'fetchAll', $method = PDO::FETCH_OBJ) {
        $stmt = $this->query($statement);
        return $stmt->$fetchMethode($method);
    }

    /**
     * Updates / Inserts into the Database
     * @param string $statement
     * @param array $data
     * @return int ID
     */
    public function update($statement, $data = null) {
        $stmt = $this->prepare($statement);
        if ($data != null) {
            $stmt->execute($data);
        } else {
            $stmt->execute();
        }
        return $this->lastInsertId();
    }

    /**
     * Updates direct without "Prepared Statements"
     * @param string $statement
     * @return int ID
     */
    public function update_direct($statement) {
        $stmt = $this->prepare($statement);
        $stmt->execute();
        return $this->lastInsertId();
    }

    /**
     * Deletes a Dataset in the Database
     * @param string $statement
     */
    public function delete($statement) {
        $stmt = $this->prepare($statement);
        $stmt->execute();
    }

}
