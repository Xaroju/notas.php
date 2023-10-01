<?php
$notas = 5;
$asistencia = 10;
$total_clases = 20;

if ($notas >= 3.6 && $asistencia >=
($total_clases*0.8)) {
echo "Aprobo";
}
else {
    echo "No Aprobo";
}
?>