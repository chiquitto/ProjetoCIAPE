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
<form action="" method="POST">
<img src="logoUnipar.png" id="logo"  readonly/>
<img src="logoAcic.png" id="logo"  readonly/>
<div id="cabecalhoPag">
Projeto CIAPE – Centro Integrado de Apoio a Projetos Empresariais – UNIPAR/ACIC</div>
<hr width="680" size="1" color=black id="linha">

<h4 align="right">Nº de ordem <input type="text" name="numOrdem" value="<?php echo getNumOrdem(); ?>" size=10 readonly /></h4>
  
  <h4 align="center">TERMO DE ADESÃO – PROJETO CIAPE UNIPAR/ACIC</h4>

  <p> Informações Gerais: o questionário destina-se exclusivamente a obtenção de 
       informações das empresas participantes do projeto CIAPE – UNIPAR/ACIC. Tem por 
       finalidade criar indicadores que permitirão comparar a evolução das empresas ao longo 
       do processo. As informações deverão ser fornecidas pelo proprietário, considerando 
       a real situação da empresa. Não será divulgado nenhum tipo de informações contidas neste documento.</p>

      <legend>1. DADOS CADASTRAIS</legend> <br> 

        <label>Razão Social:</label><input type="text" name="e_razaoSocial" value="<?php echo getE_razaoSocial(); ?>" size=85 readonly><br><br>

        <label>Nome Fantasia:</label><input type="text" name="e_nomeFantasia" value="<?php echo getE_nomeFantasia(); ?>" size=85 readonly><br><br>

        <label>IE:</label><input type="text" name="e_ie" value="<?php echo getE_ie(); ?>" size=30 readonly><br><br>

        <label>CNPJ:</label><input type="text" name="e_cnpj" value="<?php echo getE_cnpj(); ?>" size=30 readonly><br><br>

        <label>Data de Fundação:</label><input type="text" name="e_dtFundacao" value="<?php echo getE_dtFundacao(); ?>" size=15 readonly>

        <label>Ramo de Atividade:</label><input type="text" name="e_ramoAtividade" value="<?php echo getE_ramoAtividade(); ?>" size=38 readonly><br><br>
      
        <label>Endereço:</label><input type="text" name="e_endereco" value="<?php echo getE_endereco(); ?>" size=55 readonly>

        <label>Bairro:</label><input type="text" name="e_bairro" value="<?php echo getE_bairro(); ?>" size=20 readonly><br><br>

        <label>CEP:</label><input type="text" name="e_cep" value="<?php echo getE_cep(); ?>" size=15 readonly>

        <label>Cidade:</label><input type="text" name="e_cidade" value="<?php echo getE_cidade(); ?>" size=50 readonly>

        <label>UF:</label><input type="text" name="e_uf" value="<?php echo getE_uf(); ?>" size=5 readonly><br><br>

        <label>Fone:</label><input type="text" name="e_fone" value="<?php echo getE_fone(); ?>" size=25 readonly>

        <label>E-mail:</label><input type="text" name="e_email" value="<?php echo getE_email(); ?>" size=55 readonly><br><br>

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
                              <input type="text" name="e_socio" value="<?php echo getE_socio(); ?>" size=45 readonly>
                            </td>
                            <td>
                              <input type="text" name="e_cargo" value="<?php echo getE_cargo(); ?>" size=45 readonly>
                            </td>
                         </tr>

                          <tr id='addr1'>
                            <td>
                            b)
                            </td>
                            <td>
                              <input type="text" name="e_socio" value="<?php echo getE_socio(); ?>" size=45 readonly>
                            </td>
                            <td>
                              <input type="text" name="e_cargo" value="<?php echo getE_cargo(); ?>" size=45 readonly>
                            </td>
                          </tr>
                            
                          <tr id='addr2'>
                            <td>
                            c)
                            </td>
                            <td>
                             <input type="text" name="e_socio" value="<?php echo getE_socio(); ?>" size=45 readonly>
                            </td>
                            <td>
                              <input type="text" name="e_cargo" value="<?php echo getE_cargo(); ?>" size=45 readonly>
                            </td>
                          </tr>

                          <tr id='addr3'>
                            <td>
                            d)
                            </td>
                            <td>
                              <input type="text" name="e_socio" value="<?php echo getE_socio(); ?>" size=45 readonly>
                            </td>
                            <td>
                              <input type="text" name="e_cargo" value="<?php echo getE_cargo(); ?>" size=45 readonly>
                            </td>
                         </tr>

                         <tr id='addr4'>
                            <td>
                            e)
                            </td>
                            <td>
                              <input type="text" name="e_socio" value="<?php echo getE_socio(); ?>" size=45 readonly>
                            </td>
                            <td>
                              <input type="text" name="e_cargo" value="<?php echo getE_cargo(); ?>" size=45 readonly>
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
              <input type="text" name="m_prodMaisVend"  placeholder='' class="form-control" value = "<?php echo getM_prodMaisVend(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="m_qtdeMensal" placeholder='' class="form-control" value = "<?php echo getM_qtdeMensal(); ?>" size="10" readonly/>
            </td>           
            <td>
              <input type="text" name="m_unMed"  placeholder='' class="form-control" value = "<?php echo getM_unMed(); ?>" size="10" readonly/>
            </td>
            <td>
              <input type="text" name="m_margemLucro"  placeholder='' class="form-control" value = "<?php echo getM_margemLucro(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="m_faturamento" placeholder='' class="form-control" value = "<?php echo getM_faturamento(); ?>" readonly/>
            </td>
          </tr>
            
          <tr id='addr1'>
            <td>
              <input type="text" name="m_prodMaisVend"  placeholder='' class="form-control" value = "<?php echo getM_prodMaisVend(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="m_qtdeMensal" placeholder='' class="form-control" value = "<?php echo getM_qtdeMensal(); ?>" size="10" readonly/>
            </td>           
            <td>
              <input type="text" name="m_unMed"  placeholder='' class="form-control" value = "<?php echo getM_unMed(); ?>" size="10" readonly/>
            </td>
            <td>
              <input type="text" name="m_margemLucro"  placeholder='' class="form-control" value = "<?php echo getM_margemLucro(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="m_faturamento" placeholder='' class="form-control" value = "<?php echo getM_faturamento(); ?>" readonly/>
            </td>
          </tr>
            
          <tr id='addr2'>
            <td>
              <input type="text" name="m_prodMaisVend"  placeholder='' class="form-control" value = "<?php echo getM_prodMaisVend(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="m_qtdeMensal" placeholder='' class="form-control" value = "<?php echo getM_qtdeMensal(); ?>" size="10" readonly/>
            </td>           
            <td>
              <input type="text" name="m_unMed"  placeholder='' class="form-control" value = "<?php echo getM_unMed(); ?>" size="10" readonly/>
            </td>
            <td>
              <input type="text" name="m_margemLucro"  placeholder='' class="form-control" value = "<?php echo getM_margemLucro(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="m_faturamento" placeholder='' class="form-control" value = "<?php echo getM_faturamento(); ?>" readonly/>
            </td>
          </tr> 

          <tr id='addr3'>
            <td>
              <input type="text" name="m_prodMaisVend"  placeholder='' class="form-control" value = "<?php echo getM_prodMaisVend(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="m_qtdeMensal" placeholder='' class="form-control" value = "<?php echo getM_qtdeMensal(); ?>" size="10" readonly/>
            </td>           
            <td>
              <input type="text" name="m_unMed"  placeholder='' class="form-control" value = "<?php echo getM_unMed(); ?>" size="10" readonly/>
            </td>
            <td>
              <input type="text" name="m_margemLucro"  placeholder='' class="form-control" value = "<?php echo getM_margemLucro(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="m_faturamento" placeholder='' class="form-control" value = "<?php echo getM_faturamento(); ?>" readonly/>
            </td>
          </tr>    

          <tr id='addr4'>
            <td>
              <input type="text" name="m_prodMaisVend"  placeholder='' class="form-control" value = "<?php echo getM_prodMaisVend(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="m_qtdeMensal" placeholder='' class="form-control" value = "<?php echo getM_qtdeMensal(); ?>" size="10" readonly/>
            </td>           
            <td>
              <input type="text" name="m_unMed"  placeholder='' class="form-control" value = "<?php echo getM_unMed(); ?>" size="10"  readonly/>
            </td>
            <td>
              <input type="text" name="m_margemLucro"  placeholder='' class="form-control" value = "<?php echo getM_margemLucro(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="m_faturamento" placeholder='' class="form-control" value = "<?php echo getM_faturamento(); ?>" readonly/>
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
                  A.<input type="text" name="m_concorrente" value = "<?php echo getM_concorrente(); ?>" size=28 readonly>
                </td>
                <td>
                  B.<input type="text" name="m_concorrente" value = "<?php echo getM_concorrente(); ?>" size=28 readonly>
                </td>
                 <td>
                  C.<input type="text" name="m_concorrente" value = "<?php echo getM_concorrente(); ?>" size=28 readonly>
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
        <label><th class="span1"><input type="radio" name = "m_visitaConcorrencia" value = "<?php echo getM_visitaConcorrencia(); ?>" readonly></th>
          <td>Sim</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "m_visitaConcorrencia" value = "<?php echo getM_visitaConcorrencia(); ?>" readonly></th>
          <td>Não</td></label>
      </tr><br><br>
      </div>

      <label> 2.4 Quais são seus pontos fortes em relação a concorrência?</label> 
      <br>
      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_atendimento" value = "<?php echo getM_atendimento(); ?>" readonly></th>
        <td>Atendimento</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_estacionamento" value = "<?php echo getM_estacionamento(); ?>" readonly></th>
        <td>Estacionamento</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_preco" value = "<?php echo getM_preco(); ?>" readonly></th>
        <td>Preço</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_variedade" value = "<?php echo getM_variedade(); ?>" readonly></th>
        <td>Variedade</td></label>
      </tr>
      <br>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_espacoFisico" value = "<?php echo getM_espacoFisico(); ?>" readonly></th>
        <td>Espaço Físico</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_localizacao" value = "<?php echo getM_localizacao(); ?>" readonly></th>
        <td>Localização</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_qualidade" value = "<?php echo getM_qualidade(); ?>" readonly></th>
        <td>Qualidade</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_outros" value = "<?php echo getM_outros(); ?>" readonly></th>
        <td>Outros:<input type="text" name="m_descricaoOutrosPontosFortes" value = "<?php echo getM_descricaoOutrosPontosFortes(); ?>" size=30 readonly><br></td></label>
      </tr>

      <br>
      <label>2.5 Quais são seus pontos para melhoria em relação a concorrência?</label>
      <br>
      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_mAtendimento" value = "<?php echo getM_mAtendimento(); ?>" readonly></th>
        <td>Atendimento</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_mEstacionamento" value = "<?php echo getM_mEstacionamento(); ?>" readonly></th>
        <td>Estacionamento</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_mPreco" value = "<?php echo getM_mPreco(); ?>" readonly></th>
        <td>Preço</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_mVariedade" value = "<?php echo getM_mVariedade(); ?>" readonly></th>
        <td>Variedade</td></label>
      </tr>
      <br>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_mEspacoFisico" value = "<?php echo getM_mEspacoFisico(); ?>" readonly></th>
        <td>Espaço Físico</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_mLocalizacao" value = "<?php echo getM_mLocalizacao(); ?>" readonly></th>
        <td>Localização</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_mQualidade" value = "<?php echo getM_mQualidade(); ?>" readonly></th>
        <td>Qualidade</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_mOutros" value = "<?php echo getM_mOutros(); ?>" readonly></th>
        <td>Outros:<input type="text" name="m_mOutrosPontosDescricao" value = "<?php echo getM_mOutrosPontosDescricao(); ?>" size=30 readonly><br></td></label>
      </tr>

      </br>      
      <label>2.6 Faz promoções? </label>
      <br>
      <tr>
        <label><th class="span1"><input type="radio" name = "m_promocao" value = "<?php echo getM_promocao(); ?>" readonly></th>
          <td>Mais de duas vez por mês</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "m_promocao" value = "<?php echo getM_promocao(); ?>" readonly></th>
          <td>Uma vez por mês</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="radio" name = "m_promocao" value = "<?php echo getM_promocao(); ?>" readonly></th>
          <td>Não, nunca faço</td></label>
      </tr><br><br>

      <label> 2.7 Quais meios utiliza? </label>
      <br>
      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_radio" value = "<?php echo getM_radio(); ?>" readonly></th>
        <td>Rádio</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_jornal" value = "<?php echo getM_jornal(); ?>" readonly></th>
        <td>Jornal</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_panfleto" value = "<?php echo getM_panfleto(); ?>" readonly></th>
        <td>Panfleto</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "m_OutrosMeiosComunicacao" value = "<?php echo getM_outrosMeiosComunicacao(); ?>" readonly></th>
        <td>Outros:<input type="text" name="m_OutrosMeiosComunicacaoDesc" value = "<?php echo getM_outrosMeiosComunicacaoDesc(); ?>" size=30 readonly><br></td></label>
      </tr>

      <br>
      <label>2.8 O estabelecimento é bem sinalizado, dividido em seções?</label>
      <br>
      <tr>
        <label><th class="span1"><input type="radio" name = "m_sinalizacao" value = "<?php echo getM_sinalizacao(); ?>" readonly></th>
          <td>Sim</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "m_sinalizacao" value = "<?php echo getM_sinalizacao(); ?>" readonly></th>
          <td>Não</td></label>
      </tr><br><br>

      <label> 2.9 Dispõe de espaços promocionais? (dispostos na loja)</label>
      <br>
      <tr>
        <label><th class="span1"><input type="radio" name = "m_espacoPromocional" value = "<?php echo getM_espacoPromocional(); ?>" readonly></th>
          <td>Sim</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "m_espacoPromocional" value = "<?php echo getM_espacoPromocional(); ?>" readonly></th>
          <td>Não</td></label>
      </tr><br><br>

      <legend>3. PREÇOS</legend>
    
      <br>
      <label> 3.1 Como forma os preços de seus produtos? </label>   
      <br>
      <tr>
        <label><th class="span1"><input type="radio" name = "p_formacaoPreco" value = "<?php echo getP_formacaoPreco(); ?>" readonly></th>
          <td>Percentual sobre os custos</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "p_formacaoPreco" value = "<?php echo getP_formacaoPreco(); ?>" readonly></th>
          <td>Acompanhando o mercado</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "p_formacaoPreco" value = "<?php echo getP_formacaoPreco(); ?>" readonly></th>
          <td>Outra Maneira, qual?<input type="text" name="p_outraFormacaoPreco" value = "<?php echo getP_outraFormacaoPreco(); ?>" size=10 readonly></td></label>
      </tr><br><br>

      <label> 3.2 Seus preços em relação a concorrência estão? </label>  
      <br>
      <tr>
        <label><th class="span1"><input type="radio" name = "p_precoConcorrencia" value = "<?php echo getP_precoConcorrencia(); ?>" readonly></th>
          <td>Acima</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "p_precoConcorrencia" value = "<?php echo getP_precoConcorrencia(); ?>" readonly></th>
          <td>Iguais</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "p_precoConcorrencia" value = "<?php echo getP_precoConcorrencia(); ?>" readonly></th>
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
              <input type="text" name="v_mesAno"  placeholder='' class="form-control" value = "<?php echo getV_mesAno(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="v_fatReais" placeholder='' class="form-control" value = "<?php echo getV_fatReais(); ?>" readonly/>
            </td>
            
            <td>
              <input type="text" name="v_mesAno"  placeholder='' class="form-control" value = "<?php echo getV_mesAno(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="v_fatReais"  placeholder='' class="form-control" value = "<?php echo getV_fatReais(); ?>" readonly/>
            </td>
          </tr>
            
          <tr id='addr1'>
            <td>
            
            </td>
            <td>
              <input type="text" name="v_mesAno"  placeholder='' class="form-control" value = "<?php echo getV_mesAno(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="v_fatReais" placeholder='' class="form-control" value = "<?php echo getV_fatReais(); ?>" readonly/>
            </td>
            
            <td>
              <input type="text" name="v_mesAno"  placeholder='' class="form-control" value = "<?php echo getV_mesAno(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="v_fatReais"  placeholder='' class="form-control" value = "<?php echo getV_fatReais(); ?>" readonly/>
            </td>
          </tr>
            
          <tr id='addr2'>
            <td>
            
            </td>
            <td>
              <input type="text" name="v_mesAno"  placeholder='' class="form-control" value = "<?php echo getV_mesAno(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="v_fatReais" placeholder='' class="form-control" value = "<?php echo getV_fatReais(); ?>" readonly/>
            </td>
            
            <td>
              <input type="text" name="v_mesAno"  placeholder='' class="form-control" value = "<?php echo getV_mesAno(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="v_fatReais"  placeholder='' class="form-control" value = "<?php echo getV_fatReais(); ?>" readonly/>
            </td>
          </tr>

          <tr id='addr3'>
            <td>
            
            </td>
            <td>
             <input type="text" name="v_mesAno"  placeholder='' class="form-control" value = "<?php echo getV_mesAno(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="v_fatReais" placeholder='' class="form-control" value = "<?php echo getV_fatReais(); ?>" readonly/>
            </td>
            
            <td>
              <input type="text" name="v_mesAno"  placeholder='' class="form-control" value = "<?php echo getV_mesAno(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="v_fatReais"  placeholder='' class="form-control" value = "<?php echo getV_fatReais(); ?>" readonly/>
            </td>
          </tr>
            
          <tr id='addr4'>
            <td>
            
            </td>
            <td>
              <input type="text" name="v_mesAno"  placeholder='' class="form-control" value = "<?php echo getV_mesAno(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="v_fatReais" placeholder='' class="form-control" value = "<?php echo getV_fatReais(); ?>" readonly/>
            </td>
            
            <td>
              <input type="text" name="v_mesAno"  placeholder='' class="form-control" value = "<?php echo getV_mesAno(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="v_fatReais"  placeholder='' class="form-control" value = "<?php echo getV_fatReais(); ?>" readonly/>
            </td>
          </tr>
            
          <tr id='addr5'>
            <td>
            
            </td>
            <td>
              <input type="text" name="v_mesAno"  placeholder='' class="form-control" value = "<?php echo getV_mesAno(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="v_fatReais" placeholder='' class="form-control" value = "<?php echo getV_fatReais(); ?>" readonly/>
            </td>
            
            <td>
              <input type="text" name="v_mesAno"  placeholder='' class="form-control" value = "<?php echo getV_mesAno(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="v_fatReais"  placeholder='' class="form-control" value = "<?php echo getV_fatReais(); ?>" readonly/>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
  </div><br>
  
  <label>4.2 Dias da semana de maior movimento? Período do mês: </label>
    <td>
      <input type="text" name="v_periodoInicial" value = "<?php echo getV_(); ?>" size=12>
      <input type="text" name="v_periodoFinal" value = "<?php echo getV_(); ?>" size=12>
    </td>
      <tr><br>
         <label><th class="span1"><input type="checkbox" name = "v_seg" value = "<?php echo getV_seg(); ?>" readonly></th>
      <td> Seg</td></label>
      </tr>
    
     <tr>
        <label><th class="span1"><input type="checkbox" name = "v_ter" value = "<?php echo getV_ter(); ?>" readonly></th>
      <td> Ter </td></label>
      </tr>
    
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_qua" value = "<?php echo getV_qua(); ?>" readonly></th>
      <td> Qua</td></label>
      </tr>
    
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_qui" value = "<?php echo getV_qui(); ?>" readonly></th>
      <td> Qui</td></label>
      </tr> 

    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_sex" value = "<?php echo getV_sex(); ?>" readonly></th>
      <td> Sex</td></label>
      </tr>
    
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_sab" value = "<?php echo getV_sab(); ?>" readonly></th>
      <td> Sab</td></label>
      </tr>
    
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_dom" value = "<?php echo getV_dom(); ?>" readonly></th>
      <td> Dom</td></label>
      </tr><br><br>
  
  <label>4.3 Quais horários de maior movimento?</label>
    <br>
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_manha" value = "<?php echo getV_manha(); ?>" readonly></th>
      <td> Manhã</td></label>
      </tr>
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_tarde" value = "<?php echo getV_tarde(); ?>" readonly></th>
      <td> Tarde</td></label>
      </tr>
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_noite" value = "<?php echo getV_noite(); ?>" readonly></th>
      <td> Noite</td></label>
      </tr>
    
    <br><br>

  <label>4.4 Forma de pagamento oferecidas aos clientes?</label>
    <br>
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_cheque" value = "<?php echo getV_cheque(); ?>" readonly></th>
      <td>Cheque pré-datado </td></label>
      </tr>
    
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_ticket" value = "<?php echo getV_ticket(); ?>" readonly></th>
      <td>Ticket </td></label>
      </tr>
    
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_cartao" value = "<?php echo getV_cartao(); ?>" readonly></th>
      <td>Cartão de crédito </td></label>
      </tr>
    <br>
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_avista" value = "<?php echo getV_avista(); ?>" readonly></th>
      <td>Caderneta </td></label>
      </tr>
    
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_caderneta" value = "<?php echo getV_cardeneta(); ?>" readonly></th>
      <td>A vista </td></label>
      </tr>
    
    <tr>
        <label><th class="span1"><input type="checkbox" name = "v_outraFormaPagto" value = "<?php echo getV_outraFormaPagto(); ?>" readonly></th>
        <td>Outra? Qual?<input type="text" name="v_outraFormaPagtoDesc" value = "<?php echo getV_outraFormaPagtoDesc(); ?>" size=30 readonly> 
        <br> </td></label>
      </tr><br>
  
  <label>4.5 Qual o valor médio de compras por cliente?</label>
  <br>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="card-holder-name"> Por vez:</label>    
           <input type="text" name="v_vlrMedioPorVez" value = "<?php echo getV_vlrMedioPorVez(); ?>" size=30 readonly>
           <label class="col-sm-3 control-label" for="card-holder-name"> Mensal:</label>   
           <input type="text" name="v_vlrMedioMensal" value = "<?php echo getV_vlrMedioMensal(); ?>" size=30 readonly>
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
              <input type="text" name="c_razaoSocialFantasia"  placeholder='' class="form-control" value = "<?php echo getC_razaoSocialFantasia(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="c_cidadeUf" placeholder='' class="form-control" value = "<?php echo getC_cidadeUf(); ?>" size=10 readonly/>
            </td>           
            <td>
              <input type="text" name="c_produtos"  placeholder='' class="form-control" value = "<?php echo getC_produtos(); ?>" size=15 readonly/>
            </td>
            <td>
              <input type="text" name="c_loteMinimo"  placeholder='' class="form-control" value = "<?php echo getC_loteMinimo(); ?>" size=15 readonly/>
            </td>
            <td>
              <input type="text" name="c_relacionamento"  placeholder='' class="form-control" value = "<?php echo getC_relacionamento(); ?>" size=15 readonly/>
            </td>
          </tr>
            
          <tr id='addr1'>
            <td>
            
            </td>
            <td>
              <input type="text" name="c_razaoSocialFantasia"  placeholder='' class="form-control" value = "<?php echo getC_razaoSocialFantasia(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="c_cidadeUf" placeholder='' class="form-control" value = "<?php echo getC_cidadeUf(); ?>" size=10 readonly/>
            </td>           
            <td>
              <input type="text" name="c_produtos"  placeholder='' class="form-control" value = "<?php echo getC_produtos(); ?>" size=15 readonly/>
            </td>
            <td>
              <input type="text" name="c_loteMinimo"  placeholder='' class="form-control" value = "<?php echo getC_loteMinimo(); ?>" size=15 readonly/>
            </td>
            <td>
              <input type="text" name="c_relacionamento"  placeholder='' class="form-control" value = "<?php echo getC_relacionamento(); ?>" size=15 readonly/>
            </td>
          </tr>
            
          <tr id='addr2'>
            <td>
            
            </td>
            <td>
              <input type="text" name="c_razaoSocialFantasia"  placeholder='' class="form-control" value = "<?php echo getC_razaoSocialFantasia(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="c_cidadeUf" placeholder='' class="form-control" value = "<?php echo getC_cidadeUf(); ?>" size=10 readonly/>
            </td>           
            <td>
              <input type="text" name="c_produtos"  placeholder='' class="form-control" value = "<?php echo getC_produtos(); ?>" size=15 readonly/>
            </td>
            <td>
              <input type="text" name="c_loteMinimo"  placeholder='' class="form-control" value = "<?php echo getC_loteMinimo(); ?>" size=15 readonly/>
            </td>
            <td>
              <input type="text" name="c_relacionamento"  placeholder='' class="form-control" value = "<?php echo getC_relacionamento(); ?>" size=15 readonly/>
            </td>
          </tr>
            
          <tr id='addr3'>
            <td>
            
            </td>
            <td>
              <input type="text" name="c_razaoSocialFantasia"  placeholder='' class="form-control" value = "<?php echo getC_razaoSocialFantasia(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="c_cidadeUf" placeholder='' class="form-control" value = "<?php echo getC_cidadeUf(); ?>" size=10 readonly/>
            </td>           
            <td>
              <input type="text" name="c_produtos"  placeholder='' class="form-control" value = "<?php echo getC_produtos(); ?>" size=15 readonly/>
            </td>
            <td>
              <input type="text" name="c_loteMinimo"  placeholder='' class="form-control" value = "<?php echo getC_loteMinimo(); ?>" size=15 readonly/>
            </td>
            <td>
              <input type="text" name="c_relacionamento"  placeholder='' class="form-control" value = "<?php echo getC_relacionamento(); ?>" size=15 readonly/>
            </td>
            
          <tr id='addr4'>
            <td>
            
            </td>
            <td>
              <input type="text" name="c_razaoSocialFantasia"  placeholder='' class="form-control" value = "<?php echo getC_razaoSocialFantasia(); ?>" readonly/>
            </td>
            <td>
              <input type="text" name="c_cidadeUf" placeholder='' class="form-control" value = "<?php echo getC_cidadeUf(); ?>" size=10 readonly/>
            </td>           
            <td>
              <input type="text" name="c_produtos"  placeholder='' class="form-control" value = "<?php echo getC_produtos(); ?>" size=15 readonly/>
            </td>
            <td>
              <input type="text" name="c_loteMinimo"  placeholder='' class="form-control" value = "<?php echo getC_loteMinimo(); ?>" size=15 readonly/>
            </td>
            <td>
              <input type="text" name="c_relacionamento"  placeholder='' class="form-control" value = "<?php echo getC_relacionamento(); ?>" size=15 readonly/>
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
                <input type="text" name="c_mesAno"  placeholder='' class="form-control" value = "<?php echo getC_mesAno(); ?>" readonly/>
              </td>
              <td>
                <input type="text" name="c_comprasReais" placeholder='' class="form-control" value = "<?php echo getC_compraReais(); ?>" readonly/>
              </td>
              
              <td>
                <input type="text" name="c_mesAno"  placeholder='' class="form-control" value = "<?php echo getC_mesAno(); ?>" readonly/>
              </td>
              <td>
                <input type="text" name="c_comprasReais"  placeholder='' class="form-control" value = "<?php echo getC_compraReais(); ?>" readonly/>
              </td>
            </tr>
              
            <tr id='addr1'>
              <td>
              
              </td>
              <td>
                 <input type="text" name="c_mesAno"  placeholder='' class="form-control" value = "<?php echo getC_mesAno(); ?>" readonly/>
              </td>
              <td>
                <input type="text" name="c_comprasReais" placeholder='' class="form-control" value = "<?php echo getC_compraReais(); ?>" readonly/>
              </td>
              
              <td>
                <input type="text" name="c_mesAno"  placeholder='' class="form-control" value = "<?php echo getC_mesAno(); ?>" readonly/>
              </td>
              <td>
                <input type="text" name="c_comprasReais"  placeholder='' class="form-control" value = "<?php echo getC_compraReais(); ?>" readonly/>
              </td>
            </tr>
              
            <tr id='addr2'>
              <td>
              
              </td>
              <td>
                <input type="text" name="c_mesAno"  placeholder='' class="form-control" value = "<?php echo getC_mesAno(); ?>" readonly/>
              </td>
              <td>
                <input type="text" name="c_comprasReais" placeholder='' class="form-control" value = "<?php echo getC_compraReais(); ?>" readonly/>
              </td>
              
              <td>
                <input type="text" name="c_mesAno"  placeholder='' class="form-control" value = "<?php echo getC_mesAno(); ?>" readonly/>
              </td>
              <td>
                <input type="text" name="c_comprasReais"  placeholder='' class="form-control" value = "<?php echo getC_compraReais(); ?>" readonly/>
              </td>
            </tr>

            <tr id='addr3'>
              <td>
              
              </td>
              <td>
                <input type="text" name="c_mesAno"  placeholder='' class="form-control" value = "<?php echo getC_mesAno(); ?>" readonly/>
              </td>
              <td>
                <input type="text" name="c_comprasReais" placeholder='' class="form-control" value = "<?php echo getC_compraReais(); ?>" readonly/>
              </td>
              
              <td>
                <input type="text" name="c_mesAno"  placeholder='' class="form-control" value = "<?php echo getC_mesAno(); ?>" readonly/>
              </td>
              <td>
                <input type="text" name="c_comprasReais"  placeholder='' class="form-control" value = "<?php echo getC_compraReais(); ?>" readonly/>
              </td>
            </tr>
              
            <tr id='addr4'>
              <td>
              
              </td>
              <td>
                 <input type="text" name="c_mesAno"  placeholder='' class="form-control" value = "<?php echo getC_mesAno(); ?>" readonly/>
              </td>
              <td>
                <input type="text" name="c_comprasReais" placeholder='' class="form-control" value = "<?php echo getC_compraReais(); ?>" readonly/>
              </td>
              
              <td>
                <input type="text" name="c_mesAno"  placeholder='' class="form-control" value = "<?php echo getC_mesAno(); ?>" readonly/>
              </td>
              <td>
                <input type="text" name="c_comprasReais"  placeholder='' class="form-control" value = "<?php echo getC_compraReais(); ?>" readonly/>
              </td>
            </tr>
              
            <tr id='addr5'>
              <td>
              
              </td>
              <td>
                 <input type="text" name="c_mesAno"  placeholder='' class="form-control" value = "<?php echo getC_mesAno(); ?>" readonly/>
              </td>
              <td>
                <input type="text" name="c_comprasReais" placeholder='' class="form-control" value = "<?php echo getC_compraReais(); ?>" readonly/>
              </td>
              
              <td>
                <input type="text" name="c_mesAno"  placeholder='' class="form-control" value = "<?php echo getC_mesAno(); ?>" readonly/>
              </td>
              <td>
                <input type="text" name="c_comprasReais"  placeholder='' class="form-control" value = "<?php echo getC_compraReais(); ?>" readonly/>
              </td>
            </tr>
          </tbody>
      </table>
    </div>
  </div><br> 
  <legend>6. CLIENTES</legend> 

  <label>6.1 Quantos clientes atende por mês?</label>
    <input type="text" name="cli_qtdeClienteMensal" value = "<?php echo getCli_qtdeClienteMensal(); ?>" size=15 readonly><br><br>
  
  <label>6.2 Qual é o perfil do seu cliente?</label>
    <br>
      <input type="text" name="cli_percClasA" value = "<?php echo getCli_percClasA(); ?>" size=5 readonly><td>% classe A </td>
    
      <input type="text" name="cli_percClasB" value = "<?php echo getCli_percClasB(); ?>" size=5 readonly><td>% classe B </td>
    
      <input type="text" name="cli_percClasC" value = "<?php echo getCli_percClasC(); ?>" size=5 readonly><td>% classe C </td>
    
      <input type="text" name="cli_percClasD" value = "<?php echo getCli_percClasD(); ?>" size=5 readonly><td>% classe D </td>
    <br>
      <input type="text" name="cli_percIdadeA" value = "<?php echo getCli_percIdadeA(); ?>" size=4 readonly><td>% 0 a 18 anos </td>
       
      <input type="text" name="cli_percIdadeB" value = "<?php echo getCli_percIdadeB(); ?>" size=4 readonly><td>% 19 a 30 anos </td>  
    
      <input type="text" name="cli_percIdadeC" value = "<?php echo getCli_percIdadeC(); ?>" size=4 readonly><td>% 31 a 45 anos </td>
     
      <input type="text" name="cli_percIdadeD" value = "<?php echo getCli_percIdadeD(); ?>" size=4 readonly><td>% acima de 46 anos </td>
    <br>
      <input type="text" name="cli_percMasc" value = "<?php echo getCli_percMasc(); ?>" size=5 readonly><td>% Masculino </td>
    
      <input type="text" name="cli_percFem" value = "<?php echo getCli_percFem(); ?>" size=5 readonly><td>% Feminino </td>
    <br><br>

    <label>6.3 Vende para empresas?</label><br>
    <tr>
      <label><th class="span1"><input type="radio" name = "cli_vendeEmpresas" value = "<?php echo getCli_vendeEmpresas(); ?>" readonly></th>
      <td>Sim.Quantos % representa do total do faturamento?</td></label>
      <input type="text" name="cli_percTotalFat" value = "<?php echo getCli_percTotalFat(); ?>" size=5 readonly>
      </tr>
    
    <tr>
      <label><th class="span1"><input type="radio" name = "cli_vendeEmpresas" value = "<?php echo getCli_vendeEmpresas(); ?>" readonly></th>
      <td>Não </td></label>
      </tr>
    
    <br><br>
    <label>6.4 Faz pesquisas com seus clientes?</label><br>
    <tr>
      <label><th class="span1"><input type="radio" name = "cli_pesquisaClientes" value = "<?php echo getCli_pesquisaClientes(); ?>" readonly></th>
      <td>Sim, frequência?</td></label>
      <input type="text" name="cli_frequencia" size=15 readonly>
      </tr>
    
    <tr>
      <label><th class="span1"><input type="radio" name = "cli_pesquisaClientes" value = "<?php echo getCli_pesquisaClientes(); ?>" readonly></th>
      <td>Não, mas já fiz </td></label>
      </tr>
    
    <tr>
      <label><th class="span1"><input type="radio" name = "cli_pesquisaClientes" value = "<?php echo getCli_pesquisaClientes(); ?>" readonly></th>
      <td>Nunca fiz </td></label>
      </tr>

      <br>
      <br>
      <legend>7. RECURSOS HUMANOS</legend>
      <br>
      <label>7.1 Quantos colaboradores possui?</label><input type="text" name="r_qtdeColaboradores" value = "<?php echo getR_qtdeColaboradores(); ?>" size=10 readonly><br><br>

      <label>7.2 No último ano seus colaboradores participaram de treinamento?</label>
      <br>
      <tr>
        <label><th class="span1"><input type="radio" name = "r_treinamento" value = "<?php echo getR_treinamento(); ?>" readonly></th>
        <td>Sim. Em que área?<input type="text" name="r_area" value = "<?php echo getR_area(); ?>" size=30 readonly></label></td>
      </tr>
      
      <tr>
        <label><th class="span1"><input type="radio" name = "r_treinamento" value = "<?php echo getR_treinamento(); ?>" readonly></th>
        <td>Não </td></label>
      </tr><br><br> 

      <label>7.3 Qual a escolaridade dos que trabalham na empresa?</label><br>
      <tr>
        <label><th class="span1"><input type="radio" name = "r_escolaridade" value = "<?php echo getR_escolaridade(); ?>" readonly></th>
        <td>Segundo grau </td></label>
      </tr>
      
      <tr>
        <label><th class="span1"><input type="radio" name = "r_escolaridade" value = "<?php echo getR_escolaridade(); ?>" readonly></th>
        <td>Superior </td></label>
      </tr>
      
      <tr>
        <label><th class="span1"><input type="radio" name = "r_escolaridade" value = "<?php echo getR_escolaridade(); ?>" readonly></th>
        <td>Pós-graduação</td></label>
      </tr> <br><br>

      <label>7.4 Que critérios utiliza para contratação de colaboradores?</label><br>
    <tr>
      <label><th class="span1"><input type="checkbox" name = "r_indicacao" value = "<?php echo getR_indicacao(); ?>" readonly></th>
      <td>Indicação </td></label>
    </tr>
    
    <tr>
      <label><th class="span1"><input type="checkbox" name = "r_entrevista" value = "<?php echo getR_entrevista(); ?>" readonly></th>
      <td>Entrevisa </td></label>
    </tr>
    
    <tr>
      <label><th class="span1"><input type="checkbox" name = "r_analCurEnt" value = "<?php echo getR_analCurEnt(); ?>" readonly></th>
      <td>Análise de Currículo e Entrevista</td></label>
    </tr> <br><br>
    
    <label>7.5 Quais são os fatores prioritários na escolha de um candidato? Enumerar por ordem de importância.</label><br>
    <tr>
      <label><th class="span1"><input type="checkbox" name = "r_aparencia" value = "<?php echo getR_aparencia(); ?>" readonly></th>
      <td>Aparência </td></label>
    </tr>
    
    <tr>
      <label><th class="span1"><input type="checkbox" name = "r_boaVontade" value = "<?php echo getR_boaVontade(); ?>" readonly></th>
      <td>Boa vontade </td></label>
    </tr>
    
    <tr>
      <label><th class="span1"><input type="checkbox" name = "r_experiencia" value = "<?php echo getR_experiencia(); ?>" readonly></th>
      <td>Experiência</td></label>
    </tr> <br><br>
    
    <label>7.6 Que tipo de atividades realiza para manter seus funcionários motivados?</label><br>
    <tr>
      <label><th class="span1"><input type="radio" name = "r_tipoAtividade" value = "<?php echo getR_tipoAtividade(); ?>" readonly></th>
      <td>Festas especiais </td></label>
    </tr>
    
    <tr>
      <label><th class="span1"><input type="radio" name = "r_tipoAtividade" value = "<?php echo getR_tipoAtividade(); ?>" readonly></th>
      <td>Participação no lucro </td></label>
    </tr>
    
    <tr>
      <label><th class="span1"><input type="radio" name = "r_tipoAtividade" value = "<?php echo getR_tipoAtividade(); ?>" readonly></th>
      <td>Outros: </td></label><input type="text" name="r_outrasAtividades" value = "<?php echo getR_outrasAtividades(); ?>" size=30 readonly>
    </tr> <br><br>    
    
    <label>7.7 Quantas demissões X Contratações por ano? Por quê?</label><br>
    <input type="text" name="r_quantasDemContrAno" value = "<?php echo getR_quantasDemContrAno(); ?>" size=100 readonly><br>

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
              <input type="text" name="a_fluxoCaixa"  placeholder='' class="form-control" value = "<?php echo getA_fluxoCaixa(); ?>" size="3"  readonly/>
            </td>
            <td>
              <input type="text" name="a_fluxoCaixa" placeholder='' class="form-control" value = "<?php echo getA_fluxoCaixa(); ?>" size="8" readonly/>
            </td>
            <td>
            Adm. de Compras
            </td>           
            <td>
              <input type="text" name="a_admCompras"  placeholder='' class="form-control" value = "<?php echo getA_admCompras(); ?>" size="3" readonly/>
            </td>
            <td>
              <input type="text" name="a_admCompras"  placeholder='' class="form-control" value = "<?php echo getA_admCompras(); ?>" size="8"  readonly/>
            </td>
          </tr>
            
          <tr id='addr1'>
            <td>
            Controle de Estoques
            </td>
            <td>
              <input type="text" name="a_controleEstoque"  placeholder='' class="form-control" value = "<?php echo getA_controleEstoque(); ?>" size="3" readonly/>
            </td>
            <td>
              <input type="text" name="a_controleEstoque" placeholder='' class="form-control" value = "<?php echo getA_controleEstoque(); ?>" size="8" readonly/>
            </td>
            <td>
              Adm. de Vendas
            </td>
            <td>
              <input type="text" name="a_admVendas"  placeholder='' class="form-control" value = "<?php echo getA_admVendas(); ?>" size="3" readonly/>
            </td>
            <td>
              <input type="text" name="a_admVendas"  placeholder='' class="form-control" value = "<?php echo getA_admVendas(); ?>" size="8" readonly/>
            </td>
          </tr>
            
          <tr id='addr2'>
            <td>
            Contas a pagar
            </td>
            <td>
              <input type="text" name="a_contasPagar"  placeholder='' class="form-control" value = "<?php echo getA_contasPagar(); ?>" size="3" readonly/>
            </td>
            <td>
              <input type="text" name="a_contasPagar" placeholder='' class="form-control" value = "<?php echo getA_contasPagar(); ?>" size="8" readonly/>
            </td>   
            <td>
              Faturamento
            </td>
            <td>
              <input type="text" name="a_fat"  placeholder='' class="form-control" value = "<?php echo getA_fat(); ?>" size="3" readonly/>
            </td> 
            <td>
              <input type="text" name="a_fat"  placeholder='' class="form-control" value = "<?php echo getA_fat(); ?>" size="8" readonly/>
            </td>
          </tr>
            
          <tr id='addr3'>
            <td>
            Contas a receber
            </td>
            <td>
              <input type="text" name="a_contasReceber"  placeholder='' class="form-control" value = "<?php echo getA_contasReceber(); ?>" size="3" readonly/>
            </td>
            <td>
              <input type="text" name="a_contasReceber" placeholder='' class="form-control" value = "<?php echo getA_contasReceber(); ?>" size="8" readonly/>
            </td>   
            <td>
              Outros:<input type="text" name="a_descOutrosTipos"  placeholder='' class="form-control" value = "<?php echo getA_descOutrosTipos(); ?>" size="10" readonly/>
            </td>
            <td>
              <input type="text" name="a_outrosTiposSelecionado"  placeholder='' class="form-control" value = "<?php echo getA_outrosTiposSelecionado(); ?>" size="3" readonly/>
            </td> 
            <td>
              <input type="text" name="a_outrosTiposSelecionado"  placeholder='' class="form-control" value = "<?php echo getA_outrosTiposSelecionado(); ?>" size="8" readonly/>
            </td>
          </tr>            
        </tbody>
      </table>
    </div>
  </div><br>
  <label>8.2 Realiza Planejamentos?</label>
    <br>
     <tr>
        <label><th class="span1"><input type="radio" name = "a_planejamento" value = "<?php echo getA_planejamento(); ?>" readonly></th>
          <td>Sim. Em que áreas?<input type="text" name="a_area" value = "<?php echo getA_area(); ?>" size=30 readonly></label></td>
      </tr>
      
      <tr>
        <label><th class="span1"><input type="radio" name = "a_planejamento" value = "<?php echo getA_planejamento(); ?>" readonly></th>
          <td>Não </td></label>
      </tr><br><br> 
    
    <label>8.3 Trabalha ou já obteve recursos de terceiros?</label>
    <br>
     <tr>
        <label><th class="span1"><input type="radio" name = "a_trabalhaRecursoTerc" value = "<?php echo getA_trabalhaRecursoTerc(); ?>" readonly></th>
          <td>Não </td></label>
      </tr>
       <tr>
        <label><th class="span1"><input type="radio" name = "a_trabalhaRecursoTerc" value = "<?php echo getA_trabalhaRecursoTerc(); ?>" readonly></th>
          <td>Sim </td></label>
      </tr>
      
    <tr>
        <label><th class="span1"><input type="checkbox" name = "a_chequeEspecial" value = "<?php echo getA_chequeEspecial(); ?>" readonly></th>
        <td>Cheque Especial</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "a_emprestimo" value = "<?php echo getA_emprestimo(); ?>" readonly></th>
        <td>Empréstimo</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "a_factoring" value = "<?php echo getA_factoring(); ?>" readonly></th>
        <td>Factoring</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "a_outros" value = "<?php echo getA_outros(); ?>" readonly></th>
        <td>Outros <input type="text" name="a_descOutrosRecursos" value = "<?php echo getA_descOutrosRecursos(); ?>" size=50 readonly></td></label>
      </tr>
    <br>
  <BR>
  <label>8.4 Quais são seus maiores gastos?</label>
    <br>
    <tr>
        <label><th class="span1"><input type="checkbox" name = "a_frete" value = "<?php echo getA_frete(); ?>" readonly></th>
        <td>Frete</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "a_energiaEletrica" value = "<?php echo getA_energiaEletrica(); ?>" readonly></th>
        <td>Energia Elétrica</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "a_folhaPagto" value = "<?php echo getA_folhaPagto(); ?>" readonly></th>
        <td>Folha de Pagamento</td></label>
      </tr>

      <br>
      <tr>
        <label><th class="span1"><input type="checkbox" name = "a_financeiros" value = "<?php echo getA_financeiros(); ?>" readonly></th>
        <td>Financeiros</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "a_manutGeral" value = "<?php echo getA_manutGeral(); ?>" readonly></th>
        <td>Manutenção Geral</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "a_impostos" value = "<?php echo getA_impostos(); ?>" readonly></th>
        <td>Impostos</td></label>
      </tr>

      <br>
      <tr>
        <label><th class="span1"><input type="checkbox" name = "a_aluguel" value = "<?php echo getA_aluguel(); ?>" readonly></th>
        <td>Aluguel</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "a_outrosGastos" value = "<?php echo getA_outrosGastos(); ?>" readonly></th>
        <td>Outros, quais? <input type="text" name="a_descOutrosGastos" value = "<?php echo getA_descOutrosGastos(); ?>" size=50 readonly></td></label>
      </tr>
    
    <br>  
    <br> 
    <legend>9. JURIDICO</legend>
    <br> 
    <label>  9.1 Você conhece todos os impostos devidos pela sua empresa?</label><br>
    <tr>
        <label><th class="span1"><input type="radio" name = "j_impostos" value = "<?php echo getJ_impostos(); ?>" readonly></th>
          <td>Sim</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "j_impostos" value = "<?php echo getJ_impostos(); ?>" readonly></th>
          <td>Não</td></label>
      </tr><br><br>

      <label>9.2 Você já recebeu alguma autuação de fiscalização?</label><br>
    <tr>
        <label><th class="span1"><input type="radio" name = "j_autuacaoFiscal" value = "<?php echo getJ_autuacaoFiscal(); ?>" readonly></th>
          <td>Sim</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "j_autuacaoFiscal" value = "<?php echo getJ_autuacaoFiscal(); ?>" readonly></th>
          <td>Não</td></label>
      </tr><br><br>
  
  <label>9.3 Sua empresa está respondendo alguma ação judicial, inclusive trabalhista?</label>
  <BR>
    <tr>
        <label><th class="span1"><input type="radio" name = "j_acaoJudicial" value = "<?php echo getJ_acaoJudicial(); ?>" readonly></th>
          <td>Sim</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "j_acaoJudicial" value = "<?php echo getJ_acaoJudicial(); ?>" readonly></th>
          <td>Não</td></label>
      </tr><br><br>
  
  
  <label>9.4 Suas tratativas com seus fornecedores são:</label><br>
    <tr>
        <label><th class="span1"><input type="radio" name = "j_tratativas" value = "<?php echo getJ_tratativas(); ?>" readonly></th>
          <td>Verbais</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "j_tratativas" value = "<?php echo getJ_tratativas(); ?>" readonly></th>
          <td>Com contratos</td></label>
      </tr><br><br>
  
  <label>9.5 Como você realiza suas cobranças na empresa?</label><br>
    <tr>
        <label><th class="span1"><input type="checkbox" name = "j_empresaCobranca" value = "<?php echo getJ_empresaCobranca(); ?>" readonly></th>
        <td>Empresa de cobrança</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "j_colaborador" value = "<?php echo getJ_colaborador(); ?>" readonly></th>
        <td>Colaborador</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "j_pessoalmente" value = "<?php echo getJ_pessoalmente(); ?>" readonly></th>
        <td>Pessoalmente</td></label>
      </tr>

      <tr>
        <label><th class="span1"><input type="checkbox" name = "j_outrasCobrancas" value = "<?php echo getJ_outrasCobrancas(); ?>" readonly></th>
        <td>Outros</td></label>
      </tr>
   </br>
   <BR>
   
   <label>9.6 Tem assessoria jurídica?</label><br>
    <tr>
        <label><th class="span1"><input type="radio" name = "j_assessoriaJuridica" value = "<?php echo getJ_assessoriaJuridica(); ?>" readonly></th>
          <td>Sim</td></label>
      </tr>
      <tr>
        <label><th class="span1"><input type="radio" name = "j_assessoriaJuridica" value = "<?php echo getJ_assessoriaJuridica(); ?>" readonly></th>
          <td>Não</td></label>
      </tr><br><br>
  
  <label>Observação:</label>
  <br>
  <input type="text" name="j_observacao" value = "<?php echo getJ_observacao(); ?>" size=100 readonly><br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <p>______________________________________________</p>
  <p style="line-height: 50%">Responsável Legal da empresa</p>
  <br>
  <br>
  <br>
  <br>
  <p>______________________________________________</p>
  <p style="line-height: 50%"><b>Cristiane Girardi</b><p>
  <p style="line-height: 50%">Gerente Administrativo</p>
  <p style="line-height: 50%">Coordenadora do Projeto CIAPE - ACIC</p>
  <br>
  <br>
  <br>
  <br>
  <p>______________________________________________</p>
  <p style="line-height: 50%"><b>Prof. Adm. Marcelo Rodrigues</b><p>
  <p style="line-height: 50%">Coordenador do Curso de Administração</p>
  <p style="line-height: 50%">Coordenadora do Projeto CIAPE - ACIC</p>
  <br>
  <br>
  <br>
  <br>
  <p>Cianorte, ________ de _________________ de ______________.</p>

  <br>
  <br>
  <div class="form-group">
    <div class="col-sm-offset-22 col-sm-9">
      <!--<button type="button" class="btn btn-success">Voltar</button> -->
    </div>
  </div>
  </form>
</div>
</div>
</body>
</html>