<?php

/**
 * PM Class which handels all the Functions and Variables
 * 
 * @author Lukas Adler
 * @since 15.08.2016
 */
class pm_projekt {

    /**
     * Title of the Project
     * @var string 
     */
    private $s_title;

    /**
     * Description of the Project
     */
    private $s_description;

    /**
     * Added Time
     * @var type 
     */
    private $s_creationDate;

    /**
     * Creator of the Project
     * @var string 
     */
    private $s_creator;

    /**
     * Database ID
     * @var int 
     */
    private $i_databaseId;

    /**
     * Authorization Step 1 
     * @var bool 
     */
    private $b_permitS1;

    /**
     * Authorization Step 2
     * @var bool 
     */
    private $b_permitS2;

    /**
     * Authorization Step 3 
     * @var bool 
     */
    private $b_permitS3;

    /**
     * Target Cross Step 1
     * @var string 
     */
    private $s_targetCross1;

    /**
     * Target Cross Step 2
     * @var string 
     */
    private $s_targetCross2;

    /**
     * Target Cross Step 3
     * @var string 
     */
    private $s_targetCross3;

    /**
     * Target Cross Step 4
     * @var string 
     */
    private $s_targetCross4;

    /**
     * Holds No Targes
     * @var string 
     */
    private $s_noTargets;

    /**
     * General Conditions
     * @var string 
     */
    private $s_generalConditions;

    /**
     * Communication Concept
     * @var string 
     */
    private $s_communicationConcept;

    /**
     * System Description
     * @var string
     */
    private $s_systemDescription;

    /**
     * Risk for the Project
     * @var string 
     */
    private $s_projectRisk;

    /**
     * Costs for the Project
     * @var double 
     */
    private $d_moneyCosts;

    /**
     * Earnings for the Project
     * @var double 
     */
    private $d_monesEarnings;

    /**
     * Describe the Earnings
     * @var string 
     */
    private $s_earningsString;

    /**
     * Date of the Expected Start Time
     * @var string 
     */
    private $s_expectedStartTime;

    /**
     * Date of the Expected End Time
     * @var string 
     */
    private $s_expectedEndTime;

    /**
     * Date of the Real Start Time
     * @var string 
     */
    private $s_realStartTime;

    /**
     * Date of the Real End Time
     * @var string 
     */
    private $s_realEndTime;

    /**
     * Real Money Budget
     * @var double 
     */
    private $d_realMoneyBudget;

    /**
     * Expected Money Budget
     * @var double 
     */
    private $d_expectedMoneyBudget;

    /**
     * Capital Costs for the Capital Value Method
     * @var double 
     */
    private $d_capitalCosts;

    /**
     * Creator (Ersteller) ID
     * @var int 
     */
    private $e_id;

    /**
     * Department (Abteilungs) ID
     * @var int 
     */
    private $a_id;

    /**
     * Project Manager (Projektleiter) ID
     * @var int 
     */
    private $l_id;

    /**
     * Arranger (Bearbeiter) ID
     * @var int 
     */
    private $b_id;

    /**
     * State (Status) ID
     * @var id 
     */
    private $s_id;

    /**
     * Remark for the Project
     * @var string  
     */
    private $s_remark;

    /**
     * Amartization Rate
     * @var string 
     */
    private $s_amortizationRate;

    /**
     * Holds the actual Milestones
     * @var Array of "Milestone" Class 
     */
    private $milestones = array();

    /**
     * Holds the acutal Capitalflows
     * @var Array of "Capitalflow" Class 
     */
    private $capitalflow = array();

    /**
     *
     * @var Array of "Involved Teams" Class 
     */
    private $involvedTeams = array();

    /**
     * Constructor for a Project
     */
    public function __construct() {
        
    }

