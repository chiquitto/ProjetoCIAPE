<?php


class Controller_Empresa extends Controller {



    public function apagar() {

        $dao = new Dao_Empresa();
        $id = $_GET['id'];
        $empresas = $dao->delete("numOrdem = $id");
        $empresas = $dao->request();
    }

    public function cadastrar() {
        
        $view = new View();
        
        if ($_POST) {
            $vo = new Vo_Empresa();

            $vo->setNumOrdem($_POST['numOrdem']);
            $vo->setE_razaoSocial($_POST['e_razaoSocial']);
            $vo->setE_nomeFantasia($_POST['e_nomeFantasia']);
            $vo->setE_cnpj($_POST['e_cnpj']);
            $vo->setE_ie($_POST['e_ie']);
            $vo->setE_dtFundacao($_POST['e_dtFundacao']);
            $vo->setE_ramoAtividade($_POST['e_ramoAtividade']);
            $vo->setE_endereco($_POST['e_endereco']);
            $vo->setE_bairro($_POST['e_bairro']);
            $vo->setE_cep($_POST['e_cep']);
            $vo->setE_cidade($_POST['e_cidade']);
            $vo->setE_uf($_POST['e_uf']);
            $vo->setE_fone($_POST['e_fone']);
            $vo->setE_email($_POST['e_email']);
            $vo->setE_socioA($_POST['e_socioA']);
            $vo->setE_socioB($_POST['e_socioB']);
            $vo->setE_socioC($_POST['e_socioC']);
            $vo->setE_socioD($_POST['e_socioD']);
            $vo->setE_socioE($_POST['e_socioE']);
            $vo->setE_cargoA($_POST['e_cargoA']);
            $vo->setE_cargoB($_POST['e_cargoB']);
            $vo->setE_cargoC($_POST['e_cargoC']);
            $vo->setE_cargoD($_POST['e_cargoD']);
            $vo->setE_cargoE($_POST['e_cargoE']);
            $vo->setM_prodMaisVendA($_POST['m_prodMaisVendA']);  
            $vo->setM_prodMaisVendB($_POST['m_prodMaisVendB']); 
            $vo->setM_prodMaisVendC($_POST['m_prodMaisVendC']); 
            $vo->setM_prodMaisVendD($_POST['m_prodMaisVendD']); 
            $vo->setM_prodMaisVendE($_POST['m_prodMaisVendE']);                  
            $vo->setM_qtdeMensalA($_POST['m_qtdeMensalA']);
            $vo->setM_qtdeMensalB($_POST['m_qtdeMensalB']);
            $vo->setM_qtdeMensalC($_POST['m_qtdeMensalC']);
            $vo->setM_qtdeMensalD($_POST['m_qtdeMensalD']);
            $vo->setM_qtdeMensalE($_POST['m_qtdeMensalE']);
            $vo->setM_unMedA($_POST['m_unMedA']);
            $vo->setM_unMedB($_POST['m_unMedB']);
            $vo->setM_unMedC($_POST['m_unMedC']);
            $vo->setM_unMedD($_POST['m_unMedD']);
            $vo->setM_unMedE($_POST['m_unMedE']);
            $vo->setM_margemLucroA($_POST['m_margemLucroA']);
            $vo->setM_margemLucroB($_POST['m_margemLucroB']);
            $vo->setM_margemLucroC($_POST['m_margemLucroC']);
            $vo->setM_margemLucroD($_POST['m_margemLucroD']);
            $vo->setM_margemLucroE($_POST['m_margemLucroE']);
            $vo->setM_faturamentoA($_POST['m_faturamentoA']);
            $vo->setM_faturamentoB($_POST['m_faturamentoB']);
            $vo->setM_faturamentoC($_POST['m_faturamentoC']);
            $vo->setM_faturamentoD($_POST['m_faturamentoD']);
            $vo->setM_faturamentoE($_POST['m_faturamentoE']);
            $vo->setM_concorrenteA($_POST['m_concorrenteA']);
            $vo->setM_concorrenteB($_POST['m_concorrenteB']);
            $vo->setM_concorrenteC($_POST['m_concorrenteC']);
            $vo->setM_visitaConcorrencia(isset($_POST['m_visitaConcorrencia'])?$_POST['m_visitaConcorrencia']:'');
            $vo->setM_atendimento(isset($_POST['m_atendimento'])?$_POST['m_atendimento']:'');
            $vo->setM_estacionamento(isset($_POST['m_estacionamento'])?'1':'0');//padrao para radio button 
            $vo->setM_preco(isset($_POST['m_preco'])?$_POST['m_preco']:'');
            $vo->setM_variedade(isset($_POST['m_variedade'])?$_POST['m_variedade']:'');
            $vo->setM_espacoFisico(isset($_POST['m_espacoFisico'])?$_POST['m_espacoFisico']:'');
            $vo->setM_localizacao(isset($_POST['m_localizacao'])?$_POST['m_localizacao']:'');
            $vo->setM_qualidade(isset($_POST['m_qualidade'])?$_POST['m_qualidade']:'');
            $vo->setM_outros(isset($_POST['m_outros'])?$_POST['m_outros']:'');
            $vo->setM_descricaoOutrosPontosFortes($_POST['m_descricaoOutrosPontosFortes']);
            $vo->setM_mAtendimento(isset($_POST['m_mAtendimento'])?$_POST['m_mAtendimento']:'');
            $vo->setM_mEstacionamento(isset($_POST['m_mEstacionamento'])?$_POST['m_mEstacionamento']:'');
            $vo->setM_mPreco(isset($_POST['m_mPreco'])?$_POST['m_mPreco']:'');
            $vo->setM_mVariedade(isset($_POST['m_mVariedade'])?$_POST['m_mVariedade']:'');
            $vo->setM_mEspacoFisico(isset($_POST['m_mEspacoFisico'])?$_POST['m_mEspacoFisico']:'');
            $vo->setM_mLocalizacao(isset($_POST['m_mLocalizacao'])?$_POST['m_mLocalizacao']:'');
            $vo->setM_mQualidade(isset($_POST['m_mQualidade'])?$_POST['m_mQualidade']:'');
            $vo->setM_mOutros(isset($_POST['m_mOutros'])?$_POST['m_mOutros']:'');
            $vo->setM_mOutrosPontosDescricao($_POST['m_mOutrosPontosDescricao']);
            $vo->setM_promocao(isset($_POST['m_promocao'])?$_POST['m_promocao']:'');
            $vo->setM_radio(isset($_POST['m_radio'])?$_POST['m_radio']:'');
            $vo->setM_jornal(isset($_POST['m_jornal'])?$_POST['m_jornal']:'');
            $vo->setM_panfleto(isset($_POST['m_panfleto'])?$_POST['m_panfleto']:'');
            $vo->setM_OutrosMeiosComunicacao(isset($_POST['m_OutrosMeiosComunicacao'])?$_POST['m_OutrosMeiosComunicacao']:'');
            $vo->setM_OutrosMeiosComunicacaoDesc($_POST['m_OutrosMeiosComunicacaoDesc']);
            $vo->setM_sinalizacao(isset($_POST['m_sinalizacao'])?1:0);//radio button
            $vo->setM_espacaoPromocional(isset($_POST['m_espacaoPromocional'])?1:0);
            $vo->setP_formacaoPreco(isset($_POST['p_formacaoPreco'])?1:0);
            //$vo->setP_outraFormacaoPreco($_POST['p_outraFormacaoPreco']);
            $vo->setP_precoConcorrencia(isset($_POST['p_precoConcorrencia'])?1:0);
            $vo->setV_mesAnoA($_POST['v_mesAnoA']);
            $vo->setV_mesAnoB($_POST['v_mesAnoB']);
            $vo->setV_mesAnoC($_POST['v_mesAnoC']);
            $vo->setV_mesAnoD($_POST['v_mesAnoD']);
            $vo->setV_mesAnoE($_POST['v_mesAnoE']);
            $vo->setV_mesAnoF($_POST['v_mesAnoF']);
            $vo->setV_fatReaisA($_POST['v_fatReaisA']);
            $vo->setV_fatReaisB($_POST['v_fatReaisB']);
            $vo->setV_fatReaisC($_POST['v_fatReaisC']);
            $vo->setV_fatReaisD($_POST['v_fatReaisD']);
            $vo->setV_fatReaisE($_POST['v_fatReaisE']);
            $vo->setV_fatReaisF($_POST['v_fatReaisF']);
            $vo->setV_periodoInicial($_POST['v_periodoInicial']);
            $vo->setV_periodoFinal($_POST['v_periodoFinal']);
            $vo->setV_seg(isset($_POST['v_seg'])?$_POST['v_seg']:'');
            $vo->setV_ter(isset($_POST['v_ter'])?$_POST['v_ter']:'');
            $vo->setV_qua(isset($_POST['v_qua'])?$_POST['v_qua']:'');
            $vo->setV_qui(isset($_POST['v_qui'])?$_POST['v_qui']:'');
            $vo->setV_sex(isset($_POST['v_sex'])?$_POST['v_sex']:'');
            $vo->setV_sab(isset($_POST['v_sab'])?$_POST['v_sab']:'');
            $vo->setV_dom(isset($_POST['v_dom'])?$_POST['v_dom']:'');
            $vo->setV_manha(isset($_POST['v_manha'])?$_POST['v_manha']:'');
            $vo->setV_tarde(isset($_POST['v_tarde'])?$_POST['v_tarde']:'');
            $vo->setV_noite(isset($_POST['v_noite'])?$_POST['v_noite']:'');
            $vo->setV_cheque(isset($_POST['v_cheque'])?$_POST['v_cheque']:'');
            $vo->setV_ticket(isset($_POST['v_ticket'])?$_POST['v_ticket']:'');
            $vo->setV_cartao(isset($_POST['v_cartao'])?$_POST['v_cartao']:'');
            $vo->setV_avista(isset($_POST['v_avista'])?$_POST['v_avista']:'');
            $vo->setV_caderneta(isset($_POST['v_caderneta'])?$_POST['v_caderneta']:'');
            $vo->setV_outraFormaPagto(isset($_POST['v_outraFormaPagto'])?$_POST['v_outraFormaPagto']:'');
            $vo->setV_vlrMedioPorVez($_POST['v_vlrMedioPorVez']);
            $vo->setV_vlrMedioMensal($_POST['v_vlrMedioMensal']);
            $vo->setC_razaoSocialFantasiaA($_POST['c_razaoSocialFantasiaA']);
            $vo->setC_razaoSocialFantasiaB($_POST['c_razaoSocialFantasiaB']);
            $vo->setC_razaoSocialFantasiaC($_POST['c_razaoSocialFantasiaC']);
            $vo->setC_razaoSocialFantasiaD($_POST['c_razaoSocialFantasiaD']);
            $vo->setC_razaoSocialFantasiaE($_POST['c_razaoSocialFantasiaE']);
            $vo->setC_cidadeUfA($_POST['c_cidadeUfA']);
            $vo->setC_cidadeUfB($_POST['c_cidadeUfB']);
            $vo->setC_cidadeUfC($_POST['c_cidadeUfC']);
            $vo->setC_cidadeUfD($_POST['c_cidadeUfD']);
            $vo->setC_cidadeUfE($_POST['c_cidadeUfE']);
            $vo->setC_produtosA($_POST['c_produtosA']);
            $vo->setC_produtosB($_POST['c_produtosB']);
            $vo->setC_produtosC($_POST['c_produtosC']);
            $vo->setC_produtosD($_POST['c_produtosD']);
            $vo->setC_produtosE($_POST['c_produtosE']);
            $vo->setC_loteMinimoA($_POST['c_loteMinimoA']);
            $vo->setC_loteMinimoB($_POST['c_loteMinimoB']);
            $vo->setC_loteMinimoC($_POST['c_loteMinimoC']);
            $vo->setC_loteMinimoD($_POST['c_loteMinimoD']);
            $vo->setC_loteMinimoE($_POST['c_loteMinimoE']);
            $vo->setC_relacionamentoA($_POST['c_relacionamentoA']);
            $vo->setC_relacionamentoB($_POST['c_relacionamentoB']);
            $vo->setC_relacionamentoC($_POST['c_relacionamentoC']);
            $vo->setC_relacionamentoD($_POST['c_relacionamentoD']);
            $vo->setC_relacionamentoE($_POST['c_relacionamentoE']);
            $vo->setc_mesAnoA($_POST['c_mesAnoA']);
            $vo->setc_mesAnoB($_POST['c_mesAnoB']);
            $vo->setc_mesAnoC($_POST['c_mesAnoC']);
            $vo->setc_mesAnoD($_POST['c_mesAnoD']);
            $vo->setc_mesAnoE($_POST['c_mesAnoE']);
            $vo->setc_mesAnoF($_POST['c_mesAnoF']);
            $vo->setC_comprasReaisA($_POST['c_comprasReaisA']);
            $vo->setC_comprasReaisB($_POST['c_comprasReaisB']);
            $vo->setC_comprasReaisC($_POST['c_comprasReaisC']);
            $vo->setC_comprasReaisD($_POST['c_comprasReaisD']);
            $vo->setC_comprasReaisE($_POST['c_comprasReaisE']);
            $vo->setC_comprasReaisF($_POST['c_comprasReaisF']);
            $vo->setCli_qtdeClienteMensal($_POST['cli_qtdeClienteMensal']);
            $vo->setCli_percClasA($_POST['cli_percClasA']);
            $vo->setCli_percClasB($_POST['cli_percClasB']);
            $vo->setCli_percClasC($_POST['cli_percClasC']);
            $vo->setCli_percClasD($_POST['cli_percClasD']);
            $vo->setCli_percIdadeA($_POST['cli_percIdadeA']);
            $vo->setCli_percIdadeB($_POST['cli_percIdadeB']);
            $vo->setCli_percIdadeC($_POST['cli_percIdadeC']);
            $vo->setCli_percIdadeD($_POST['cli_percIdadeD']);
            $vo->setCli_percMasc($_POST['cli_percMasc']);
            $vo->setCli_percFem($_POST['cli_percFem']);
            $vo->setCli_vendeEmpresas(isset($_POST['cli_vendeEmpresas'])?1:0);
            $vo->setCli_percTotalFat($_POST['cli_percTotalFat']);
            $vo->setCli_pesquisaClientes(isset($_POST['cli_pesquisaClientes'])?1:0);
            $vo->setCli_frequencia($_POST['cli_frequencia']);
            $vo->setR_qtdeColaboradores($_POST['r_qtdeColaboradores']);
            $vo->setR_treinamento(isset($_POST['r_treinamento'])?1:0);
            $vo->setR_area($_POST['r_area']);
            $vo->setR_escolaridade(isset($_POST['r_escolaridade'])?1:0);
            $vo->setR_indicacao(isset($_POST['r_indicacao'])?$_POST['r_indicacao']:'');
            $vo->setR_entrevista(isset($_POST['r_entrevista'])?$_POST['r_entrevista']:'');
            $vo->setR_analCurEnt(isset($_POST['r_analCurEnt'])?$_POST['r_analCurEnt']:'');
            $vo->setR_aparencia(isset($_POST['r_aparencia'])?$_POST['r_aparencia']:'');
            $vo->setR_experiencia(isset($_POST['r_experiencia'])?$_POST['r_experiencia']:'');
            $vo->setR_boaVontade(isset($_POST['r_boaVontade'])?$_POST['r_boaVontade']:'');
            $vo->setR_tipoAtividade(isset($_POST['r_tipoAtividade'])?1:0);
            $vo->setR_outrasAtividades($_POST['r_outrasAtividades']);
            $vo->setR_quantasDemContrAno($_POST['r_quantasDemContrAno']);
            $vo->setA_fluxoCaixaManual($_POST['a_fluxoCaixaManual']);
            $vo->setA_fluxoCaixaInfo($_POST['a_fluxoCaixaInfo']);
            $vo->setA_controleEstoqueManual($_POST['a_controleEstoqueManual']);
            $vo->setA_controleEstoqueInfo($_POST['a_controleEstoqueInfo']);
            $vo->setA_contasPagarManual($_POST['a_contasPagarManual']);
            $vo->setA_contasPagarInfo($_POST['a_contasPagarInfo']);
            $vo->setA_contasReceberManual($_POST['a_contasReceberManual']);
            $vo->setA_contasReceberInfo($_POST['a_contasReceberInfo']);
            $vo->setA_admComprasManual($_POST['a_admComprasManual']);
            $vo->setA_admComprasInfo($_POST['a_admComprasInfo']);
            $vo->setA_admVendasManual($_POST['a_admVendasManual']);
            $vo->setA_admVendasInfo($_POST['a_admVendasInfo']);
            $vo->setA_fatManual($_POST['a_fatManual']);
            $vo->setA_fatInfo($_POST['a_fatInfo']);
            $vo->setA_descOutrosTipos($_POST['a_descOutrosTipos']);
            $vo->setA_outrosTiposSelecionadoManual($_POST['a_outrosTiposSelecionadoManual']);
            $vo->setA_outrosTiposSelecionadoInfo($_POST['a_outrosTiposSelecionadoInfo']);
            $vo->setA_planejamento(isset($_POST['a_planejamento'])?1:0);
            $vo->setA_area($_POST['a_area']);
            $vo->setA_trabalhaRecursoTerc(isset($_POST['a_trabalhaRecursoTerc'])?1:0);
            $vo->setA_chequeEspecial(isset($_POST['a_chequeEspecial'])?$_POST['a_chequeEspecial']:'');
            $vo->setA_emprestimo(isset($_POST['a_emprestimo'])?$_POST['a_emprestimo']:'');
            $vo->setA_factoring(isset($_POST['a_factoring'])?$_POST['a_factoring']:'');
            $vo->setA_outros(isset($_POST['a_outros'])?$_POST['a_outros']:'');
            $vo->setA_descOutrosRecursos($_POST['a_descOutrosRecursos']);
            $vo->setA_frete(isset($_POST['a_frete'])?$_POST['a_frete']:'');
            $vo->setA_financeiros(isset($_POST['a_financeiros'])?$_POST['a_financeiros']:'');
            $vo->setA_aluguel(isset($_POST['a_aluguel'])?$_POST['a_aluguel']:'');
            $vo->setA_energiaEletrica(isset($_POST['a_energiaEletrica'])?$_POST['a_energiaEletrica']:'');
            $vo->setA_manutGeral(isset($_POST['a_manutGeral'])?$_POST['a_manutGeral']:'');
            $vo->setA_folhaPagto(isset($_POST['a_folhaPagto'])?$_POST['a_folhaPagto']:'');
            $vo->setA_impostos(isset($_POST['a_impostos'])?$_POST['a_impostos']:'');
            $vo->setA_outrosGastos(isset($_POST['a_outrosGastos'])?$_POST['a_outrosGastos']:'');
            $vo->setA_descOutrosGastos($_POST['a_descOutrosGastos']);
            $vo->setJ_impostos(isset($_POST['j_impostos'])?1:0);
            $vo->setJ_autuacaoFiscal(isset($_POST['j_autuacaoFiscal'])?1:0);
            $vo->setJ_acaoJudicial(isset($_POST['j_acaoJudicial'])?1:0);
            $vo->setJ_tratativas(isset($_POST['j_tratativas'])?1:0);
            $vo->setJ_empresaCobranca(isset($_POST['j_empresaCobranca'])?1:0);
            $vo->setJ_colaborador(isset($_POST['j_colaborador'])?1:0);
            $vo->setJ_pessoalmente(isset($_POST['j_pessoalmente'])?1:0);
            $vo->setJ_outrasCobrancas(isset($_POST['j_outrasCobrancas'])?1:0);
            $vo->setJ_assessoriaJuridica(isset($_POST['j_assessoriaJuridica'])?1:0);
            $vo->setJ_observacao(isset($_POST['j_observacao'])?1:0);

            
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
        $empresa = $dao->request();
        
        $view = new View();
        
        $view->add('empresa', $empresa);
        
        $view->desenhar('empresa/listar');
    }

    public function visulizar() {
        $dao = new Dao_Empresa();
        $id = $_GET['id'];
        $empresas = $dao->request("numOrdem = $id");
        
        $empresa = $empresas[0];
        
        $view = new View();
        $view->add('empresa', $empresa);
        $view->desenhar('empresa/visualizar2');
    }

}