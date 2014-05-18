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
      <legend>7. RECURSOS HUMANOS</legend>
      
    <label>7.1 Quantos colaboradores possui?</label><input type="text" name=myText value="" size=10><br><br>

    <label>7.2 No último ano seus colaboradores participaram de treinamento?</label>
    <br>
    <tr>
      <label><th class="span1"><input type="radio" name = "partTrein" value = "simArea"></th>
      <td>Sim. Em que área?<input type="text" name=myText value="" size=30></label></td>
    </tr>
    
    <tr>
      <label><th class="span1"><input type="radio" name = "partTrein" value = "nao"></th>
      <td>Não </td></label>
    </tr><br><br> 

    <label>7.3 Qual a escolaridade dos que trabalham na empresa?</label><br>
    <tr>
      <label><th class="span1"><input type="radio" name = "escolTrab" value = "segGrau"></th>
      <td>Segundo grau </td></label>
    </tr>
    
    <tr>
      <label><th class="span1"><input type="radio" name = "escolTrab" value = "superior"></th>
      <td>Superior </td></label>
    </tr>
    
    <tr>
      <label><th class="span1"><input type="radio" name = "escolTrab" value = "posGrad"></th>
      <td>Pós-graduação</td></label>
    </tr> <br><br>

    <label>7.4 Que critérios utiliza para contratação de colaboradores?</label><br>
    <tr>
      <label><th class="span1"><input type="checkbox"></th>
      <td>Indicação </td></label>
    </tr>
    
    <tr>
      <label><th class="span1"><input type="checkbox"></th>
      <td>Entrevisa </td></label>
    </tr>
    
    <tr>
      <label><th class="span1"><input type="checkbox"></th>
      <td>Análise de Currículo e Entrevista</td></label>
    </tr> <br><br>
    
    <label>7.5 Quais são os fatores prioritários na escolha de um candidato? Enumerar por ordem de importância.</label><br>
    <tr>
      <label><th class="span1"><input type="checkbox"></th>
      <td>Aparência </td></label>
    </tr>
    
    <tr>
      <label><th class="span1"><input type="checkbox"></th>
      <td>Boa vontade </td></label>
    </tr>
    
    <tr>
      <label><th class="span1"><input type="checkbox"></th>
      <td>Experiência</td></label>
    </tr> <br><br>
    
    <label>7.6 Que tipo de atividades realiza para manter seus funcionários motivados?</label><br>
    <tr>
      <label><th class="span1"><input type="radio" name = "ativMotiv" value = "festas"></th>
      <td>Festas especiais </td></label>
    </tr>
    
    <tr>
      <label><th class="span1"><input type="radio" name = "ativMotiv" value = "partLucro"></th>
      <td>Participação no lucro </td></label>
    </tr>
    
    <tr>
      <label><th class="span1"><input type="radio" name = "ativMotiv" value = "outros"></th>
      <td>Outros: </td></label><input type="text" name=myText value="" size=30>
    </tr> <br><br>    
    
    <label>7.7 Quantas demissões X Contratações por ano? Por quê?</label><br>
    <input type="text" name=myText value="" size=100><br>
    
    </fieldset>
      <div class="form-group">
      <div class="col-sm-offset-11 col-sm-9">
        <button type="button" class="btn btn-success">Proximo</button>
</form>
</div>
</div>
</body>
</html>