<script type="text/javascript" src="telas\empresa\validacao.js"></script>
<?php

//Questão 1:
$e_razaoSocial = '';
$e_nomeFantasia = '';
$e_cnpj = '' ;
$e_ie = '';
$e_dtFundacao = '';
$e_ramoAtividade = '';
$e_endereco = '';
$e_bairro = '';
$e_cep = '';
$e_cidade = '';
$e_uf = '';
$e_fone = '';
$e_email = '';
$e_socioA = '';
$e_socioB = '';
$e_socioC = '';
$e_socioD = '';
$e_socioE = '';
$e_cargoA = '';
$e_cargoB = '';
$e_cargoC = '';
$e_cargoD = '';
$e_cargoE = '';

//Questão 2:
$m_prodMaisVendA = '';
$m_prodMaisVendB = '';
$m_prodMaisVendC = '';
$m_prodMaisVendD = '';
$m_prodMaisVendE = '';
$m_qtdeMensalA = '';
$m_qtdeMensalB = '';
$m_qtdeMensalC = '';
$m_qtdeMensalD = '';
$m_qtdeMensalE = '';
$m_unMedA = '';
$m_unMedB = '';
$m_unMedC = '';
$m_unMedD = '';
$m_unMedE = '';
$m_margemLucroA = '';
$m_margemLucroB = '';
$m_margemLucroC = '';
$m_margemLucroD = '';
$m_margemLucroE = '';
$m_faturamentoA = '';
$m_faturamentoB = '';
$m_faturamentoC = '';
$m_faturamentoD = '';
$m_faturamentoE = '';
$m_concorrenteA = '';
$m_concorrenteB = '';
$m_concorrenteC = '';
$m_visitaConcorrencia = '';
$m_atendimento = 0;
$m_estacionamento = 0;
$m_preco = 0;
$m_variedade = 0;
$m_espacoFisico = 0;
$m_localizacao = 0;
$m_qualidade = 0;
$m_outros = 0;
$m_descricaoOutrosPontosFortes = '';
$m_mAtendimento = 0;
$m_mEstacionamento = 0;
$m_mPreco = 0;
$m_mVariedade = 0;
$m_mEspacoFisico = 0;
$m_mLocalizacao = 0;
$m_mQualidade = 0;
$m_mOutros = 0;
$m_mOutrosPontosDescricao = '';
$m_promocao = '';
$m_radio = 0;
$m_jornal = 0;
$m_panfleto = 0;
$m_OutrosMeiosComunicacao = 0;
$m_OutrosMeiosComunicacaoDesc = '';
$m_sinalizacao = '';
$m_espacaoPromocional = '';

//Questão 3:
$p_formacaoPreco = '';
$p_outraFormacaoPreco = '';
$p_precoConcorrencia = '';

//Questão 4:
$v_mesAnoA = '';
$v_mesAnoB = '';
$v_mesAnoC = '';
$v_mesAnoD = '';
$v_mesAnoE = '';
$v_mesAnoF = '';
$v_fatReaisA = '';
$v_fatReaisB = '';
$v_fatReaisC = '';
$v_fatReaisD = '';
$v_fatReaisE = '';
$v_fatReaisF = '';
$v_periodoInicial = '';
$v_periodoFinal = '';
$v_seg = 0;
$v_ter = 0;
$v_qua = 0;
$v_qui = 0;
$v_sex = 0;
$v_sab = 0;
$v_dom = 0;
$v_manha = 0;
$v_tarde = 0;
$v_noite = 0;
$v_cheque = 0;
$v_ticket = 0;
$v_cartao = 0;
$v_avista = 0;
$v_caderneta = 0;
$v_outraFormaPagto = 0;
$v_outraFormaPagtoDesc = '';
$v_vlrMedioPorVez = '';
$v_vlrMedioMensal = '';

//Questão 5:
$c_razaoSocialFantasiaA = '';
$c_razaoSocialFantasiaB = '';
$c_razaoSocialFantasiaC = '';
$c_razaoSocialFantasiaD = '';
$c_razaoSocialFantasiaE = '';
$c_cidadeUfA = '';
$c_cidadeUfB = '';
$c_cidadeUfC = '';
$c_cidadeUfD = '';
$c_cidadeUfE = '';
$c_produtosA = '';
$c_produtosB = '';
$c_produtosC = '';
$c_produtosD = '';
$c_produtosE = '';
$c_loteMinimoA = '';
$c_loteMinimoB = '';
$c_loteMinimoC = '';
$c_loteMinimoD = '';
$c_loteMinimoE = '';
$c_relacionamentoA = '';
$c_relacionamentoB = '';
$c_relacionamentoC = '';
$c_relacionamentoD = '';
$c_relacionamentoE = '';
$c_mesAnoA = '';
$c_mesAnoB = '';
$c_mesAnoC = '';
$c_mesAnoD = '';
$c_mesAnoE = '';
$c_mesAnoF = '';
$c_comprasReaisA = '';
$c_comprasReaisB = '';
$c_comprasReaisC = '';
$c_comprasReaisD = '';
$c_comprasReaisE = '';
$c_comprasReaisF = '';

//Questão 6:
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
$cli_vendeEmpresas = '';
$cli_percTotalFat = '';
$cli_pesquisaClientes = '';
$cli_frequencia = '';

//Questão 7:
$r_qtdeColaboradores = '';
$r_treinamento = '';
$r_area = '';
$r_escolaridade = '';
$r_indicacao = 0;
$r_entrevista = 0;
$r_analCurEnt = 0;
$r_aparencia = '';
$r_experiencia = '';
$r_boaVontade = '';
$r_tipoAtividade = '';
$r_outrasAtividades = '';
$r_quantasDemContrAno = '';

//Questão 8:
$a_fluxoCaixaManual = '';
$a_fluxoCaixaInfo = '';
$a_controleEstoqueManual = '';
$a_controleEstoqueInfo = '';
$a_contasPagarManual = '';
$a_contasPagarInfo = '';
$a_contasReceberManual = '';
$a_contasReceberInfo = '';
$a_admComprasManual = '';
$a_admComprasInfo = '';
$a_admVendasManual = '';
$a_admVendasInfo = '';
$a_fatManual = '';
$a_fatInfo = '';
$a_descOutrosTipos = '';
$a_outrosTiposSelecionadoManual = '';
$a_outrosTiposSelecionadoInfo = '';
$a_planejamento = '';
$a_area = '';
$a_trabalhaRecursoTerc = '';
$a_chequeEspecial = 0;
$a_emprestimo = 0;
$a_factoring = 0;
$a_outros = 0;
$a_descOutrosRecursos = '';
$a_frete = 0;
$a_financeiros = 0;
$a_aluguel = 0;
$a_energiaEletrica = 0;
$a_manutGeral = 0;
$a_folhaPagto = 0;
$a_impostos = 0;
$a_outrosGastos = 0;
$a_descOutrosGastos = '';

//Questão 9:
$j_impostos = '';
$j_autuacaoFiscal = '';
$j_acaoJudicial = '';
$j_tratativas = '';
$j_empresaCobranca = 0;
$j_colaborador = 0;
$j_pessoalmente = 0;
$j_outrasCobrancas = 0;
$j_assessoriaJuridica = '';
$j_observacao = '';

