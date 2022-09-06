<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PiramiteController extends Controller
{
    //

    public function piramite($raio=13.89, $altura=41.87, $tipo=3){
        $gerarRaiz = sqrt(($raio * $raio) + ($altura * $altura));
        $areaLateral = (($raio + $raio) * $gerarRaiz)/2;
        $areaDoFundo = ($raio * $raio) * 4;
        $areaTotal = (($areaLateral * 4) + (($raio + $raio)* ($raio + $raio)));
        $litros = $areaTotal / 4.76;
        $latas = ceil($litros / 18.0);
        $volume = ((($raio + $raio) * ($raio + $raio)) * $altura) / 3;
        if ($tipo == "1"){
            $preco = 127.90 * $latas;
            echo " Raio: $raio<br>";
            echo " Altura: $altura<br>";
            echo " A1: $gerarRaiz<br>";
            echo " Área do Triângulo: $areaLateral <br>";
            echo " Área da Base: $areaDoFundo<br>";
            echo " Área Total: $areaTotal<br>";
            echo " Tipo da Tinta: $tipo<br>";
            echo " Litros: $litros<br>";
            echo " Latas: $latas<br>";
            echo " Preço Total: R$$preco<br>";
            echo " Volume: $volume<br>";

        }elseif ($tipo == "2"){
            $preco = 258.98 * $latas;
            echo " Raio: $raio<br>";
            echo " Altura: $altura<br>";
            echo " A1: $gerarRaiz<br>";
            echo " Área do Triângulo: $areaLateral<br>";
            echo " Área da Base: $areaDoFundo<br>";
            echo " Área Total: $areaTotal<br>";
            echo " Tipo da Tinta: $tipo<br>";
            echo " Litros: $litros<br>";
            echo " Latas: $latas<br>";
            echo " Preço Total: R$$preco<br>";
            echo " Volume: $volume<br>";
        }elseif ($tipo =="3"){
            $preco = 344.34 * $latas;
            echo " Raio: $raio<br>";
            echo " Altura: $altura<br>";
            echo " A1: $gerarRaiz<br>";
            echo " Área do Triângulo: $areaLateral<br>";
            echo " Área da Base: $areaDoFundo<br>";
            echo " Área Total: $areaTotal<br>";
            echo " Tipo da Tinta: $tipo<br>";
            echo " Litros: $litros<br>";
            echo " Latas: $latas<br>";
            echo " Preço Total: R$$preco<br>";
            echo " Volume: $volume<br>";
        }
    }
}
