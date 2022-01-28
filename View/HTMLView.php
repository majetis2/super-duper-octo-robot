<!DOCTYPE html>
<html>
<head>
    <style>
        li {
            list-style-type: none;
            margin-bottom: 1em;
        }
        span {
            display: block;
        }
    </style>
</head>
<body>
<div>
    <span class="title">Current Players</span>
    <ul>
        <?php

            $base_dir = realpath(__DIR__);
            include($base_dir.'Controller/Controller.php');
            include($base_dir.'Controller/getPlayers.php');
            include($base_dir.'Controller/readArray,php');
            include($base_dir.'Controller/displayHTML.php');

            Player $jonas = new Player('Jonas Valenciunas', 26, 'Center', '4.66m');
            Player $kyle = new Player('Kyle Lowry', 32, 'Point Guard', '28.7m');
            Player $demar = new Player('Demar DeRozan', 28, 'Shooting Guard', '26.54m');
            Player $jakob = new Player('Jakob Poeltl', 22, 'Center', '2.704m');
            PlayerController $players = new PlayerController([$jonas, $kyle, $demar, $jakob]);
            GetArray $getArray = new GetArray($players);
            IReadArray $readArray = new IReadArray($getArray);
            HTMLDisplay $Display = new HTMLDisplay();
            $Display->display($Array);
        ?>
    </ul>
</body>
</html>
