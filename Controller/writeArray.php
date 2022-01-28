<?php

require_once 'Controller.php';
require_once 'getPlayers.php';
require_once 'writePlayers.php';

class IWriteArray implements IWritePlayers
{
  private GetArray $GetPlayerArray;
  private PlayerController $playerControl;
  private $playersArray;

  public function __construct()
  {
    private $playersArray = [];
  }

  public function writePlayer(Player $player, $filename = null)
  {
    $this->playerControl = new PlayerController(Player $player);
    $this->GetPlayerArray = new GetArray($this->playerControl);
    $this->playersArray = $this->GetPlayerArray->getPlayerDataArray();
  }
}
 ?>
