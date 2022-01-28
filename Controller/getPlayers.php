<?php
  require_once 'Controller.php';

  class GetArray
  {
      private PlayerController $players;

      public function __construct(PlayerController $players)
      {
        $this->players = $players;
      }

      public function getPlayerDataArray()
      {
        return $this->players->getArray();
      }
  }

  class GetJson
  {
    private PlayerController $players;

    public function __construct(PlayerController $players)
    {
      $this->players = $players;
    }

    public function getPlayerDataJson()
    {
      return JSON.encode($this->player->getArray());
    }
  }

  class GetFile
  {
    public function getPlayerDataFromFile($filename)
    {
      $file = file_get_contents($filename);
      return $file;
    }
  }
?>
