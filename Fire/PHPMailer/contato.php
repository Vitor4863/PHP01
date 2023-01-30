<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="envio.php" method="post">
        <div>
         <input type="text" name="nome" placeholder="nome">
      </div>

      <div>
        <input type="text" name="email" placeholder="email">
      </div>
      <div>
        <textarea name="msg"></textarea>
      </div>
      <input type="submit" name="enviar" >
     </form>
</body>
</html>