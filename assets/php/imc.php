<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="https://unipacto.com.br/images/favicon/favicon-32x32.png"
    />
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            width: 100vw;
            height: 100vh;
            font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
                "Lucida Sans", Arial, sans-serif;
            background-color: #11f258;
            color: white;
            justify-content: center;
            align-items: center;
        }

        h1 {
            margin-bottom: 10px;
        }

        section {
            display: flex;
            flex-flow: column;
            justify-content: center;
            align-items: center;
            padding: 20px 30px;
            background-color: #10e892;
            box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.315);
            border-radius: 8px;
        }

        p {
            background-color: rgba(0, 0, 0, 0.664);
            padding: 10px;
            border-radius: 5px;
        }

        .low, .overweight {
            color: yellow;
        }

        .normal {
            color: #39F977;
        }

        .obesity {
            color: red;
        }

        a {
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            text-decoration: none;
            background-color: #1bdb20;
            color: white;
        }

        a:hover {
            background-color: white;
            color: #1bdb20;
        }
    </style>
    <title>IMC</title>
  </head>
  <body>
    <section>
      <?php
        //Variables received from index.html
        $weight = $_POST['weight'];
        $height = $_POST['height'];

        //IMC calculate
        $imc = $weight /(pow($height, 2));

        //Show the result for user
        
        echo "<h1> Seu IMC é: ". number_format($imc, 2)."</h1>";
        if ($imc < 18.5)
        {
            echo "<p class='low'> Abaixo do peso</p>";
        } elseif ( $imc < 24.9 )
        {
            echo "<p class='normal'> Peso normal</p>";
        }elseif ( $imc < 29.9)
        {
            echo "<p class='overweight'> Sobrepeso</p>";
        }elseif ( $imc < 34.9)
        {
            echo "<p class='obesity'> Obesidade grau 1</p>";
        }elseif ( $imc < 39.9)
        {
            echo "<p class='obesity'> Obesidade grau 2</p>";    
        }elseif ($imc > 40) {
            echo "<p class='obesity'> Obesidade grau 3</p>";
        }
        
      ?>
      <a href="../../index.html">Refazer cálculo</a>
    </section>
  </body>
</html>