    /**
     * Loads the Project from the Database
     * @param int $p_id
     */
    public function load($p_id) {
        //Sets the General Informations for a Project
        $result = core()->db()->select("select * from firma where id ='" . $p_id . "'", "fetch");
        $this->setTitle($result->titel);
        $this->setDescription($result->beschreibung);
        $this->setEarningsString($result->nutzen);
        $this->setCapitalCosts($result->kap_kosten);
        $this->setMoneyCosts($result->mon_kosten);
        $this->setMonesEarnings($result->mon_nutzen);
        $this->setAmortizationRate($result->amorti_zeit);
        $this->setExpectedEndTime($result->vor_end_term);
        $this->setExpectedStartTime($result->vor_sta_term);
        $this->setRealEndTime($result->tat_end_term);
        $this->setRealStartTime($result->tat_sta_term);
        $this->setTargetCross1($result->p_ziel1);
        $this->setTargetCross2($result->p_ziel2);
        $this->setTargetCross3($result->p_ziel3);
        $this->setTargetCross4($result->p_ziel4);
        $this->setCreationDate($result->erstell_datum);
        $this->setCreator($result->auftraggeber);
        $this->setPermitS1($result->genehmigung_E1);
        $this->setPermitS2($result->genehmigung_E2);
        $this->setPermitS3($result->genehmigung_E3);
        $this->setDatabaseId($result->id);
        $this->setGeneralConditions($result->rahmbeding);
        $this->setNoTargets($result->nicht_ziel);
        $this->setE_id($result->e_id);
        $this->setA_id($result->a_id);
        $this->setL_id($result->l_id);
        $this->setB_id($result->b_id);
        $this->setRemark($result->bemerkung);

        //Adds Milestones to the Project
        $this->getMilestonesInformations($p_id);

        //Adds Capital Values for the Project
        $this->getCapitalValueInformations($p_id);

        //Adds Involved Teams for the Project
        $this->getInvolvedTeamsInformations($p_id);
    }

    /**
     * Gets the Informations for the Involved Teams Informations
     * @param int $p_id
     */
    private function getInvolvedTeamsInformations($p_id) {
        $resultInvolvedTeams = core()->db()->select("select projteam.*,team.t_name from projteam,team where team.id = projteam.t_id and p_id='" . $p_id . "'");
        if (count($resultInvolvedTeams) > 0) {
            foreach ($resultInvolvedTeams as $result) {
                $it = new pm_projektteam();
                $it->setDatabaseId($result->id);
                $it->setTeamName($result->t_name);
                $it->setProjektName("");
                $it->setHours($result->stunden);
                $it->setProjectId($p_id);
                $it->setTeamId($result->t_id);
                $this->setInvolvedTeams($it);
            }
        }
    }

    /**
     * Get the Capitalvalue Informations for a Project
     * @param int $p_id
     */
    private function getCapitalValueInformations($p_id) {
        $resultCapitalValue = core()->db()->select("select * from kapitalwerte where p_id ='" . $p_id . "'");
        if (count($resultCapitalValue) > 0) {
            foreach ($resultCapitalValue as $result) {
                $cv = new pm_capitalvalue();
                $cv->setYear($result->jahr);
                $cv->setInputMoneyVal($result->einzahlung);
                $cv->setOutputMoneyVal($result->auszahlung);
                $cv->setRent($result->zinssatz);
                $this->setCapitalflow($cv);
            }
        }
    }

    /**
     * Reads the Milestones for the Project
     * @param int $p_id
     */
    private function getMilestonesInformations($p_id) {
        $resultMilestones = core()->db()->select("select * from meilensteine where p_id ='" . $p_id . "'");
        if (count($resultMilestones) > 0) {
            foreach ($resultMilestones as $result) {
                $ms = new pm_milestone();
                $ms->setDatabaseId($result->id);
                $ms->setFinished($result->erfuellt);
                $ms->setMilestoneName($result->meilenstein);
                $ms->setMilestoneNr($result->ms_nummer);
                $this->setMilestone($ms);
            }
        }
    }

