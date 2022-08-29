<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConeController extends Controller
{
    public function cone($raio=6, $altura=8, $tipo=1){
        $gerarRaiz = sqrt(($raio * $raio) + ($altura * $altura));
        $areaLateral = 3.14 * $raio * $gerarRaiz;
        $areaCirculo = 3.14 * ($raio * $raio);
        $areaTotal = $areaLateral + $areaCirculo;
        $litros = $areaTotal * 3.45;
        $latas = ceil($litros / 18);
        if ($tipo == "1"){
            $preco = 238.90 * $latas;
            echo "_Cone<br>";
            echo "Raio: $raio<br>";
            echo "Altura: $altura<br>";
            echo "Nível: $tipo<br>";
            echo "____________________<br><br>";
            echo "Geratriz: $gerarRaiz<br>";
            echo "____________________<br><br>";
            echo "Área do Fundo: $areaCirculo<br>";
            echo "Área Lateral do Cone: $areaLateral<br>";
            echo "Área Total: $areaTotal<br>";
            echo "____________________<br><br>";
            echo "Litros: $litros<br>";
            echo "Latas: $latas<br>";
            echo "____________________<br><br>";
            echo "Preço Total: R$$preco";
            
        }else if ($tipo == "2"){
            $preco = 467.98 * $latas;
            echo "_Cone<br>";
            echo "Raio: $raio<br>";
            echo "Altura: $altura<br>";
            echo "Nível: $tipo<br>";
            echo "____________________<br><br>";
            echo "Geratriz: $gerarRaiz<br>";
            echo "____________________<br><br>";
            echo "Área do Fundo: $areaCirculo<br>";
            echo "Área Lateral do Cone: $areaLateral<br>";
            echo "Área Total: $areaTotal<br>";
            echo "____________________<br><br>";
            echo "Litros: $litros<br>";
            echo "Latas: $latas<br>";
            echo "____________________<br><br>";
            echo "Preço Total: R$$preco";

        }else if ($tipo == "3"){
            $preco = 758.34 * $latas;
            echo "_Cone<br>";
            echo "Raio: $raio<br>";
            echo "Altura: $altura<br>";
            echo "Nível: $tipo<br>";
            echo "____________________<br><br>";
            echo "Geratriz: $gerarRaiz<br>";
            echo "____________________<br><br>";
            echo "Área do Fundo: $areaCirculo<br>";
            echo "Área Lateral do Cone: $areaLateral<br>";
            echo "Área Total: $areaTotal<br>";
            echo "____________________<br><br>";
            echo "Litros: $litros<br>";
            echo "Latas: $latas<br>";
            echo "____________________<br><br>";
            echo "Preço Total: R$$preco";
        }

    }
}
?>