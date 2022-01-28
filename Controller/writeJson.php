<?php

require_once 'Controller.php';
require_once 'getPlayers.php';
require_once 'writePlayers.php';

class IWriteJson implements IWritePlayers
{
  private GetJson $GetPlayerJson;
  private PlayerController $playerControl;
  private $playerJsonString;

  public function __construct()
  {
    private $playerJsonString = null;
  }

  public function writePlayer(Player $player, $filename = null)
  {
    $this->playerControl = new PlayerController(Player $player);
    $this->GetPlayerJson = new GetPlayerJson($this->playerControl);
    $this->playerJsonString = $this->GetPlayerJson->getPlayerDataJson();
  }
}
?>
