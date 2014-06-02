<!DOCTYPE html>
<html>
    <head>
        <title>Listagem de Empresas</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href=".\\mvc\\estilizacao\\twitter-bootstrap\\css\\bootstrap.css" rel="stylesheet">
        <link href=".\\mvc\\estilizacao\\estilo.css" rel="stylesheet">
    </head>
    <body>
        <div id="main">
            <h1>Listagem de Empresas</h1>
            [<a href="cadastrar.php?id=<?php echo $emp->getNumOrdem(); ?>">Cadastrar</a>] 
            <br><br>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nº Ordem</th>
                  <th>Razão Social</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                  <?php foreach($dados['empresas'] as $emp) { ?>
                <tr>
                  <td><?php echo $emp->getNumOrdem(); ?></td>
                  <td><?php echo $emp->getE_razaoSocial(); ?></td>  
                  <td>
                    [<a href="visualizar.php?id=<?php echo $emp->getNumOrdem(); ?>">Visualizar</a>]    
                    [<a href="listar.php?id=<?php echo $emp->getNumOrdem(); ?>">Apagar</a>]
                  </td>
                </tr>
                  <?php } ?>
              </tbody>
            </table>
        </div>
    </body>
</html>