    /**
     * Updates the Project in the Database
     * --> Updates the Project "ID"
     */
    public function update() {
        $values = array();
        $values["creator"] = $this->getCreator();
        $values["creationDate"] = $this->getcreationDate();
        $values["e1"] = $this->getPermitS1();
        $values["e2"] = $this->getPermitS2();
        $values["e3"] = $this->getPermitS3();
        $values["z1"] = $this->getTargetCross1();
        $values["z2"] = $this->getTargetCross2();
        $values["z3"] = $this->getTargetCross3();
        $values["z4"] = $this->getTargetCross4();
        $values["noTarget"] = $this->getNoTargets();
        $values["generalConditions"] = $this->getGeneralConditions();
        $values["system"] = $this->getSystemDescription();
        $values["communication"] = $this->getCommunicationConcept();
        $values["risk"] = $this->getProjectRisk();
        $values["eid"] = $this->getE_id();
        $values["aid"] = $this->getA_id();
        $values["lid"] = $this->getL_id();
        $values["bid"] = $this->getB_id();
        $values["tBudget"] = $this->getRealMoneyBudget();
        $values["pBudget"] = $this->getExpectedMoneyBudget();
        $values["sid"] = $this->getS_id();
        $values["vst"] = $this->getExpectedStartTime();
        $values["vet"] = $this->getExpectedEndTime();
        $values["tst"] = $this->getRealStartTime();
        $values["tet"] = $this->getRealEndTime();
        $values["desc"] = $this->getDescription();
        $values["nutzen"] = $this->getEarningsString();
        $values["amorti"] = $this->getAmortizationRate();
        $values["remark"] = $this->getRemark();
        $values["monCosts"] = $this->getMoneyCosts();
        $values["monEarnings"] = $this->getMonesEarnings();
        $values["capCosts"] = $this->getCapitalCosts();
        core()->db()->update("update projekt set titel=:title,"
                . "auftraggeber=:creator,"
                . "erstell_datum=:creationDate,"
                . "genehmigung_E1=:e1,"
                . "genehmigung_E2=:e2,"
                . "genehmigung_E3=:e3,"
                . "p_ziel1=:z1,"
                . "p_ziel2=:z2,"
                . "p_ziel3=:z3,"
                . "p_ziel4=:z4,"
                . "nicht_ziel=:noTarget,"
                . "rahmbeding=:generalConditions,"
                . "p_system=:system,"
                . "komm_konz=:communication,"
                . "risiko=:risk,"
                . "e_id=:eid,"
                . "a_id=:aid,"
                . "l_id=:lid,"
                . "b_id=:bid,"
                . "tat_budget_id=:tBudget,"
                . "plan_budget_id=:pBudget,"
                . "s_id=:sid,"
                . "vor_sta_term=:vst,"
                . "vor_end_term=:vet,"
                . "tat_sta_term=:tst,"
                . "tat_end_term=:tet,"
                . "beschreibung=:desc,"
                . "nutzen=:nutzen,"
                . "amorti_zeit=:amorti,"
                . "bemerkung=:remark,"
                . "mon_kosten=:monCosts,"
                . "mon_nutzen=:monEarnings,"
                . "kap_kosten=:capCosts where id=" . $this->getDatabaseId(), $values);
    }

