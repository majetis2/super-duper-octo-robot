<?php
  $base_dir = realpath(__DIR__);
  include($base_dir.'Model/Player.php');

  class PlayerController
  {
    private Player $player;
    private $players = [];

    function __construct(Player $player = null, Player $players = null)
    {
      if($player)
      {
        $this->player = $player;
        $this->players = array_merge($this->players,$player);
      }
      $this->players = $players;
    }

    function getArray()
    {
      return $this->players;
    }
  }

 ?>
