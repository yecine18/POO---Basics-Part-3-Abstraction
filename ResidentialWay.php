<?php
require_once 'highway.php';
final class ResidentialWay extends highway
{
    private int $nbLanes=2;
    private int $maxSpeed=50;   
public function addVehicle(vehicle $vehicle)
{
    $this->CurrentVehicle = $vehicle;
    return 'added';
}





}
