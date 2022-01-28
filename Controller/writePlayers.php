<?php
  require_once 'Controller.php';
  require_once 'getPlayers.php';

  interface IWritePlayers
  {
    public function writePlayer(Player $player, $filename);
  }
 ?>
