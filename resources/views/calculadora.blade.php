<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
</head>
<body>
   <form action="/calcular" method="post">
       @csrf
       <input type="number" name="num1" placeholder="Número 1">
       <input name="operador" placeholder="Operador">
       <input type="number" name="num2" placeholder="Número 2">
       <button type="submit">Calcular</button>
   </form>
</body>
</html>
