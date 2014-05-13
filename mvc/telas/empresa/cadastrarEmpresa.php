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
<fieldset> 
<label class="col-sm-2 control-label" for="card-holder-name"> Nº Da Ordem</label>
          <input type="text" name=myText value="" size=100>
         <p> Informações Gerais: o questionário destina-se exclusivamente a obtenção de 
         informações das empresas participantes do projeto CIAPE – UNIPAR/ACIC. Tem por 
         finalidade criar indicadores que permitirão comparar a evolução das empresas ao longo 
         do processo. As informações deverão ser fornecidas pelo proprietário, considerando 
         a real situação da empresa. Não será divulgado nenhum tipo de informações contidas neste documento.</p>
</fieldset> 
</head>
<body>
     <fieldset> <legend>1 -  Dados Cadastrais</legend>  
       <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name"> Razão Social</label>
            <div class="col-sm-9">
            <input type="text" name=myText value="" size=100>
      
            <div class="form-group">
            <label class="col-sm-3 control-label" for="card-holder-name"> Nome Fantasia</label> 
              <div class="col-sm-9">        
               <input type="text" name=myText value="" size=100>   
      
            <div class="form-group">
            <label class="col-sm-3 control-label" for="card-number">CNPJ</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="card-number" id="card-number" placeholder="CNPJ">
              </div>
          </div>

        <label class="col-sm-3 control-label" for="expiry-month">Data de Fundação</label>
            <div class="form-group">
            <label class="col-sm-3 control-label" for="card-number"></label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="card-number" id="card-number" placeholder="">
            </div>

      
        <div class="form-group">
            <label class="col-sm-3 control-label" for="card-holder-name"> Ramo de Atividade</label>
            <div class="col-sm-9">
                <input type="text" name=myText value="" size=100>
            </div>
        </div>
      
      
        <div class="form-group">
            <label class="col-sm-3 control-label" for="card-holder-name"> Endereço</label>      
            <div class="col-sm-4">
                <input type="text" name=myText value="" size=100>
            </div>
        
            <label class="col-sm-2 control-label" for="textinput">Bairro</label>
            <div class="col-sm-3">
              <input type="text" name=myText value="" size=100>
            </div>
        </div>
      
      
        <div class="form-group">
            <label class="col-sm-3 control-label" for="card-holder-name"> CEP</label>       
            <div class="col-sm-2">
              <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="CEP">
            </div>

            <label class="col-sm-1 control-label" for="textinput">Cidade</label>
            <div class="col-sm-2">
                <input type="text" name=myText value="" size=100>
            </div>
      
      
        <label class="col-sm-1 control-label" for="expiry-month">UF</label>
        <div class="col-sm-3">
          <div class="row">
            <div class="col-xs-4">
              <select class="form-control col-sm-10" name="expiry-Uf" id="expiry-Uf">
                <option></option>
                <option value="01">AC </option>
                <option value="02">AL </option>
                <option value="03">AM </option>
                <option value="04">AP </option>
                <option value="05">BA </option>
                <option value="06">CE </option>
                <option value="07">DF </option>
                <option value="08">ES </option>
                <option value="09">GO </option>
                <option value="10">MA </option>
                <option value="11">MG </option>
                <option value="12">MS </option>
                <option value="10">MT </option>
                <option value="11">PA </option>
                <option value="12">PB </option>
                <option value="10">PE </option>
                <option value="11">PI </option>
                <option value="12">PR </option> 
                <option value="10">RJ </option>
                <option value="11">RN </option>
                <option value="12">RO </option>                 
                <option value="11">RR </option>
                <option value="12">RS </option>
                <option value="10">SC </option>
                <option value="11">SE </option>
                <option value="12">SP </option>
                <option value="12">TO </option>
              </select>
            </div>
        </div>
      </div>
      </div>
      
         <div class="form-group">
            <label class="col-sm-3 control-label" for="card-holder-name">Fone</label>       
            <div class="col-sm-4">
              <input type="text" name=myText value="" size=100>        
            </div>
            
            <label class="col-sm-2 control-label" for="textinput">E-mail</label>
            <div class="col-sm-3">
                <input type="text" name=myText value="" size=100>
            </div>
         </div>
      
        <div class="container">
        <div class="row clearfix">
            <div class="col-md-10 column">
                <table class="table table-bordered table-hover" id="tab_logic">
                    <thead>
                        <tr >
                            <th class="text-center">    
                            </th>
                            <th class="text-center">
                                Sócios
                            </th>
                            <th class="text-center">
                                Cargo Ocupado na Empresa
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr id='addr0'>
                            <td>
                            1
                            </td>
                            <td>
                              <input type="text" name=myText value="" size=50>
                            </td>
                            <td>
                              <input type="text" name=myText value="" size=41>
                            </td>
                         </tr>

                          <tr id='addr1'>
                            <td>
                            2
                            </td>
                            <td>
                              <input type="text" name=myText value="" size=50>
                            </td>
                            <td>
                              <input type="text" name=myText value="" size=41>
                            </td>
                          </tr>
                            
                          <tr id='addr2'>
                            <td>
                            3
                            </td>
                            <td>
                              <input type="text" name=myText value="" size=50>
                            </td>
                            <td>
                              <input type="text" name=myText value="" size=41>
                            </td>
                          </tr>
                    </tbody>
                </table>
         </div>
    </div>
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