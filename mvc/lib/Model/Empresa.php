<?php

class Model_Empresa
extends Model {
    public function cadastrar(Vo_Empresa $dados) {	

        if ($dados->getE_razaoSocial() == '') {
            throw new Exception('Informe a Razão Social da empresa.', 1);
        }

        if ($dados->getE_cnpj() == '') {
            throw new Exception('Informe o CNPJ da empresa.', 2);
        }

        if ($dados->getE_dtFundacao() == '') {
            throw new Exception('Informe a Data de Fundação da empresa.', 3);
        }

        if ($dados->getE_ramoAtividade() == '') {
            throw new Exception('Informe o Ramo de Atividade da empresa.', 4);
        }

        if ($dados->getE_endereco() == '') {
            throw new Exception('Informe o Endereço da empresa.', 5);
        }

        if ($dados->getE_bairro() == '') {
            throw new Exception('Informe o Bairro localiza a empresa.', 6);
        }

        if ($dados->getE_cep() == '') {
            throw new Exception('Informe o Cep que localiza a empresa.', 7);
        }

        if ($dados->getE_fone() == '') {
            throw new Exception('Informe o telefone da empresa.', 8);
        }

        if ($dados->getE_email() == '') {
            throw new Exception('Informe o Email da empresa.', 9);
        }

        if ($dados->getM_concorrente() == '') {
            throw new Exception('Informe os concorrentes da empresa.', 10);
        }

        if ($dados->getM_atendimento() =! 1 || $dados->getM_estacionamento() =! 1 || $dados->getM_preco() =! 1 || $dados->getM_variedade() =! 1 || $dados->getM_espacoFisico() =! 1 || $dados->getM_localizacao() =! 1 || $dados->getM_qualidade() =! 1 || $dados->getM_outros() =! 1 || $dados->getM_descricaoOutrosPontosFortes() == '') {
            throw new Exception('Informe os seus pontos fortes em relação a concorrência.', 11);
        }

        if ($dados->getM_mAtendimento() =! 1 || $dados->getM_mEstacionamento() =! 1 || $dados->getM_mPreco() =! 1 || $dados->getM_mVariedade() =! 1 || $dados->getM_mEspacoFisico() =! 1 || $dados->getM_mLocalizacao() =! 1 || $dados->getM_mQualidade() =! 1 || $dados->getM_mOutros() =! 1 || $dados->getM_mOutrosPontosDescricao() == '') {
            throw new Exception('Informe os seus pontos para melhoria em relação a concorrência.', 12);
        }

        if ($dados->getM_promocao() =! 0 || $dados->getM_promocao() =! 1 || $dados->getM_promocao() =! 2) {
            throw new Exception('Informe as promoções da empresa.', 13);
        }

        if ($dados->getM_radio() =! 1 || $dados->getM_jornal() =! 1 || $dados->getM_panfleto() =! 1 || $dados->getM_outrosMeiosComunicacao() =! 1 || $dados->getM_outrosMeiosComunicacaoDesc() == '') {
            throw new Exception('Informe os meios que utiliza.', 14);
        }

        if ($dados->getP_formacaoPreco() =! 0 || $dados->getP_formacaoPreco() =! 1 || $dados->getP_formacaoPreco() =! 2 || $dados->getP_outraFormacaoPreco() == '') {
            throw new Exception('Informe como forma os preços de seus produtos.', 15);
        }

        if ($dados->getP_precoConcorrencia() =! 0 || $dados->getP_precoConcorrencia() =! 1 || $dados->getP_precoConcorrencia() =! 2) {
            throw new Exception('Informe como estão seus preços em relação a concorrência .', 16);
        }

        if ($dados->getV_seg() =! 1 || $dados->getV_ter() =! 1 || $dados->getV_qua() =! 1 || $dados->getV_qui() =! 1 || $dados->getV_sex() =! 1 || $dados->getV_sab() =! 1 || $dados->getV_dom() =! 1) {
            throw new Exception('Informe os dias da semana de maior movimento.', 17);
        }

        if ($dados->getV_manha() =! 1 || $dados->getV_tarde() =! 1 || $dados->getV_noite() =! 1) {
            throw new Exception('Informe os horários de maior movimento.', 18);
        }

        if ($dados->getV_cheque() =! 1 || $dados->getV_ticket() =! 1 || $dados->getV_cartao() =! 1 || $dados->getV_avista() =! 1 || $dados->getV_cardeneta() =! 1 || $dados->getV_outraFormaPagto() =! 1 || $dados->getV_outraFormaPagtoDesc() == '') {
            throw new Exception('Informe a forma de pagamento oferecidas aos clientes.', 19);
        }

        if ($dados->getCli_vendeEmpresas() =! 0 || $dados->getCli_vendeEmpresas() =! 1) {
            throw new Exception('Informe se vende para empresas.', 20);
        }

        if ($dados->getR_treinamento() =! 0 || $dados->getR_treinamento() =! 1) {
            throw new Exception('Informe se no último ano seus colaboradores participaram de treinamento.', 21);
        }

        if ($dados->getR_indicacao() =! 1 || $dados->getR_entrevista() =! 1 || $dados->getR_analCurEnt() =! 1) {
            throw new Exception('Informe que critérios utiliza para contratação de colaboradores.', 22);
        }

        if ($dados->getA_planejamento() =! 0 || $dados->getA_planejamento() =! 1) {
            throw new Exception('Informe se realiza Planejamentos.', 23);
        }

        if ($dados->getA_trabalhaRecursoTerc() =! 0 || $dados->getA_trabalhaRecursoTerc() =! 1) {
            throw new Exception('Informe se trabalha ou já obteve recursos de terceiros.', 24);
        }

        if ($dados->getA_trabalhaRecursoTerc() == 1) {
            if ($dados->getA_chequeEspecial() =! 1 || $dados->getA_emprestimo() =! 1 || $dados->getA_factoring() =! 1 || $dados->getA_outros() =! 1 || $dados->getA_descOutrosRecursos() == '') {
                throw new Exception('Informe os tipos de recursos que trabalha.', 25);
            }
        }

        if ($dados->getA_frete() =! 1 || $dados->getA_energiaEletrica() =! 1 || $dados->getA_folhaPagto() =! 1 || $dados->getA_financeiros() =! 1 || $dados->getA_manutGeral() =! 1 || $dados->getA_impostos() =! 1 || $dados->getA_aluguel() =! 1 || $dados->getA_outrosGastos() =! 1 || $dados->getA_descOutrosGastos() == '') {
            throw new Exception('Informe os seus maiores gastos.', 26);
        }

        if ($dados->getJ_impostos() =! 0 || $dados->getJ_impostos() =! 1) {
            throw new Exception('Informe se conhece todos os impostos devidos pela sua empresa.', 27);
        }

        if ($dados->getJ_autuacaoFiscal() =! 0 || $dados->getJ_autuacaoFiscal() =! 1) {
            throw new Exception('Informe se já recebeu alguma autuação de fiscalização.', 28);
        }

        if ($dados->getJ_acaoJudicial() =! 0 || $dados->getJ_acaoJudicial() =! 1) {
            throw new Exception('Informe se sua empresa está respondendo alguma ação judicial, inclusive trabalhista.', 29);
        }

        if ($dados->getJ_assessoriaJuridica() =! 0 || $dados->getJ_assessoriaJuridica() =! 1) {
            throw new Exception('Informe se tem assessoria jurídica.', 30);
        }
  
        $dao = new Dao_Empresa();
        $pk = $dao->create($dados);
    }
}