if ($_POST) {

    //Questão 1:
    $e_razaoSocial = $_POST['e_razaoSocial'];
    $e_nomeFantasia = $_POST['e_nomeFantasia'];
	$e_cnpj = $_POST['e_cnpj'];
    $e_ie = $_POST['e_ie'];
	$e_dtFundacao = $_POST['e_dtFundacao'];
	$e_ramoAtividade = $_POST['e_ramoAtividade'];
	$e_endereco = $_POST['e_endereco'];
	$e_bairro = $_POST['e_bairro'];
	$e_cep = $_POST['e_cep'];
	$e_cidade = $_POST['e_cidade'];
	$e_uf = $_POST['e_uf'];
	$e_fone = $_POST['e_fone'];
	$e_email = $_POST['e_email'];
    $e_socioA = $_POST['e_socioA'];
    $e_socioB = $_POST['e_socioB'];
    $e_socioC = $_POST['e_socioC'];
    $e_socioD = $_POST['e_socioD'];
    $e_socioE = $_POST['e_socioE'];
    $e_cargoA = $_POST['e_cargoA'];
    $e_cargoB = $_POST['e_cargoB'];
    $e_cargoC = $_POST['e_cargoC'];
    $e_cargoD = $_POST['e_cargoD'];
    $e_cargoE = $_POST['e_cargoE'];

    //Questão 2:
    $m_prodMaisVendA = $_POST['m_prodMaisVendA'];
    $m_prodMaisVendB = $_POST['m_prodMaisVendB'];
    $m_prodMaisVendC = $_POST['m_prodMaisVendC'];
    $m_prodMaisVendD = $_POST['m_prodMaisVendD'];
    $m_prodMaisVendE = $_POST['m_prodMaisVendE'];
    $m_qtdeMensalA = $_POST['m_qtdeMensalA'];
    $m_qtdeMensalB = $_POST['m_qtdeMensalB'];
    $m_qtdeMensalC = $_POST['m_qtdeMensalC'];
    $m_qtdeMensalD = $_POST['m_qtdeMensalD'];
    $m_qtdeMensalE = $_POST['m_qtdeMensalE'];
    $m_unMedA = $_POST['m_unMedA'];
    $m_unMedB = $_POST['m_unMedB'];
    $m_unMedC = $_POST['m_unMedC'];
    $m_unMedD = $_POST['m_unMedD'];
    $m_unMedE = $_POST['m_unMedE'];
    $m_margemLucroA = $_POST['m_margemLucroA'];
    $m_margemLucroB = $_POST['m_margemLucroB'];
    $m_margemLucroC = $_POST['m_margemLucroC'];
    $m_margemLucroD = $_POST['m_margemLucroD'];
    $m_margemLucroE = $_POST['m_margemLucroE'];
    $m_faturamentoA = $_POST['m_faturamentoA'];
    $m_faturamentoB = $_POST['m_faturamentoB'];
    $m_faturamentoC = $_POST['m_faturamentoC'];
    $m_faturamentoD = $_POST['m_faturamentoD'];
    $m_faturamentoE = $_POST['m_faturamentoE'];
    $m_concorrenteA = $_POST['m_concorrenteA'];
    $m_concorrenteB = $_POST['m_concorrenteB'];
    $m_concorrenteC = $_POST['m_concorrenteC'];
    
    if (isset($_POST['m_visitaConcorrencia'])) {
        $m_visitaConcorrencia = $_POST['m_visitaConcorrencia'];
    }

	if (isset($_POST['m_atendimento'])) {
		$m_atendimento = 1;
	}

	if (isset($_POST['m_estacionamento'])) {
		$m_estacionamento = 1;
	}

	if (isset($_POST['m_preco'])) {
		$m_preco = 1;
	}

	if (isset($_POST['m_variedade'])) {
		$m_variedade = 1;
	}

	if (isset($_POST['m_espacoFisico'])) {
		$m_espacoFisico = 1;
	}

	if (isset($_POST['m_localizacao'])) {
		$m_localizacao = 1;
	}

	if (isset($_POST['m_qualidade'])) {
		$m_qualidade = 1;
	}

	if (isset($_POST['m_outros'])) {
		$m_outros = 1;
	}

	$m_descricaoOutrosPontosFortes = $_POST['m_descricaoOutrosPontosFortes'];

	if (isset($_POST['m_mAtendimento'])) {
		$m_mAtendimento = 1;
	}

	if (isset($_POST['m_mEstacionamento'])) {
		$m_mEstacionamento = 1;
	}

	if (isset($_POST['m_mPreco'])) {
		$m_mPreco = 1;
	}

	if (isset($_POST['m_mVariedade'])) {
		$m_mVariedade = 1;
	}

	if (isset($_POST['m_mEspacoFisico'])) {
		$m_mEspacoFisico = 1;
	}

	if (isset($_POST['m_mLocalizacao'])) {
		$m_mLocalizacao = 1;
	}

	if (isset($_POST['m_mQualidade'])) {
		$m_mQualidade = 1;
	}

	if (isset($_POST['m_mOutros'])) {
		$m_mOutros = 1;
	}

	$m_mOutrosPontosDescricao = $_POST['m_mOutrosPontosDescricao'];

	if (isset($_POST['m_promocao'])) {
		$m_promocao = $_POST['m_promocao'];
	}

	if (isset($_POST['m_radio'])) {
		$m_radio = 1;
	}

	if (isset($_POST['m_jornal'])) {
		$m_jornal = 1;
	}

	if (isset($_POST['m_panfleto'])) {
		$m_panfleto = 1;
	}

	if (isset($_POST['m_OutrosMeiosComunicacao'])) {
		$m_OutrosMeiosComunicacao = 1;
	}

	$m_OutrosMeiosComunicacaoDesc = $_POST['m_OutrosMeiosComunicacaoDesc'];

    if (isset($_POST['m_sinalizacao'])) {
        $m_sinalizacao = $_POST['m_sinalizacao'];
    }

    if (isset($_POST['m_espacaoPromocional'])) {
        $m_espacaoPromocional = $_POST['m_espacaoPromocional'];
    }

    //Questão 3:
	if (isset($_POST['p_formacaoPreco'])) {
		$p_formacaoPreco = $_POST['p_formacaoPreco'];
	}

	$p_outraFormacaoPreco = $_POST['p_outraFormacaoPreco'];

	if (isset($_POST['p_precoConcorrencia'])) {
		$p_precoConcorrencia = $_POST['p_precoConcorrencia'];
	}

    //Questão 4:
    $v_mesAnoA = $_POST['v_mesAnoA'];
    $v_mesAnoB = $_POST['v_mesAnoB'];
    $v_mesAnoC = $_POST['v_mesAnoC'];
    $v_mesAnoD = $_POST['v_mesAnoD'];
    $v_mesAnoE = $_POST['v_mesAnoE'];
    $v_mesAnoF = $_POST['v_mesAnoF'];
    $v_fatReaisA = $_POST['v_fatReaisA'];
    $v_fatReaisB = $_POST['v_fatReaisB'];
    $v_fatReaisC = $_POST['v_fatReaisC'];
    $v_fatReaisD = $_POST['v_fatReaisD'];
    $v_fatReaisE = $_POST['v_fatReaisE'];
    $v_fatReaisF = $_POST['v_fatReaisF'];
    $v_periodoInicial = $_POST['v_periodoInicial'];
    $v_periodoFinal = $_POST['v_periodoFinal'];

	if (isset($_POST['v_seg'])) {
		$v_seg = 1;
	}

	if (isset($_POST['v_ter'])) {
		$v_ter = 1;
	}

	if (isset($_POST['v_qua'])) {
		$v_qua = 1;
	}

	if (isset($_POST['v_qui'])) {
		$v_qui = 1;
	}

	if (isset($_POST['v_sex'])) {
		$v_sex = 1;
	}

	if (isset($_POST['v_sab'])) {
		$v_sab = 1;
	}

	if (isset($_POST['v_dom'])) {
		$v_dom = 1;
	}

	if (isset($_POST['v_manha'])) {
		$v_manha = 1;
	}

	if (isset($_POST['v_tarde'])) {
		$v_tarde = 1;
	}

	if (isset($_POST['v_noite'])) {
		$v_noite = 1;
	}

	if (isset($_POST['v_cheque'])) {
		$v_seg = 1;
	}

	if (isset($_POST['v_ticket'])) {
		$v_ter = 1;
	}

	if (isset($_POST['v_cartao'])) {
		$v_qua = 1;
	}

	if (isset($_POST['v_avista'])) {
		$v_qui = 1;
	}

	if (isset($_POST['v_caderneta'])) {
		$v_sex = 1;
	}

	if (isset($_POST['v_outraFormaPagto'])) {
		$v_sab = 1;
	}

    $v_outraFormaPagtoDesc = $_POST['v_outraFormaPagtoDesc'];
    $v_vlrMedioPorVez = $_POST['v_vlrMedioPorVez'];
    $v_vlrMedioMensal = $_POST['v_vlrMedioMensal'];

    //Questão 5:
    $c_razaoSocialFantasiaA = $_POST['c_razaoSocialFantasiaA'];
    $c_razaoSocialFantasiaB = $_POST['c_razaoSocialFantasiaB'];
    $c_razaoSocialFantasiaC = $_POST['c_razaoSocialFantasiaC'];
    $c_razaoSocialFantasiaD = $_POST['c_razaoSocialFantasiaD'];
    $c_razaoSocialFantasiaE = $_POST['c_razaoSocialFantasiaE'];
    $c_cidadeUfA = $_POST['c_cidadeUfA'];
    $c_cidadeUfB = $_POST['c_cidadeUfB'];
    $c_cidadeUfC = $_POST['c_cidadeUfC'];
    $c_cidadeUfD = $_POST['c_cidadeUfD'];
    $c_cidadeUfE = $_POST['c_cidadeUfE'];
    $c_produtosA = $_POST['c_produtosA'];
    $c_produtosB = $_POST['c_produtosB'];
    $c_produtosC = $_POST['c_produtosC'];
    $c_produtosD = $_POST['c_produtosD'];
    $c_produtosE = $_POST['c_produtosE'];
    $c_loteMinimoA = $_POST['c_loteMinimoA'];
    $c_loteMinimoB = $_POST['c_loteMinimoB'];
    $c_loteMinimoC = $_POST['c_loteMinimoC'];
    $c_loteMinimoD = $_POST['c_loteMinimoD'];
    $c_loteMinimoE = $_POST['c_loteMinimoE'];
    $c_relacionamentoA = $_POST['c_relacionamentoA'];
    $c_relacionamentoB = $_POST['c_relacionamentoB'];
    $c_relacionamentoC = $_POST['c_relacionamentoC'];
    $c_relacionamentoD = $_POST['c_relacionamentoD'];
    $c_relacionamentoE = $_POST['c_relacionamentoE'];
    $c_mesAnoA = $_POST['c_mesAnoA'];
    $c_mesAnoB = $_POST['c_mesAnoB'];
    $c_mesAnoC = $_POST['c_mesAnoC'];
    $c_mesAnoD = $_POST['c_mesAnoD'];
    $c_mesAnoE = $_POST['c_mesAnoE'];
    $c_mesAnoF = $_POST['c_mesAnoF'];
    $c_comprasReaisA = $_POST['c_comprasReaisA'];
    $c_comprasReaisB = $_POST['c_comprasReaisB'];
    $c_comprasReaisC = $_POST['c_comprasReaisC'];
    $c_comprasReaisD = $_POST['c_comprasReaisD'];
    $c_comprasReaisE = $_POST['c_comprasReaisE'];
    $c_comprasReaisF = $_POST['c_comprasReaisF'];

    //Questão 6:
    $cli_qtdeClienteMensal = $_POST['cli_qtdeClienteMensal'];
    $cli_percClasA = $_POST['cli_percClasA'];
    $cli_percClasB = $_POST['cli_percClasB'];
    $cli_percClasC = $_POST['cli_percClasC'];
    $cli_percClasD = $_POST['cli_percClasD'];
    $cli_percIdadeA = $_POST['cli_percIdadeA'];
    $cli_percIdadeB = $_POST['cli_percIdadeB'];
    $cli_percIdadeC = $_POST['cli_percIdadeC'];
    $cli_percIdadeD = $_POST['cli_percIdadeD'];
    $cli_percMasc = $_POST['cli_percMasc'];
    $cli_percFem = $_POST['cli_percFem'];

    if (isset($_POST['cli_vendeEmpresas'])) {
        $cli_vendeEmpresas = $_POST['cli_vendeEmpresas'];
    }

    $cli_percTotalFat = $_POST['cli_percTotalFat'];

    if (isset($_POST['cli_pesquisaClientes'])) {
        $cli_pesquisaClientes = $_POST['cli_pesquisaClientes'];
    }

    $cli_frequencia = $_POST['cli_frequencia'];

    //Questão 7:
    $r_qtdeColaboradores = $_POST['r_qtdeColaboradores'];

    if (isset($_POST['r_treinamento'])) {
        $r_treinamento = $_POST['r_treinamento'];
    }

    $r_area = $_POST['r_area'];
    $r_escolaridade = $_POST['r_escolaridade'];

    if (isset($_POST['r_indicacao'])) {
        $r_indicacao = 1;
    }

    if (isset($_POST['r_entrevista'])) {
        $r_entrevista = 1;
    }

    if (isset($_POST['r_analCurEnt'])) {
        $r_analCurEnt = 1;
    }

    $r_aparencia = $_POST['r_aparencia'];
    $r_experiencia = $_POST['r_experiencia'];
    $r_boaVontade = $_POST['r_boaVontade'];
    $r_tipoAtividade = $_POST['r_tipoAtividade'];
    $r_outrasAtividades = $_POST['r_outrasAtividades'];
    $r_quantasDemContrAno = $_POST['r_quantasDemContrAno'];

    //Questão 8:
    $a_fluxoCaixaManual = $_POST['a_fluxoCaixaManual'];
    $a_fluxoCaixaInfo = $_POST['a_fluxoCaixaInfo'];
    $a_controleEstoqueManual = $_POST['a_controleEstoqueManual'];
    $a_controleEstoqueInfo = $_POST['a_controleEstoqueInfo'];
    $a_contasPagarManual = $_POST['a_contasPagarManual'];
    $a_contasPagarInfo = $_POST['a_contasPagarInfo'];
    $a_contasReceberManual = $_POST['a_contasReceberManual'];
    $a_contasReceberInfo = $_POST['a_contasReceberInfo'];
    $a_admComprasManual = $_POST['a_admComprasManual'];
    $a_admComprasInfo = $_POST['a_admComprasInfo'];
    $a_admVendasManual = $_POST['a_admVendasManual'];
    $a_admVendasInfo = $_POST['a_admVendasInfo'];
    $a_fatManual = $_POST['a_fatManual'];
    $a_fatInfo = $_POST['a_fatInfo'];
    $a_descOutrosTipos = $_POST['a_descOutrosTipos'];
    $a_outrosTiposSelecionadoManual = $_POST['a_outrosTiposSelecionadoManual'];
    $a_outrosTiposSelecionadoInfo = $_POST['a_outrosTiposSelecionadoInfo'];

    if (isset($_POST['a_planejamento'])) {
        $a_planejamento = $_POST['a_planejamento'];
    }

    $a_area = $_POST['a_area'];

    if (isset($_POST['a_trabalhaRecursoTerc'])) {
        $a_trabalhaRecursoTerc = $_POST['a_trabalhaRecursoTerc'];
    }

    if (isset($_POST['a_chequeEspecial'])) {
        $a_chequeEspecial = 1;
    }

    if (isset($_POST['a_emprestimo'])) {
        $a_emprestimo = 1;
    }

    if (isset($_POST['a_factoring'])) {
        $a_factoring = 1;
    }

    if (isset($_POST['a_outros'])) {
        $a_outros = 1;
    }

    $a_descOutrosRecursos = $_POST['a_descOutrosRecursos'];

    if (isset($_POST['a_frete'])) {
        $a_frete = 1;
    }

    if (isset($_POST['a_financeiros'])) {
        $a_financeiros = 1;
    }

    if (isset($_POST['a_aluguel'])) {
        $a_aluguel = 1;
    }

    if (isset($_POST['a_energiaEletrica'])) {
        $a_energiaEletrica = 1;
    }

    if (isset($_POST['a_manutGeral'])) {
        $a_manutGeral = 1;
    }

    if (isset($_POST['a_folhaPagto'])) {
        $a_folhaPagto = 1;
    }

    if (isset($_POST['a_impostos'])) {
        $a_impostos = 1;
    }

    if (isset($_POST['a_outrosGastos'])) {
        $a_outrosGastos = 1;
    }

    $a_descOutrosGastos = $_POST['a_descOutrosGastos'];

    //Questão 9:
    if (isset($_POST['j_impostos'])) {
        $j_impostos = $_POST['j_impostos'];
    }

    if (isset($_POST['j_autuacaoFiscal'])) {
        $j_autuacaoFiscal = $_POST['j_autuacaoFiscal'];
    }

    if (isset($_POST['j_acaoJudicial'])) {
        $j_acaoJudicial = $_POST['j_acaoJudicial'];
    }

    if (isset($_POST['j_tratativas'])) {
        $j_tratativas = $_POST['j_tratativas'];
    }

    if (isset($_POST['j_empresaCobranca'])) {
        $j_empresaCobranca = 1;
    }

    if (isset($_POST['j_colaborador'])) {
        $j_colaborador = 1;
    }

    if (isset($_POST['j_pessoalmente'])) {
        $j_pessoalmente = 1;
    }

    if (isset($_POST['j_outrasCobrancas'])) {
        $j_outrasCobrancas = 1;
    }

    if (isset($_POST['j_assessoriaJuridica'])) {
        $j_assessoriaJuridica = $_POST['j_assessoriaJuridica'];
    }

    $j_observacao = $_POST['j_observacao'];

 }

