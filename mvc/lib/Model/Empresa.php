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
        $dao = new Dao_Empresa();
        $pk = $dao->create($dados);
    }
}