<?php

class Controller_Preco extends Controller{

	public function cadastrar(){
		$view = new View();
	        
        if ($_POST) {
            $vo = new Vo_Preco();
            $vo->setFormacaoPreco($_POST['formacaoPreco']);
            $vo->setOutraFormacaoPreco($_POST['outraFormacaoPreco']);
            $vo->setPrecoConcorrencia($_POST['precoConcorrencia']);
            $vo->setNumOrdem($_POST['numOrdem']);
  
            $model = new Model_Preco();
            try {
                $pk = $model->cadastrar($vo);
            }
            catch (Exception $exc) {
                $view->add('erro', $exc->getMessage());
            }
        }
        
        $view->desenhar('preco/cadastrarPreco');
	}
	
	public function listar(){
	
	}
	
	public function apagar(){
	
	}
}
?>