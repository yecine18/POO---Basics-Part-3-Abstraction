<?php
require_once 'highway.php';
require_once 'trunk.php';
require_once 'car.php';
final class MotorWay extends highway
{
    private int $nbLanes = 4;
    private int $maxSpeed = 130;

    public function addVehicule(vehicle $vehicle)
    {
        if ($vehicle instanceof car) {
            $this->setCurrentVehicles($vehicle);
            return 'added';
        } else {
            echo "Vous ne pouvez pas ajouter ce véhicule";
        }
    }
}
