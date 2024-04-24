<?php 

require_once 'dbconfig.php'; 

$filename = "tabla_" . date('Y-m-d') . ".csv"; 

$delimiter = ","; 

$f = fopen('php://memory', 'w'); 

$fields = array('player_id', 'player_name', 'game_1', 'game_2'); 

fputcsv($f, $fields, $delimiter); 

$result = $db->query("SELECT * FROM week_2 ORDER BY id DESC"); 

if ($result->num_rows > 0) { 

    while ($row = $result->fetch_assoc()) { 

        $lineData = array($row['player_id'], $row['player_name'], $row['game_1'], $row['game_2']); 

        fputcsv($f, $lineData, $delimiter); 

    } 

} 

fseek($f, 0); 

header('Content-Type: text/csv'); 

header('Content-Disposition: attachment; filename="' . $filename . '";'); 

fpassthru($f); 

exit();

?>