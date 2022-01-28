<?php
  require_once 'readPlayers.php';
  require_once 'readArray.php';
  require_once 'readJson.php';
  require_once 'readFile.php';

  class CLIDisplay implements IDisplayPlayers
  {
    private $players;

    public function __construct()
    {
      $this->players = [];
    }

    public function display(IReadPlayers $readPlayer, $filename)
    {
      $this->players = $readPlayer->readPlayers($filename = null);
      echo "Current Players: \n";
      foreach ($this->players as Player $player) {
          echo "\tName:".$player->GetPlayerName() ."\n";
          echo "\tAge:". string($player->GetPlayerAge()) ."\n";
          echo "\tSalary:". $player->GetPlayerSalary() ."\n";
          echo "\tJob:". $player->GetPlayerJob() "\n";
      }
    }
  }
?>
