<?php
// Recupero dati dal form
$marca = $_POST['marca'];
$modello = $_POST['modello'];
$porte_hdmi = (int)$_POST['porte_hdmi'];
$refresh_rate = (int)$_POST['refresh_rate'];
$risoluzione = $_POST['risoluzione'];

echo "<h2>Dati inseriti</h2>";
echo "Marca: $marca <br>";
echo "Modello: $modello <br>";
echo "Porte HDMI: $porte_hdmi <br>";
echo "Refresh rate: $refresh_rate Hz<br>";
echo "Risoluzione: $risoluzione <br><br>";

echo "<h2>Consigli di acquisto</h2>";

// Controllo porte HDMI
if ($porte_hdmi < 2) {
    echo "Si consiglia un televisore con almeno 2 porte hdmi.<br>";
} else {
    echo "Porte HDMI: ok.<br>";
}

// Controllo refresh rate
if ($refresh_rate < 50) {
    echo "Si consiglia un televisore con refresh rate almeno pari a 50Hz.<br>";
} else {
    echo "Refresh rate: ok.<br>";
}

// Controllo risoluzione
if ($risoluzione == "HD Ready" || $risoluzione == "Full HD") {
    echo "Si consiglia una risoluzione Ultra HD o 4K.<br>";
} else {
    echo "Risoluzione: ok.<br>";
}
?>
