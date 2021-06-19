<?php
    $valor = $_POST['txtQtdReal'];
    if ($valor != "") {

      function realParaDolar($quantia) {
        $apikey = 'c7e277ca86925d3e0d9a';
        $from_Currency = 'BRL';
        $to_Currency = 'USD';
        $query =  "{$from_Currency}_{$to_Currency}";
  
        $json = file_get_contents("https://free.currconv.com/api/v7/convert?q={$query}&compact=ultra&apiKey={$apikey}");
        $obj = json_decode($json, true);
  
        $val = floatval($obj["$query"]);
  
        $total = $val * $quantia;
        return number_format($total, 2, '.', '');
      }
        
      echo $valor . " reais = " . realParaDolar($valor) . " dólares";
    } 
?>