    /**
     * Creates a complete new Project
     */
    public function createProject() {
        $projectAntragArray = array(
            'p_titel' => null,
            'p_auftraggeber' => null,
            'bemerkung' => null,
            'p_ziel1' => null,
            'p_ziel2' => null,
            'p_ziel3' => null,
            'p_ziel4' => null,
            'nicht_ziel' => null,
            'amorti_zeit' => null,
            'genehm_E1' => 0,
            'genehm_E2' => 0,
            'genehm_E3' => 0,
            'rahmbeding' => null,
            'beschreibung' => null,
            'nutzen' => null,
            'tat_sta_datum' => null,
            'tat_end_datum' => null,
            'vor_sta_datum' => null,
            'vor_end_datum' => null,
            'risiko' => null,
            'komm_konz' => null,
            'p_system' => null,
            'p_erstelldatum' => null,
            'mon_kosten' => null,
            'mon_nutzen' => null,
            'kap_kosten' => null,
            'e_id' => null,
            'a_id' => null,
            'l_id' => null,
            'mon_kosten' => null,
            'mon_nutzen' => null,
            'kap_kosten' => null,
            'b_id' => null,
            's_id' => null
        );

        if ($this->getMoneyCosts() >= 0) {
            $kosten = $this->getMoneyCosts();
            switch ($kosten) {
                case $kosten <= 5000:
                    $projectAntragArray["genehm_E1"] = 0;
                    $projectAntragArray["genehm_E2"] = 1;
                    $projectAntragArray["genehm_E3"] = 1;
                    break;
                case $kosten <= 25000:
                    $projectAntragArray["genehm_E1"] = 0;
                    $projectAntragArray["genehm_E2"] = 0;
                    $projectAntragArray["genehm_E3"] = 1;
                    break;
                case $kosten <= 50000:
                    $projectAntragArray["genehm_E1"] = 0;
                    $projectAntragArray["genehm_E2"] = 0;
                    $projectAntragArray["genehm_E3"] = 0;
                    break;
            }
        }

        $projectAntragArray["p_titel"] = $this->getTitle();
        $projectAntragArray["vor_sta_datum"] = $this->getExpectedStartTime();
        $projectAntragArray["vor_end_datum"] = $this->getExpectedEndTime();
        $projectAntragArray["beschreibung"] = $this->getDescription();
        $projectAntragArray["rahmbeding"] = $this->getGeneralConditions();
        $projectAntragArray["komm_konz"] = $this->getCommunicationConcept();
        $projectAntragArray["nicht_ziel"] = $this->getNoTargets();
        $projectAntragArray["p_erstelldatum"] = date("Y-m-d");

        $projectAntragArray["e_id"] = $this->getE_id();
        $projectAntragArray["a_id"] = $this->getA_id();
        $projectAntragArray["l_id"] = $this->getL_id();
        $projectAntragArray["s_id"] = $this->getS_id();

        $projectAntragArray["p_ziel1"] = $this->getTargetCross1();
        $projectAntragArray["p_ziel2"] = $this->getTargetCross2();
        $projectAntragArray["p_ziel3"] = $this->getTargetCross3();
        $projectAntragArray["p_ziel4"] = $this->getTargetCross4();

        $projectAntragArray["mon_kosten"] = $this->getMoneyCosts();
        $projectAntragArray["mon_nutzen"] = $this->getMonesEarnings();
        $projectAntragArray["kap_kosten"] = $this->getCapitalCosts();

        $projectAntragArray["tat_sta_datum"] = $this->getRealStartTime();
        $projectAntragArray["tat_end_datum"] = $this->getRealEndTime();

        $pid = core()->db()->update(
                "insert into projekt (titel,auftraggeber,erstell_datum,genehmigung_E1,genehmigung_E2,genehmigung_E3,p_ziel1,p_ziel2,p_ziel3,p_ziel4,nicht_ziel,rahmbeding,p_system,komm_konz,risiko,beschreibung,tat_sta_term,tat_end_term,vor_sta_term,vor_end_term,nutzen,amorti_zeit,bemerkung,mon_kosten,mon_nutzen,kap_kosten, e_id, a_id, l_id,b_id,s_id) "
                . "values(:p_titel,:p_auftraggeber,:p_erstelldatum,:genehm_E1,:genehm_E2,:genehm_E3,:p_ziel1,:p_ziel2,:p_ziel3,:p_ziel4,:nicht_ziel,:rahmbeding,:p_system,:komm_konz,:risiko,:beschreibung,:tat_sta_datum,:tat_end_datum,:vor_sta_datum,:vor_end_datum,:nutzen,:amorti_zeit,:bemerkung,:mon_kosten,:mon_nutzen,:kap_kosten,:e_id, :a_id, :l_id, :b_id,:s_id)", $projectAntragArray);
    
        //Inserts Capital Value Stuff
        $this->insertCapitalValues($p_id);
        //Inserts the Milestones Stuff
        $this->insertMilestones($p_id);
    }
    
    /**
     * Insert into the Database Table
     * @param int $p_id
     */
    public function insertCapitalValues($p_id)
    {
        foreach ($this->capitalflow as $flow) {
                $cid = core()->db()->update("insert into kapitalwerte (p_id,jahr,zinssatz,einzahlung,auszahlung) values (:p_id,:jahr,:zins,:ein,:aus)", $flow->getArray($p_id));     
        }
    }
    
    /**
     * Insert into the Database Table
     * @param int $p_id
     */
    public function insertMilestones($p_id){
        foreach ($this->milestones as $ms){
            $mid = core()->db()->update("insert into meilensteine (p_id,ms_nummer,meilenstein,erfuellt) values(:p_id,:nr,:beschreibung,:checked)", $ms->getArray($p_id));
        }
    }
    
    /**
     * Insert into Involved Teams
     * @param type $p_id
     */
    public function insertInvolvedTeams($p_id){
        foreach ($this->involvedTeams as $team) {
            $tid = core()->db()->update("insert into projteam (t_id,p_id,stunden) values(:abteilung,:p_id,:wert)", $team->getArray($p_id));
        }
    }

