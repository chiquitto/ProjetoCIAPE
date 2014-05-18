<?php

class Controller_Marketing extends Controller{

	public function cadastrar(){
		$view = new View();
        
        if ($_POST) {
            $vo = new Vo_Marketing();
            $vo->setVisitaConcorrencia($_POST['visitaConcorrencia']);
            $vo->setIdConcorrente($_POST['idConcorrente']);
            $vo->setPontosFortes($_POST['pontosFortes']);
            $vo->setOutrosPontosFortes($_POST['outrosPontosFortes']);
            $vo->setPontosMelhoria($_POST['pontosMelhoria']);
            $vo->setOutrosPontosMelhoria($_POST['outrosPontosMelhoria']);
            $vo->setPromocao($_POST['promocao']);
            $vo->setMeiosComunicao($_POST['meiosComunicao']);
            $vo->setOutrosMeiosComunicacao($_POST['OutrosMeiosComunicacao']);
            $vo->setSinalizacao($_POST['sinalizacao']);
            $vo->setEspacaoPromocional($_POST['espacaoPromocional']);
            $vo->setNumOrdem($_POST['numOrdem']);
            $vo->setIdProduto($_POST['idProduto']);
 
            $model = new Model_Marketing();
            try {
                $pk = $model->cadastrar($vo);
            }
            catch (Exception $exc) {
                $view->add('erro', $exc->getMessage());
            }
        }
        
        $view->desenhar('marketing/cadastrarMarketing');	
	}
	
	public function listar(){
	
	}
	
	public function apagar(){
	
	}
}
?>