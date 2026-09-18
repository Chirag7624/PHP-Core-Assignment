<?php

$iplTeams = "CSK,MI,RCB,GT";

// Convert string into an array
$teamsArray = explode(",", $iplTeams);

// separator
$result = implode("|", $teamsArray);

echo $result;

?>