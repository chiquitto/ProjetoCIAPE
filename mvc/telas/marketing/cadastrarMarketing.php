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
      <legend>2 - Marketing/Comunicação</legend>
	  
	   <div class="row clearfix">
		<div class="col-md-12 column">
			<table class="table table-bordered table-hover" id="tab_logic">
				<thead>
					<tr >
						<th class="text-center">	
						</th>
						<th class="text-center">
							Produtos mais vendidos
						</th>
						<th class="text-center">
							Quantidade  mensal
						</th>
						<th class="text-center">
							Unidade de medida (Kg, m³, pç)
						</th>
						<th class="text-center">
							% Margem de lucro
						</th>
						<th class="text-center">
							% do Faturamento
						</th>	
					</tr>
				</thead>
				<tbody>
					<tr id='addr0'>
						<td>
						1
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
						<td>
							<input type="text" name='' placeholder='' class="form-control"/>
						</td>
					</tr>
						
					<tr id='addr1'>
						<td>
						2
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
						<td>
							<input type="text" name='' placeholder='' class="form-control"/>
						</td>
					</tr>
						
					<tr id='addr2'>
						<td>
						3
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
						<td>
							<input type="text" name='' placeholder='' class="form-control"/>
						</td>
					</tr>						
				</tbody>
			</table>
		</div>
	</div>

	 <label>2.1 Quem são seus concorrentes?</label>
		<div class="container">
		    <div class="row clearfix">
				<div class="col-md-12 column">
					<table class="table table-bordered table-hover" id="tab_logic">
						<tbody>
							<tr id='addr0'>
								<td>
								1
								</td>
								<td>
									<input type="text" name=myText value="" size=60>
								</td>
								<td>
									<input type="text" name=myText value="" size=60>
								</td>
							</tr>
								
							<tr id='addr1'>
								<td>
								2
								</td>
								<td>
									<input type="text" name=myText value="" size=60>
								</td>
								<td>
									<input type="text" name=myText value="" size=60>
								</td>
								
							<tr id='addr2'>
								<td>
								3
								</td>
								<td>
									<input type="text" name=myText value="" size=60>
								</td>
								<td>
									<input type="text" name=myText value="" size=60>
								</td>
							</tr>	
					</tbody>
			</table>
		</div>
	</div>
					

	<label> 2.3 Você visita a concorrência? </label>   
	<br>
	    <tr><br>
	      <th class="span1"><input type="checkbox"></th>
			<td> Sim</td>
	    </tr>
		
		
		<tr>
	      <th class="span1"><input type="checkbox"></th>
			<td> Não</td>
	    </tr>
		<br><br>

 
	<label> 2.4 Quais são seus pontos fortes em relação a concorrência?</label> 
	<br>
	    <tr><br>
	      <th class="span1"><input type="checkbox"></th>
			<td> Atendimento</td>
	    </tr> 
		
		 <tr>
	      <th class="span1"><input type="checkbox"></th>
			<td> Estacionamento</td>
	    </tr> 
		
		<tr>
	      <th class="span1"><input type="checkbox"></th>
			<td> Preço</td>
	    </tr>
		
		<tr>
	      <th class="span1"><input type="checkbox"></th>
			<td> Variedade</td>
	    </tr>
		
		<br>
		<tr>
	      <th class="span1"><input type="checkbox"></th>
			<td> Espaco Fisico</td>
	    </tr>
		
		<tr>
	      <th class="span1"><input type="checkbox"></th>
			<td> Localização</td>
	    </tr>
		
		<tr>
	      <th class="span1"><input type="checkbox"></th>
			<td> Qualidade</td>
	    </tr>

		<tr>
	      <th class="span1"><input type="checkbox"></th>
			<td> Outros</td>
			<input type="text" name=myText value="" size=50>
	    </tr>
		</br>
		 
		<br>
		<label>2.5 Quais são seus pontos para melhoria em relação a concorrência?</label>
		<br>
		<tr><br>
	      <th class="span1"><input type="checkbox"></th>
			<td> Atendimento</td>
	    </tr> 
		
		<tr>
	      <th class="span1"><input type="checkbox"></th>
			<td> Estacionamento</td>
	    </tr> 
		
		<tr>
	      <th class="span1"><input type="checkbox"></th>
			<td> Preço</td>
	    </tr>
		
		<tr>
	      <th class="span1"><input type="checkbox"></th>
			<td> Variedade</td>
	    </tr>
		
		<br>
		<tr>
	      <th class="span1"><input type="checkbox"></th>
			<td> Espaço Físico</td>
	    </tr>
		
		<tr>
	      <th class="span1"><input type="checkbox"></th>
			<td> Localização</td>
	    </tr>
		
		<tr>
	      <th class="span1"><input type="checkbox"></th>
			<td> Qualidade</td>
	    </tr>

		<tr>
	      <th class="span1"><input type="checkbox"></th>
			<td> Outros</td><input type="text" name=myText value="" size=50>
	    </tr>
		</br><br>		
	  
	<label>2.6 Faz promoções? </label>
	<br>
		<tr><br>
	      <th class="span1"><input type="checkbox"></th>
			<td> Mais de duas vezes por mês</td>
	    </tr>
		
		<tr>
	      <th class="span1"><input type="checkbox"></th>
			<td> Uma vez por mês</td>
	    </tr>
		
		<tr>
	      <th class="span1"><input type="checkbox"></th>
			<td> Não, nunca faço</td>
	    </tr>
	</br><br>


	<label> 2.7 Quais meios utiliza? </label>
	<br>
		<tr><br>
	      <th class="span1"><input type="checkbox"></th>
			<td> Rádio</td>
	    </tr>
		
		<tr>
	      <th class="span1"><input type="checkbox"></th>
			<td> Jornal</td>
	    </tr>
		
		<tr>
	      <th class="span1"><input type="checkbox"></th>
			<td> Panfleto</td>
	    </tr>
		
		<tr>
	      <th class="span1"><input type="checkbox"></th>
			<td> Outros</td><input type="text" name=myText value="" size=50>
	    </tr>
	</br>

	<br>
	<label>2.8 O estabelecimento é bem sinalizado, dividido em seções?</label>
	<br>
		<tr><br>
	      <th class="span1"><input type="checkbox"></th>
			<td> Sim</td>
	    </tr>
		
		<tr>
	      <th class="span1"><input type="checkbox"></th>
			<td> Não</td>
	    </tr>
	</br><br>

	<label> 2.9 Dispõe de espaços promocionais? (dispostos na loja)</label>
	<br>
		<tr><br>
	      <th class="span1"><input type="checkbox"></th>
			<td> Sim</td>
	    </tr>
		
		<tr>
	      <th class="span1"><input type="checkbox"></th>
			<td> Não</td>
	    </tr>
	</br><br>      
   </fieldset>
	    <div class="form-group">
          <div class="col-sm-offset-22 col-sm-9">
          	<button type="button" class="btn btn-success">Próxima</button>
          </div>
        </div>
  </form>
</div>
</div>
</body>
</html>