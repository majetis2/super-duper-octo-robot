<?php

  class Player
  {
    private $name;
    private $age;
    private $job;
    private $salary;

    public function __construct($name, $age, $job, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->job = $job;
        $this->salary = $salary;
        echo 'In the player class';
    }

   public function GetPlayerName()
   {
     return($this->name);
   }

   public function GetPlayerAge()
   {
     return($this->age);
   }

   public function GetPlayerJob()
   {
     return($this->job);
   }

   public function GetPlayerSalary()
   {
     return($this->salary)
   }
  }
  ?>
