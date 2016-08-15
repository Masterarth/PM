<?php

/**
 * Changeing some Logical Stuff + Adding Coding Guidelines
 * @since 30.07.2016
 * @author Lukas
 */
class pm_userhandler {

    /**
     * Important for the Singelton Pattern
     * @var Instace Userhandler 
     */
    static private $instance = null;

    /**
     * Implementing the Singelton Pattern to the Class
     * @return Instance
     */
    static public function getInstance() {
        if (null === self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    /**
     * Constructor of the Class
     */
    private function __construct() {
        
    }

    /**
     * Creates a new User in the Database
     * @param type $id
     * @return boolean|\pm_user
     */
    public function createUser($id) {
        $result = core()->db()->select("select u.l_name,u.reg_datum,u.aktiv,m.id,m.u_id,m.nachname,m.vorname,m.b_id,r.id as r_id,r.rolle from users u, mitarbeiter m, rolle r where u.id =" . $id . " and m.u_id = u.id and r.id = m.r_id", "fetch");
        if ($result) {
            $user = new pm_user();
            $user->setId($result->id);
            $user->setB_id($result->b_id);
            $user->setU_id($result->u_id);
            $user->setR_id($result->r_id);
            $user->setL_name($result->l_name);
            $user->setVorname($result->vorname);
            $user->setNachname($result->nachname);
            $user->setReg_datum($result->reg_datum);
            $user->setAktiv($result->aktiv);
            $user->setRolle($result->rolle);
            return $user;
        }
        return false;
    }

    /**
     * Returns the User from the Session
     * @return User
     */
    public function getUser() {
        return $_SESSION["user"];
    }

    /**
     * Checks if the User is allowed to access the System
     * @param string $username
     * @param string $password
     * @return boolean 
     */
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

    /**
     * Checks if a User exists
     * @return boolean
     */
    public function checkUser() {
        if (isset($_SESSION["user"])) {
            if ($_SESSION["user"]->isAktiv() == 1) {
                core()->smarty()->assign("userCheck", true);
                return true;
            }
        }
        core()->smarty()->assign("userCheck", false);
        return false;
    }

    /**
     * Returns all possible Users from the Database
     * @return ResultSet Users
     */
    public function getAllUser() {
        $result = core()->db()->select("select * from users u, mitarbeiter m where m.u_id = u.id");
        return $result;
    }

}
