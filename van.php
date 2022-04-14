<?php
require_once 'Vehicle.php';

class Van extends Vehicle

{
    public const INITIAL_LOAD = 0;
    public const ALLOWED_ENERGIES = [

        'fuel',
        'electric',
        'diesel',

    ];
    private int $stockCapacity = self::INITIAL_LOAD;
    private string $energy;

  


    public function __construct(string $color, int $nbSeats, string $energy, int $nbWheels)

    {

        parent::__construct($color, $nbSeats, $nbWheels);

        $this->energy = $energy;
        

    }

    public function stock($stockCapacity):string
    {
        if($this->stockCapacity <= 0)
        {
            return 'in filling';
        }
        else{
            return 'full';
        }
    }

    public function getStockCapacity(): int

    {

        return $this->stockCapacity;

    }

    public function getEnergy(): string

    {

        return $this->energy;

    }


    public function setEnergy(string $energy): Truck

{

    if (in_array($energy, self::ALLOWED_ENERGIES)) {

        $this->energy = $energy;

    }

    return $this;

}


}