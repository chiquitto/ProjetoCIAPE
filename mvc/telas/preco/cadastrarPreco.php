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
  <link rel="stylesheet" href="\estilizacao\estilo.css">  
</head>
<body>
<div class="container">
  <form class="form-horizontal" role="form">
    <fieldset>
      <legend>3 - Preços</legend>
	  
	  <label> 3.1 Como forma os preços de seus produtos? </label>   
		<br>
	    <tr><br>
	      <th class="span1"><input type="checkbox"></th>
			<td> Percentual sobre os custos</td>
	    </tr>
	
		<tr><br>
	      <th class="span1"><input type="checkbox"></th>
			<td> Acompanhando o mercado </td>
	    </tr>
	
		<tr><br>
	      <th class="span1"><input type="checkbox"></th>
			<td> Outra Maneira, qual? </td><input type="text" name=myText value="" size=50>
	    </tr><br><br>

	  <label> 3.2 Seus preços em relação a concorrência estão? </label>   
		<br>
	    <tr><br>
	      <th class="span1"><input type="checkbox"></th>
			<td> Acima</td>
	    </tr>
	
		<tr><br>
	      <th class="span1"><input type="checkbox"></th>
			<td> Iguais </td>
	    </tr>
	
		<tr><br>
	      <th class="span1"><input type="checkbox"></th>
			<td> Abaixo </td>
	    </tr>
	</fieldset>

	  <div class="form-group">
        <div class="col-sm-offset-11 col-sm-9">
          <button type="button" class="btn btn-success">Próxima</button>
  </form>
</div>
</div>
</body>
</html>
	
	

