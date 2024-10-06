<?php

require_once "data.php";

foreach ($teams as $team => $teamInfo) {
    echo "<h3>" . $team . "</h3>";
    echo "<p>League: " . $teamInfo['league'] . "</p>";
    echo "<p>UEAFA Coefficient Ranking: " . $teamInfo['uefa-coefficient-ranking'] . "</p>";
    echo "<p>City: " . $teamInfo['city'] . "</p>";
    echo "<p><a href='" . $teamInfo['url'] . "'>Link</a></p>";
    echo "<p><img src='" . $teamInfo['logo'] . "'width=200'></p>";
    echo "<p>Group: " . $teamInfo['group'] . "</p>";
    echo "<hr>";
}