    /**
     * Get Title
     * @return String
     */
    public function getTitle() {
        return $this->s_title;
    }

    /**
     * Get Description
     * @return String
     */
    public function getDescription() {
        return $this->s_description;
    }

    /**
     * Get String Date
     * @return String
     */
    public function getcreationDate() {
        return $this->s_creationDate;
    }

    /**
     * Get String Creator
     * @return String
     */
    public function getCreator() {
        return $this->s_creator;
    }

    /**
     * Get Database ID
     * @return int
     */
    public function getDatabaseId() {
        return $this->i_databaseId;
    }

    /**
     * Get Permission 1
     * @return bool
     */
    public function getPermitS1() {
        return $this->b_permitS1;
    }

    /**
     * Get Permission 2
     * @return bool
     */
    public function getPermitS2() {
        return $this->b_permitS2;
    }

    /**
     * Get Permission 3
     * @return bool
     */
    public function getPermitS3() {
        return $this->b_permitS3;
    }

    /**
     * Get Target Cross Method 1
     * @return String
     */
    public function getTargetCross1() {
        return $this->s_targetCross1;
    }

    /**
     * Get Target Cross Method 2
     * @return String
     */
    public function getTargetCross2() {
        return $this->s_targetCross2;
    }

    /**
     * Get Target Cross Method 3
     * @return String
     */
    public function getTargetCross3() {
        return $this->s_targetCross3;
    }

    /**
     * Get Target Cross Method 4
     * @return String
     */
    public function getTargetCross4() {
        return $this->s_targetCross4;
    }

    /**
     * Get No Targets for the Project
     * @return String
     */
    public function getNoTargets() {
        return $this->s_noTargets;
    }

    /**
     * Gets the Array with the Milestones
     * @return Array of Milestones Class
     */
    function getMilestones() {
        return $this->milestones;
    }

    /**
     * Gets the Capital Flow Array
     * @return Array of the complete Capital Flow
     */
    function getCapitalflow() {
        return $this->capitalflow;
    }

    /**
     * Gets the Involved Teams Array
     * @return Array of all Involved Teams
     */
    function getInvolvedTeams() {
        return $this->involvedTeams;
    }

    /**
     * Get General Conditions for the Project
     * @return String
     */
    public function getGeneralConditions() {
        return $this->s_generalConditions;
    }

    /**
     * Get Communication Concept of the Project
     * @return String
     */
    public function getCommunicationConcept() {
        return $this->s_communicationConcept;
    }

    /**
     * Get System Description of the Project
     * @return String
     */
    public function getSystemDescription() {
        return $this->s_systemDescription;
    }

    /**
     * Get the Risk of the Project
     * @return String
     */
    public function getProjectRisk() {
        return $this->s_projectRisk;
    }

    /**
     * Costs of the Project
     * @return double
     */
    public function getMoneyCosts() {
        return $this->d_moneyCosts;
    }

    /**
     * Earinings of the Project
     * @return double
     */
    public function getMonesEarnings() {
        return $this->d_monesEarnings;
    }

    /**
     * No monetary Earnings
     * @return String
     */
    public function getEarningsString() {
        return $this->s_earningsString;
    }

    /**
     * Exp. Start Time of the Project
     * @return String / Date
     */
    public function getExpectedStartTime() {
        return $this->s_expectedStartTime;
    }

    /**
     * Exp. End Time of the Project
     * @return String / Date
     */
    public function getExpectedEndTime() {
        return $this->s_expectedEndTime;
    }

    /**
     * Get Real Start Time of the Project
     * @return String / Date
     */
    public function getRealStartTime() {
        return $this->s_realStartTime;
    }

    /**
     * Get Real End Time of the Project
     * @return String / Date
     */
    public function getRealEndTime() {
        return $this->s_realEndTime;
    }

    /**
     * Get Real Money Budget
     * @return double
     */
    public function getRealMoneyBudget() {
        return $this->d_realMoneyBudget;
    }

    /**
     * Get Expeceted Money Budget
     * @return double
     */
    public function getExpectedMoneyBudget() {
        return $this->d_expectedMoneyBudget;
    }

