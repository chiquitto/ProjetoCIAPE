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
      <legend>8. ADMINISTRATIVO/FINANCEIRO/CONTÁBIL</legend>
	  <br>
	  <label>8.1 Que tipo de controle utiliza? Caso não possua alguns dos controles, deixar em branco.</label>
	  <br><br>
	  <div class="row clearfix">
      <div class="col-md-12 column">
      <table class="table table-bordered table-hover" id="tab_logic">
        <thead>
          <tr >
            <th class="text-center" align="left" >
              Tipo de Controle
            </th>
            <th class="text-center" align="left">
              Manual
            </th>
            <th class="text-center" align="left">
              Informatizado
            </th>
            <th class="text-center" align="left">
              Tipo de Controle
            </th> 
            <th class="text-center" align="left">
              Manual
            </th>
            <th class="text-center" align="left">
              Informatizado
            </th>
          </tr>
        </thead>
        <tbody>
          <tr id='addr0'>
            <td>
            Fluxo de caixa
            </td>
            <td>
              <input type="text" name=''  placeholder='' class="form-control" size="3" />
            </td>
            <td>
              <input type="text" name='' placeholder='' class="form-control" size="8"/>
            </td>
            <td>
            Adm. de Compras
            </td>           
            <td>
              <input type="text" name=''  placeholder='' class="form-control" size="3"/>
            </td>
            <td>
              <input type="text" name=''  placeholder='' class="form-control" size="8" />
            </td>
          </tr>
            
          <tr id='addr1'>
            <td>
            Controle de Estoques
            </td>
            <td>
              <input type="text" name=''  placeholder='' class="form-control" size="3"/>
            </td>
            <td>
              <input type="text" name='' placeholder='' class="form-control" size="8"/>
            </td>
            <td>
              Adm. de Vendas
            </td>
            <td>
              <input type="text" name=''  placeholder='' class="form-control" size="3"/>
            </td>
            <td>
              <input type="text" name=''  placeholder='' class="form-control" size="8"/>
            </td>
          </tr>
            
          <tr id='addr2'>
            <td>
            Contas a pagar
            </td>
            <td>
              <input type="text" name=''  placeholder='' class="form-control" size="3"/>
            </td>
            <td>
              <input type="text" name='' placeholder='' class="form-control" size="8"/>
            </td>   
            <td>
              Faturamento
            </td>
            <td>
              <input type="text" name=''  placeholder='' class="form-control" size="3"/>
            </td> 
            <td>
              <input type="text" name=''  placeholder='' class="form-control" size="8"/>
            </td>
          </tr>
            
          <tr id='addr3'>
            <td>
            Contas a receber
            </td>
            <td>
              <input type="text" name=''  placeholder='' class="form-control" size="3"/>
            </td>
            <td>
              <input type="text" name='' placeholder='' class="form-control" size="8"/>
            </td>   
            <td>
              Outros:<input type="text" name=''  placeholder='' class="form-control" size="10"/>
            </td>
            <td>
              <input type="text" name=''  placeholder='' class="form-control" size="3"/>
            </td> 
            <td>
              <input type="text" name=''  placeholder='' class="form-control" size="8"/>
            </td>
          </tr>            
        </tbody>
      </table>
    </div>
  </div><br>

		<label>8.2 Realiza Planejamentos?</label>
		<br>
		 <tr>
	      <label><th class="span1"><input type="radio" name = "realPlan" value = "simArea"></th>
	      	<td>Sim. Em que áreas?<input type="text" name=myText value="" size=30></label></td>
	    </tr>
	    
	    <tr>
	      <label><th class="span1"><input type="radio" name = "realPlan" value = "nao"></th>
	      	<td>Não </td></label>
	    </tr><br><br> 
		
		<label>8.3 Trabalha ou já obteve recursos de terceiros?</label>
		<br>
		 <tr>
	      <label><th class="span1"><input type="radio" name = "trabRecTerc" value = "nao"></th>
	      	<td>Não </td></label>
	    </tr>
	     <tr>
	      <label><th class="span1"><input type="radio" name = "trabRecTerc" value = "sim"></th>
	      	<td>Sim </td></label>
	    </tr>
			
		<tr>
	      <label><th class="span1"><input type="checkbox"></th>
	      <td>Cheque Especial</td></label>
	    </tr>

	    <tr>
	      <label><th class="span1"><input type="checkbox"></th>
	      <td>Empréstimo</td></label>
	    </tr>

	    <tr>
	      <label><th class="span1"><input type="checkbox"></th>
	      <td>Factoring</td></label>
	    </tr>

	    <tr>
	      <label><th class="span1"><input type="checkbox"></th>
	      <td>Outros <input type="text" name=myText value="" size=50></td></label>
	    </tr>
		<br>
	<BR>
	<label>8.4 Quais são seus maiores gastos?</label>
		<br>
		<tr>
	      <label><th class="span1"><input type="checkbox"></th>
	      <td>Frete</td></label>
	    </tr>

	    <tr>
	      <label><th class="span1"><input type="checkbox"></th>
	      <td>Energia Elétrica</td></label>
	    </tr>

	    <tr>
	      <label><th class="span1"><input type="checkbox"></th>
	      <td>Folha de Pagamento</td></label>
	    </tr>

	    <br>
	    <tr>
	      <label><th class="span1"><input type="checkbox"></th>
	      <td>Financeiros</td></label>
	    </tr>

	    <tr>
	      <label><th class="span1"><input type="checkbox"></th>
	      <td>Manutenção Geral</td></label>
	    </tr>

	    <tr>
	      <label><th class="span1"><input type="checkbox"></th>
	      <td>Impostos</td></label>
	    </tr>

	    <br>
	    <tr>
	      <label><th class="span1"><input type="checkbox"></th>
	      <td>Aluguel</td></label>
	    </tr>

	    <tr>
	      <label><th class="span1"><input type="checkbox"></th>
	      <td>Outros, quais? <input type="text" name=myText value="" size=50></td></label>
	    </tr>
		
		<br>	
	</fieldset>
	</div>
		 <div class="form-group">
        <div class="col-sm-offset-11 col-sm-9">
        <button type="button" class="btn btn-success">Próxima</button>
  </form>
</div>
</div>
  </body>
  </html>
	
				
				
				