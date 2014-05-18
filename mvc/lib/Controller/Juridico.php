<?php

class Controller_Juridico extends Controller{
	
	public function cadastrar(){
		$view = new View();
        
        if ($_POST) {
            $vo = new Vo_Juridico();
            $vo->setImpostos($_POST['impostos']);
            $vo->setAutuacaoFiscal($_POST['autuacaoFiscal']);
            $vo->setAcaoJudicial($_POST['acaoJudicial']);
            $vo->setTratativas($_POST['tratativas']);
            $vo->setCobrancas($_POST['cobrancas']);
            $vo->setOutraCobranca($_POST['outraCobranca']);
            $vo->setAssessoriaJuridica($_POST['assessoriaJuridica']);
            $vo->setNumOrdem($_POST['numOrdem']);

            $model = new Model_Juridico();
            try {
                $pk = $model->cadastrar($vo);
            }
            catch (Exception $exc) {
                $view->add('erro', $exc->getMessage());
            }
        }
        
        $view->desenhar('juridico/cadastrarJuridico');
	
	}
	
	public function listar(){
	
	}
	
	public function apagar(){
	
	}
}
?>