?>
<?php

 if (isset($this->dados['erro'])) {
  ?>

  <p><?php echo $this->dados['erro']; ?></p>

  <?php
  }
?>
 
        <div id="cabecalhoPag">
            Projeto CIAPE – Centro Integrado de Apoio a Projetos Empresariais – UNIPAR/ACIC</div>
        <hr width="900" size="1" color=black id="linha">

        <form name="cadastroCiape" action="cadastrar-empresas.php" method="POST" role="form" onsubmit="return validarFormulario();">
          <div class="form-group">
              
            <h4 align="right">Nº de ordem <input type="text" name="numOrdem" value="" size=10 readonly/></h4>

            <h4 align="center">TERMO DE ADESÃO – PROJETO CIAPE UNIPAR/ACIC</h4>

            <p> Informações Gerais: o questionário destina-se exclusivamente a obtenção de 
                informações das empresas participantes do projeto CIAPE – UNIPAR/ACIC. Tem por 
                finalidade criar indicadores que permitirão comparar a evolução das empresas ao longo 
                do processo. As informações deverão ser fornecidas pelo proprietário, considerando 
                a real situação da empresa. Não será divulgado nenhum tipo de informações contidas neste documento.</p>

            <legend>1. DADOS CADASTRAIS</legend> <br> 

            <label>Razão Social:</label><input type="text" name="e_razaoSocial" value="<?php echo $e_razaoSocial; ?>" size=85><br><br>

            <label>Nome Fantasia:</label><input type="text" name="e_nomeFantasia" value="<?php echo $e_nomeFantasia; ?>" size=85><br><br>

            <label>IE:</label><input type="text" name="e_ie" value="<?php echo $e_ie; ?>" size=25>

            <label>CNPJ:</label><input type="text" name="e_cnpj" value="<?php echo $e_cnpj; ?>" size=25><br><br>

            <label>Data de Fundação:</label><input type="text" name="e_dtFundacao" value="<?php echo $e_dtFundacao; ?>" size=15>

            <label>Ramo de Atividade:</label><input type="text" name="e_ramoAtividade" value="<?php echo $e_ramoAtividade; ?>" size=30><br><br>

            <label>Endereço:</label><input type="text" name="e_endereco" value="<?php echo $e_endereco; ?>" size=50>

            <label>Bairro:</label><input type="text" name="e_bairro" value="<?php echo $e_bairro; ?>" size=15><br><br>

            <label>CEP:</label><input type="text" name="e_cep" value="<?php echo $e_cep; ?>" size=15>

            <label>Cidade:</label><input type="text" name="e_cidade" value="<?php echo $e_cidade; ?>" size=40>

            <label>UF:</label><input type="text" name="e_uf" value="<?php echo $e_uf; ?>" size=5><br><br>

            <label>Fone:</label><input type="text" name="e_fone" value="<?php echo $e_fone; ?>" size=20>

            <label>E-mail:</label><input type="text" name="e_email" value="<?php echo $e_email; ?>" size=45><br><br>

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
                                        <input type="text" name="e_socioA" value="<?php echo $e_socioA; ?>" size=45>
                                    </td>
                                    <td>
                                        <input type="text" name="e_cargoA" value="<?php echo $e_cargoA; ?>" size=45>
                                    </td>
                                </tr>

                                <tr id='addr1'>
                                    <td>
                                        b)
                                    </td>
                                    <td>
                                        <input type="text" name="e_socioB" value="<?php echo $e_socioB; ?>" size=45>
                                    </td>
                                    <td>
                                        <input type="text" name="e_cargoB" value="<?php echo $e_cargoB; ?>" size=45>
                                    </td>
                                </tr>

                                <tr id='addr2'>
                                    <td>
                                        c)
                                    </td>
                                    <td>
                                        <input type="text" name="e_socioC" value="<?php echo $e_socioC; ?>" size=45>
                                    </td>
                                    <td>
                                        <input type="text" name="e_cargoC" value="<?php echo $e_cargoC; ?>" size=45>
                                    </td>
                                </tr>

                                <tr id='addr3'>
                                    <td>
                                        d)
                                    </td>
                                    <td>
                                        <input type="text" name="e_socioD" value="<?php echo $e_socioD; ?>" size=45>
                                    </td>
                                    <td>
                                        <input type="text" name="e_cargoD" value="<?php echo $e_cargoD; ?>" size=45>
                                    </td>
                                </tr>

                                <tr id='addr4'>
                                    <td>
                                        e)
                                    </td>
                                    <td>
                                        <input type="text" name="e_socioE" value="<?php echo $e_socioE; ?>" size=45>
                                    </td>
                                    <td>
                                        <input type="text" name="e_cargoE" value="<?php echo $e_cargoE; ?>" size=45>
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
                                    <input type="text" name="m_prodMaisVendA"  placeholder='' class="form-control" value="<?php echo $m_prodMaisVendA; ?>"/>
                                </td>
                                <td>
                                    <input type="text" name="m_qtdeMensalA" placeholder='' class="form-control" size="10" value="<?php echo $m_qtdeMensalA; ?>"/>
                                </td>           
                                <td>
                                    <input type="text" name="m_unMedA"  placeholder='' class="form-control" size="10" value="<?php echo $m_unMedA; ?>"/>
                                </td>
                                <td>
                                    <input type="text" name="m_margemLucroA"  placeholder='' class="form-control" value="<?php echo $m_margemLucroA; ?>"/>
                                </td>
                                <td>
                                    <input type="text" name="m_faturamentoA" placeholder='' class="form-control" value="<?php echo $m_faturamentoA; ?>"/>
                                </td>
                            </tr>

                            <tr id='addr1'>
                                <td>
                                    <input type="text" name="m_prodMaisVendB"  placeholder='' class="form-control" value="<?php echo $m_prodMaisVendB; ?>"/>
                                </td>
                                <td>
                                    <input type="text" name="m_qtdeMensalB" placeholder='' class="form-control" size="10" value="<?php echo $m_qtdeMensalB; ?>"/>
                                </td>           
                                <td>
                                    <input type="text" name="m_unMedB"  placeholder='' class="form-control" size="10" value="<?php echo $m_unMedB; ?>"/>
                                </td>
                                <td>
                                    <input type="text" name="m_margemLucroB"  placeholder='' class="form-control" value="<?php echo $m_margemLucroB; ?>"/>
                                </td>
                                <td>
                                    <input type="text" name="m_faturamentoB" placeholder='' class="form-control" value="<?php echo $m_faturamentoB; ?>"/>
                                </td>
                            </tr>

                            <tr id='addr2'>
                                <td>
                                    <input type="text" name="m_prodMaisVendC"  placeholder='' class="form-control" value="<?php echo $m_prodMaisVendC; ?>"/>
                                </td>
                                <td>
                                    <input type="text" name="m_qtdeMensalC" placeholder='' class="form-control" size="10" value="<?php echo $m_qtdeMensalC; ?>"/>
                                </td>           
                                <td>
                                    <input type="text" name="m_unMedC"  placeholder='' class="form-control" size="10" value="<?php echo $m_unMedC; ?>"/>
                                </td>
                                <td>
                                    <input type="text" name="m_margemLucroC"  placeholder='' class="form-control" value="<?php echo $m_margemLucroC; ?>"/>
                                </td>
                                <td>
                                    <input type="text" name="m_faturamentoC" placeholder='' class="form-control" value="<?php echo $m_faturamentoC; ?>"/>
                                </td>
                            </tr> 

                            <tr id='addr3'>
                                <td>
                                    <input type="text" name="m_prodMaisVendD"  placeholder='' class="form-control" value="<?php echo $m_prodMaisVendD; ?>"/>
                                </td>
                                <td>
                                    <input type="text" name="m_qtdeMensalD" placeholder='' class="form-control" size="10" value="<?php echo $m_qtdeMensalD; ?>"/>
                                </td>           
                                <td>
                                    <input type="text" name="m_unMedD"  placeholder='' class="form-control" size="10" value="<?php echo $m_unMedD; ?>"/>
                                </td>
                                <td>
                                    <input type="text" name="m_margemLucroD"  placeholder='' class="form-control" value="<?php echo $m_margemLucroD; ?>"/>
                                </td>
                                <td>
                                    <input type="text" name="m_faturamentoD" placeholder='' class="form-control" value="<?php echo $m_faturamentoD; ?>"/>
                                </td>
                            </tr>    

                            <tr id='addr4'>
                                <td>
                                    <input type="text" name="m_prodMaisVendE"  placeholder='' class="form-control" value="<?php echo $m_prodMaisVendE; ?>"/>
                                </td>
                                <td>
                                    <input type="text" name="m_qtdeMensalE" placeholder='' class="form-control" size="10" value="<?php echo $m_qtdeMensalE; ?>"/>
                                </td>           
                                <td>
                                    <input type="text" name="m_unMedE"  placeholder='' class="form-control" size="10" value="<?php echo $m_unMedE; ?>"/>
                                </td>
                                <td>
                                    <input type="text" name="m_margemLucroE"  placeholder='' class="form-control" value="<?php echo $m_margemLucroE; ?>"/>
                                </td>
                                <td>
                                    <input type="text" name="m_faturamentoE" placeholder='' class="form-control" value="<?php echo $m_faturamentoE; ?>"/>
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
                                        A.<input type="text" name="m_concorrenteA" value="<?php echo $m_concorrenteA; ?>" size=28>
                                    </td>
                                    <td>
                                        B.<input type="text" name="m_concorrenteB" value="<?php echo $m_concorrenteB; ?>" size=28>
                                    </td>
                                    <td>
                                        C.<input type="text" name="m_concorrenteC" value="<?php echo $m_concorrenteC; ?>" size=28>
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
                    <label><th class="span1"><input type="radio" name = "m_visitaConcorrencia" value = "0" <?php if ($m_visitaConcorrencia == '0') { ?> checked<?php } ?>></th>
                        <td>Sim</td></label>
                    </tr>
                    <tr>
                    <label><th class="span1"><input type="radio" name = "m_visitaConcorrencia" value = "1" <?php if ($m_visitaConcorrencia == '1') { ?> checked<?php } ?>></th>
                        <td>Não</td></label>
                    </tr><br><br>
                </div>

                <label> 2.4 Quais são seus pontos fortes em relação a concorrência?</label> 
                <br>
                <tr>
                <label><th class="span1"><input type="checkbox" name = "m_atendimento" value = "1" <?php if ($m_atendimento == 1) { ?> checked<?php } ?>></th>
                    <td>Atendimento</td></label>
                </tr>
                
                <tr>
                <label><th class="span1"><input type="checkbox" name = "m_estacionamento" value = "1" <?php if ($m_estacionamento == 1) { ?> checked<?php } ?>></th>
                    <td>Estacionamento</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "m_preco" value = "1" <?php if ($m_preco == 1) { ?> checked<?php } ?>></th>
                    <td>Preço</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "m_variedade" value = "1" <?php if ($m_variedade == 1) { ?> checked<?php } ?>></th>
                    <td>Variedade</td></label>
                </tr>
                <br>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "m_espacoFisico" value = "1" <?php if ($m_espacoFisico == 1) { ?> checked<?php } ?>></th>
                    <td>Espaço Físico</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "m_localizacao" value = "1" <?php if ($m_localizacao == 1) { ?> checked<?php } ?>></th>
                    <td>Localização</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "m_qualidade" value = "1" <?php if ($m_qualidade == 1) { ?> checked<?php } ?>></th>
                    <td>Qualidade</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "m_outros" value = "1" <?php if ($m_outros == 1) { ?> checked<?php } ?>></th>
                    <td>Outros:<input type="text" name="m_descricaoOutrosPontosFortes" value="<?php echo $m_descricaoOutrosPontosFortes; ?>" size=20 onKeyPress = "return validaEntrada1();" onblur="return validaSaida1();"><br></td></label>
                </tr>
                <br>
                <label>2.5 Quais são seus pontos para melhoria em relação a concorrência?</label>
                <br>
                <tr>
                <label><th class="span1"><input type="checkbox" name = "m_mAtendimento" value = "1" <?php if ($m_mAtendimento == 1) { ?> checked<?php } ?>></th>
                    <td>Atendimento</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "m_mEstacionamento" value = "1" <?php if ($m_mEstacionamento == 1) { ?> checked<?php } ?>></th>
                    <td>Estacionamento</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "m_mPreco" value = "1" <?php if ($m_mPreco == 1) { ?> checked<?php } ?>></th>
                    <td>Preço</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "m_mVariedade" value = "1" <?php if ($m_mVariedade == 1) { ?> checked<?php } ?>></th>
                    <td>Variedade</td></label>
                </tr>
                <br>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "m_mEspacoFisico" value = "1" <?php if ($m_mEspacoFisico == 1) { ?> checked<?php } ?>></th>
                    <td>Espaço Físico</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "m_mLocalizacao" value = "1" <?php if ($m_mLocalizacao == 1) { ?> checked<?php } ?>></th>
                    <td>Localização</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "m_mQualidade" value = "1" <?php if ($m_mQualidade == 1) { ?> checked<?php } ?>></th>
                    <td>Qualidade</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "m_mOutros" value = "1" <?php if ($m_mOutros == 1) { ?> checked<?php } ?>></th>
                    <td>Outros:<input type="text" name="m_mOutrosPontosDescricao" value="<?php echo $m_mOutrosPontosDescricao; ?>"  size=20 onKeyPress = "return validaEntrada2();" onblur="return validaSaida2();"><br></td></label>
                </tr>

                </br>      
                <label>2.6 Faz promoções? </label>
                <br>
                <tr>
                <label><th class="span1"><input type="radio" name = "m_promocao" value = "0" <?php if ($m_promocao == '0') { ?> checked<?php } ?>></th>
                    <td>Mais de duas vez por mês</td></label>
                </tr>
                <tr>
                <label><th class="span1"><input type="radio" name = "m_promocao" value = "1" <?php if ($m_promocao == '1') { ?> checked<?php } ?>></th>
                    <td>Uma vez por mês</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="radio" name = "m_promocao" value = "2" <?php if ($m_promocao == '2') { ?> checked<?php } ?>></th>
                    <td>Não, nunca faço</td></label>
                </tr><br><br>

                <label> 2.7 Quais meios utiliza? </label>
                <br>
                <tr>
                <label><th class="span1"><input type="checkbox" name = "m_radio" value = "1" <?php if ($m_radio == 1) { ?> checked<?php } ?>></th>
                    <td>Rádio</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "m_jornal" value = "1" <?php if ($m_jornal == 1) { ?> checked<?php } ?>></th>
                    <td>Jornal</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "m_panfleto" value = "1" <?php if ($m_panfleto == 1) { ?> checked<?php } ?>></th>
                    <td>Panfleto</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "m_OutrosMeiosComunicacao" value = "1" <?php if ($m_OutrosMeiosComunicacao == 1) { ?> checked<?php } ?>></th>
                    <td>Outros:<input type="text" name="m_OutrosMeiosComunicacaoDesc" value="<?php echo $m_OutrosMeiosComunicacaoDesc; ?>" size=20 onKeyPress = "return validaEntrada3();" onblur="return validaSaida3();"><br></td></label>
                </tr>

                <br>
                <label>2.8 O estabelecimento é bem sinalizado, dividido em seções?</label>
                <br>
                <tr>
                <label><th class="span1"><input type="radio" name = "m_sinalizacao" value = "0" <?php if ($m_sinalizacao == '0') { ?> checked<?php } ?>></th>
                    <td>Sim</td></label>
                </tr>
                <tr>
                <label><th class="span1"><input type="radio" name = "m_sinalizacao" value = "1" <?php if ($m_sinalizacao == '1') { ?> checked<?php } ?>></th>
                    <td>Não</td></label>
                </tr><br><br>

                <label> 2.9 Dispõe de espaços promocionais? (dispostos na loja)</label>
                <br>
                <tr>
                <label><th class="span1"><input type="radio" name = "m_espacaoPromocional" value = "0" <?php if ($m_espacaoPromocional == '0') { ?> checked<?php } ?>></th>
                    <td>Sim</td></label>
                </tr>
                <tr>
                <label><th class="span1"><input type="radio" name = "m_espacaoPromocional" value = "1" <?php if ($m_espacaoPromocional == '1') { ?> checked<?php } ?>></th>
                    <td>Não</td></label>
                </tr><br><br>

                <legend>3. PREÇOS</legend>

                <br>
                <label> 3.1 Como forma os preços de seus produtos? </label>   
                <br>
                <tr>
                <label><th class="span1"><input type="radio" name = "p_formacaoPreco" value = "0" <?php if ($p_formacaoPreco == '0') { ?> checked<?php } ?>></th>
                    <td>Percentual sobre os custos</td></label>
                </tr>
                <tr>
                <label><th class="span1"><input type="radio" name = "p_formacaoPreco" value = "1" <?php if ($p_formacaoPreco == '1') { ?> checked<?php } ?>></th>
                    <td>Acompanhando o mercado</td></label>
                </tr>
                <tr>
                <label><br><th class="span1"><input type="radio" name = "p_formacaoPreco" value = "2" <?php if ($p_formacaoPreco == '2') { ?> checked<?php } ?>></th>
                   <td>Outra Maneira, Qual?<input type="text" name="p_outraFormacaoPreco" value="<?php echo $p_outraFormacaoPreco; ?>" size=20></td></label>
                </tr><br><br>

                <label> 3.2 Seus preços em relação a concorrência estão? </label>  
                <br>
                <tr>
                <label><th class="span1"><input type="radio" name = "p_precoConcorrencia" value = "0" <?php if ($p_precoConcorrencia == '0') { ?> checked<?php } ?>></th>
                    <td>Acima</td></label>
                </tr>
                <tr>
                <label><th class="span1"><input type="radio" name = "p_precoConcorrencia" value = "1" <?php if ($p_precoConcorrencia == '1') { ?> checked<?php } ?>></th>
                    <td>Iguais</td></label>
                </tr>
                <tr>
                <label><th class="span1"><input type="radio" name = "p_precoConcorrencia" value = "2" <?php if ($p_precoConcorrencia == '2') { ?> checked<?php } ?>></th>
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
                                        <input type="text" name="v_mesAnoA"  placeholder='' class="form-control" value="<?php echo $v_mesAnoA; ?>"/>
                                    </td>
                                    <td>
                                        <input type="text" name="v_fatReaisA" placeholder='' class="form-control" value="<?php echo $v_fatReaisA; ?>"/>
                                    </td>

                                    <td>
                                        <input type="text" name="v_mesAnoB"  placeholder='' class="form-control" value="<?php echo $v_mesAnoB; ?>"/>
                                    </td>
                                    <td>
                                        <input type="text" name="v_fatReaisB"  placeholder='' class="form-control" value="<?php echo $v_fatReaisB; ?>"/>
                                    </td>
                                </tr>

                                <tr id='addr1'>
                                    <td>

                                    </td>
                                    <td>
                                        <input type="text" name="v_mesAnoC"  placeholder='' class="form-control" value="<?php echo $v_mesAnoC; ?>"/>
                                    </td>
                                    <td>
                                        <input type="text" name="v_fatReaisC" placeholder='' class="form-control" value="<?php echo $v_fatReaisC; ?>"/>
                                    </td>

                                    <td>
                                        <input type="text" name="v_mesAnoD"  placeholder='' class="form-control" value="<?php echo $v_mesAnoD; ?>"/>
                                    </td>
                                    <td>
                                        <input type="text" name="v_fatReaisD"  placeholder='' class="form-control" value="<?php echo $v_fatReaisD; ?>"/>
                                    </td>
                                </tr>

                                <tr id='addr2'>
                                    <td>

                                    </td>
                                    <td>
                                        <input type="text" name="v_mesAnoE"  placeholder='' class="form-control" value="<?php echo $v_mesAnoE; ?>"/>
                                    </td>
                                    <td>
                                        <input type="text" name="v_fatReaisE" placeholder='' class="form-control" value="<?php echo $v_fatReaisE; ?>"/>
                                    </td>

                                    <td>
                                        <input type="text" name="v_mesAnoF"  placeholder='' class="form-control" value="<?php echo $v_mesAnoF; ?>"/>
                                    </td>
                                    <td>
                                        <input type="text" name="v_fatReaisF"  placeholder='' class="form-control" value="<?php echo $v_fatReaisF; ?>"/>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div><br>

                <label>4.2 Dias da semana de maior movimento? Período do mês: </label>
                <td>
                    <input type="text" name="v_periodoInicial" value="<?php echo $v_periodoInicial; ?>" size=10>
                    <input type="text" name="v_periodoFinal" value="<?php echo $v_periodoFinal; ?>" size=10>
                </td>
                <tr><br>
                <label><th class="span1"><input type="checkbox" name = "v_seg" value = "1" <?php if ($v_seg == 1) { ?> checked<?php } ?>></th>
                    <td> Seg</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "v_ter" value = "1" <?php if ($v_ter == 1) { ?> checked<?php } ?>></th>
                    <td> Ter </td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "v_qua" value = "1" <?php if ($v_qua == 1) { ?> checked<?php } ?>></th>
                    <td> Qua</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "v_qui" value = "1" <?php if ($v_qui == 1) { ?> checked<?php } ?>></th>
                    <td> Qui</td></label>
                </tr> 

                <tr>
                <label><th class="span1"><input type="checkbox" name = "v_sex" value = "1" <?php if ($v_sex == 1) { ?> checked<?php } ?>></th>
                    <td> Sex</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "v_sab" value = "1" <?php if ($v_sab == 1) { ?> checked<?php } ?>></th>
                    <td> Sab</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "v_dom" value = "1" <?php if ($v_dom == 1) { ?> checked<?php } ?>></th>
                    <td> Dom</td></label>
                </tr><br><br>

                <label>4.3 Quais horários de maior movimento?</label>
                <br>
                <tr>
                <label><th class="span1"><input type="checkbox" name = "v_manha" value = "1" <?php if ($v_manha == 1) { ?> checked<?php } ?>></th>
                    <td> Manhã</td></label>
                </tr>
                <tr>
                <label><th class="span1"><input type="checkbox" name = "v_tarde" value = "1" <?php if ($v_tarde == 1) { ?> checked<?php } ?>></th>
                    <td> Tarde</td></label>
                </tr>
                <tr>
                <label><th class="span1"><input type="checkbox" name = "v_noite" value = "1" <?php if ($v_noite == 1) { ?> checked<?php } ?>></th>
                    <td> Noite</td></label>
                </tr>

                <br><br>

                <label>4.4 Forma de pagamento oferecidas aos clientes?</label>
                <br>
                <tr>
                <label><th class="span1"><input type="checkbox" name = "v_cheque" value = "1" <?php if ($v_cheque == 1) { ?> checked<?php } ?>></th>
                    <td>Cheque pré-datado </td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "v_ticket" value = "1" <?php if ($v_ticket == 1) { ?> checked<?php } ?>></th>
                    <td>Ticket </td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "v_cartao" value = "1" <?php if ($v_cartao == 1) { ?> checked<?php } ?>></th>
                    <td>Cartão de crédito </td></label>
                </tr>
                <br>
                <tr>
                <label><th class="span1"><input type="checkbox" name = "v_avista" value = "1" <?php if ($v_avista == 1) { ?> checked<?php } ?>></th>
                    <td>Caderneta </td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "v_caderneta" value = "1" <?php if ($v_caderneta == 1) { ?> checked<?php } ?>></th>
                    <td>A vista </td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "v_outraFormaPagto" value = "1" <?php if ($v_outraFormaPagto == 1) { ?> checked<?php } ?>></th>
                    <td>Outra? Qual?<input type="text" name="v_outraFormaPagtoDesc" value="<?php echo $v_outraFormaPagtoDesc; ?>" size=30 onKeyPress = "return validaEntrada4();" onblur="return validaSaida4();">
                        <br> </td></label>
                </tr><br>

                <label>4.5 Qual o valor médio de compras por cliente?</label>
                <br>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="card-holder-name"> Por vez:</label>    
                    <input type="text" name="v_vlrMedioPorVez" value="<?php echo $v_vlrMedioPorVez; ?>" size=30>
                    <label class="col-sm-3 control-label" for="card-holder-name"> Mensal:</label>   
                    <input type="text" name="v_vlrMedioMensal" value="<?php echo $v_vlrMedioMensal; ?>" size=30>
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
                                        <input type="text" name="c_razaoSocialFantasiaA"  placeholder='' class="form-control" value="<?php echo $c_razaoSocialFantasiaA; ?>"/>
                                    </td>
                                    <td>
                                        <input type="text" name="c_cidadeUfA" placeholder='' class="form-control" value="<?php echo $c_cidadeUfA; ?>" size=10/>
                                    </td>           
                                    <td>
                                        <input type="text" name="c_produtosA"  placeholder='' class="form-control" value="<?php echo $c_produtosA; ?>" size=15/>
                                    </td>
                                    <td>
                                        <input type="text" name="c_loteMinimoA"  placeholder='' class="form-control" value="<?php echo $c_loteMinimoA; ?>" size=15/>
                                    </td>
                                    <td>
                                        <input type="text" name="c_relacionamentoA"  placeholder='' class="form-control" value="<?php echo $c_relacionamentoA; ?>" size=15/>
                                    </td>
                                </tr>

                                <tr id='addr1'>
                                    <td>

                                    </td>
                                    <td>
                                        <input type="text" name="c_razaoSocialFantasiaB"  placeholder='' class="form-control" value="<?php echo $c_razaoSocialFantasiaB; ?>"/>
                                    </td>
                                    <td>
                                        <input type="text" name="c_cidadeUfB" placeholder='' class="form-control" value="<?php echo $c_cidadeUfB; ?>" size=10/>
                                    </td>           
                                    <td>
                                        <input type="text" name="c_produtosB"  placeholder='' class="form-control" value="<?php echo $c_produtosB; ?>" size=15/>
                                    </td>
                                    <td>
                                        <input type="text" name="c_loteMinimoB"  placeholder='' class="form-control" value="<?php echo $c_loteMinimoB; ?>" size=15/>
                                    </td>
                                    <td>
                                        <input type="text" name="c_relacionamentoB"  placeholder='' class="form-control" value="<?php echo $c_relacionamentoB; ?>" size=15/>
                                    </td>
                                </tr>

                                <tr id='addr2'>
                                    <td>

                                    </td>
                                    <td>
                                        <input type="text" name="c_razaoSocialFantasiaC"  placeholder='' class="form-control" value="<?php echo $c_razaoSocialFantasiaC; ?>"/>
                                    </td>
                                    <td>
                                        <input type="text" name="c_cidadeUfC" placeholder='' class="form-control" value="<?php echo $c_cidadeUfC; ?>" size=10/>
                                    </td>           
                                    <td>
                                        <input type="text" name="c_produtosC"  placeholder='' class="form-control" value="<?php echo $c_produtosC; ?>" size=15/>
                                    </td>
                                    <td>
                                        <input type="text" name="c_loteMinimoC"  placeholder='' class="form-control" value="<?php echo $c_loteMinimoC; ?>" size=15/>
                                    </td>
                                    <td>
                                        <input type="text" name="c_relacionamentoC"  placeholder='' class="form-control" value="<?php echo $c_relacionamentoC; ?>" size=15/>
                                    </td>
                                </tr>

                                <tr id='addr3'>
                                    <td>

                                    </td>
                                    <td>
                                        <input type="text" name="c_razaoSocialFantasiaD"  placeholder='' class="form-control" value="<?php echo $c_razaoSocialFantasiaD; ?>"/>
                                    </td>
                                    <td>
                                        <input type="text" name="c_cidadeUfD" placeholder='' class="form-control" value="<?php echo $c_cidadeUfD; ?>" size=10/>
                                    </td>           
                                    <td>
                                        <input type="text" name="c_produtosD"  placeholder='' class="form-control" value="<?php echo $c_produtosD; ?>" size=15/>
                                    </td>
                                    <td>
                                        <input type="text" name="c_loteMinimoD"  placeholder='' class="form-control" value="<?php echo $c_loteMinimoD; ?>" size=15/>
                                    </td>
                                    <td>
                                        <input type="text" name="c_relacionamentoD"  placeholder='' class="form-control" value="<?php echo $c_relacionamentoD; ?>" size=15/>
                                    </td>

                                <tr id='addr4'>
                                    <td>

                                    </td>
                                    <td>
                                        <input type="text" name="c_razaoSocialFantasiaE"  placeholder='' class="form-control" value="<?php echo $c_razaoSocialFantasiaE; ?>"/>
                                    </td>
                                    <td>
                                        <input type="text" name="c_cidadeUfE" placeholder='' class="form-control" value="<?php echo $c_cidadeUfE; ?>" size=10/>
                                    </td>           
                                    <td>
                                        <input type="text" name="c_produtosE"  placeholder='' class="form-control" value="<?php echo $c_produtosE; ?>" size=15/>
                                    </td>
                                    <td>
                                        <input type="text" name="c_loteMinimoE"  placeholder='' class="form-control" value="<?php echo $c_loteMinimoE; ?>" size=15/>
                                    </td>
                                    <td>
                                        <input type="text" name="c_relacionamentoE"  placeholder='' class="form-control" value="<?php echo $c_relacionamentoE; ?>" size=15/>
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
                                        <input type="text" name="c_mesAnoA"  placeholder='' class="form-control" value="<?php echo $c_mesAnoA; ?>"/>
                                    </td>
                                    <td>
                                        <input type="text" name="c_comprasReaisA" placeholder='' class="form-control" value="<?php echo $c_comprasReaisA; ?>"/>
                                    </td>

                                    <td>
                                        <input type="text" name="c_mesAnoB"  placeholder='' class="form-control" value="<?php echo $c_mesAnoB; ?>"/>
                                    </td>
                                    <td>
                                        <input type="text" name="c_comprasReaisB"  placeholder='' class="form-control" value="<?php echo $c_comprasReaisB; ?>"/>
                                    </td>
                                </tr>

                                <tr id='addr1'>
                                    <td>

                                    </td>
                                    <td>
                                        <input type="text" name="c_mesAnoC"  placeholder='' class="form-control" value="<?php echo $c_mesAnoC; ?>"/>
                                    </td>
                                    <td>
                                        <input type="text" name="c_comprasReaisC" placeholder='' class="form-control" value="<?php echo $c_comprasReaisC; ?>"/>
                                    </td>

                                    <td>
                                        <input type="text" name="c_mesAnoD"  placeholder='' class="form-control" value="<?php echo $c_mesAnoD; ?>"/>
                                    </td>
                                    <td>
                                        <input type="text" name="c_comprasReaisD"  placeholder='' class="form-control" value="<?php echo $c_comprasReaisD; ?>"/>
                                    </td>
                                </tr>

                                <tr id='addr2'>
                                    <td>

                                    </td>
                                    <td>
                                        <input type="text" name="c_mesAnoE"  placeholder='' class="form-control" value="<?php echo $c_mesAnoE; ?>"/>
                                    </td>
                                    <td>
                                        <input type="text" name="c_comprasReaisE" placeholder='' class="form-control" value="<?php echo $c_comprasReaisE; ?>"/>
                                    </td>

                                    <td>
                                        <input type="text" name="c_mesAnoF"  placeholder='' class="form-control" value="<?php echo $c_mesAnoF; ?>"/>
                                    </td>
                                    <td>
                                        <input type="text" name="c_comprasReaisF"  placeholder='' class="form-control" value="<?php echo $c_comprasReaisF; ?>"/>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div><br> 
                <legend>6. CLIENTES</legend> 

                <label>6.1 Quantos clientes atende por mês?</label>
                <input type="text" name="cli_qtdeClienteMensal" value="<?php echo $cli_qtdeClienteMensal; ?>" size=15><br><br>

                <label>6.2 Qual é o perfil do seu cliente?</label>
                <br>
                <input type="text" name="cli_percClasA" value="<?php echo $cli_percClasA; ?>" size=5><td>% classe A </td>

                <input type="text" name="cli_percClasB" value="<?php echo $cli_percClasB; ?>" size=5><td>% classe B </td>

                <input type="text" name="cli_percClasC" value="<?php echo $cli_percClasC; ?>" size=5><td>% classe C </td>

                <input type="text" name="cli_percClasD" value="<?php echo $cli_percClasD; ?>" size=5><td>% classe D </td>
                <br>
                <input type="text" name="cli_percIdadeA" value="<?php echo $cli_percIdadeA; ?>" size=4><td>% 0 a 18 anos </td>

                <input type="text" name="cli_percIdadeB" value="<?php echo $cli_percIdadeB; ?>" size=4><td>% 19 a 30 anos </td>  

                <input type="text" name="cli_percIdadeC" value="<?php echo $cli_percIdadeC; ?>" size=4><td>% 31 a 45 anos </td>

                <input type="text" name="cli_percIdadeD" value="<?php echo $cli_percIdadeD; ?>" size=4><td>% acima de 46 anos </td>
                <br>
                <input type="text" name="cli_percMasc" value="<?php echo $cli_percMasc; ?>" size=5><td>% Masculino </td>

                <input type="text" name="cli_percFem" value="<?php echo $cli_percFem; ?>" size=5><td>% Feminino </td>
                <br><br>

                <label>6.3 Vende para empresas?</label><br>
                <tr>
                <label><th class="span1"><input type="radio" name = "cli_vendeEmpresas" value = "0"></th>
                    <td>Sim.Quantos % representa do total do faturamento?</td></label>
                <input type="text" name="cli_percTotalFat" value="<?php echo $cli_percTotalFat; ?>" size=5>
                </tr>

                <tr>
                <label><th class="span1"><input type="radio" name = "cli_vendeEmpresas" value = "1" <?php if ($v_manha == 1) { ?> checked<?php } ?>></th>
                    <td>Não </td></label>
                </tr>

                <br><br>
                <label>6.4 Faz pesquisas com seus clientes?</label><br>
                <tr>
                <label><th class="span1"><input type="radio" name = "cli_pesquisaClientes" value="0" <?php if ($cli_pesquisaClientes == 0) { ?> checked<?php } ?>></th>
                    <td>Sim, frequência?</td></label>
                <input type="text" name="cli_frequencia" value="<?php echo $cli_frequencia; ?>" size=15>
                </tr>

                <tr>
                <label><th class="span1"><input type="radio" name = "cli_pesquisaClientes" value="1" <?php if ($cli_pesquisaClientes == 1) { ?> checked<?php } ?>></th>
                    <td>Não, mas já fiz </td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="radio" name = "cli_pesquisaClientes" value="2" <?php if ($cli_pesquisaClientes == 2) { ?> checked<?php } ?>></th>
                    <td>Nunca fiz </td></label>
                </tr>

                <br>
                <br>
                <legend>7. RECURSOS HUMANOS</legend>
                <br>
                <label>7.1 Quantos colaboradores possui?</label><input type="text" name="r_qtdeColaboradores" value="<?php echo $r_qtdeColaboradores; ?>" size=10><br><br>

                <label>7.2 No último ano seus colaboradores participaram de treinamento?</label>
                <br>
                <tr>
                <label><th class="span1"><input type="radio" name = "r_treinamento" value = "0" <?php if ($r_treinamento == 0) { ?> checked<?php } ?>></th>
                    <td>Sim. Em que área?<input type="text" name="r_area" value="<?php echo $r_area; ?>" size=30></label></td>
                </tr>

                <tr>
                <label><th class="span1"><input type="radio" name = "r_treinamento" value = "1" <?php if ($r_treinamento == 1) { ?> checked<?php } ?>></th>
                    <td>Não </td></label>
                </tr><br><br> 

                <label>7.3 Qual a escolaridade dos que trabalham na empresa?</label><br>
                <tr>
                <label><th class="span1"><input type="radio" name = "r_escolaridade" value = "0" <?php if ($r_escolaridade == 0) { ?> checked<?php } ?>></th>
                    <td>Segundo grau </td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="radio" name = "r_escolaridade" value = "1" <?php if ($r_escolaridade == 1) { ?> checked<?php } ?>></th>
                    <td>Superior </td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="radio" name = "r_escolaridade" value = "2" <?php if ($r_escolaridade == 2) { ?> checked<?php } ?>></th>
                    <td>Pós-graduação</td></label>
                </tr> <br><br>

                <label>7.4 Que critérios utiliza para contratação de colaboradores?</label><br>
                <tr>
                <label><th class="span1"><input type="checkbox" name = "r_indicacao" value = "1" <?php if ($r_indicacao == 1) { ?> checked<?php } ?>></th>
                    <td>Indicação </td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "r_entrevista" value = "1" <?php if ($r_entrevista == 1) { ?> checked<?php } ?>></th>
                    <td>Entrevisa </td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "r_analCurEnt" value = "1" <?php if ($r_analCurEnt == 1) { ?> checked<?php } ?>></th>
                    <td>Análise de Currículo e Entrevista</td></label>
                </tr> <br><br>

                <label>7.5 Quais são os fatores prioritários na escolha de um candidato? Enumerar por ordem de importância.</label><br>
                <tr>
                <label><th class="span1"><input type="text" name="r_aparencia" value="<?php echo $r_aparencia; ?>" size=1></th>
                    <td>Aparência </td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="text" name = "r_boaVontade" value = "<?php echo $r_boaVontade; ?>" size=1></th>
                    <td>Boa vontade </td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="text" name = "r_experiencia" value = "<?php echo $r_experiencia; ?>" size=1></th>
                    <td>Experiência</td></label>
                </tr> <br><br>

                <label>7.6 Que tipo de atividades realiza para manter seus funcionários motivados?</label><br>
                <tr>
                <label><th class="span1"><input type="radio" name = "r_tipoAtividade" value = "0" <?php if ($r_tipoAtividade == 0) { ?> checked<?php } ?>></th>
                    <td>Festas especiais </td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="radio" name = "r_tipoAtividade" value = "1" <?php if ($r_tipoAtividade == 1) { ?> checked<?php } ?>></th>
                    <td>Participação no lucro </td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="radio" name = "r_tipoAtividade" value = "2" <?php if ($r_tipoAtividade == 2) { ?> checked<?php } ?>></th>
                    <td>Outros: </td></label><input type="text" name="r_outrasAtividades" value="<?php echo $r_outrasAtividades; ?>" size=30>
                </tr> <br><br>    

                <label>7.7 Quantas demissões X Contratações por ano? Por quê?</label><br>
                <input type="text" name="r_quantasDemContrAno" value="<?php echo $r_quantasDemContrAno; ?>" size=100><br>

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
                                        <input type="text" name="a_fluxoCaixaManual"  placeholder='' class="form-control" value="<?php echo $a_fluxoCaixaManual; ?>" size="3" />
                                    </td>
                                    <td>
                                        <input type="text" name="a_fluxoCaixaInfo" placeholder='' class="form-control" value="<?php echo $a_fluxoCaixaInfo; ?>" size="8"/>
                                    </td>
                                    <td>
                                        Adm. de Compras
                                    </td>           
                                    <td>
                                        <input type="text" name="a_admComprasManual"  placeholder='' class="form-control" value="<?php echo $a_admComprasManual; ?>" size="3"/>
                                    </td>
                                    <td>
                                        <input type="text" name="a_admComprasInfo"  placeholder='' class="form-control" value="<?php echo $a_admComprasInfo; ?>" size="8" />
                                    </td>
                                </tr>

                                <tr id='addr1'>
                                    <td>
                                        Controle de Estoques
                                    </td>
                                    <td>
                                        <input type="text" name="a_controleEstoqueManual"  placeholder='' class="form-control" value="<?php echo $a_controleEstoqueManual; ?>" size="3"/>
                                    </td>
                                    <td>
                                        <input type="text" name="a_controleEstoqueInfo" placeholder='' class="form-control" value="<?php echo $a_controleEstoqueInfo; ?>" size="8"/>
                                    </td>
                                    <td>
                                        Adm. de Vendas
                                    </td>
                                    <td>
                                        <input type="text" name="a_admVendasManual"  placeholder='' class="form-control" value="<?php echo $a_admVendasManual; ?>" size="3"/>
                                    </td>
                                    <td>
                                        <input type="text" name="a_admVendasInfo"  placeholder='' class="form-control" value="<?php echo $a_admVendasInfo; ?>" size="8"/>
                                    </td>
                                </tr>

                                <tr id='addr2'>
                                    <td>
                                        Contas a pagar
                                    </td>
                                    <td>
                                        <input type="text" name="a_contasPagarManual"  placeholder='' class="form-control" value="<?php echo $a_contasPagarManual; ?>" size="3"/>
                                    </td>
                                    <td>
                                        <input type="text" name="a_contasPagarInfo" placeholder='' class="form-control" value="<?php echo $a_contasPagarInfo; ?>" size="8"/>
                                    </td>   
                                    <td>
                                        Faturamento
                                    </td>
                                    <td>
                                        <input type="text" name="a_fatManual"  placeholder='' class="form-control" value="<?php echo $a_fatManual; ?>" size="3"/>
                                    </td> 
                                    <td>
                                        <input type="text" name="a_fatInfo"  placeholder='' class="form-control" value="<?php echo $a_fatInfo; ?>" size="8"/>
                                    </td>
                                </tr>

                                <tr id='addr3'>
                                    <td>
                                        Contas a receber
                                    </td>
                                    <td>
                                        <input type="text" name="a_contasReceberManual"  placeholder='' class="form-control" value="<?php echo $a_contasReceberManual; ?>" size="3"/>
                                    </td>
                                    <td>
                                        <input type="text" name="a_contasReceberInfo" placeholder='' class="form-control" value="<?php echo $a_contasReceberInfo; ?>" size="8"/>
                                    </td>   
                                    <td>
                                        Outros:<input type="text" name="a_descOutrosTipos"  placeholder='' class="form-control" value="<?php echo $a_descOutrosTipos; ?>" size="3"/>
                                    </td>
                                    <td>
                                        <input type="text" name="a_outrosTiposSelecionadoManual"  placeholder='' class="form-control" value="<?php echo $a_outrosTiposSelecionadoManual; ?>" size="3"/>
                                    </td> 
                                    <td>
                                        <input type="text" name="a_outrosTiposSelecionadoInfo"  placeholder='' class="form-control" value="<?php echo $a_outrosTiposSelecionadoInfo; ?>" size="8"/>
                                    </td>
                                </tr>            
                            </tbody>
                        </table>
                    </div>
                </div><br>
                <label>8.2 Realiza Planejamentos?</label>
                <br>
                <tr>
                <label><th class="span1"><input type="radio" name = "a_planejamento" value = "0" <?php if ($a_planejamento == 0) { ?> checked<?php } ?>></th>
                    <td>Sim. Em que áreas?<input type="text" name="a_area" value="<?php echo $a_area; ?>" size=30></label></td>
                </tr>

                <tr>
                <label><th class="span1"><input type="radio" name = "a_planejamento" value = "1" <?php if ($a_planejamento == 1) { ?> checked<?php } ?>></th>
                    <td>Não </td></label>
                </tr><br><br> 

                <label>8.3 Trabalha ou já obteve recursos de terceiros?</label>
                <br>
                <tr>
                <label><th class="span1"><input type="radio" name = "a_trabalhaRecursoTerc" value = "0" <?php if ($a_trabalhaRecursoTerc == 0) { ?> checked<?php } ?>></th>
                    <td>Não </td></label>
                </tr>
                <tr>
                <label><th class="span1"><input type="radio" name = "a_trabalhaRecursoTerc" value = "1" <?php if ($a_trabalhaRecursoTerc == 1) { ?> checked<?php } ?>></th>
                    <td>Sim </td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "a_chequeEspecial" value = "1" <?php if ($a_chequeEspecial == 1) { ?> checked<?php } ?>></th>
                    <td>Cheque Especial</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "a_emprestimo" value = "1" <?php if ($a_emprestimo == 1) { ?> checked<?php } ?>></th>
                    <td>Empréstimo</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "a_factoring" value = "1" <?php if ($a_factoring == 1) { ?> checked<?php } ?>></th>
                    <td>Factoring</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "a_outros" value = "1" <?php if ($a_outros == 1) { ?> checked<?php } ?>></th>
                    <td>Outros <input type="text" name="a_descOutrosRecursos" value="<?php echo $a_descOutrosRecursos; ?>" size=50></td></label>
                </tr>
                <br>
                <BR>
                <label>8.4 Quais são seus maiores gastos?</label>
                <br>
                <tr>
                <label><th class="span1"><input type="checkbox" name = "a_frete" value = "1" <?php if ($a_frete == 1) { ?> checked<?php } ?>></th>
                    <td>Frete</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "a_energiaEletrica" value = "1" <?php if ($a_energiaEletrica == 1) { ?> checked<?php } ?>></th>
                    <td>Energia Elétrica</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "a_folhaPagto" value = "1" <?php if ($a_folhaPagto == 1) { ?> checked<?php } ?>></th>
                    <td>Folha de Pagamento</td></label>
                </tr>

                <br>
                <tr>
                <label><th class="span1"><input type="checkbox" name = "a_financeiros" value = "1" <?php if ($a_financeiros == 1) { ?> checked<?php } ?>></th>
                    <td>Financeiros</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "a_manutGeral" value = "1" <?php if ($a_manutGeral == 1) { ?> checked<?php } ?>></th>
                    <td>Manutenção Geral</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "a_impostos" value = "1" <?php if ($a_impostos == 1) { ?> checked<?php } ?>></th>
                    <td>Impostos</td></label>
                </tr>

                <br>
                <tr>
                <label><th class="span1"><input type="checkbox" name = "a_aluguel" value = "1" <?php if ($a_aluguel == 1) { ?> checked<?php } ?>></th>
                    <td>Aluguel</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "a_outrosGastos" value = "1" <?php if ($a_outrosGastos == 1) { ?> checked<?php } ?>></th>
                    <td>Outros, quais? <input type="text" name="a_descOutrosGastos" value="<?php echo $a_descOutrosGastos; ?>" size=50></td></label>
                </tr>

                <br>  
                <br> 
                <legend>9. JURIDICO</legend>
                <br> 
                <label>  9.1 Você conhece todos os impostos devidos pela sua empresa?</label><br>
                <tr>
                <label><th class="span1"><input type="radio" name = "j_impostos" value = "0" <?php if ($a_outrosGastos == 1) { ?> checked<?php } ?>></th>
                    <td>Sim</td></label>
                </tr>
                <tr>
                <label><th class="span1"><input type="radio" name = "j_impostos" value = "1" <?php if ($a_outrosGastos == 1) { ?> checked<?php } ?>></th>
                    <td>Não</td></label>
                </tr><br><br>

                <label>9.2 Você já recebeu alguma autuação de fiscalização?</label><br>
                <tr>
                <label><th class="span1"><input type="radio" name = "j_autuacaoFiscal" value = "0" <?php if ($j_autuacaoFiscal == 0) { ?> checked<?php } ?>></th>
                    <td>Sim</td></label>
                </tr>
                <tr>
                <label><th class="span1"><input type="radio" name = "j_autuacaoFiscal" value = "1" <?php if ($j_autuacaoFiscal == 1) { ?> checked<?php } ?>></th>
                    <td>Não</td></label>
                </tr><br><br>

                <label>9.3 Sua empresa está respondendo alguma ação judicial, inclusive trabalhista?</label>
                <BR>
                <tr>
                <label><th class="span1"><input type="radio" name = "j_acaoJudicial" value = "0" <?php if ($j_acaoJudicial == 0) { ?> checked<?php } ?>></th>
                    <td>Sim</td></label>
                </tr>
                <tr>
                <label><th class="span1"><input type="radio" name = "j_acaoJudicial" value = "1" <?php if ($j_acaoJudicial == 1) { ?> checked<?php } ?>></th>
                    <td>Não</td></label>
                </tr><br><br>


                <label>9.4 Suas tratativas com seus fornecedores são:</label><br>
                <tr>
                <label><th class="span1"><input type="radio" name = "j_tratativas" value = "0" <?php if ($j_tratativas == 0) { ?> checked<?php } ?>></th>
                    <td>Verbais</td></label>
                </tr>
                <tr>
                <label><th class="span1"><input type="radio" name = "j_tratativas" value = "1" <?php if ($j_tratativas == 1) { ?> checked<?php } ?>></th>
                    <td>Com contratos</td></label>
                </tr><br><br>

                <label>9.5 Como você realiza suas cobranças na empresa?</label><br>
                <tr>
                <label><th class="span1"><input type="checkbox" name = "j_empresaCobranca" value = "1" <?php if ($j_empresaCobranca == 1) { ?> checked<?php } ?>></th>
                    <td>Empresa de cobrança</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "j_colaborador" value = "1" <?php if ($j_colaborador == 1) { ?> checked<?php } ?>></th>
                    <td>Colaborador</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "j_pessoalmente" value = "1" <?php if ($j_pessoalmente == 1) { ?> checked<?php } ?>></th>
                    <td>Pessoalmente</td></label>
                </tr>

                <tr>
                <label><th class="span1"><input type="checkbox" name = "j_outrasCobrancas" value = "1" <?php if ($j_outrasCobrancas == 1) { ?> checked<?php } ?>></th>
                    <td>Outros</td></label>
                </tr>
                </br>
                <BR>

                <label>9.6 Tem assessoria jurídica?</label><br>
                <tr>
                <label><th class="span1"><input type="radio" name = "j_assessoriaJuridica" value = "0" <?php if ($j_assessoriaJuridica == 0) { ?> checked<?php } ?>></th>
                    <td>Sim</td></label>
                </tr>
                <tr>
                <label><th class="span1"><input type="radio" name = "j_assessoriaJuridica" value = "1" <?php if ($j_assessoriaJuridica == 1) { ?> checked<?php } ?>></th>
                    <td>Não</td></label>
                </tr><br><br>

                <label>Observação:</label>
                <br>
                <input type="text" name="j_observacao" value="<?php echo $j_observacao; ?>" size=100><br>
                <br>
                <br>
            </div>            
          </div>
             <button type="submit" id ="btn">Confirmar</button>
             <button type="reset" id = "btn">Cancelar</button>
             <a href="listar-empresas.php" id ="btn">Voltar</a>
        </form>