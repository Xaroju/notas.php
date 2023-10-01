<?php

$notas = 17;
$asistencia = 17;
$total_clases = 20;

if ($notas >= 3 && $asistencia >= ($total_clases*0.8 )) { 
    echo 'Aprobo';
    # code...
}
else {
    echo 'No aprovo';   # code...
}
?>