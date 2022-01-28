<?php
  require_once 'readPlayers.php';
  require_once 'readArray.php';
  require_once 'readJson.php';
  require_once 'readFile.php';

  interface IDisplayPlayers
  {
    public function display(IReadPlayers $readPlayer, $filename)
  }
?>
