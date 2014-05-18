<?php

class Controller_Empresa extends Controller{
	
	public function cadastrar(){
		$view = new View();
        
        if ($_POST) {
            $vo = new Vo_Empresa();
            $vo->setNumOrdem($_POST['numOrdem']);
            $vo->setRazaoSocial($_POST['razaoSocial']);
            $vo->setNomeFantasia($_POST['nomeFantasia']);
            $vo->setIe($_POST['ie']);
            $vo->setDtFundacao($_POST['dtFundacao']);
            $vo->setRamoAtividade($_POST['ramoAtividade']);
            $vo->setEndereco($_POST['endereco']);
            $vo->setBairro($_POST['bairro']);
            $vo->setCidade($_POST['cidade']);
            $vo->setUf($_POST['uf']);
            $vo->setFone($_POST['fone']);
            $vo->setEmail($_POST['email']);
            $vo->setSocio($_POST['socio']);
            $vo->setCargo($_POST['cargo']);

            $model = new Model_Empresa();
            try {
                $pk = $model->cadastrar($vo);
            }
            catch (Exception $exc) {
                $view->add('erro', $exc->getMessage());
            }
        }
        
        $view->desenhar('empresa/cadastrarEmpresa');	
	}
	
	public function listar(){
	
	}
	
	public function apagar(){
	
	}
}

?>