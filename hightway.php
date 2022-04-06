<?php
require_once 'Vehicle.php';
require_once 'car.php';
abstract class HighWay {

    protected array $currentVehicles ;
    protected int $nbLanes ;
    protected int $maxSpeed;

    public function getCurrentVehicles():array
    {
      return  $this->currentVehicles;
      
    }
    public function setCurrentVehicles(Vehicle $currentVehicles)
    {
        return $this->currentVehicles[] = $currentVehicles;
    }
    
    

    /**
     * Get the value of nbLanes
     *
     * @return int
     */
    public function getNbLanes(): int
    {
        return $this->nbLanes;
    }


    /**
     * Set the value of nbLanes
     *
     * @param int $nbLanes
     *
     * @return self
     */
    public function setNbLanes(int $nbLanes): self
    {
        $this->nbLanes = $nbLanes;

        return $this;
    }



    /**
     * Get the value of maxSpeed
     *
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }


    /**
     * Set the value of maxSpeed
     *
     * @param int $maxSpeed
     *
     * @return self
     */
    public function setMaxSpeed(int $maxSpeed): self
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }
    abstract function addVehicule(vehicle $vehicle);
   
    
  
}