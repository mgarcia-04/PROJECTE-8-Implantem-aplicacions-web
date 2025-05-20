<?php
function calcular_iva(float $preuInicial, float $percentatgeIVA): float 
{
    if ($preuInicial < 0 || $percentatgeIVA < 0) {
        return 0.0;
    }

    $preuIVA = $preuInicial * ($percentatgeIVA / 100);
    $preuFinal = $preuInicial + $preuIVA;

    return $preuFinal;
}

$preuProducte = 100;
$ivaAplicat = 21;
$preuAmbIVA = calcular_iva($preuProducte, $ivaAplicat);
echo "Preu base: ". $preuProducte ."€, IVA: ". $ivaAplicat ."€, Preu amb IVA: ". $preuAmbIVA ."€"; 

?>