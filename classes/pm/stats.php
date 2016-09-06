<?php

/**
 * Handels all the logical for the Stats of the Projectmanagement System
 *
 * @author Lukas Adler
 */
class pm_stats {

    /**
     * Number of Empl.
     * @var int 
     */
    private $i_numberEmployees;

    /**
     * Rolls + Numer of Empl.
     * @var array 
     */
    private $rolesAndNumbersOfEmployees = array();

    /**
     * Number of Prj
     * @var int 
     */
    private $i_numberProjects;

    /**
     * Stats + Number of Prj
     * @var array 
     */
    private $statsAndNumberOfProjects = array();

    /**
     * Sum of all Projects (Cost)
     * @var double 
     */
    private $d_costSumProject;

    /**
     * Sum of all Projects (Earnings)
     * @var double 
     */
    private $d_earningsSumProject;

    /**
     * Average Costs of a Project
     * @var double 
     */
    private $d_avgCostsProject;

    /**
     * Average Earnings of a Project
     * @var double 
     */
    private $d_avgEarningsProject;

    /**
     * Average Time of a Project
     * @var double 
     */
    private $d_avgTimeProject;

    /**
     * Singelton Pattern
     * @var Object
     */
    static private $instance = null;

    /**
     * Singelton Pattern
     * @return Object
     */
    static public function getInstance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Constructor for creating the Stuff
     */
    private function __construct() {
        $this->i_numberEmployees = $this->getNumberOfEmployees();
        $this->i_numberProjects = $this->getNumberOfProjects();
        $this->d_avgCostsProject = $this->getAverageCostsOfAProject();
        $this->d_avgEarningsProject = $this->getAverageEarningsOfAProject();
        $this->d_avgCostsProject = $this->getAverageCostsOfAProject();
        $this->rolesAndNumbersOfEmployees = $this->getDifferentTypesAndNumbersOfEmployees();
        $this->statsAndNumberOfProjects = $this->getNumberAndStatusOfProjects();
        $this->d_costSumProject = $this->getCostsOfAllProjects();
        $this->d_earningsSumProject = $this->getEarningsOfAllProjects();
        $this->d_avgTimeProject = $this->getAverageTimeOfAProject();
    }

    /**
     * Singelton Pattern
     */
    private function __clone() {
        
    }

    /**
     * Returns the Number of Employees in the System
     * @return int
     */
    public function getNumberOfEmployees() {
        $val = core()->db()->select("select count(*) from mitarbeiter", "fetch", PDO::FETCH_ASSOC);
        return $val["count(*)"];
    }

    /**
     * Returns the different roles and the number
     * @return multidimension array
     */
    public function getDifferentTypesAndNumbersOfEmployees() {
        $val = core()->db()->select("select count(r.rolle) as anzahl, r.rolle from mitarbeiter m left join rolle r on m.r_id = r.id group by r.rolle");
        return $val;
    }

    /**
     * Returns the Number of Projects from the Database
     * @return int
     */
    public function getNumberOfProjects() {
        $val = core()->db()->select("SELECT count(*) from projekt", "fetch", PDO::FETCH_ASSOC);
        return $val["count(*)"];
    }

    /**
     * Returns the differentStates and Number of Projects
     * @return array Counter + Status of a Project
     */
    public function getNumberAndStatusOfProjects() {
        $val = core()->db()->select("SELECT COUNT(*) as anzahl, projstatus.status FROM projekt, projstatus WHERE projekt.s_id = projstatus.id GROUP BY projstatus.status");
        return $val;
    }

    /**
     * Sum of all Costs of the Projects
     * @return double
     */
    public function getCostsOfAllProjects() {
        $val = core()->db()->select("SELECT SUM(projekt.mon_kosten) FROM projekt", "fetch", PDO::FETCH_ASSOC);
        return $val["SUM(projekt.mon_kosten)"];
    }

    /**
     * Sum of all Earnings of the Projects
     * @return double
     */
    public function getEarningsOfAllProjects() {
        $val = core()->db()->select("SELECT SUM(projekt.mon_nutzen) FROM projekt", "fetch", PDO::FETCH_ASSOC);
        return $val["SUM(projekt.mon_nutzen)"];
    }

    /**
     * Average Costs of a Project
     * @return double
     */
    public function getAverageCostsOfAProject() {
        $val = core()->db()->select("SELECT AVG(projekt.mon_kosten) FROM projekt", "fetch", PDO::FETCH_ASSOC);
        return $val["AVG(projekt.mon_kosten)"];
    }

    /**
     * Average Earnings of a Project
     * @return double
     */
    public function getAverageEarningsOfAProject() {
        $val = core()->db()->select("SELECT AVG(projekt.mon_nutzen) FROM projekt", "fetch", PDO::FETCH_ASSOC);
        return $val["AVG(projekt.mon_nutzen)"];
    }

    /**
     * Average Time Of a Project in Days
     * @return double
     */
    public function getAverageTimeOfAProject() {
        $val = core()->db()->select("SELECT AVG(DATEDIFF(projekt.vor_end_term,projekt.vor_sta_term)) FROM projekt", "fetch", PDO::FETCH_ASSOC);
        return $val["AVG(DATEDIFF(projekt.vor_end_term,projekt.vor_sta_term))"];
    }

    /**
     * Returns Teams and Hours (Expected Hours)
     * @return object
     */
    public function getTeamsAndHours() {
        $val = core()->db()->select("SELECT team.t_name, leistung.max_stunden FROM team, leistung WHERE team.id = leistung.t_id");
        return $val;
    }

    /**
     * Returns Teams and Hours (Done Hours)
     * @return object
     */
    public function getTeamsAndActualHours() {
        $val = core()->db()->select("SELECT team.t_name, SUM(projteam.stunden) FROM projteam, team WHERE projteam.t_id = team.id GROUP BY team.t_name");
        return $val;
    }

    /*
     * GETTER FOR THE VARIABLES
     */

    function getI_numberEmployees() {
        return $this->i_numberEmployees;
    }

    function getRolesAndNumbersOfEmployees() {
        return $this->rolesAndNumbersOfEmployees;
    }

    function getI_numberProjects() {
        return $this->i_numberProjects;
    }

    function getStatsAndNumberOfProjects() {
        return $this->statsAndNumberOfProjects;
    }

    function getD_costSumProject() {
        return $this->d_costSumProject;
    }

    function getD_earningsSumProject() {
        return $this->d_earningsSumProject;
    }

    function getD_avgCostsProject() {
        return $this->d_avgCostsProject;
    }

    function getD_avgEarningsProject() {
        return $this->d_avgEarningsProject;
    }

    function getD_avgTimeProject() {
        return $this->d_avgTimeProject;
    }

}
