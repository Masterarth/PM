<?php

class pm_userhandler {

    static private $instance = null;

    static public function getInstance() {
        if (null === self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    private function __construct() {
        
    }

    private function createUser($id) {
        $result = core()->db()->select("select u.l_name,u.reg_datum,u.aktiv,m.id,m.u_id,m.nachname,m.vorname,m.b_id,m.abteil from users u, mitarbeiter m where u.id =" . $id . " and m.u_id = u.id", "fetch");
        $user = new pm_user();
        $user->setId($result->id);
        $user->setB_id($result->b_id);
        $user->setU_id($result->u_id);
        $user->setL_name($result->l_name);
        $user->setVorname($result->vorname);
        $user->setNachname($result->nachname);
        $user->setAbteil($result->abteil);
        $user->setReg_datum($result->reg_datum);
        $user->setAktiv($result->aktiv);
        return $user;
    }

    public function getUser() {
        return $_SESSION["user"];
    }

    public function verfiyUser($username, $password) {
        if (!$this->checkUser()) {
            $result = core()->db()->select("select passwort,id from users where l_name ='" . $username . "'", "fetch");
            if ($result) {
                if (password_verify($password, $result->passwort)) {
                    $_SESSION["user"] = $this->createUser($result->id);
                    return true;
                }
            }
        } else {
            return true;
        }
        return false;
    }

    public function checkUser() {
        if (isset($_SESSION["user"])) {
            return true;
        }
        return false;
    }

}
