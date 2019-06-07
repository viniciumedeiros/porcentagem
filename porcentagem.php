<?php
// Função de porcentagem: Quanto é X% de Y?
function porcentagem_xy ( $porcentagem, $total ) {
	return ( $porcentagem / 100 ) * $total;
}

// Função de porcentagem: Y é X% de Y
function porcentagem_yx ( $parcial, $total ) {
    return ( $parcial * 100 ) / $total;
}

// Função de porcentagem: Y é Y% de X
function porcentagem_yyx ( $parcial, $porcentagem ) {
    return ( $parcial / $porcentagem ) * 100;
}
?>