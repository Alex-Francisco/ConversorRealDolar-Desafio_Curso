<?php
    $valor = $_POST['txtQtdDolar'];
    if ($valor != "") {

      function dolarParaReal($quantia) {
        $apikey = 'c7e277ca86925d3e0d9a';
        $from_Currency = 'USD';
        $to_Currency = 'BRL';
        $query =  "{$from_Currency}_{$to_Currency}";
  
        $json = file_get_contents("https://free.currconv.com/api/v7/convert?q={$query}&compact=ultra&apiKey={$apikey}");
        $obj = json_decode($json, true);
  
        $val = floatval($obj["$query"]);
  
        $total = $val * $quantia;
        return number_format($total, 2, '.', '');
      }
        
      echo $valor . " dólares = " . dolarParaReal($valor) . " reais";
    } 
?>