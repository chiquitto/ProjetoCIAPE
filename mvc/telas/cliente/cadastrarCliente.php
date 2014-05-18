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
      <legend>6. Clientes</legend>

  <label>6.1 Quantos clientes atende por mês?</label>
    <input type="text" name=myText value="" size=10><br><br>
  
  <label>6.2 Qual é o perfil do seu cliente?</label>
    <br>
      <input type="text" name=myText value="" size=5><td>% classe A </td>
    <br>
      <input type="text" name=myText value="" size=5><td>% classe B </td>
    <br>
      <input type="text" name=myText value="" size=5><td>% classe C </td>
    <br>
      <input type="text" name=myText value="" size=5><td>% classe D </td>
    <br>
      <input type="text" name=myText value="" size=5><td>% 0 a 18 anos </td>
    <br>    
      <input type="text" name=myText value="" size=5><td>% 19 a 30 anos </td>  
    <br>
      <input type="text" name=myText value="" size=5><td>% 31 a 45 anos </td>
    <br>  
      <input type="text" name=myText value="" size=5><td>% acima de 46 anos </td>
    <br>
      <input type="text" name=myText value="" size=5><td>% Masculino </td>
    <br>
      <input type="text" name=myText value="" size=5><td>% Feminino </td>
    <br><br>

  <label>6.3 Vende para empresas?</label><br>
    <tr>
      <label><th class="span1"><input type="radio" name = "vendeEmp" value = "vendeSim"></th>
      <td>Sim.Quantos % representa do total do faturamento?</td></label>
      <input type="text" name=myText value="" size=5>
      </tr>
    
    <tr>
      <label><th class="span1"><input type="radio" name = "vendeEmp" value = "vendeNao"></th>
      <td>Não </td></label>
      </tr>
    
    <br><br>
  <label>6.4 Faz pesquisas com seus clientes?</label><br>
    <tr>
      <label><th class="span1"><input type="radio" name = "pesqCli" value="sim"></th>
      <td>Sim, frequência?</td></label>
      <input type="text" name=myText size=15>
      </tr>
    
    <tr>
      <label><th class="span1"><input type="radio" name = "pesqCli" value="nao"></th>
      <td>Não, mas já fiz </td></label>
      </tr>
    
    <tr>
      <label><th class="span1"><input type="radio" name = "pesqCli" value="nunca"></th>
      <td>Nunca fiz </td></label>
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