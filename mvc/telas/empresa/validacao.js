function focar(campo, foco) {
    if (foco == '') {
        return campo;
    }
    return foco;
}


function validaEntrada1(){
    document.cadastroCiape.m_outros.checked = true;
}
function validaSaida1(){
    if (document.cadastroCiape.m_descricaoOutrosPontosFortes.value == "") {
            document.cadastroCiape.m_outros.checked = false;
        }
}
function validaEntrada2(){
    document.cadastroCiape.m_mOutros.checked = true;
}
function validaSaida2(){
    if (document.cadastroCiape.m_mOutrosPontosDescricao.value == "") {
            document.cadastroCiape.m_mOutros.checked = false;
        }
}
function validaEntrada3(){
    document.cadastroCiape.m_OutrosMeiosComunicacao.checked = true;
}
function validaSaida3(){
    if (document.cadastroCiape.m_OutrosMeiosComunicacaoDesc.value == "") {
            document.cadastroCiape.m_OutrosMeiosComunicacao.checked = false;
        }
}
function validaEntrada4(){
    document.cadastroCiape.v_outraFormaPagto.checked = true;
}
function validaSaida4(){
    if (document.cadastroCiape.v_outraFormaPagtoDesc.value == "") {
            document.cadastroCiape.v_outraFormaPagto.checked = false;
        }
}
function validarFormulario() {
    var ok = true;
    var msg = '';
    var foco = '';

    
    if (document.cadastroCiape.e_razaoSocial.value == "") {
        ok = false;
        msg += 'Informe a Razão Social \n';
        document.cadastroCiape.e_razaoSocial.focus();
        foco = focar('e_razaoSocial', foco);
    }
    if (document.cadastroCiape.e_cnpj.value == "") {
        ok = false;
        msg += 'Informe o CNPJ \n';
        foco = focar('e_cnpj', foco);
    }
    if (document.cadastroCiape.e_dtFundacao.value == "") {
        ok = false;
        msg += 'Informe a Data de Fundação \n';
        foco = focar('e_dtFundacao', foco);
    }
    if (document.cadastroCiape.e_ramoAtividade.value == "") {
        ok = false;
        msg += 'Informe o Ramo de Atividade \n';
        foco = focar('e_ramoAtividade', foco);
    }
    if (document.cadastroCiape.e_endereco.value == "") {
        ok = false;
        msg += 'Informe o Endereço da Empresa \n';
        foco = focar('e_endereco', foco);
    }
    if (document.cadastroCiape.e_bairro.value == "") {
        ok = false;
        msg += 'Informe o Bairro onde está localizada a empresa \n';
        foco = focar('e_bairro', foco);
    }
    if (document.cadastroCiape.e_cep.value == "") {
        ok = false;
        msg += 'Informe o CEP da empresa \n';
        foco = focar('e_cep', foco);
    }
    if (document.cadastroCiape.e_fone.value == "") {
        ok = false;
        msg += 'Informe o Telefone da Empresa \n';
        foco = focar('e_fone', foco);
    }
    if (document.cadastroCiape.e_email.value == "") {
        ok = false;
        msg += 'Informe o E-mail da Empresa \n';
        foco = focar('e_email', foco);
    }
    if (document.cadastroCiape.m_concorrenteA.value == "") {
        if (document.cadastroCiape.m_concorrenteB.value == "") {
            if (document.cadastroCiape.m_concorrenteC.value == "") {
                ok = false;
                msg += 'Informe pelo menos um concorrente \n';
                foco = focar('m_concorrenteA', foco);
            }
        }
    }
    if (document.cadastroCiape.m_atendimento.checked == false) {
        if (document.cadastroCiape.m_estacionamento.checked == false) {
            if (document.cadastroCiape.m_preco.checked == false) {
                if (document.cadastroCiape.m_variedade.checked == false) {
                    if (document.cadastroCiape.m_espacoFisico.checked == false) {
                        if (document.cadastroCiape.m_localizacao.checked == false) {
                            if (document.cadastroCiape.m_qualidade.checked == false) {
                                if (document.cadastroCiape.m_outros.checked == false) {
                                    ok = false;
                                    msg += 'Informe pelo menos um ponto forte em relação a concorrência \n';
                                    foco = focar('m_descricaoOutrosPontosFortes', foco);
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    if (document.cadastroCiape.m_outros.checked == true) {
        if (document.cadastroCiape.m_descricaoOutrosPontosFortes.value == "") {
            ok = false;
            msg += 'Informe pelo menos um ponto forte em relação a concorrência \n';
            foco = focar('m_descricaoOutrosPontosFortes', foco);
        }
    }
    
    if (document.cadastroCiape.m_mAtendimento.checked == false) {
        if (document.cadastroCiape.m_mEstacionamento.checked == false) {
            if (document.cadastroCiape.m_mPreco.checked == false) {
                if (document.cadastroCiape.m_mVariedade.checked == false) {
                    if (document.cadastroCiape.m_mEspacoFisico.checked == false) {
                        if (document.cadastroCiape.m_mLocalizacao.checked == false) {
                            if (document.cadastroCiape.m_mQualidade.checked == false) {
                                if (document.cadastroCiape.m_mOutros.checked == false) {
                                    ok = false;
                                    msg += 'Informe pelo menos um ponto para melhoria em relação a concorrência \n';
                                    foco = focar('m_mOutrosPontosDescricao', foco);
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    if (document.cadastroCiape.m_mOutros.checked == true) {
        if (document.cadastroCiape.m_mOutrosPontosDescricao.value == "") {
            ok = false;
            msg += 'Informe pelo menos um ponto para melhoria em relação a concorrência \n';
            foco = focar('m_mOutrosPontosDescricao', foco);
        }
    }
    
    if(document.cadastroCiape.m_promocao[0].checked == false){
       if(document.cadastroCiape.m_promocao[1].checked == false){
           if(document.cadastroCiape.m_promocao[2].checked == false){
               ok = false;
                msg += 'Informe as promoções da empresa \n';
                foco = focar('m_promocao', foco);
           }
       } 
    }
    
    if (document.cadastroCiape.m_radio.checked == false) {
        if (document.cadastroCiape.m_jornal.checked == false) {
            if (document.cadastroCiape.m_panfleto.checked == false) {
                if (document.cadastroCiape.m_OutrosMeiosComunicacao.checked == false) {
                    ok = false;
                    msg += 'Informe pelo menos um meio de comunicação \n';
                    foco = focar('m_OutrosMeiosComunicacao', foco);
                }
            }
        }
    }
    if (document.cadastroCiape.m_OutrosMeiosComunicacao.checked == true) {
        if (document.cadastroCiape.m_OutrosMeiosComunicacaoDesc.value == "") {
            ok = false;
            msg += 'Informe o outro meio de comunicação \n';
            foco = focar('m_OutrosMeiosComunicacaoDesc', foco);
        }
    }
    
    if(document.cadastroCiape.p_formacaoPreco[0].checked == false){
       if(document.cadastroCiape.p_formacaoPreco[1].checked == false){
           if(document.cadastroCiape.p_formacaoPreco[2].checked == false){
               ok = false;
                msg += 'Informe como forma os preços de seus produtos \n';
                foco = focar('p_formacaoPreco', foco);
           }
       } 
    }
    if(document.cadastroCiape.p_formacaoPreco[2].checked == true){
        if (document.cadastroCiape.p_outraFormacaoPreco.value == "") {
            ok = false;
            msg += 'Informe qual a outra maneira como forma os preços de seus produtos  \n';
            foco = focar('p_outraFormacaoPreco', foco);
        }
    }
    
    if(document.cadastroCiape.p_precoConcorrencia[0].checked == false){
       if(document.cadastroCiape.p_precoConcorrencia[1].checked == false){
           if(document.cadastroCiape.p_precoConcorrencia[2].checked == false){
                ok = false;
                msg += 'Informe como estão seus preços em relação a concorrência \n';
                foco = focar('p_precoConcorrencia', foco);
           }
       } 
    }
    
    if(document.cadastroCiape.v_periodoInicial.value == ""){
        if(document.cadastroCiape.v_periodoFinal.value == ""){
            ok = false;
            msg += 'Informe o período inicial e final de maior movimento \n';
            foco = focar('v_periodoInicial', foco);
        }
    }
    
    if (document.cadastroCiape.v_seg.checked == false) {
        if (document.cadastroCiape.v_ter.checked == false) {
            if (document.cadastroCiape.v_qua.checked == false) {
                if (document.cadastroCiape.v_qui.checked == false) {
                    if (document.cadastroCiape.v_sex.checked == false) {
                        if (document.cadastroCiape.v_sab.checked == false) {
                            if (document.cadastroCiape.v_dom.checked == false) {
                                ok = false;
                                msg += 'Informe pelo menos um dia da semana de maior movimento \n';
                                foco = focar('v_seg', foco);
                            }
                        }
                    }
                }
            }
        }
    }
    
    if (document.cadastroCiape.v_manha.checked == false) {
        if (document.cadastroCiape.v_tarde.checked == false) {
            if (document.cadastroCiape.v_noite.checked == false) {
                    ok = false;
                    msg += 'Informe pelo menos um horário de maior movimento \n';
                    foco = focar('v_manha', foco);
            }
        }
    }
    
    if (document.cadastroCiape.v_cheque.checked == false) {
        if (document.cadastroCiape.v_ticket.checked == false) {
            if (document.cadastroCiape.v_cartao.checked == false) {
                if (document.cadastroCiape.v_avista.checked == false) {
                    if (document.cadastroCiape.v_caderneta.checked == false) {
                        if (document.cadastroCiape.v_outraFormaPagto.checked == false) {
                            ok = false;
                            msg += 'Informe pelo menos uma das formas de pagamento oferecidas aos clientes \n';
                            foco = focar('v_cheque', foco);
                        }
                    }
                }
            }
        }
    }
    if (document.cadastroCiape.v_outraFormaPagto.checked == true) {
        if (document.cadastroCiape.v_outraFormaPagtoDesc.value == "") {
            ok = false;
            msg += 'Informe a outra forma de pagamento oferecida ao cliente \n';
            foco = focar('v_outraFormaPagtoDesc', foco);
        }
    }
    
    if(document.cadastroCiape.cli_vendeEmpresas[0].checked == false){
       if(document.cadastroCiape.cli_vendeEmpresas[1].checked == false){
           ok = false;
           msg += 'Informe se vende para empresas \n';
           foco = focar('cli_vendeEmpresas', foco);
       } 
    }
   if(document.cadastroCiape.cli_vendeEmpresas[0].checked == true){
        if (document.cadastroCiape.cli_percTotalFat.value == "") {
            ok = false;
            msg += 'Informe quantos por cento a venda para empresas representa no seu faturamento  \n';
            foco = focar('cli_percTotalFat', foco);
        }
    }
    if(document.cadastroCiape.r_treinamento[0].checked == false){
        if(document.cadastroCiape.r_treinamento[1].checked == false){
            ok = false;
            msg += 'Informe se seus colaboradores receberam treinamentos  \n';
            foco = focar('r_treinamento', foco);
        }
    }
    if(document.cadastroCiape.r_treinamento[0].checked == true){
        if(document.cadastroCiape.r_area.value == ''){
            ok = false;
            msg += 'Informe qual treinamento seus colaboradores tiveram  \n';
            foco = focar('r_area', foco);
        }
    }
    if(document.cadastroCiape.r_indicacao.checked == false){
        if(document.cadastroCiape.r_entrevista.checked == false){
            if(document.cadastroCiape.r_analCurEnt.checked == false){
                ok = false;
                msg += 'Informe qual método utiliza para contratação  \n';
                foco = focar('r_indicacao', foco);
            }
        }
    }
    
    if(document.cadastroCiape.a_fluxoCaixaManual.value != ''){
        if(document.cadastroCiape.a_fluxoCaixaInfo.value != ''){
                ok = false;
                msg += 'Informe somente um método para Fluxo de caixa  \n';
                foco = focar('a_fluxoCaixaInfo', foco);
        }
    }
    if(document.cadastroCiape.a_admComprasManual.value != ''){
        if(document.cadastroCiape.a_admComprasInfo.value != ''){
                ok = false;
                msg += 'Informe somente um método para Adm. de Compras  \n';
                foco = focar('a_admComprasInfo', foco);
        }
    }
    if(document.cadastroCiape.a_controleEstoqueManual.value != ''){
        if(document.cadastroCiape.a_controleEstoqueInfo.value != ''){
                ok = false;
                msg += 'Informe somente um método para Controle de Estoques  \n';
                foco = focar('a_controleEstoqueInfo', foco);
        }
    }
    if(document.cadastroCiape.a_admVendasManual.value != ''){
        if(document.cadastroCiape.a_admVendasInfo.value != ''){
                ok = false;
                msg += 'Informe somente um método para Adm. de Vendas  \n';
                foco = focar('a_admVendasInfo', foco);
        }
    }
    if(document.cadastroCiape.a_contasPagarManual.value != ''){
        if(document.cadastroCiape.a_contasPagarInfo.value != ''){
                ok = false;
                msg += 'Informe somente um método para Contas a pagar  \n';
                foco = focar('a_contasPagarInfo', foco);
        }
    }
    if(document.cadastroCiape.a_fatManual.value != ''){
        if(document.cadastroCiape.a_fatInfo.value != ''){
                ok = false;
                msg += 'Informe somente um método para Faturamento  \n';
                foco = focar('a_fatInfo', foco);
        }
    }
    if(document.cadastroCiape.a_contasReceberManual.value != ''){
        if(document.cadastroCiape.a_contasReceberInfo.value != ''){
                ok = false;
                msg += 'Informe somente um método para Contas a receber  \n';
                foco = focar('a_contasReceberInfo', foco);
        }
    }
    if(document.cadastroCiape.a_descOutrosTipos.value != ''){
        if(document.cadastroCiape.a_outrosTiposSelecionadoManual.value != ''){
            if(document.cadastroCiape.a_outrosTiposSelecionadoInfo.value != ''){
                ok = false;
                msg += 'Informe somente um método para Outros tipos de controle  \n';
                foco = focar('a_outrosTiposSelecionadoInfo', foco);
            }
        }
    }
    
    if(document.cadastroCiape.a_planejamento[0].checked == false){
        if(document.cadastroCiape.a_planejamento[1].checked == false){
            ok = false;
            msg += 'Informe se realiza planejamentos  \n';
            foco = focar('r_treinamento', foco);
        }
    }
    if(document.cadastroCiape.a_planejamento[0].checked == true){
        if(document.cadastroCiape.a_area.value == ''){
            ok = false;
            msg += 'Informe qual planejamento realiza  \n';
            foco = focar('a_area', foco);
        }
    }
    
    if(document.cadastroCiape.a_trabalhaRecursoTerc[0].checked == false){
        if(document.cadastroCiape.a_trabalhaRecursoTerc[1].checked == false){
            ok = false;
            msg += 'Informe se trabalha com recursos de terceiros  \n';
            foco = focar('a_trabalhaRecursoTerc', foco);
        }
    }
    if(document.cadastroCiape.a_trabalhaRecursoTerc[1].checked == true){
        if(document.cadastroCiape.a_chequeEspecial.checked == false){
          if(document.cadastroCiape.a_emprestimo.checked == false){
            if(document.cadastroCiape.a_factoring.checked == false){
              if(document.cadastroCiape.a_outros.checked == false){
                  ok = false;
                  msg += 'Informe quais os recursos de terceiro que utiliza  \n';
                  foco = focar('a_chequeEspecial', foco);
              } 
            }
          }  
        }
    }
    if(document.cadastroCiape.a_outros.checked == true){
        if(document.cadastroCiape.a_descOutrosRecursos.value == ''){
            ok = false;
            msg += 'Informe qual o outro recurso de terceiro que utiliza  \n';
            foco = focar('a_descOutrosRecursos', foco);
        }
    }
    if(document.cadastroCiape.a_frete.checked == false){
        if(document.cadastroCiape.a_energiaEletrica.checked == false){
            if(document.cadastroCiape.a_folhaPagto.checked == false){
                if(document.cadastroCiape.a_financeiros.checked == false){
                    if(document.cadastroCiape.a_manutGeral.checked == false){
                        if(document.cadastroCiape.a_impostos.checked == false){
                            if(document.cadastroCiape.a_aluguel.checked == false){
                                if(document.cadastroCiape.a_outrosGastos.checked == false){
                                    ok = false;
                                    msg += 'Informe qual seu maior gasto  \n';
                                    foco = focar('a_frete', foco);
                                }
                            }
                        }
                    }
                }
            }   
        }
    }
    
    if(document.cadastroCiape.a_outrosGastos.checked == true){
       if(document.cadastroCiape.a_descOutrosGastos.value == ''){
            ok = false;
            msg += 'Informe qual outro gasto voce possui  \n';
            foco = focar('a_descOutrosGastos', foco);
       }
    }
    
    if(document.cadastroCiape.j_impostos[0].checked == false){
        if(document.cadastroCiape.j_impostos[1].checked == false){
            ok = false;
            msg += 'Informe se conhece os impostos  \n';
            foco = focar('j_impostos', foco);
        }
    }
    if(document.cadastroCiape.j_autuacaoFiscal[0].checked == false){
        if(document.cadastroCiape.j_autuacaoFiscal[1].checked == false){
            ok = false;
            msg += 'Informe se ja recebeu alguma autuação judicial  \n';
            foco = focar('j_autuacaoFiscal', foco);
        }
    }
    if(document.cadastroCiape.j_acaoJudicial[0].checked == false){
        if(document.cadastroCiape.j_acaoJudicial[1].checked == false){
            ok = false;
            msg += 'Informe se esta respondendo alguma ação judicial  \n';
            foco = focar('j_acaoJudicial', foco);
        }
    }
    if(document.cadastroCiape.j_assessoriaJuridica[0].checked == false){
        if(document.cadastroCiape.j_assessoriaJuridica[1].checked == false){
            ok = false;
            msg += 'Informe se possui assessoria juridica  \n';
            foco = focar('j_assessoriaJuridica', foco);
        }
    }
    
    
    if (ok == false) {
        window.alert(msg);
        document.getElementById(foco).focus();
    }else{
        window.alert('Cadastrado com sucesso!');
    }
    
    return ok;
}