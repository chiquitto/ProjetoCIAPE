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
      <legend>9. JURIDICO</legend>
	  
	<label>  9.1 Você conhece todos os impostos devidos pela sua empresa?</label><br>
		<tr>
	      <label><th class="span1"><input type="radio" name = "impDevEmp" value = "nao"></th>
	      	<td>Sim</td></label>
	    </tr>
	    <tr>
	      <label><th class="span1"><input type="radio" name = "impDevEmp" value = "nao"></th>
	      	<td>Não</td></label>
	    </tr><br><br>
	
	
	<label>9.2 Você já recebeu alguma autuação de fiscalização?</label><br>
		<tr>
	      <label><th class="span1"><input type="radio" name = "impDevEmp" value = "nao"></th>
	      	<td>Sim</td></label>
	    </tr>
	    <tr>
	      <label><th class="span1"><input type="radio" name = "impDevEmp" value = "nao"></th>
	      	<td>Não</td></label>
	    </tr><br><br>
	
	<label>9.3 Sua empresa está respondendo alguma ação judicial, inclusive trabalhista?</label>
	<BR>
		<tr>
	      <label><th class="span1"><input type="radio" name = "acaoJudicial" value = "nao"></th>
	      	<td>Sim</td></label>
	    </tr>
	    <tr>
	      <label><th class="span1"><input type="radio" name = "acaoJudicial" value = "nao"></th>
	      	<td>Não</td></label>
	    </tr><br><br>
	
	
	<label>9.4 Suas tratativas com seus fornecedores são:</label><br>
		<tr>
	      <label><th class="span1"><input type="radio" name = "tratativas" value = "nao"></th>
	      	<td>Verbais</td></label>
	    </tr>
	    <tr>
	      <label><th class="span1"><input type="radio" name = "tratativas" value = "nao"></th>
	      	<td>Com contratos</td></label>
	    </tr><br><br>
	
	<label>9.5 Como você realiza suas cobranças na empresa?</label><br>
		<tr>
	      <label><th class="span1"><input type="checkbox"></th>
	      <td>Empresa de cobrança</td></label>
	    </tr>

	    <tr>
	      <label><th class="span1"><input type="checkbox"></th>
	      <td>Colaborador</td></label>
	    </tr>

	    <tr>
	      <label><th class="span1"><input type="checkbox"></th>
	      <td>Pessoalmente</td></label>
	    </tr>

	    <tr>
	      <label><th class="span1"><input type="checkbox"></th>
	      <td>Outros</td></label>
	    </tr>
	 </br>
	 <BR>
	 
	 <label>9.6 Tem assessoria jurídica?</label><br>
	 	<tr>
	      <label><th class="span1"><input type="radio" name = "assessoriaJuridica" value = "nao"></th>
	      	<td>Sim</td></label>
	    </tr>
	    <tr>
	      <label><th class="span1"><input type="radio" name = "assessoriaJuridica" value = "nao"></th>
	      	<td>Não</td></label>
	    </tr><br><br>
	
	<label>Observação:</label>
	<br>
	<input type="text" name=myText value="" size=100><br>

</fieldset>
	</div>
		 <div class="form-group">
        <div class="col-sm-offset-11 col-sm-9">
        <button type="button" class="btn btn-success">Salvar</button>
        <button type="button" class="btn btn-success">Cancelar</button>
  </form>
</div>
</div>
  </body>
  </html>





	
	 