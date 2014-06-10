<div class="container">
<div id ="listagem">
        <title>Listagem de Empresas</title>
        <link rel="stylesheet" href="./estilizacao/twitter-bootstrap/css/bootstrap.css">
        
        <div id="main" class="table table-striped">
            
            <h1 align="center">Listagem de Empresas</h1>
            <a href="cadastrar-empresas.php?" id ="btn">Cadastrar</a> 
           
            
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nº Ordem</th>
                  <th>Razão Social</th>
                   <th>Visualizar</th>
                  <th>Excluir</th>
                </tr>
              </thead>
              <tbody>
                  <?php foreach($this->dados['empresa'] as $emp) { ?>
                <tr>
                  <td><?php echo $emp->getNumOrdem(); ?></td>
                  <td><?php echo $emp->getE_razaoSocial(); ?></td>  
                     <td><p><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-eye-open"></span></button></p></td>
                     <td><p><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" rel="tooltip"><span class="glyphicon glyphicon-trash"></span></button></p></td>
                </tr>
                  <?php } ?>
              </tbody>
            </table>
        </div>
    </div>
    </div>