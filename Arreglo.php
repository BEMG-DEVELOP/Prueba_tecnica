 public function Arreglo()
 {
 
    $arreglo = [5,12,20,99,4];
    //Se optiene el número mayor y el menor
    $numeroMenor = min($arreglo);
    $numeroMayor = max($arreglo);

    $diferencia = $numeroMayor - $numeroMenor;

    echo "La diferencia entre el número menor y el número mayor es: " . $diferencia;

 }
