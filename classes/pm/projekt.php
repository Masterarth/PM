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
     * Constructor for a Project
     */
    public function __construct() {
        
    }
    
    public function load($p_id)
    {
        
    }
    
    function getTitle() {
        return $this->s_title;
    }

    function getDescription() {
        return $this->s_description;
    }

    function getCcreationDate() {
        return $this->s_creationDate;
    }

    function getCreator() {
        return $this->s_creator;
    }

    function getDatabaseId() {
        return $this->i_databaseId;
    }

    function getPermitS1() {
        return $this->b_permitS1;
    }

    function getPermitS2() {
        return $this->b_permitS2;
    }

    function getPermitS3() {
        return $this->b_permitS3;
    }

    function getTargetCross1() {
        return $this->s_targetCross1;
    }

    function getTargetCross2() {
        return $this->s_targetCross2;
    }

    function getTargetCross3() {
        return $this->s_targetCross3;
    }

    function getTargetCross4() {
        return $this->s_targetCross4;
    }

    function getNoTargets() {
        return $this->s_noTargets;
    }

    function getGeneralConditions() {
        return $this->s_generalConditions;
    }

    function getCommunicationConcept() {
        return $this->s_communicationConcept;
    }

    function getSystemDescription() {
        return $this->s_systemDescription;
    }

    function getProjectRisk() {
        return $this->s_projectRisk;
    }

    function getMoneyCosts() {
        return $this->d_moneyCosts;
    }

    function getMonesEarnings() {
        return $this->d_monesEarnings;
    }

    function getEarningsString() {
        return $this->s_earningsString;
    }

    function getExpectedStartTime() {
        return $this->s_expectedStartTime;
    }

    function getExpectedEndTime() {
        return $this->s_expectedEndTime;
    }

    function getRealStartTime() {
        return $this->s_realStartTime;
    }

    function getRealEndTime() {
        return $this->s_realEndTime;
    }

    function getRealMoneyBudget() {
        return $this->d_realMoneyBudget;
    }

    function getExpectedMoneyBudget() {
        return $this->d_expectedMoneyBudget;
    }

    function getCapitalCosts() {
        return $this->d_capitalCosts;
    }

    function getE_id() {
        return $this->e_id;
    }

    function getA_id() {
        return $this->a_id;
    }

    function getL_id() {
        return $this->l_id;
    }

    function getB_id() {
        return $this->b_id;
    }

    function getS_id() {
        return $this->s_id;
    }

    function getRemark() {
        return $this->s_remark;
    }

    function getAmortizationRate() {
        return $this->s_amortizationRate;
    }

    function setTitle($s_title) {
        $this->s_title = $s_title;
    }

    function setDescription($s_description) {
        $this->s_description = $s_description;
    }

    function setCreationDate(type $s_creationDate) {
        $this->s_creationDate = $s_creationDate;
    }

    function setCreator($s_creator) {
        $this->s_creator = $s_creator;
    }

    function setDatabaseId($i_databaseId) {
        $this->i_databaseId = $i_databaseId;
    }

    function setPermitS1($b_permitS1) {
        $this->b_permitS1 = $b_permitS1;
    }

    function setPermitS2($b_permitS2) {
        $this->b_permitS2 = $b_permitS2;
    }

    function setPermitS3($b_permitS3) {
        $this->b_permitS3 = $b_permitS3;
    }

    function setTargetCross1($s_targetCross1) {
        $this->s_targetCross1 = $s_targetCross1;
    }

    function setTargetCross2($s_targetCross2) {
        $this->s_targetCross2 = $s_targetCross2;
    }

    function setTargetCross3($s_targetCross3) {
        $this->s_targetCross3 = $s_targetCross3;
    }

    function setTargetCross4($s_targetCross4) {
        $this->s_targetCross4 = $s_targetCross4;
    }

    function setNoTargets($s_noTargets) {
        $this->s_noTargets = $s_noTargets;
    }

    function setGeneralConditions($s_generalConditions) {
        $this->s_generalConditions = $s_generalConditions;
    }

    function setCommunicationConcept($s_communicationConcept) {
        $this->s_communicationConcept = $s_communicationConcept;
    }

    function setSystemDescription($s_systemDescription) {
        $this->s_systemDescription = $s_systemDescription;
    }

    function setProjectRisk($s_projectRisk) {
        $this->s_projectRisk = $s_projectRisk;
    }

    function setMoneyCosts($d_moneyCosts) {
        $this->d_moneyCosts = $d_moneyCosts;
    }

    function setMonesEarnings($d_monesEarnings) {
        $this->d_monesEarnings = $d_monesEarnings;
    }

    function setEarningsString($s_earningsString) {
        $this->s_earningsString = $s_earningsString;
    }

    function setExpectedStartTime($s_expectedStartTime) {
        $this->s_expectedStartTime = $s_expectedStartTime;
    }

    function setExpectedEndTime($s_expectedEndTime) {
        $this->s_expectedEndTime = $s_expectedEndTime;
    }

    function setRealStartTime($s_realStartTime) {
        $this->s_realStartTime = $s_realStartTime;
    }

    function setRealEndTime($s_realEndTime) {
        $this->s_realEndTime = $s_realEndTime;
    }

    function setRealMoneyBudget($d_realMoneyBudget) {
        $this->d_realMoneyBudget = $d_realMoneyBudget;
    }

    function setExpectedMoneyBudget($d_expectedMoneyBudget) {
        $this->d_expectedMoneyBudget = $d_expectedMoneyBudget;
    }

    function setCapitalCosts($d_capitalCosts) {
        $this->d_capitalCosts = $d_capitalCosts;
    }

    function setE_id($e_id) {
        $this->e_id = $e_id;
    }

    function setA_id($a_id) {
        $this->a_id = $a_id;
    }

    function setL_id($l_id) {
        $this->l_id = $l_id;
    }

    function setB_id($b_id) {
        $this->b_id = $b_id;
    }

    function setS_id(id $s_id) {
        $this->s_id = $s_id;
    }

    function setRemark($s_remark) {
        $this->s_remark = $s_remark;
    }

    function setAmortizationRate($s_amortizationRate) {
        $this->s_amortizationRate = $s_amortizationRate;
    }


    
}
