<?php


/**
 * Description of projektstatus
 *
 * @author Arth
 */
class pm_projektstatus {

    private $id;
    private $status;
    
    //Erstelldatum um zu wissen wann der Status gesetzt wurde und wie langer er aktiv war
    //Sobald ein neuer Status einem Projekt zugewiesen wird kann dadurch die zeitdiverenz ausrechnen
    private $datum;

}
