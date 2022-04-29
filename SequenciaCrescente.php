<?php
/**
 * Receba como parametro um array de números inteiros e responda TRUE or FALSE 
 * se é possível obter uma sequencia crescente removendo apenas um elemento do array.
 */

class SequenciaCrescente
{
    public function sequencia($array = []) {
        
        $achouUm = false;

        for ($i = -1, $j = 0, $k = 1; $k < count($array); $k++) {
            $deletarAtual = false;

            if ($array[$j] >= $array[$k])
            {
                if ($achouUm)
                {
                    return implode(",", $array) . ' Falso ';
                }
                $achouUm = true;

                if ($k > 1 && $array[$i] >= $array[$k])
                {
                    $deletarAtual = [true, $array, 'Verdadeiro'];
                }
            }

            if (!$achouUm)
            {
                $i = $j;
            }
            
            if (!$deletarAtual)
            {
                $j = $k;
            }
        }
        return implode(",", $array) . ' Verdadeiro ';
    }
}

/**
 * Todos os testes de array foram realizados, se deseja testar alguns numeros
 * modifique o parametro do metodo sequencia do objeto abaixo e irá printar na tela
 */

$obj = new SequenciaCrescente;
print_r($obj->sequencia([10, 1, 2, 3, 4, 5, 6, 1]));