<?php

require_once "data.php";

print_r($teams['Barcelona']);

echo "<h2>Barcelona Information:</h2>";
foreach ($teams['Barcelona'] as $key => $value) {
    echo $key, $value;
}
