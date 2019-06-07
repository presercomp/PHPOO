<?php
/**
 * 
 */
class Funciones
{

    /**
     * Devuelve el digito verificador de un número dado
     * 
     * @param $rut int Numero a verificar
     * 
     * @return string Dígito verificador
     */
    public function getDV($rut) {
        // transformamos el $rut en un string para poder manipularlo
        $rut = "$rut";
        // Buscaremos el DV del numero 10082668

        // Esta variable nos servirá de guia para las multiplicaciones
        $factor = 2;
        // Esta variable servirá de acomulador
        $suma = 0;
        // Recorremos el rut de manera inversa
        // *strlen* obtiene el largo de un string (cantidad de caracteres)
        for($i = strlen($rut) - 1 ; $i >= 0; $i--) {
            $suma += $factor * $rut[$i];
            if ($factor % 7 == 0) {
                $factor = 2;
            } else {
                $factor = $factor + 1;
            }
            // el bloque if anterior es lo mismo que la siguiente linea
            // $factor = ($factor % 7) == 0 ? 2 : $factor + 1;
        }
        $dv = 11 - ($suma % 11);
        if ($dv == 11) {
            return '0';
        } else if($dv == 10) {
            return 'K';
        } else {
            return "$dv";
        }
    }
}