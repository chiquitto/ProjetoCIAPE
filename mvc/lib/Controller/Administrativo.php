<?php

class Controller_Administrativo extends Controller{

	//'fluxoCaixa', 'controleEstoque', 'contasPagar', 'contasReceber', 'admCompras', 'admVendas', 'fat', 'outrosTipos', 
	//'planejamento', 'area', 'trabalhaRecursoTerc', 'outrosRecursos', 'gastos', 'outrosGastos', 'numOrdem');
	
	public function cadastrar(){
		$view = new View();
        
        if ($_POST) {
            $vo = new Vo_Administrativo();
            $vo->setFluxoCaixa($_POST['fluxoCaixa']);
            $vo->setControleEstoque($_POST['controleEstoque']);
            $vo->setContasPagar($_POST['contasPagar']);
            $vo->setContasReceber($_POST['contasReceber']);
            $vo->setAdmCompras($_POST['admCompras']);
            $vo->setAdmVendas($_POST['admVendas']);
            $vo->setFat($_POST['fat']);
            $vo->setOutrosTipos($_POST['outrosTipos']);
            $vo->setPlanejamento($_POST['planejamento']);
            $vo->setArea($_POST['area']);
            $vo->setTrabalhaRecursoTerc($_POST['trabalhaRecursoTerc']);
            $vo->setOutrosRecursos($_POST['outrosRecursos']);
            $vo->setGastos($_POST['gastos']);
            $vo->setOutrosGastos($_POST['outrosGastos']);
            $vo->setNumOrdem($_POST['numOrdem']);
 
            $model = new Model_Administrativo();
            try {
                $pk = $model->cadastrar($vo);
            }
            catch (Exception $exc) {
                $view->add('erro', $exc->getMessage());
            }
        }
        
        $view->desenhar('administrativo/cadastrarAdministrativo');
	
	}
	
	public function listar(){
	
	}
	
	public function apagar(){
	
	}
}
?>