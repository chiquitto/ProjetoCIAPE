<?php
if (isset($this->dados['erro'])) {   
?>

<p><?php echo $this->dados['erro']; ?></p>

<?php  
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>TERMO DE ADESÃO – PROJETO CIAPE UNIPAR/ACIC</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="estilizacao\estilo.css">
</head>
<body>
<div class="container">
  <form class="form-horizontal" role="form">
    <fieldset>
      <legend>5. COMPRAS</legend>

    <label>5.1 Quais são seus principais fornecedores?</label><br>
    <div class="row clearfix">
    <div class="col-md-12 column">
      <table class="table table-bordered table-hover" id="tab_logic">
        <thead>
          <tr >
            <th class="text-center">  
            </th>
            <th class="text-center">
              Razão Social/Fantasia
            </th>
            <th class="text-center">
              Cidade - UF
            </th>
            <th class="text-center">
              Produtos
            </th>
            <th class="text-center">
              Exigência lote mínimo. Qual?
            </th>
            <th class="text-center">
              Relacionamento
            </th>
          </tr>
        </thead>
        <tbody>
          <tr id='addr0'>
            <td>
            
            </td>
            <td>
              <input type="text" name=''  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name='' placeholder='' class="form-control"/>
            </td>           
            <td>
              <input type="text" name=''  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name=''  placeholder='' class="form-control" size=28/>
            </td>
            <td>
              <input type="text" name=''  placeholder='' class="form-control"/>
            </td>
          </tr>
            
          <tr id='addr1'>
            <td>
            
            </td>
            <td>
              <input type="text" name=''  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name='' placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name=''  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name=''  placeholder='' class="form-control" size=28/>
            </td>
            <td>
              <input type="text" name=''  placeholder='' class="form-control"/>
            </td>
          </tr>
            
          <tr id='addr2'>
            <td>
            
            </td>
            <td>
              <input type="text" name=''  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name='' placeholder='' class="form-control"/>
            </td>   
            <td>
              <input type="text" name=''  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name=''  placeholder='' class="form-control" size=28/>
            </td> 
            <td>
              <input type="text" name=''  placeholder='' class="form-control"/>
            </td>
          </tr>
            
          <tr id='addr3'>
            <td>
            
            </td>
            <td>
              <input type="text" name=''  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name='' placeholder='' class="form-control"/>
            </td>   
            <td>
              <input type="text" name=''  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name=''  placeholder='' class="form-control" size=28/>
            </td> 
            <td>
              <input type="text" name=''  placeholder='' class="form-control"/>
            </td>
            
          <tr id='addr4'>
            <td>
            
            </td>
            <td>
              <input type="text" name=''  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name='' placeholder='' class="form-control"/>
            </td>   
            <td>
              <input type="text" name=''  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name=''  placeholder='' class="form-control" size=28/>
            </td> 
            <td>
              <input type="text" name=''  placeholder='' class="form-control"/>
            </td>
          </tr>           
            
          <tr id='addr5'>
            <td>
            
        </tbody>
      </table>
    </div>
  </div><br>
  
  <label>5.2 Qual valor das suas compras nos últimos 6 meses? (do mais recente para o anterior)</label><br>
      <div class="row clearfix">
      <div class="col-md-12 column">
        <table class="table table-bordered table-hover" id="tab_logic">
          <thead>
            <tr >
              <th class="text-center">  
              </th>
              <th class="text-center">
                Mês/Ano
              </th>
              <th class="text-center">
                Compras em R$
              </th>
              <th class="text-center">
                Mês/Ano
              </th>
              <th class="text-center">
                Compras em R$
              </th>
            </tr>
          </thead>
          <tbody>
            <tr id='addr0'>
              <td>
              
              </td>
              <td>
                <input type="text" name=''  placeholder='' class="form-control"/>
              </td>
              <td>
                <input type="text" name='' placeholder='' class="form-control"/>
              </td>
              
              <td>
                <input type="text" name=''  placeholder='' class="form-control"/>
              </td>
              <td>
                <input type="text" name=''  placeholder='' class="form-control"/>
              </td>
            </tr>
              
            <tr id='addr1'>
              <td>
              
              </td>
              <td>
                <input type="text" name=''  placeholder='' class="form-control"/>
              </td>
              <td>
                <input type="text" name='' placeholder='' class="form-control"/>
              </td>
              
              <td>
                <input type="text" name=''  placeholder='' class="form-control"/>
              </td>
              <td>
                <input type="text" name=''  placeholder='' class="form-control"/>
              </td>
            </tr>
              
            <tr id='addr2'>
              <td>
              
              </td>
              <td>
                <input type="text" name=''  placeholder='' class="form-control"/>
              </td>
              <td>
                <input type="text" name='' placeholder='' class="form-control"/>
              </td>   
              <td>
                <input type="text" name=''  placeholder='' class="form-control"/>
              </td>
              <td>
                <input type="text" name=''  placeholder='' class="form-control"/>
              </td>
            </tr>

            <tr id='addr3'>
              <td>
              
              </td>
              <td>
                <input type="text" name=''  placeholder='' class="form-control"/>
              </td>
              <td>
                <input type="text" name='' placeholder='' class="form-control"/>
              </td>
              
              <td>
                <input type="text" name=''  placeholder='' class="form-control"/>
              </td>
              <td>
                <input type="text" name=''  placeholder='' class="form-control"/>
              </td>
            </tr>
              
            <tr id='addr4'>
              <td>
              
              </td>
              <td>
                <input type="text" name=''  placeholder='' class="form-control"/>
              </td>
              <td>
                <input type="text" name='' placeholder='' class="form-control"/>
              </td>
              
              <td>
                <input type="text" name=''  placeholder='' class="form-control"/>
              </td>
              <td>
                <input type="text" name=''  placeholder='' class="form-control"/>
              </td>
            </tr>
              
            <tr id='addr5'>
              <td>
              
              </td>
              <td>
                <input type="text" name=''  placeholder='' class="form-control"/>
              </td>
              <td>
                <input type="text" name='' placeholder='' class="form-control"/>
              </td>   
              <td>
                <input type="text" name=''  placeholder='' class="form-control"/>
              </td>
              <td>
                <input type="text" name=''  placeholder='' class="form-control"/>
              </td>
            </tr>

          </tbody>
      </table>
    </div>
  </div><br>
  
  </fieldset>
    <div class="form-group">
        <div class="col-sm-offset-11 col-sm-9">
          <button type="button" class="btn btn-success">Próxima</button>
</form>
</div>
</div>
</body>
</html>