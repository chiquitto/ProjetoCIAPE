<script type="text/javascript" src="telas\empresa\validacao.js"></script>
<?php

$acao = null;
$numOrdem = 0;
$msg = '';

if (isset($_GET['acao'])) {
  $acao = $_GET['acao'];
}
if (isset($_GET['id'])) {
  $id = (int) $_GET['id'];
}

switch($acao) {
  case 'apagar':
    $controller = new Controller_Empresa();
    $controller->apagar();
    header("Refresh:0; url=listar-empresas.php");
}
?>

<div class="container">
<div id ="listagem">
        <title>Listagem de Empresas</title>
        <link rel="stylesheet" href="./estilizacao/twitter-bootstrap/css/bootstrap.css">

        <div id="main" class="table table-striped">
            
            <h2 align="center">Listagem de Empresas</h2>
            <a href="cadastrar-empresas.php?" id ="btn">Cadastrar</a> <hr>
            <div class="input-group">
                    <input class="form-control" id="system-search" name="q" placeholder="Pesquisar por" required>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                    </span>
            </div>
            
            <table class="table table-striped">
              <thead>
                <tr>
                  <th><b>Nº Ordem</th>
                  <th><b>Razão Social</th>
                  <th><b>Visualizar</th>
                  <th><b>Excluir</th>
                </tr>
              </thead>
              <tbody>
                  <?php foreach($this->dados['empresa'] as $emp) { ?>
                <tr>
                  <td><?php echo $emp->getNumOrdem(); ?></td>
                  <td><?php echo $emp->getE_razaoSocial(); ?></td> 
                   <td><a href="visualizar.php?id=<?php echo $emp->getNumOrdem(); ?>">[Visualizar]</a></td>
                   <td><a href="listar-empresas.php?id=<?php echo $emp->getNumOrdem(); ?>&acao=apagar" onclick="return confirm('Tem certeza que deseja excluir este cadastro?')">[Excluir]</a></td>
                </tr>
                  <?php } ?>
              </tbody>
            </table>
        </div>
    </div>
    </div>