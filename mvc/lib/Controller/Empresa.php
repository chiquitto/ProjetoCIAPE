<?php

class Controller_Usuario extends Controller {

    public function apagar() {
        $dao = new Dao_Empresa();
        $empresas = $dao->delete();
    }

    public function cadastrar() {
        
        $view = new View();

            $e_nomeFantasia = '';
            $e_ie = '';
            $e_socio = '';
            $e_cargo = '';
            $m_prodMaisVend = '';
            $m_qtdeMensal = '';
            $m_unMed = '';
            $m_margemLucro = '';
            $m_faturamento = '';
            $m_visitaConcorrencia = '';
            $m_sinalizacao = '';
            $m_espacaoPromocional = '';
            $v_vlrMedioPorVez = '';
            $v_vlrMedioMensal = '';
            $c_razaoSocialFantasia = '';
            $c_cidadeUf = '';
            $c_produtos = '';
            $c_loteMinimo = '';
            $c_relacionamento = '';
            $cli_qtdeClienteMensal = '';
            $cli_percClasA = '';
            $cli_percClasB = '';
            $cli_percClasC = '';
            $cli_percClasD = '';
            $cli_percIdadeA = '';
            $cli_percIdadeB = '';
            $cli_percIdadeC = '';
            $cli_percIdadeD = '';
            $cli_percMasc = '';
            $cli_percFem = '';
            $cli_pesquisaClientes = '';
            $r_qtdeColaboradores = '';
            $r_escolaridade = '';
            $r_aparencia = 0;
            $r_boaVontade = 0;
            $r_experiencia = 0;
            $r_tipoAtividade = '';
            $r_outrasAtividades = '';
            $r_quantasDemContrAno = '';
            $j_tratativas = '';
            $j_empresaCobranca = 0;
            $j_colaborador = 0;
            $j_pessoalmente = 0;
            $j_outrasCobrancas = 0;
            $j_observacao = '';
            
        
        if ($_POST) {
            
            if(isset($_POST['e_nomeFantasia'])){
                $e_nomeFantasia = $_POST['e_nomeFantasia'];
            }

            if(isset($_POST['e_ie'])){
                $e_ie = $_POST['e_ie'];
            }

            if(isset($_POST['e_socio'])){
                $e_socio = $_POST['e_socio'];
            }

            if(isset($_POST['e_cargo'])){
                $e_cargo = $_POST['e_cargo'];
            }

            if(isset($_POST['m_prodMaisVend'])){
                $m_prodMaisVend = $_POST['m_prodMaisVend'];
            }

            if(isset($_POST['m_qtdeMensal'])){
                $m_qtdeMensal = $_POST['m_qtdeMensal'];
            }

            if(isset($_POST['m_unMed'])){
                $m_unMed = $_POST['m_unMed'];
            }

            if(isset($_POST['m_margemLucro'])){
                $m_margemLucro = $_POST['m_margemLucro'];
            }

            if(isset($_POST['m_faturamento'])){
                $m_faturamento = $_POST['m_faturamento'];
            }

            if(isset($_POST['m_visitaConcorrencia'])){
                $m_visitaConcorrencia = $_POST['m_visitaConcorrencia'];
            }

            if(isset($_POST['m_sinalizacao'])){
                $m_sinalizacao = $_POST['m_sinalizacao'];
            }

            if(isset($_POST['m_espacaoPromocional'])){
                $m_espacaoPromocional = $_POST['m_espacaoPromocional'];
            }

            if(isset($_POST['v_vlrMedioPorVez'])){
                $v_vlrMedioPorVez = $_POST['v_vlrMedioPorVez'];
            }

            if(isset($_POST['v_vlrMedioMensal'])){
                $v_vlrMedioMensal = $_POST['v_vlrMedioMensal'];
            }

            if(isset($_POST['c_razaoSocialFantasia'])){
                $c_razaoSocialFantasia = $_POST['c_razaoSocialFantasia'];
            }

            if(isset($_POST['c_cidadeUf'])){
                $c_cidadeUf = $_POST['c_cidadeUf'];
            }

            if(isset($_POST['c_produtos'])){
                $c_produtos = $_POST['c_produtos'];
            }

            if(isset($_POST['c_loteMinimo'])){
                $c_loteMinimo = $_POST['c_loteMinimo'];
            }

            if(isset($_POST['c_relacionamento'])){
                $c_relacionamento = $_POST['c_relacionamento'];
            }

            if(isset($_POST['cli_qtdeClienteMensal'])){
                $cli_qtdeClienteMensal = $_POST['cli_qtdeClienteMensal'];
            }

            if(isset($_POST['cli_percClasA'])){
                $cli_percClasA = $_POST['cli_percClasA'];
            }

            if(isset($_POST['cli_percClasB'])){
                $cli_percClasB = $_POST['cli_percClasB'];
            }

            if(isset($_POST['cli_percClasC'])){
                $cli_percClasC = $_POST['cli_percClasC'];
            }

            if(isset($_POST['cli_percClasD'])){
                $cli_percClasD = $_POST['cli_percClasD'];
            }

            if(isset($_POST['cli_percIdadeA'])){
                $cli_percIdadeA = $_POST['cli_percIdadeA'];
            }

            if(isset($_POST['cli_percIdadeB'])){
                $cli_percIdadeB = $_POST['cli_percIdadeB'];
            }

            if(isset($_POST['cli_percIdadeC'])){
                $cli_percIdadeC = $_POST['cli_percIdadeC'];
            }

            if(isset($_POST['cli_percIdadeD'])){
                $cli_percIdadeD = $_POST['cli_percIdadeD'];
            }

            if(isset($_POST['cli_percMasc'])){
                $cli_percMasc = $_POST['cli_percMasc'];
            }

            if(isset($_POST['cli_percFem'])){
                $cli_percFem = $_POST['cli_percFem'];
            }

            if(isset($_POST['cli_pesquisaClientes'])){
                $cli_pesquisaClientes = $_POST['cli_pesquisaClientes'];
            }

            if(isset($_POST['r_qtdeColaboradores'])){
                $r_qtdeColaboradores = $_POST['r_qtdeColaboradores'];
            }

            if(isset($_POST['r_escolaridade'])){
                $r_escolaridade = $_POST['r_escolaridade'];
            }

            if(isset($_POST['r_aparencia'])){
                $r_aparencia = 1;
            }

            if(isset($_POST['r_boaVontade'])){
                $r_boaVontade = 1;
            }

            if(isset($_POST['r_experiencia'])){
                $r_experiencia = 1;
            }

            if(isset($_POST['r_tipoAtividade'])){
                $r_tipoAtividade = $_POST['r_tipoAtividade'];
            }

            if(isset($_POST['r_outrasAtividades'])){
                $r_outrasAtividades = $_POST['r_outrasAtividades'];
            }

            if(isset($_POST['r_quantasDemContrAno'])){
                $r_quantasDemContrAno = $_POST['r_quantasDemContrAno'];
            }

            if(isset($_POST['j_tratativas'])){
                $j_tratativas = $_POST['j_tratativas'];
            }

            if(isset($_POST['j_empresaCobranca'])){
                $j_empresaCobranca = 1;
            }

            if(isset($_POST['j_colaborador'])){
                $j_colaborador = 1;
            }

            if(isset($_POST['j_pessoalmente'])){
                $j_pessoalmente = 1;
            }

            if(isset($_POST['j_outrasCobrancas'])){
                $j_outrasCobrancas = 1;
            }

            if(isset($_POST['j_observacao'])){
                $j_observacao = $_POST['j_observacao'];
            }

            
            $vo = new Vo_Empresa();
            $vo->setNumOrdem($_POST['numOrdem']);
            $vo->setE_razaoSocial($_POST['e_razaoSocial']);
            //$vo->setE_nomeFantasia($_POST['e_nomeFantasia']);
            $vo->setE_nomeFantasia($e_nomeFantasia);
            //$vo->setE_ie($_POST['e_ie']);
            $vo->setE_ie($e_ie);
            $vo->setE_dtFundacao($_POST['e_dtFundacao']);
            $vo->setE_ramoAtividade($_POST['e_ramoAtividade']);
            $vo->setE_endereco($_POST['e_endereco']);
            $vo->setE_bairro($_POST['e_bairro']);
            $vo->setE_cidade($_POST['e_cidade']);
            $vo->setE_uf($_POST['e_uf']);
            $vo->setE_fone($_POST['e_fone']);
            $vo->setE_email($_POST['e_email']);
            //$vo->setE_socio($_POST['e_socio']);
            $vo->setE_socio($e_socio);
            //$vo->setE_cargo($_POST['e_cargo']);
            $vo->setE_cargo($e_cargo);
            //$vo->setM_prodMaisVend($_POST['m_prodMaisVend']);                   
            $vo->setM_prodMaisVend($m_prodMaisVend);                   
            //$vo->setM_qtdeMensal($_POST['m_qtdeMensal']);
            $vo->setM_qtdeMensal($m_qtdeMensal);
           //$vo->setM_unMed($_POST['m_unMed']);
            $vo->setM_unMed($m_unMed);
            //$vo->setM_margemLucro($_POST['m_margemLucro']);
            $vo->setM_margemLucro($m_margemLucro);
            //$vo->setM_faturamento($_POST['m_faturamento']);
            $vo->setM_faturamento($m_faturamento);
            $vo->setM_concorrente($_POST['m_concorrente']);
            //$vo->setM_visitaConcorrencia($_POST['m_visitaConcorrencia']);
            $vo->setM_visitaConcorrencia($m_visitaConcorrencia);
            $vo->setM_atendimento($_POST['m_atendimento']);
            $vo->setM_estacionamento($_POST['m_estacionamento']);
            $vo->setM_preco($_POST['m_preco']);
            $vo->setM_variedade($_POST['m_variedade']);
            $vo->setM_espacoFisico($_POST['m_espacoFisico']);
            $vo->setM_localizacao($_POST['m_localizacao']);
            $vo->setM_qualidade($_POST['m_qualidade']);
            $vo->setM_outros($_POST['m_outros']);
            $vo->setM_descricaoOutrosPontosFortes($_POST['m_descricaoOutrosPontosFortes']);
            $vo->setM_mAtendimento($_POST['m_mAtendimento']);
            $vo->setM_mEstacionamento($_POST['m_mEstacionamento']);
            $vo->setM_mPreco($_POST['m_mPreco']);
            $vo->setM_mVariedade($_POST['m_mVariedade']);
            $vo->setM_mEspacoFisico($_POST['m_mEspacoFisico']);
            $vo->setM_mLocalizacao($_POST['m_mLocalizacao']);
            $vo->setM_mQualidade($_POST['m_mQualidade']);
            $vo->setM_mOutros($_POST['m_mOutros']);
            $vo->setM_mOutrosPontosDescricao($_POST['m_mOutrosPontosDescricao']);
            $vo->setM_promocao($_POST['m_promocao']);
            $vo->setM_radio($_POST['m_radio']);
            $vo->setM_jornal($_POST['m_jornal']);
            $vo->setM_panfleto($_POST['m_panfleto']);
            $vo->setM_outrosMeiosComunicacao($_POST['m_OutrosMeiosComunicacao']);
            $vo->setM_outrosMeiosComunicacaoDesc($_POST['m_OutrosMeiosComunicacaoDesc']);
            //$vo->setM_sinalizacao($_POST['m_sinalizacao']);
            $vo->setM_sinalizacao($m_sinalizacao);
            //$vo->setM_espacoPromocional($_POST['m_espacoPromocional']);
            $vo->setM_espacoPromocional($m_espacoPromocional);
            $vo->setP_formacaoPreco($_POST['p_formacaoPreco']);
            $vo->setP_outraFormacaoPreco($_POST['p_outraFormacaoPreco']);
            $vo->setP_precoConcorrencia($_POST['p_precoConcorrencia']);
            $vo->setV_mesAno($_POST['v_mesAno']);
            $vo->setV_fatReais($_POST['v_fatReais']);
            $vo->setV_periodoInicial($_POST['v_periodoInicial']);
            $vo->setV_periodoFinal($_POST['v_periodoFinal']);
            $vo->setV_seg($_POST['v_seg']);
            $vo->setV_ter($_POST['v_ter']);
            $vo->setV_qua($_POST['v_qua']);
            $vo->setV_qui($_POST['v_qui']);
            $vo->setV_sex($_POST['v_sex']);
            $vo->setV_sab($_POST['v_sab']);
            $vo->setV_dom($_POST['v_dom']);
            $vo->setV_manha($_POST['v_manha']);
            $vo->setV_tarde($_POST['v_tarde']);
            $vo->setV_noite($_POST['v_noite']);
            $vo->setV_cheque($_POST['v_cheque']);
            $vo->setV_ticket($_POST['v_ticket']);
            $vo->setV_cartao($_POST['v_cartao']);
            $vo->setV_avista($_POST['v_avista']);
            $vo->setV_caderneta($_POST['v_caderneta']);
            $vo->setV_outraFormaPagto($_POST['v_outraFormaPagto']);
            $vo->setV_outraFormaPagtoDesc($_POST['v_outraFormaPagtoDesc']);
            //$vo->setV_vlrMedioPorVez($_POST['v_vlrMedioPorVez']);
            $vo->setV_vlrMedioPorVez($v_vlrMedioPorVez);
            //$vo->setV_vlrMedioMensal($_POST['v_vlrMedioMensal']);
            $vo->setV_vlrMedioMensal($v_vlrMedioMensal);
            //$vo->setC_razaoSocialFantasia($_POST['c_razaoSocialFantasia']);
            $vo->setC_razaoSocialFantasia($c_razaoSocialFantasia);
            //$vo->setC_cidadeUf($_POST['c_cidadeUf']);
            $vo->setC_cidadeUf($c_cidadeUf);
            //$vo->setC_produtos($_POST['c_produtos']);
            $vo->setC_produtos($c_produtos);
            //$vo->setC_loteMinimo($_POST['c_loteMinimo']);
            $vo->setC_loteMinimo($c_loteMinimo);
            //$vo->setC_relacionamento($_POST['c_relacionamento']);
            $vo->setC_relacionamento($c_relacionamento);
            $vo->seC_tmesAno($_POST['c_mesAno']);
            $vo->setC_comprasReais($_POST['c_comprasReais']);
            //$vo->setCli_qtdeClienteMensal($_POST['cli_qtdeClienteMensal']);
            $vo->setCli_qtdeClienteMensal($cli_qtdeClienteMensal);
            //$vo->setCli_percClasA($_POST['cli_percClasA']);
            $vo->setCli_percClasA($cli_percClasA);
            //$vo->setCli_percClasB($_POST['cli_percClasB']);
            $vo->setCli_percClasB($cli_percClasB);
            //$vo->setCli_percClasC($_POST['cli_percClasC']);
            $vo->setCli_percClasC($cli_percClasC);
            //$vo->setCli_percClasD($_POST['cli_percClasD']);
            $vo->setCli_percClasD($cli_percClasD);
            //$vo->setCli_percIdadeA($_POST['cli_percIdadeA']);
            $vo->setCli_percIdadeA($cli_percIdadeA);
            //$vo->setCli_percIdadeB($_POST['cli_percIdadeB']);
            $vo->setCli_percIdadeB($cli_percIdadeB);
            //$vo->setCli_percIdadeC($_POST['cli_percIdadeC']);
            $vo->setCli_percIdadeC($cli_percIdadeC);
            //$vo->setCli_percIdadeD($_POST['cli_percIdadeD']);
            $vo->setCli_percIdadeD($cli_percIdadeD);
            //$vo->setCli_percMasc($_POST['cli_percMasc']);
            $vo->setCli_percMasc($cli_percMasc);
            //$vo->setCli_percFem($_POST['cli_percFem']);
            $vo->setCli_percFem($cli_percFem);
            $vo->setCli_vendeEmpresas($_POST['cli_vendeEmpresas']);
            $vo->setCli_percTotalFat($_POST['cli_percTotalFat']);
            //$vo->setCli_pesquisaClientes($_POST['cli_pesquisaClientes']);
            $vo->setCli_pesquisaClientes($cli_pesquisaClientes);
            $vo->setCli_frequencia($_POST['cli_frequencia']);
            //$vo->setR_qtdeColaboradores($_POST['r_qtdeColaboradores']);
            $vo->setR_qtdeColaboradores($r_qtdeColaboradores);
            $vo->setR_treinamento($_POST['r_treinamento']);
            $vo->setR_area($_POST['r_area']);
            //$vo->setR_escolaridade($_POST['r_escolaridade']);
            $vo->setR_escolaridade($r_escolaridade);
            $vo->setR_indicacao($_POST['r_ndicacao']);
            $vo->setR_entrevista($_POST['r_entrevista']);
            $vo->setR_analCurEnt($_POST['r_analCurEnt']);
            //$vo->setR_aparencia($_POST['r_aparencia']);
            $vo->setR_aparencia($r_aparencia);
            //$vo->setR_experiencia($_POST['r_experiencia']);
            $vo->setR_experiencia($r_experiencia);
            //$vo->setR_boaVontade($_POST['r_boaVontade']);
            $vo->setR_boaVontade($r_boaVontade);
            //$vo->setR_tipoAtividade($_POST['r_tipoAtividade']);
            $vo->setR_tipoAtividade($r_tipoAtividade);
            //$vo->setR_outrasAtividades($_POST['r_outrasAtividades']);
            $vo->setR_outrasAtividades($r_outrasAtividades);
            //$vo->setR_quantasDemContrAno($_POST['r_quantasDemContrAno']);
            $vo->setR_quantasDemContrAno($r_quantasDemContrAno);
            $vo->setA_fluxoCaixa($_POST['a_fluxoCaixa']);
            $vo->setA_controleEstoque($_POST['a_controleEstoque']);
            $vo->setA_contasPagar($_POST['a_contasPagar']);
            $vo->setA_contasReceber($_POST['a_contasReceber']);
            $vo->setA_admCompras($_POST['a_admCompras']);
            $vo->setA_admVendas($_POST['a_admVendas']);
            $vo->setA_fat($_POST['a_fat']);
            $vo->setA_descOutrosTipos($_POST['a_descOutrosTipos']);
            $vo->setA_outrosTiposSelecionado($_POST['a_outrosTiposSelecionado']);
            $vo->setA_planejamento($_POST['a_planejamento']);
            $vo->setA_area($_POST['a_area']);
            $vo->setA_trabalhaRecursoTerc($_POST['a_trabalhaRecursoTerc']);
            $vo->setA_chequeEspecial($_POST['a_chequeEspecial']);
            $vo->setA_emprestimo($_POST['a_emprestimo']);
            $vo->setA_factoring($_POST['a_factoring']);
            $vo->setA_outros($_POST['a_outros']);
            $vo->setA_descOutrosRecursos($_POST['a_descOutrosRecursos']);
            $vo->setA_frete($_POST['a_frete']);
            $vo->setA_financeiros($_POST['a_financeiros']);
            $vo->setA_aluguel($_POST['a_aluguel']);
            $vo->setA_energiaEletrica($_POST['a_energiaEletrica']);
            $vo->setA_manutGeral($_POST['a_manutGeral']);
            $vo->setA_folhaPagto($_POST['a_folhaPagto']);
            $vo->setA_impostos($_POST['a_impostos']);
            $vo->setA_outrosGastos($_POST['a_outrosGastos']);
            $vo->setA_descOutrosGastos($_POST['a_descOutrosGastos']);
            $vo->setJ_impostos($_POST['j_impostos']);
            $vo->setJ_autuacaoFiscal($_POST['j_autuacaoFiscal']);
            $vo->setJ_acaoJudicial($_POST['j_acaoJudicial']);
            //$vo->setJ_tratativas($_POST['j_tratativas']);
            $vo->setJ_tratativas($j_tratativas);
            //$vo->setJ_empresaCobranca($_POST['j_empresaCobranca']);
            $vo->setJ_empresaCobranca($j_empresaCobranca);
            //$vo->setJ_colaborador($_POST['j_colaborador']);
            $vo->setJ_colaborador($j_colaborador);
            //$vo->setJ_pessoalmente($_POST['j_pessoalmente']);
            $vo->setJ_pessoalmente($j_pessoalmente);
            //$vo->setJ_outrasCobrancas($_POST['j_outrasCobrancas']);
            $vo->setJ_outrasCobrancas($j_outrasCobrancas);
            $vo->setJ_assessoriaJuridica($_POST['j_assessoriaJuridica']);
            //$vo->setJ_observacao($_POST['j_observacao']);
            $vo->setJ_observacao($j_observacao);

            
            $model = new Model_Empresa();
            try {
                $pk = $model->cadastrar($vo);
            }
            catch (Exception $exc) {
                $view->add('erro', $exc->getMessage());
            }
        }
        
        $view->desenhar('empresa/cadastrar');
    }

    public function listar() {
        $dao = new Dao_Empresa();
        $empresas = $dao->request();
        
        $view = new View();
        
        $view->add('empresas', $empresas);
        
        $view->desenhar('empresa/listar');
    }

}