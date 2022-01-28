<?php

  require_once 'getPlayers.php';
  require_once 'readPlayers.php';

  class IReadJson implements IReadPlayers
  {
    private GetJson $GetPlayerJson;
    private $playerData;

    public function __constructor(GetJson $GetPlayerJson)
    {
      $this->GetPlayerJson = $GetPlayerJson;
      $this->playerData = null;
    }

    public function readPlayers($filename = null)
    {
      $this->playerData = json_decode($this->GetPlayerJson->getPlayerDataJson());
      return ($this->playerData);
    }
  }
?>
