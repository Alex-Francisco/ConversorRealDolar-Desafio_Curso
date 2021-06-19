<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="alert/atencao.css">
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
      $(".resultadoEmDolar").hide();
      $("#formRealDolar").ajaxForm({
        target: '.resultadoEmDolar',
        success: function(retornoDolar) {
          $(".resultadoEmDolar").html(retornoDolar);
          $(".resultadoEmDolar").show();
          $("#formRealDolar").resetForm();
        }
      });

      $(".resultadoEmReal").hide();
      $("#formDolarReal").ajaxForm({
        target: '.resultadoEmReal',
        success: function(retornoReal) {
          $(".resultadoEmReal").html(retornoReal);
          $(".resultadoEmReal").show();
          $("#formDolarReal").resetForm();
        }
      });

    });
  </script>
  <style>

    .intro {
        position: relative;
        text-align: center;
        padding: 100px 20px;
    }
    .examples {
        position: relative;
        text-align: center;
        padding: 0 20px;
    }

    .resultadoEmReal, .resultadoEmDolar {
        padding-top: 10px;
        color: #fff;
        font-size: 1.5rem;
    }
    </style>

  <title>Real para Dolar</title>
</head>

<body>
  <script src="alert/atencao.js"></script>

  <div class="container">
    <div class="forms-container">
      <div class="real-dolar">
        <form action="real.php" class="real-dolar-form" method="post" id="formRealDolar">
          <h2 class="titulo">Converter Real Para Dolar</h2>
          <div class="envolve-input">
            <i class="fa fa-usd"></i>
            <input type="number" name="txtQtdReal" placeholder="Quantia de reais" id="qtd-reais" required="" />
          </div>
          <input type="submit" value="Realizar Conversão De Moeda" class="btn solid" id="btn-reais" />
          <div class="resultadoEmDolar"></div>
        </form>
        <form action="dolar.php" class="dolar-real-form" method="post" id="formDolarReal">
          <h2 class="titulo">Converter Dolar Para Real</h2>
          <div class="envolve-input">
            <i class="fa fa-usd"></i>
            <input type="number" name="txtQtdDolar" placeholder="Quantia de dolar" id="qtd-dolar" required="" />
          </div>
          <input type="submit" value="Realizar Conversão De Moeda" class="btn solid" id="btn-dolar" />
          <div class="resultadoEmReal"></div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Quer fazer o contrário?</h3>
          <p>
            Se o que você procura é realizar a conversão de dolar para real, basta clicar no botão abaixo.
          </p>
          <button class="btn transparent" id="dolar-real-btn">
            converter USD / BRL
          </button>
        </div>
        <img src="img/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Quer fazer o contrário?</h3>
          <p>
            Se o que você procura é realizar a conversão de real para dolar, basta clicar no botão abaixo.
          </p>
          <button class="btn transparent" id="real-dolar-btn">
            converter BRL / USD
          </button>
        </div>
        <img src="img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="app.js"></script>
</body>

</html>