    /**
     * Get Capital Costs
     * @return double
     */
    public function getCapitalCosts() {
        return $this->d_capitalCosts;
    }

    /**
     * Get Creator ID
     * @return int
     */
    public function getE_id() {
        return $this->e_id;
    }

    /**
     * Get Department ID
     * @return int
     */
    public function getA_id() {
        return $this->a_id;
    }

    /**
     * Get Projectmanager ID
     * @return int
     */
    public function getL_id() {
        return $this->l_id;
    }

    /**
     * 
     * @return type
     */
    public function getB_id() {
        return $this->b_id;
    }

    /**
     * 
     * @return type
     */
    public function getS_id() {
        return $this->s_id;
    }

    /**
     * Get Remark for the Project
     * @return String
     */
    public function getRemark() {
        return $this->s_remark;
    }

    /**
     * Get Amortization Rate of the Project
     * Its a Text / String
     * @return String
     */
    public function getAmortizationRate() {
        return $this->s_amortizationRate;
    }

    /**
     * Set titel of the Project
     * @param String $s_title
     */
    public function setTitle($s_title) {
        $this->s_title = $s_title;
    }

    /**
     * Sets the Description
     * @param String $s_description
     */
    public function setDescription($s_description) {
        $this->s_description = $s_description;
    }

    /**
     * Sets the creation Date
     * @param String $s_creationDate
     */
    public function setCreationDate(type $s_creationDate) {
        $this->s_creationDate = $s_creationDate;
    }

    /**
     * Sets the Creator of the Project
     * @param String $s_creator
     */
    public function setCreator($s_creator) {
        $this->s_creator = $s_creator;
    }

    /**
     * Sets the Database ID
     * @param int $i_databaseId
     */
    public function setDatabaseId($i_databaseId) {
        $this->i_databaseId = $i_databaseId;
    }

    /**
     * Sets Step 1 of the Permissions
     * @param bool $b_permitS1
     */
    public function setPermitS1($b_permitS1) {
        $this->b_permitS1 = $b_permitS1;
    }

    /**
     * Sets Step 2 of the Permissions
     * @param bool $b_permitS2
     */
    public function setPermitS2($b_permitS2) {
        $this->b_permitS2 = $b_permitS2;
    }

    /**
     * Sets Step 3 of the Permissions
     * @param bool $b_permitS3
     */
    public function setPermitS3($b_permitS3) {
        $this->b_permitS3 = $b_permitS3;
    }

    /**
     * Sets the 1 Field of the Target Cross Method
     * @param String $s_targetCross1
     */
    public function setTargetCross1($s_targetCross1) {
        $this->s_targetCross1 = $s_targetCross1;
    }

    /**
     * Sets the 2 Field of the Target Cross Method
     * @param String $s_targetCross2
     */
    public function setTargetCross2($s_targetCross2) {
        $this->s_targetCross2 = $s_targetCross2;
    }

    /**
     * Sets the 3 Field of the Target Cross Method
     * @param String $s_targetCross3
     */
    public function setTargetCross3($s_targetCross3) {
        $this->s_targetCross3 = $s_targetCross3;
    }

    /**
     * Sets the 4 Field of the Target Cross Method
     * @param String $s_targetCross4
     */
    public function setTargetCross4($s_targetCross4) {
        $this->s_targetCross4 = $s_targetCross4;
    }

    /**
     * Sets which targets shouldn't be a part of the Project
     * @param String $s_noTargets
     */
    public function setNoTargets($s_noTargets) {
        $this->s_noTargets = $s_noTargets;
    }

    /**
     * Sets the general Conditions of the Project
     * @param String $s_generalConditions
     */
    public function setGeneralConditions($s_generalConditions) {
        $this->s_generalConditions = $s_generalConditions;
    }

    /**
     * Set the Communication Concepts
     * @param String $s_communicationConcept
     */
    public function setCommunicationConcept($s_communicationConcept) {
        $this->s_communicationConcept = $s_communicationConcept;
    }

    /**
     * Sets the System Description
     * @param String $s_systemDescription
     */
    public function setSystemDescription($s_systemDescription) {
        $this->s_systemDescription = $s_systemDescription;
    }

