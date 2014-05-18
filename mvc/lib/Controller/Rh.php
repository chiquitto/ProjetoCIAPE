<?php

class Controller_Rh extends Controller{
	
	public function cadastrar(){
		$view = new View();
        
        if ($_POST) {
            $vo = new Vo_Rh();
            $vo->setQtdeColaboradores($_POST['qtdeColaboradores']);
            $vo->setTreinamento($_POST['treinamento']);
            $vo->setArea($_POST['area']);
            $vo->setEscolaridade($_POST['escolaridade']);
            $vo->setContratacao($_POST['contratacao']);
            $vo->setFatores($_POST['fatores']);
            $vo->setTipoAtividade($_POST['tipoAtividade']);
            $vo->setOutrasAtividades($_POST['outrasAtividades']);
            $vo->setQtdeDemissao($_POST['qtdeDemissao']);
            $vo->setQtdeContratacao($_POST['qtdeContratacao']);
            $vo->setMotivo($_POST['motivo']);
            $vo->setNumOrdem($_POST['numOrdem']);
 
            $model = new Model_Rh();
            try {
                $pk = $model->cadastrar($vo);
            }
            catch (Exception $exc) {
                $view->add('erro', $exc->getMessage());
            }
        }
        
        $view->desenhar('rh/cadastrarRh');
	
	}
	
	public function listar(){
	
	}
	
	public function apagar(){
	
	}
}
?>