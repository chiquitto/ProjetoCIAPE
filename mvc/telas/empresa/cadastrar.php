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
  <link rel="stylesheet" href="\\mvc\\estilizacao\\estilo.css">
</head>
<body>
<form action="cadastrar-empresas.php" method="POST">
<img src="logoUnipar.png" id="logo" />
<img src="logoAcic.png" id="logo" />
<div id="cabecalhoPag">
Projeto CIAPE – Centro Integrado de Apoio a Projetos Empresariais – UNIPAR/ACIC</div>
<hr width="680" size="1" color=black id="linha">

<h4 align="right">Nº de ordem <input type="text" name="numOrdem" value="" size=10/></h4>
  
  <h4 align="center">TERMO DE ADESÃO – PROJETO CIAPE UNIPAR/ACIC</h4>

  <p> Informações Gerais: o questionário destina-se exclusivamente a obtenção de 
       informações das empresas participantes do projeto CIAPE – UNIPAR/ACIC. Tem por 
       finalidade criar indicadores que permitirão comparar a evolução das empresas ao longo 
       do processo. As informações deverão ser fornecidas pelo proprietário, considerando 
       a real situação da empresa. Não será divulgado nenhum tipo de informações contidas neste documento.</p>

      <legend>1. DADOS CADASTRAIS</legend> <br> 

        <label>Razão Social:</label><input type="text" name="e_razaoSocial" value="" size=85><br><br>

        <label>Nome Fantasia:</label><input type="text" name="e_nomeFantasia" value="" size=85><br><br>

        <label>IE:</label><input type="text" name="e_ie" value="" size=30><br><br>

        <label>CNPJ:</label><input type="text" name="e_cnpj" value="" size=30><br><br>

        <label>Data de Fundação:</label><input type="text" name="e_dtFundacao" value="" size=15>

        <label>Ramo de Atividade:</label><input type="text" name="e_ramoAtividade" value="" size=38><br><br>
      
        <label>Endereço:</label><input type="text" name="e_endereco" value="" size=55>

        <label>Bairro:</label><input type="text" name="e_bairro" value="" size=20><br><br>

        <label>CEP:</label><input type="text" name="e_cep" value="" size=15>

        <label>Cidade:</label><input type="text" name="e_cidade" value="" size=50>

        <label>UF:</label><input type="text" name="e_uf" value="" size=5><br><br>

        <label>Fone:</label><input type="text" name="e_fone" value="" size=25>

        <label>E-mail:</label><input type="text" name="e_email" value="" size=55><br><br>

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
                            a)
                            </td>
                            <td>
                              <input type="text" name="e_socio" value="" size=45>
                            </td>
                            <td>
                              <input type="text" name="e_cargo" value="" size=45>
                            </td>
                         </tr>

                          <tr id='addr1'>
                            <td>
                            b)
                            </td>
                            <td>
                              <input type="text" name="e_socio" value="" size=45>
                            </td>
                            <td>
                              <input type="text" name="e_cargo" value="" size=45>
                            </td>
                          </tr>
                            
                          <tr id='addr2'>
                            <td>
                            c)
                            </td>
                            <td>
                             <input type="text" name="e_socio" value="" size=45>
                            </td>
                            <td>
                              <input type="text" name="e_cargo" value="" size=45>
                            </td>
                          </tr>

                          <tr id='addr3'>
                            <td>
                            d)
                            </td>
                            <td>
                              <input type="text" name="e_socio" value="" size=45>
                            </td>
                            <td>
                              <input type="text" name="e_cargo" value="" size=45>
                            </td>
                         </tr>

                         <tr id='addr4'>
                            <td>
                            e)
                            </td>
                            <td>
                              <input type="text" name="e_socio" value="" size=45>
                            </td>
                            <td>
                              <input type="text" name="e_cargo" value="" size=45>
                            </td>
                         </tr>

                    </tbody>
                </table>
         </div>
    </div>
    </div>
    <br>
    <legend>2. MARKETING/COMUNICAÇÃO</legend>
    <br>

    <div class="row clearfix">
    <div class="col-md-12 column">
      <table class="table table-bordered table-hover" id="tab_logic">
        <thead>
          <tr >
            <th class="text-center">
              <b>Produtos mais vendidos</b>
            </th>
            <th class="text-center">
              <b>Quantidade  mensal</b>
            </th>
            <th class="text-center">
              <b>Unidade de medida (Kg, m³, pç)</b>
            </th>
            <th class="text-center">
              <b>% Margem de lucro</b>
            </th>
            <th class="text-center">
              <b>% do Faturamento</b>
            </th> 
          </tr>
        </thead>
        <tbody>
          <tr id='addr0'>
            <td>
              <input type="text" name="m_prodMaisVend"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="m_qtdeMensal" placeholder='' class="form-control" size="10"/>
            </td>           
            <td>
              <input type="text" name="m_unMed"  placeholder='' class="form-control" size="10" />
            </td>
            <td>
              <input type="text" name="m_margemLucro"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="m_faturamento" placeholder='' class="form-control"/>
            </td>
          </tr>
            
          <tr id='addr1'>
            <td>
              <input type="text" name="m_prodMaisVend"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="m_qtdeMensal" placeholder='' class="form-control" size="10"/>
            </td>           
            <td>
              <input type="text" name="m_unMed"  placeholder='' class="form-control" size="10" />
            </td>
            <td>
              <input type="text" name="m_margemLucro"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="m_faturamento" placeholder='' class="form-control"/>
            </td>
          </tr>
            
          <tr id='addr2'>
            <td>
              <input type="text" name="m_prodMaisVend"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="m_qtdeMensal" placeholder='' class="form-control" size="10"/>
            </td>           
            <td>
              <input type="text" name="m_unMed"  placeholder='' class="form-control" size="10" />
            </td>
            <td>
              <input type="text" name="m_margemLucro"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="m_faturamento" placeholder='' class="form-control"/>
            </td>
          </tr> 

          <tr id='addr3'>
            <td>
              <input type="text" name="m_prodMaisVend"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="m_qtdeMensal" placeholder='' class="form-control" size="10"/>
            </td>           
            <td>
              <input type="text" name="m_unMed"  placeholder='' class="form-control" size="10" />
            </td>
            <td>
              <input type="text" name="m_margemLucro"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="m_faturamento" placeholder='' class="form-control"/>
            </td>
          </tr>    

          <tr id='addr4'>
            <td>
              <input type="text" name="m_prodMaisVend"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="m_qtdeMensal" placeholder='' class="form-control" size="10"/>
            </td>           
            <td>
              <input type="text" name="m_unMed"  placeholder='' class="form-control" size="10" />
            </td>
            <td>
              <input type="text" name="m_margemLucro"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="m_faturamento" placeholder='' class="form-control"/>
            </td>
          </tr>              
        </tbody>
      </table>
    </div>
  </div>
  <br>
  <label>2.1 Quem são seus concorrentes?</label>
    <div class="container">
        <div class="row clearfix">
        <div class="col-md-12 column">
          <table class="table table-bordered table-hover" id="tab_logic">
            <tbody>
              <tr id='addr0'>
                <td>
                  A.<input type="text" name="m_concorrente" value="" size=28>
                </td>
                <td>
                  B.<input type="text" name="m_concorrente" value="" size=28>
                </td>
                 <td>
                  C.<input type="text" name="m_concorrente" value="" size=28>
                </td>
              </tr>   
          </tbody>
      </table>
    </div>
  </div>
  <br>
  <label> 2.3 Você visita a concorrência? </label>   
  <br>
  <tr>
        <div id="alinhaRadio">
        <label><th class="span1"><input type="radio" name = "m_visitaConcorrencia" value = "0"></th>
          <td>Sim</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "m_visitaConcorrencia" value = "1"></th>
          <td>Não</td></label>
      </tr><br><br>
      </div>

      <label> 2.4 Quais são seus pontos fortes em relação a concorrência?</label> 
      <br>
      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_atendimento" value = "1"></th>
        <td>Atendimento</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_estacionamento" value = "1"></th>
        <td>Estacionamento</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_preco" value = "1"></th>
        <td>Preço</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_variedade" value = "1"></th>
        <td>Variedade</td></label>
      </tr>
      <br>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_espacoFisico" value = "1"></th>
        <td>Espaço Físico</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_localizacao" value = "1"></th>
        <td>Localização</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_qualidade" value = "1"></th>
        <td>Qualidade</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_outros" value = "1"></th>
        <td>Outros:<input type="text" name="m_descricaoOutrosPontosFortes" value="" size=30><br></td></label>
      </tr>

      <br>
      <label>2.5 Quais são seus pontos para melhoria em relação a concorrência?</label>
      <br>
      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_mAtendimento" value = "1"></th>
        <td>Atendimento</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_mEstacionamento" value = "1"></th>
        <td>Estacionamento</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_mPreco" value = "1"></th>
        <td>Preço</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_mVariedade" value = "1"></th>
        <td>Variedade</td></label>
      </tr>
      <br>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_mEspacoFisico" value = "1"></th>
        <td>Espaço Físico</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_mLocalizacao" value = "1"></th>
        <td>Localização</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_mQualidade" value = "1"></th>
        <td>Qualidade</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_mOutros" value = "1"></th>
        <td>Outros:<input type="text" name="m_mOutrosPontosDescricao" value="" size=30><br></td></label>
      </tr>

      </br>      
      <label>2.6 Faz promoções? </label>
      <br>
      <tr>
        <label><th class="span1"><input type="radio" name = "m_promocao" value = "0"></th>
          <td>Mais de duas vez por mês</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "m_promocao" value = "1"></th>
          <td>Uma vez por mês</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="radio" name = "m_promocao" value = "2"></th>
          <td>Não, nunca faço</td></label>
      </tr><br><br>

      <label> 2.7 Quais meios utiliza? </label>
      <br>
      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_radio" value = "1"></th>
        <td>Rádio</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_jornal" value = "1"></th>
        <td>Jornal</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_panfleto" value = "1"></th>
        <td>Panfleto</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_OutrosMeiosComunicacao" value = "1"></th>
        <td>Outros:<input type="text" name="m_OutrosMeiosComunicacao" value="" size=30><br></td></label>
      </tr>

      <br>
      <label>2.8 O estabelecimento é bem sinalizado, dividido em seções?</label>
      <br>
      <tr>
        <label><th class="span1"><input type="radio" name = "m_sinalizacao" value = "0"></th>
          <td>Sim</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "m_sinalizacao" value = "1"></th>
          <td>Não</td></label>
      </tr><br><br>

      <label> 2.9 Dispõe de espaços promocionais? (dispostos na loja)</label>
      <br>
      <tr>
        <label><th class="span1"><input type="radio" name = "m_espacaoPromocional" value = "0"></th>
          <td>Sim</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "m_espacaoPromocional" value = "1"></th>
          <td>Não</td></label>
      </tr><br><br>

      <legend>3. PREÇOS</legend>
    
      <br>
      <label> 3.1 Como forma os preços de seus produtos? </label>   
      <br>
      <tr>
        <label><th class="span1"><input type="radio" name = "p_formacaoPreco" value = "0"></th>
          <td>Percentual sobre os custos</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "p_formacaoPreco" value = "1"></th>
          <td>Acompanhando o mercado</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "p_formacaoPreco" value = "2"></th>
          <td>Outra Maneira, qual?<input type="text" name="p_outraFormacaoPreco" value="" size=10></td></label>
      </tr><br><br>

      <label> 3.2 Seus preços em relação a concorrência estão? </label>  
      <br>
      <tr>
        <label><th class="span1"><input type="radio" name = "p_precoConcorrencia" value = "0"></th>
          <td>Acima</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "p_precoConcorrencia" value = "1"></th>
          <td>Iguais</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "p_precoConcorrencia" value = "2"></th>
          <td>Abaixo</td></label>
      </tr><br><br>

      <legend>4. VENDAS</legend>
      <br>
      <label> 4.1 Faturamento dos últimos 6 meses (do mais recente para o anterior) </label>   
    <br>
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
              <input type="text" name="v_mesAno"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="v_fatReais" placeholder='' class="form-control"/>
            </td>
            
            <td>
              <input type="text" name="v_mesAno"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="v_fatReais"  placeholder='' class="form-control"/>
            </td>
          </tr>
            
          <tr id='addr1'>
            <td>
            
            </td>
            <td>
              <input type="text" name="v_mesAno"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="v_fatReais" placeholder='' class="form-control"/>
            </td>
            
            <td>
              <input type="text" name="v_mesAno"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="v_fatReais"  placeholder='' class="form-control"/>
            </td>
          </tr>
            
          <tr id='addr2'>
            <td>
            
            </td>
            <td>
              <input type="text" name="v_mesAno"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="v_fatReais" placeholder='' class="form-control"/>
            </td>
            
            <td>
              <input type="text" name="v_mesAno"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="v_fatReais"  placeholder='' class="form-control"/>
            </td>
          </tr>

          <tr id='addr3'>
            <td>
            
            </td>
            <td>
             <input type="text" name="v_mesAno"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="v_fatReais" placeholder='' class="form-control"/>
            </td>
            
            <td>
              <input type="text" name="v_mesAno"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="v_fatReais"  placeholder='' class="form-control"/>
            </td>
          </tr>
            
          <tr id='addr4'>
            <td>
            
            </td>
            <td>
              <input type="text" name="v_mesAno"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="v_fatReais" placeholder='' class="form-control"/>
            </td>
            
            <td>
              <input type="text" name="v_mesAno"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="v_fatReais"  placeholder='' class="form-control"/>
            </td>
          </tr>
            
          <tr id='addr5'>
            <td>
            
            </td>
            <td>
              <input type="text" name="v_mesAno"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="v_fatReais" placeholder='' class="form-control"/>
            </td>
            
            <td>
              <input type="text" name="v_mesAno"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="v_fatReais"  placeholder='' class="form-control"/>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
  </div><br>
  
  <label>4.2 Dias da semana de maior movimento? Período do mês: </label>
    <td>
      <input type="text" name="v_periodoInicial" value="" size=12>
      <input type="text" name="v_periodoFinal" value="" size=12>
    </td>
      <tr><br>
         <label><th class="span1"><input type="checkbox" name = "v_seg" value = "1"></th>
      <td> Seg</td></label>
      </tr>
    
     <tr>
        <label><th class="span1"><input type="checkbox" name = "v_ter" value = "1"></th>
      <td> Ter </td></label>
      </tr>
    
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_qua" value = "1"></th>
      <td> Qua</td></label>
      </tr>
    
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_qui" value = "1"></th>
      <td> Qui</td></label>
      </tr> 

    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_sex" value = "1"></th>
      <td> Sex</td></label>
      </tr>
    
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_sab" value = "1"></th>
      <td> Sab</td></label>
      </tr>
    
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_dom" value = "1"></th>
      <td> Dom</td></label>
      </tr><br><br>
  
  <label>4.3 Quais horários de maior movimento?</label>
    <br>
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_manha" value = "1"></th>
      <td> Manhã</td></label>
      </tr>
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_tarde" value = "1"></th>
      <td> Tarde</td></label>
      </tr>
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_noite" value = "1"></th>
      <td> Noite</td></label>
      </tr>
    
    <br><br>

  <label>4.4 Forma de pagamento oferecidas aos clientes?</label>
    <br>
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_cheque" value = "1"></th>
      <td>Cheque pré-datado </td></label>
      </tr>
    
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_ticket" value = "1"></th>
      <td>Ticket </td></label>
      </tr>
    
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_cartao" value = "1"></th>
      <td>Cartão de crédito </td></label>
      </tr>
    <br>
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_avista" value = "1"></th>
      <td>Caderneta </td></label>
      </tr>
    
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_caderneta" value = "1"></th>
      <td>A vista </td></label>
      </tr>
    
    <tr>
        <label><th class="span1"><input type="checkbox" name = "" value = ""></th>
        <td>Outra? Qual?<input type="text" name="v_outraFormaPagto" value="" size=30>
        <br> </td></label>
      </tr><br>
  
  <label>4.5 Qual o valor médio de compras por cliente?</label>
  <br>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name"> Por vez:</label>    
           <input type="text" name="v_vlrMedioPorVez" value="" size=30>
           <label class="col-sm-3 control-label" for="card-holder-name"> Mensal:</label>   
           <input type="text" name="v_vlrMedioMensal" value="" size=30>
    </div>
  <br>

  <legend>5. COMPRAS</legend>
  <br>
    <label>5.1 Quais são seus principais fornecedores?</label><br><br>
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
              <input type="text" name="c_razaoSocialFantasia"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="c_cidadeUf" placeholder='' class="form-control" size=10/>
            </td>           
            <td>
              <input type="text" name="c_produtos"  placeholder='' class="form-control" size=15/>
            </td>
            <td>
              <input type="text" name="c_loteMinimo"  placeholder='' class="form-control" size=15/>
            </td>
            <td>
              <input type="text" name="c_relacionamento"  placeholder='' class="form-control" size=15/>
            </td>
          </tr>
            
          <tr id='addr1'>
            <td>
            
            </td>
            <td>
              <input type="text" name="c_razaoSocialFantasia"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="c_cidadeUf" placeholder='' class="form-control" size=10/>
            </td>           
            <td>
              <input type="text" name="c_produtos"  placeholder='' class="form-control" size=15/>
            </td>
            <td>
              <input type="text" name="c_loteMinimo"  placeholder='' class="form-control" size=15/>
            </td>
            <td>
              <input type="text" name="c_relacionamento"  placeholder='' class="form-control" size=15/>
            </td>
          </tr>
            
          <tr id='addr2'>
            <td>
            
            </td>
            <td>
              <input type="text" name="c_razaoSocialFantasia"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="c_cidadeUf" placeholder='' class="form-control" size=10/>
            </td>           
            <td>
              <input type="text" name="c_produtos"  placeholder='' class="form-control" size=15/>
            </td>
            <td>
              <input type="text" name="c_loteMinimo"  placeholder='' class="form-control" size=15/>
            </td>
            <td>
              <input type="text" name="c_relacionamento"  placeholder='' class="form-control" size=15/>
            </td>
          </tr>
            
          <tr id='addr3'>
            <td>
            
            </td>
            <td>
              <input type="text" name="c_razaoSocialFantasia"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="c_cidadeUf" placeholder='' class="form-control" size=10/>
            </td>           
            <td>
              <input type="text" name="c_produtos"  placeholder='' class="form-control" size=15/>
            </td>
            <td>
              <input type="text" name="c_loteMinimo"  placeholder='' class="form-control" size=15/>
            </td>
            <td>
              <input type="text" name="c_relacionamento"  placeholder='' class="form-control" size=15/>
            </td>
            
          <tr id='addr4'>
            <td>
            
            </td>
            <td>
              <input type="text" name="c_razaoSocialFantasia"  placeholder='' class="form-control"/>
            </td>
            <td>
              <input type="text" name="c_cidadeUf" placeholder='' class="form-control" size=10/>
            </td>           
            <td>
              <input type="text" name="c_produtos"  placeholder='' class="form-control" size=15/>
            </td>
            <td>
              <input type="text" name="c_loteMinimo"  placeholder='' class="form-control" size=15/>
            </td>
            <td>
              <input type="text" name="c_relacionamento"  placeholder='' class="form-control" size=15/>
            </td>
          </tr>                       
        </tbody>
      </table>
    </div>
  </div><br>
  
  <label>5.2 Qual valor das suas compras nos últimos 6 meses? (do mais recente para o anterior)</label><br><br>
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
                <input type="text" name="c_mesAno"  placeholder='' class="form-control"/>
              </td>
              <td>
                <input type="text" name="c_comprasReais" placeholder='' class="form-control"/>
              </td>
              
              <td>
                <input type="text" name="c_mesAno"  placeholder='' class="form-control"/>
              </td>
              <td>
                <input type="text" name="c_comprasReais"  placeholder='' class="form-control"/>
              </td>
            </tr>
              
            <tr id='addr1'>
              <td>
              
              </td>
              <td>
                 <input type="text" name="c_mesAno"  placeholder='' class="form-control"/>
              </td>
              <td>
                <input type="text" name="c_comprasReais" placeholder='' class="form-control"/>
              </td>
              
              <td>
                <input type="text" name="c_mesAno"  placeholder='' class="form-control"/>
              </td>
              <td>
                <input type="text" name="c_comprasReais"  placeholder='' class="form-control"/>
              </td>
            </tr>
              
            <tr id='addr2'>
              <td>
              
              </td>
              <td>
                <input type="text" name="c_mesAno"  placeholder='' class="form-control"/>
              </td>
              <td>
                <input type="text" name="c_comprasReais" placeholder='' class="form-control"/>
              </td>
              
              <td>
                <input type="text" name="c_mesAno"  placeholder='' class="form-control"/>
              </td>
              <td>
                <input type="text" name="c_comprasReais"  placeholder='' class="form-control"/>
              </td>
            </tr>

            <tr id='addr3'>
              <td>
              
              </td>
              <td>
                <input type="text" name="c_mesAno"  placeholder='' class="form-control"/>
              </td>
              <td>
                <input type="text" name="c_comprasReais" placeholder='' class="form-control"/>
              </td>
              
              <td>
                <input type="text" name="c_mesAno"  placeholder='' class="form-control"/>
              </td>
              <td>
                <input type="text" name="c_comprasReais"  placeholder='' class="form-control"/>
              </td>
            </tr>
              
            <tr id='addr4'>
              <td>
              
              </td>
              <td>
                 <input type="text" name="c_mesAno"  placeholder='' class="form-control"/>
              </td>
              <td>
                <input type="text" name="c_comprasReais" placeholder='' class="form-control"/>
              </td>
              
              <td>
                <input type="text" name="c_mesAno"  placeholder='' class="form-control"/>
              </td>
              <td>
                <input type="text" name="c_comprasReais"  placeholder='' class="form-control"/>
              </td>
            </tr>
              
            <tr id='addr5'>
              <td>
              
              </td>
              <td>
                 <input type="text" name="c_mesAno"  placeholder='' class="form-control"/>
              </td>
              <td>
                <input type="text" name="c_comprasReais" placeholder='' class="form-control"/>
              </td>
              
              <td>
                <input type="text" name="c_mesAno"  placeholder='' class="form-control"/>
              </td>
              <td>
                <input type="text" name="c_comprasReais"  placeholder='' class="form-control"/>
              </td>
            </tr>
          </tbody>
      </table>
    </div>
  </div><br> 
  <legend>6. CLIENTES</legend> 

  <label>6.1 Quantos clientes atende por mês?</label>
    <input type="text" name="cli_qtdeClienteMensal" value="" size=15><br><br>
  
  <label>6.2 Qual é o perfil do seu cliente?</label>
    <br>
      <input type="text" name="cli_percClasA" value="" size=5><td>% classe A </td>
    
      <input type="text" name="cli_percClasB" value="" size=5><td>% classe B </td>
    
      <input type="text" name="cli_percClasC" value="" size=5><td>% classe C </td>
    
      <input type="text" name="cli_percClasD" value="" size=5><td>% classe D </td>
    <br>
      <input type="text" name="cli_percIdadeA" value="" size=4><td>% 0 a 18 anos </td>
       
      <input type="text" name="cli_percIdadeB" value="" size=4><td>% 19 a 30 anos </td>  
    
      <input type="text" name="cli_percIdadeC" value="" size=4><td>% 31 a 45 anos </td>
     
      <input type="text" name="cli_percIdadeD" value="" size=4><td>% acima de 46 anos </td>
    <br>
      <input type="text" name="cli_percMasc" value="" size=5><td>% Masculino </td>
    
      <input type="text" name="cli_percFem" value="" size=5><td>% Feminino </td>
    <br><br>

    <label>6.3 Vende para empresas?</label><br>
    <tr>
      <label><th class="span1"><input type="radio" name = "cli_vendeEmpresas" value = "0"></th>
      <td>Sim.Quantos % representa do total do faturamento?</td></label>
      <input type="text" name="cli_percTotalFat" value="" size=5>
      </tr>
    
    <tr>
      <label><th class="span1"><input type="radio" name = "cli_vendeEmpresas" value = "1"></th>
      <td>Não </td></label>
      </tr>
    
    <br><br>
    <label>6.4 Faz pesquisas com seus clientes?</label><br>
    <tr>
      <label><th class="span1"><input type="radio" name = "cli_pesquisaClientes" value="0"></th>
      <td>Sim, frequência?</td></label>
      <input type="text" name="cli_frequencia" size=15>
      </tr>
    
    <tr>
      <label><th class="span1"><input type="radio" name = "cli_pesquisaClientes" value="1"></th>
      <td>Não, mas já fiz </td></label>
      </tr>
    
    <tr>
      <label><th class="span1"><input type="radio" name = "cli_pesquisaClientes" value="2"></th>
      <td>Nunca fiz </td></label>
      </tr>

      <br>
      <br>
      <legend>7. RECURSOS HUMANOS</legend>
      <br>
      <label>7.1 Quantos colaboradores possui?</label><input type="text" name="r_qtdeColaboradores" value="" size=10><br><br>

      <label>7.2 No último ano seus colaboradores participaram de treinamento?</label>
      <br>
      <tr>
        <label><th class="span1"><input type="radio" name = "r_treinamento" value = "0"></th>
        <td>Sim. Em que área?<input type="text" name="r_area" value="" size=30></label></td>
      </tr>
      
      <tr>
        <label><th class="span1"><input type="radio" name = "r_treinamento" value = "1"></th>
        <td>Não </td></label>
      </tr><br><br> 

      <label>7.3 Qual a escolaridade dos que trabalham na empresa?</label><br>
      <tr>
        <label><th class="span1"><input type="radio" name = "r_escolaridade" value = "0"></th>
        <td>Segundo grau </td></label>
      </tr>
      
      <tr>
        <label><th class="span1"><input type="radio" name = "r_escolaridade" value = "1"></th>
        <td>Superior </td></label>
      </tr>
      
      <tr>
        <label><th class="span1"><input type="radio" name = "r_escolaridade" value = "2"></th>
        <td>Pós-graduação</td></label>
      </tr> <br><br>

      <label>7.4 Que critérios utiliza para contratação de colaboradores?</label><br>
    <tr>
      <label><th class="span1"><input type="checkbox" name = "r_indicacao" value = "1"></th>
      <td>Indicação </td></label>
    </tr>
    
    <tr>
      <label><th class="span1"><input type="checkbox" name = "r_entrevista" value = "1"></th>
      <td>Entrevisa </td></label>
    </tr>
    
    <tr>
      <label><th class="span1"><input type="checkbox" name = "r_analCurEnt" value = "1"></th>
      <td>Análise de Currículo e Entrevista</td></label>
    </tr> <br><br>
    
    <label>7.5 Quais são os fatores prioritários na escolha de um candidato? Enumerar por ordem de importância.</label><br>
    <tr>
      <label><th class="span1"><input type="checkbox" name = "r_aparencia" value = "1"></th>
      <td>Aparência </td></label>
    </tr>
    
    <tr>
      <label><th class="span1"><input type="checkbox" name = "r_boaVontade" value = "1"></th>
      <td>Boa vontade </td></label>
    </tr>
    
    <tr>
      <label><th class="span1"><input type="checkbox" name = "r_experiencia" value = "1"></th>
      <td>Experiência</td></label>
    </tr> <br><br>
    
    <label>7.6 Que tipo de atividades realiza para manter seus funcionários motivados?</label><br>
    <tr>
      <label><th class="span1"><input type="radio" name = "r_tipoAtividade" value = "0"></th>
      <td>Festas especiais </td></label>
    </tr>
    
    <tr>
      <label><th class="span1"><input type="radio" name = "r_tipoAtividade" value = "1"></th>
      <td>Participação no lucro </td></label>
    </tr>
    
    <tr>
      <label><th class="span1"><input type="radio" name = "r_tipoAtividade" value = "2"></th>
      <td>Outros: </td></label><input type="text" name="r_outrasAtividades" value="" size=30>
    </tr> <br><br>    
    
    <label>7.7 Quantas demissões X Contratações por ano? Por quê?</label><br>
    <input type="text" name="r_quantasDemContrAno" value="" size=100><br>

    <br>
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
              <input type="text" name="a_fluxoCaixa"  placeholder='' class="form-control" size="3" />
            </td>
            <td>
              <input type="text" name="a_fluxoCaixa" placeholder='' class="form-control" size="8"/>
            </td>
            <td>
            Adm. de Compras
            </td>           
            <td>
              <input type="text" name="a_admCompras"  placeholder='' class="form-control" size="3"/>
            </td>
            <td>
              <input type="text" name="a_admCompras"  placeholder='' class="form-control" size="8" />
            </td>
          </tr>
            
          <tr id='addr1'>
            <td>
            Controle de Estoques
            </td>
            <td>
              <input type="text" name="a_controleEstoque"  placeholder='' class="form-control" size="3"/>
            </td>
            <td>
              <input type="text" name="a_controleEstoque" placeholder='' class="form-control" size="8"/>
            </td>
            <td>
              Adm. de Vendas
            </td>
            <td>
              <input type="text" name="a_admVendas"  placeholder='' class="form-control" size="3"/>
            </td>
            <td>
              <input type="text" name="a_admVendas"  placeholder='' class="form-control" size="8"/>
            </td>
          </tr>
            
          <tr id='addr2'>
            <td>
            Contas a pagar
            </td>
            <td>
              <input type="text" name="a_contasPagar"  placeholder='' class="form-control" size="3"/>
            </td>
            <td>
              <input type="text" name="a_contasPagar" placeholder='' class="form-control" size="8"/>
            </td>   
            <td>
              Faturamento
            </td>
            <td>
              <input type="text" name="a_fat"  placeholder='' class="form-control" size="3"/>
            </td> 
            <td>
              <input type="text" name="a_fat"  placeholder='' class="form-control" size="8"/>
            </td>
          </tr>
            
          <tr id='addr3'>
            <td>
            Contas a receber
            </td>
            <td>
              <input type="text" name="a_contasReceber"  placeholder='' class="form-control" size="3"/>
            </td>
            <td>
              <input type="text" name="a_contasReceber" placeholder='' class="form-control" size="8"/>
            </td>   
            <td>
              Outros:<input type="text" name="a_descOutrosTipos"  placeholder='' class="form-control" size="10"/>
            </td>
            <td>
              <input type="text" name="a_outrosTiposSelecionado"  placeholder='' class="form-control" size="3"/>
            </td> 
            <td>
              <input type="text" name="a_outrosTiposSelecionado"  placeholder='' class="form-control" size="8"/>
            </td>
          </tr>            
        </tbody>
      </table>
    </div>
  </div><br>
  <label>8.2 Realiza Planejamentos?</label>
    <br>
     <tr>
        <label><th class="span1"><input type="radio" name = "a_planejamento" value = "0"></th>
          <td>Sim. Em que áreas?<input type="text" name="a_area" value="" size=30></label></td>
      </tr>
      
      <tr>
        <label><th class="span1"><input type="radio" name = "a_planejamento" value = "1"></th>
          <td>Não </td></label>
      </tr><br><br> 
    
    <label>8.3 Trabalha ou já obteve recursos de terceiros?</label>
    <br>
     <tr>
        <label><th class="span1"><input type="radio" name = "a_trabalhaRecursoTerc" value = "0"></th>
          <td>Não </td></label>
      </tr>
       <tr>
        <label><th class="span1"><input type="radio" name = "a_trabalhaRecursoTerc" value = "1"></th>
          <td>Sim </td></label>
      </tr>
      
    <tr>
        <label><th class="span1"><input type="checkbox" name = "a_chequeEspecial" value = "1"></th>
        <td>Cheque Especial</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "a_emprestimo" value = "1"></th>
        <td>Empréstimo</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "a_factoring" value = "1"></th>
        <td>Factoring</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "a_outros" value = "1"></th>
        <td>Outros <input type="text" name="a_descOutrosRecursos" value="" size=50></td></label>
      </tr>
    <br>
  <BR>
  <label>8.4 Quais são seus maiores gastos?</label>
    <br>
    <tr>
        <label><th class="span1"><input type="checkbox" name = "a_frete" value = "1"></th>
        <td>Frete</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "a_energiaEletrica" value = "1"></th>
        <td>Energia Elétrica</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "a_folhaPagto" value = "1"></th>
        <td>Folha de Pagamento</td></label>
      </tr>

      <br>
      <tr>
        <label><th class="span1"><input type="checkbox" name = "a_financeiros" value = "1"></th>
        <td>Financeiros</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "a_manutGeral" value = "1"></th>
        <td>Manutenção Geral</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "a_impostos" value = "1"></th>
        <td>Impostos</td></label>
      </tr>

      <br>
      <tr>
        <label><th class="span1"><input type="checkbox" name = "a_aluguel" value = "1"></th>
        <td>Aluguel</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "a_outrosGastos" value = "1"></th>
        <td>Outros, quais? <input type="text" name="a_descOutrosGastos" value="" size=50></td></label>
      </tr>
    
    <br>  
    <br> 
    <legend>9. JURIDICO</legend>
    <br> 
    <label>  9.1 Você conhece todos os impostos devidos pela sua empresa?</label><br>
    <tr>
        <label><th class="span1"><input type="radio" name = "j_impostos" value = "0"></th>
          <td>Sim</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "j_impostos" value = "1"></th>
          <td>Não</td></label>
      </tr><br><br>

      <label>9.2 Você já recebeu alguma autuação de fiscalização?</label><br>
    <tr>
        <label><th class="span1"><input type="radio" name = "j_autuacaoFiscal" value = "0"></th>
          <td>Sim</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "j_autuacaoFiscal" value = "1"></th>
          <td>Não</td></label>
      </tr><br><br>
  
  <label>9.3 Sua empresa está respondendo alguma ação judicial, inclusive trabalhista?</label>
  <BR>
    <tr>
        <label><th class="span1"><input type="radio" name = "j_acaoJudicial" value = "0"></th>
          <td>Sim</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "j_acaoJudicial" value = "1"></th>
          <td>Não</td></label>
      </tr><br><br>
  
  
  <label>9.4 Suas tratativas com seus fornecedores são:</label><br>
    <tr>
        <label><th class="span1"><input type="radio" name = "j_tratativas" value = "0"></th>
          <td>Verbais</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "j_tratativas" value = "1"></th>
          <td>Com contratos</td></label>
      </tr><br><br>
  
  <label>9.5 Como você realiza suas cobranças na empresa?</label><br>
    <tr>
        <label><th class="span1"><input type="checkbox" name = "j_empresaCobranca" value = "1"></th>
        <td>Empresa de cobrança</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "j_colaborador" value = "1"></th>
        <td>Colaborador</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "j_pessoalmente" value = "1"></th>
        <td>Pessoalmente</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "j_outrasCobrancas" value = "1"></th>
        <td>Outros</td></label>
      </tr>
   </br>
   <BR>
   
   <label>9.6 Tem assessoria jurídica?</label><br>
    <tr>
        <label><th class="span1"><input type="radio" name = "j_assessoriaJuridica" value = "0"></th>
          <td>Sim</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "j_assessoriaJuridica" value = "1"></th>
          <td>Não</td></label>
      </tr><br><br>
  
  <label>Observação:</label>
  <br>
  <input type="text" name="j_observacao" value="" size=100><br>
      
      <br>
      <br>
      <div class="form-group">
        <div class="col-sm-offset-22 col-sm-9">
          <button type="button" class="btn btn-success">Salvar</button>
          <button type="button" class="btn btn-success">Cancelar</button>
        </div>
      </div>
</div>
</div>
</form>
</body>
</html>