<?php

/**
 * Gets the actual inflation rate from an API
 * @author Lukas Adler
 */
class pm_inflation{
    
    /**
     * Inflation Rate
     * @var double 
     */
    private $d_inflationRate;
    
    /**
     * Constructor which sets automatically the inflation rate
     * @param int $i_year
     */
    public function __construct($i_year) {
        $this->setInflationRate($this->getInflationFromAPI($i_year, 'germany'));
    }
    
    /**
     * Returns the Inflation Rate from an API
     * @param int $i_year
     * @return double inflationvalue 
     */
    public function getInflationFromAPI($i_year,$s_country)
    {
        $s_url = 'https://www.statbureau.org/get-data-json?country='.$s_country.'&year='.$i_year;
        $s_jsonString = file_get_contents($s_url);
        $o_json = json_decode($s_jsonString);
        if(isset($o_json[0]))
        {
            if($o_json[0]->InflationRateRounded>0)
            {
                return $o_json[0]->InflationRateRounded;
            }
            
        }
        return 0;
    }
   
    /**
     * Inflation Rate (Procent Value)
     * @param double $d_rate
     */
    public function setInflationRate($d_rate)
    {
        $this->d_inflationRate = $d_rate;
    }
    
    /**
     * Returns the current Inflation Rate
     * @return double Inflation Rate
     */
    public function getInflationRate()
    {
        return $this->d_inflationRate;
    }
    
}