    /**
     * Sets the Risk of the Project
     * @param String $s_projectRisk
     */
    public function setProjectRisk($s_projectRisk) {
        $this->s_projectRisk = $s_projectRisk;
    }

    /**
     * Sets the Costs of a Project
     * @param double $d_moneyCosts
     */
    public function setMoneyCosts($d_moneyCosts) {
        $this->d_moneyCosts = $d_moneyCosts;
    }

    /**
     * Sets the Earnings of the Project
     * @param double $d_monesEarnings
     */
    public function setMonesEarnings($d_monesEarnings) {
        $this->d_monesEarnings = $d_monesEarnings;
    }

    /**
     * Which earnigs (no money) are there?
     * @param String $s_earningsString
     */
    public function setEarningsString($s_earningsString) {
        $this->s_earningsString = $s_earningsString;
    }

    /**
     * Set the exp. Start Time
     * @param String $s_expectedStartTime
     */
    public function setExpectedStartTime($s_expectedStartTime) {
        $this->s_expectedStartTime = $s_expectedStartTime;
    }

    /**
     * Set the exp. End Time
     * @param String $s_expectedEndTime
     */
    public function setExpectedEndTime($s_expectedEndTime) {
        $this->s_expectedEndTime = $s_expectedEndTime;
    }

    /**
     * Set the real Start Time
     * @param String $s_realStartTime
     */
    public function setRealStartTime($s_realStartTime) {
        $this->s_realStartTime = $s_realStartTime;
    }

    /**
     * Set the real End Time
     * @param type $s_realEndTime
     */
    public function setRealEndTime($s_realEndTime) {
        $this->s_realEndTime = $s_realEndTime;
    }

    /**
     * Set the real Budget
     * @param double $d_realMoneyBudget
     */
    public function setRealMoneyBudget($d_realMoneyBudget) {
        $this->d_realMoneyBudget = $d_realMoneyBudget;
    }

    /**
     * Set the exp Budget
     * @param double $d_expectedMoneyBudget
     */
    public function setExpectedMoneyBudget($d_expectedMoneyBudget) {
        $this->d_expectedMoneyBudget = $d_expectedMoneyBudget;
    }

    /**
     * Set the Capital Costs
     * @param double $d_capitalCosts
     */
    public function setCapitalCosts($d_capitalCosts) {
        $this->d_capitalCosts = $d_capitalCosts;
    }

    /**
     * 
     * @param int $e_id
     */
    public function setE_id($e_id) {
        $this->e_id = $e_id;
    }

    /**
     * 
     * @param int $a_id
     */
    public function setA_id($a_id) {
        $this->a_id = $a_id;
    }

    /**
     * 
     * @param int $l_id
     */
    public function setL_id($l_id) {
        $this->l_id = $l_id;
    }

    /**
     * 
     * @param int $b_id
     */
    public function setB_id($b_id) {
        $this->b_id = $b_id;
    }

    /**
     * 
     * @param int $s_id
     */
    public function setS_id(id $s_id) {
        $this->s_id = $s_id;
    }

    /**
     * Set the Remark of the Project
     * @param String $s_remark
     */
    public function setRemark($s_remark) {
        $this->s_remark = $s_remark;
    }

    /**
     * Set Amortization Rate
     * @param String $s_amortizationRate
     */
    public function setAmortizationRate($s_amortizationRate) {
        $this->s_amortizationRate = $s_amortizationRate;
    }

    /**
     * Adds a new Milestone to the current List
     * @param Class Milestone $milestone
     */
    function setMilestone($milestone) {
        if (is_a($milestone, 'pm_milestone')) {
            $this->milestones[] = $milestone;
        }
    }

    /**
     * Adds a new Capitalflow Year to the Capitalflow Array
     * @param Class Capitalflow $capitalflow
     */
    function setCapitalflow($capitalflow) {
        if (is_a($capitalflow, 'pm_capitalvalue')) {
            $this->capitalflow[] = $capitalflow;
        }
    }

    /**
     * Adds a new involved Team to the InvolvedTeams Array
     * @param Class InvolvedTeam $involvedTeams
     */
    function setInvolvedTeams($involvedTeams) {
        if (is_a($involvedTeams, 'pm_projektteam')) {
            $this->involvedTeams[] = $involvedTeams;
        }
    }

}
