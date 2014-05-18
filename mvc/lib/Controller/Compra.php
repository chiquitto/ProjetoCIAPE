<?php

class Controller_Compra extends Controller{

	//'razaoSocialFantasia', 'cidadeUf', 'produtos', 'loteMinimo', 'relacionamento', 'numOrdem', 'idvlrCompra');
	
	public function cadastrar(){
		$view = new View();
        
        if ($_POST) {
            $vo = new Vo_Compra();
            $vo->setRazaoSocialFantasia($_POST['razaoSocialFantasia']);
            $vo->setCidadeUf($_POST['cidadeUf']);
            $vo->setProdutos($_POST['produtos']);
            $vo->setLoteMinimo($_POST['loteMinimo']);
            $vo->setRelacionamento($_POST['relacionamento']);
            $vo->setNumOrdem($_POST['numOrdem']);
            $vo->setIdvlrCompra($_POST['idvlrCompra']);
 
            $model = new Model_Compra();
            try {
                $pk = $model->cadastrar($vo);
            }
            catch (Exception $exc) {
                $view->add('erro', $exc->getMessage());
            }
        }
        
        $view->desenhar('compra/cadastrarCompra');
	
	}
	
	public function listar(){
	
	}
	
	public function apagar(){
	
	}
}
?>