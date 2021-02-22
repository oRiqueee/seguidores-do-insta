<?php include ('seguidores.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Seguidores do Instagram</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>  

  <nav class="navbar navbar-light bg-primary">
  <span class="navbar-brand mb-0 text-white font-weight-bold">Seguidores do Instagram</span>
</nav>
<br><br><br>
<div>
</div>
<br>
<div>
<h2><span class="font-weight-bold text-white" ><?php print "Usuário: " . $usuario; ?></span></h2>
</div>
<br>
<div>
<h2><span class="font-weight-bold text-white"><?php print "Seguidores: " . $resultado; ?> </span></h2>
</div>
  <div>
  <br><br><br><br>
    <form action="" method="POST">
  <input type="text" class="form-control" name="inserir" size="40" placeholder="Digite o usuário"/>
  </div>
  <br>
  <div>
  <button type="submit" name="enviar" class="btn btn-primary btn-lg">Procurar</button>
  </form>
  </div>
  <footer class="footer mt-auto py-3 fixed-bottom bg-primary">
      
  <span class="text-white font-weight-bold" style="margin: 0 25px;">   ❤  Feito por Henrique Amorim Guarnieri.</span>
        <a href="https://github.com/oRiqueee" target="_blank"><img src="/image/github.png" width="25" height="25" class="d-inline-block align-right" style="display: flex; float: right; margin: 0 30px;"></a>
    </footer>
  </body>
</html>