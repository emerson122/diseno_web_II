<?php
    function calcularfares($suel)
    {
        if ($suel>=7000) {
            $IHSS = 7000 * 3.5 / 100;
        }
        else {
            $IHSS = $suel * 3.5 / 100;
        }

        if ($suel>=5000) {
            $Cooperativa = 500;
        }
        else {
            $Cooperativa = 300;
        }
        return array($IHSS, $Cooperativa);//Devuelve los dos valores
    }  
?>