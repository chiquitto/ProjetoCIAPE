<?php

class Controller_Cliente extends Controller{

	public function cadastrar(){
		$view = new View();
        
        if ($_POST) {
            $vo = new Vo_Cliente();
            $vo->setQtdeClienteMensal($_POST['qtdeClienteMensal']);
            $vo->setPerfilCliente($_POST['perfilCliente']);
            $vo->setVendeEmpresa($_POST['vendeEmpresa']);
            $vo->setPercTotalFat($_POST['percTotalFat']);
            $vo->setPesquisaClientes($_POST['pesquisaClientes']);
            $vo->setFrequencia($_POST['frequencia']);
            $vo->setNumOrdem($_POST['numOrdem']);
   
            $model = new Model_Cliente();
            try {
                $pk = $model->cadastrar($vo);
            }
            catch (Exception $exc) {
                $view->add('erro', $exc->getMessage());
            }
        }
        
        $view->desenhar('cliente/cadastrarCliente');
	
	}
	
	public function listar(){
	
	}
	
	public function apagar(){
	
	}
}
?>