<?php

class Data_Cuenta
{
    public $idTipoCuenta;
    public $TipoCuenta;
    
    function __construct()
    {
        $this->idTipoCuenta="";
        $this->TipoCuenta="";
    }
}
$OTC = new Data_Cuenta();
$OTC->idTipoCuenta = "1";
$OTC->TipoCuenta = "Cuenta Corriente";

$OTC1 = new Data_Cuenta();
$OTC1->idTipoCuenta = "2";
$OTC1->TipoCuenta = "Cuenta de Ahorros";

$ListaCuenta = array();

$ListaCuenta[] = $OTC;
$ListaCuenta[] = $OTC1;

?>