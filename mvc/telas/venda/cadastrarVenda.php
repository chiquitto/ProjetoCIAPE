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
      <legend>4. VENDAS</legend>
      
    <label> 4.1 Faturamento dos últimos 6 meses (do mais recente para o anterior) </label>   
    <br>
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
              Faturamento em R$
            </th>
            <th class="text-center">
              Mês/Ano
            </th>
            <th class="text-center">
              Faturamento em R$
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
  
  <label>4.2 Dias da semana de maior movimento? Período do mês: </label>
    <td>
      <input type="text" name=myText value="" size=12>
      <input type="text" name=myText value="" size=12>
    </td>
      <tr><br>
         <label><th class="span1"><input type="checkbox"></th>
      <td> Seg</td></label>
      </tr>
    
     <tr>
        <label><th class="span1"><input type="checkbox"></th>
      <td> Ter </td></label>
      </tr>
    
    <tr>
        <label><th class="span1"><input type="checkbox"></th>
      <td> Qua</td></label>
      </tr>
    
    <tr>
        <label><th class="span1"><input type="checkbox"></th>
      <td> Qui</td></label>
      </tr> 

    <tr>
        <label><th class="span1"><input type="checkbox"></th>
      <td> Sex</td></label>
      </tr>
    
    <tr>
        <label><th class="span1"><input type="checkbox"></th>
      <td> Sab</td></label>
      </tr>
    
    <tr>
        <label><th class="span1"><input type="checkbox"></th>
      <td> Dom</td></label>
      </tr><br><br>
  
  <label>4.3 Quais horários de maior movimento?</label>
    <br>
    <tr>
        <label><th class="span1"><input type="checkbox"></th>
      <td> Manhã</td></label>
      </tr>
    <tr>
        <label><th class="span1"><input type="checkbox"></th>
      <td> Tarde</td></label>
      </tr>
    <tr>
        <label><th class="span1"><input type="checkbox"></th>
      <td> Noite</td></label>
      </tr>
    
    <br><br>

  <label>4.4 Forma de pagamento oferecidas aos clientes?</label>
    <br>
    <tr>
        <label><th class="span1"><input type="checkbox"></th>
      <td>Cheque pré-datado </td></label>
      </tr>
    
    <tr>
        <label><th class="span1"><input type="checkbox"></th>
      <td>Ticket </td></label>
      </tr>
    
    <tr>
        <label><th class="span1"><input type="checkbox"></th>
      <td>Cartão de crédito </td></label>
      </tr>
    <br>
    <tr>
        <label><th class="span1"><input type="checkbox"></th>
      <td>Caderneta </td></label>
      </tr>
    
    <tr>
        <label><th class="span1"><input type="checkbox"></th>
      <td>A vista </td></label>
      </tr>
    
    <tr>
        <label><th class="span1"><input type="checkbox"></th>
        <td>Outra? Qual?<input type="text" name=myText value="" size=30>
        <br> </td></label>
      </tr><br>
  
  <label>4.5 Qual o valor médio de compras por cliente?</label>
  <br>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name"> Por vez:</label>    
           <input type="text" name=myText value="" size=30>
           <label class="col-sm-3 control-label" for="card-holder-name"> Mensal:</label>   
           <input type="text" name=myText value="" size=30>
     
  </fieldset>
    <div class="form-group">
        <div class="col-sm-offset-11 col-sm-9">
          <button type="button" class="btn btn-success">Próxima</button>
</form>
</div>
</div>
</body>
</html>