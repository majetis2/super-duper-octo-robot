<?php

require_once 'Controller.php';
require_once 'getPlayers.php';
require_once 'writePlayers.php';

class IWriteFile implements IWritePlayers
{
  private GetFile $GetPlayerFile;
  private PlayerController $playerControl;
  private $playerFileArray;
  private $playerFileString;

  public function __construct()
  {
    private $this->playerFileString = null;
    private $this->playerFileArray = [];
  }

  public function writePlayer(Player $player, $filename)
  {
    $this->playerControl = new PlayerController(Player $player);
    $this->GetPlayerFile = new GetFile($this->playerControl);
    $this->playerFileString = $this->GetPlayerFile->getPlayerDataFromFile($filename);
    $this->playerFileArray = merge(json_decode($this->playerJsonString),$this->playerControl->getArray();
    file_put_contents($filename, json_encode($this->playerFileArray));
  }
}
?>
