<?php
  require_once 'readPlayers.php';
  require_once 'readArray.php';
  require_once 'readJson.php';
  require_once 'readFile.php';

  class HTMLDisplay implements IDisplayPlayers
  {
    private $players;

    public function __construct()
    {
      $this->players = [];
    }

    public function display(IReadPlayers $readPlayer, $filename)
    {
      $this->players = $readPlayer->readPlayers($filename = null);

      return <<<EOT
      <?php foreach($this->players as Player $player) { ?>
          <li>
              <div>
                  <span class="player-name">Name: <?= $player->GetPlayerName()?></span>
                  <span class="player-age">Age: <?= $player->GetPlayerAge()?></span>
                  <span class="player-salary">Salary: <?= $player->GetPlayersalary()?></span>
                  <span class="player-job">Job: <?= $player->GetPlayerJob()?></span>
              </div>
          </li>
      <?php } ?>
      EOT
    }
  }
?>
