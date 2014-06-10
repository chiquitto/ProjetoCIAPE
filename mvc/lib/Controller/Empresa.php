<?php

class Controller_Empresa extends Controller {

    public function apagar() {
        
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
            $vo->setE_socio($_POST['e_socio']);
            $vo->setE_cargo($_POST['e_cargo']);
            $vo->setM_prodMaisVend($_POST['m_prodMaisVend']);                   
            $vo->setM_qtdeMensal($_POST['m_qtdeMensal']);
            $vo->setM_unMed($_POST['m_unMed']);
            $vo->setM_margemLucro($_POST['m_margemLucro']);
            $vo->setM_faturamento($_POST['m_faturamento']);
            $vo->setM_concorrente($_POST['m_concorrente']);
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
            $vo->setP_outraFormacaoPreco($_POST['p_outraFormacaoPreco']);
            $vo->setP_precoConcorrencia(isset($_POST['p_precoConcorrencia'])?1:0);
            $vo->setV_mesAno($_POST['v_mesAno']);
            $vo->setV_fatReais($_POST['v_fatReais']);
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
            $vo->setV_outraFormaPagto($_POST['v_outraFormaPagto']);
            $vo->setV_vlrMedioPorVez($_POST['v_vlrMedioPorVez']);
            $vo->setV_vlrMedioMensal($_POST['v_vlrMedioMensal']);
            $vo->setC_razaoSocialFantasia($_POST['c_razaoSocialFantasia']);
            $vo->setC_cidadeUf($_POST['c_cidadeUf']);
            $vo->setC_produtos($_POST['c_produtos']);
            $vo->setC_loteMinimo($_POST['c_loteMinimo']);
            $vo->setC_relacionamento($_POST['c_relacionamento']);
            $vo->setc_mesAno($_POST['c_mesAno']);
            $vo->setC_comprasReais($_POST['c_comprasReais']);
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
            $vo->setA_fluxoCaixa($_POST['a_fluxoCaixa']);
            $vo->setA_controleEstoque($_POST['a_controleEstoque']);
            $vo->setA_contasPagar($_POST['a_contasPagar']);
            $vo->setA_contasReceber($_POST['a_contasReceber']);
            $vo->setA_admCompras($_POST['a_admCompras']);
            $vo->setA_admVendas($_POST['a_admVendas']);
            $vo->setA_fat($_POST['a_fat']);
            $vo->setA_descOutrosTipos($_POST['a_descOutrosTipos']);
            $vo->setA_outrosTiposSelecionado($_POST['a_outrosTiposSelecionado']);
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

}