<?php
require_once 'highway.php';

final class PedestrianWay extends highway 
{
    private int $nbLanes=1 ;
    private int $maxSpeed=10;

    public function addVehicle(vehicle $vehicle)
    {
        if ($vehicle instanceof bike)|| ($vehicle instanceof skateboard)
        {
            $this->currentVehicles[] = $vehicle ;
        }else{
            echo'ces types de vehicle sont interdit sur cette route';
        }
    }

}