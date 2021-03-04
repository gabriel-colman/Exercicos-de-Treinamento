<?php
/**
 * 4. Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão). 
 * Crie duas caixas de texto para receber 2 números. 
 * Realize a operação escolhida em cada um dos números. 
 */


//filter_input () é uma função embutida no PHP que é usada para obter a variável externa específica por nome e filtrá-la
$num01 = filter_input(INPUT_POST, "txtNumero1");
$num02 = filter_input(INPUT_POST, "txtNumero2");
$opera = filter_input(INPUT_POST, "slOperacao");
$resul = "";

if ($num01 && $num02) {
    switch ($opera) {
        case "+":
            $resul = ($num01 + $num02);

            break;
        case "-":
            $resul = ($num01 - $num02);

            break;
        case "*":
            $resul = ($num01 * $num02);

            break;
        case "/":
            $resul = ($num01 / $num02);
            break;
        default:
            break;
    }
}
// Agora vai ser o momento html para pode interagir com o cliente 
?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Operações</title>
     <style>
      input, select{padding:10px; margin: 5px;}
     </style>
   </head>
   <body>
     <h1><?=$resul;?></h1>
     <form method="post">
       <label>Número 1: <input type="text" name="txtNumero1"/></label><br><!-- Coloca espaço para entrar com numero -->
       <label>Número 2: <input type="text" name="txtNumero2"/></label><br> <!-- Coloca espaço para entrar com numero -->
       <label>Operação:
         <select name="slOperacao">
           <option value="+">Adição</option>
           <option value="-">Subtração</option>
           <option value="*">Multiplicação</option>
           <option value="/">Divisão</option>
         </select>
       </label><br>
       <input type="submit" name="btnCalcular" value="Calcular">
     </form>
   </body>
 </html>