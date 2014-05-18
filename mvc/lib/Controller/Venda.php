<?php

class Controller_Venda extends Controller{
	
	public function cadastrar(){
		$view = new View();
        
        if ($_POST) {
            $vo = new Vo_Venda();
            $vo->setDiaSemana($_POST['diaSemana']);
            $vo->setIdFat($_POST['idFat']);
            $vo->setPeriodoInicial($_POST['periodoInicial']);
            $vo->setPeriodoFinal($_POST['periodoFinal']);
            $vo->setHorarioMov($_POST['horarioMov']);
            $vo->setFormaPagto($_POST['formaPagto']);
            $vo->setOutraFormaPagto($_POST['outraFormaPagto']);
            $vo->setVlrMedioPorVez($_POST['vlrMedioPorVez']);
            $vo->setVlrMedioMensal($_POST['vlrMedioMensal']);
            $vo->setNumOrdem($_POST['numOrdem']);
 
            $model = new Model_Venda();
            try {
                $pk = $model->cadastrar($vo);
            }
            catch (Exception $exc) {
                $view->add('erro', $exc->getMessage());
            }
        }
        
        $view->desenhar('venda/cadastrarVenda');
	
	}
	
	public function listar(){
	
	}
	
	public function apagar(){
	
	}
}
?>