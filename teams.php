<?php

require_once "data.php";

print_r($teams['Barcelona']);

echo "<h2>Barcelona Information:</h2>";
foreach ($teams as $team => $teamInfo) {
    echo $team . " ";
    echo $teamInfo['league'] . " ";
    echo $teamInfo['uefa-coefficient-ranking'] . " ";
    echo $teamInfo['city'] . " ";
    echo $teamInfo['url'] . " ";
    echo $teamInfo['logo'] . " ";
    echo $teamInfo['group'] . " ";
}
