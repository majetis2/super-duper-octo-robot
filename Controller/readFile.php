<?php

  require_once 'getPlayers.php';
  require_once 'readPlayers.php';

  class IReadFile implements IReadPlayers
  {
    private GetFile $GetPlayerFile;
    private $playerData;

    public function __construct(GetFile $GetPlayerFile)
    {
      $this->GetPlayerFile = $GetPlayerFile;
      $this->playerData = null;
    }

    public function readPlayers($filename)
    {
      $this->playerData = json_decode($this->GetPlayerFile->getPlayerDataFromFile($filename));
      return ($this->playerData);
    }
  }
?>
