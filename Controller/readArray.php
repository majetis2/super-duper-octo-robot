<?php

  require_once 'getPlayers.php';
  require_once 'readPlayers.php';

  class IReadArray implements IReadPlayers
  {

    private GetArray $GetPlayerArray;
    private $playerData;

    public function __constructor(GetArray $GetPlayerArray)
    {
      $this->GetPlayerArray = $GetPlayerArray;
      $this->playerData = null;
    }

    public function readPlayers($filename = null)
    {
      $this->playerData = $this->GetPlayerArray->getPlayerDataArray();
      return ($this->playerData);
    }
  }
 ?>
