<?php


abstract class Dao {

    protected $tabela;
    protected $pk;
    protected $vo;

    public function create(Vo $vo) {
        $dados = $vo->getAll();

        $indices = array();
        $parametros = array();
        foreach ($dados as $indice => $valor) {
            $indices[] = $indice;
            $parametros[] = ':' . $indice;
        }

        $indices = join(',', $indices);
        $parametros = join(',', $parametros);

        $sql = "Insert Into "
                . $this->tabela
                . " ($indices) Values"
                . " ($parametros)"
        ;

        try {
            $con = Conexao::getInstance();

            $sqlPreparada = $con->prepare($sql);

            //$con->beginTransaction();
            $sqlPreparada->execute($dados);
            //$con->commit();

            return $con->lastInsertId();
        } catch (Exception $exc) {
            // Gerar Log
            
            throw new Exception('DAO: Erro para inserir o registro');
        }
    }

    public function request($where = NULL) {
        $sql = 'Select * From '
                . $this->tabela;

        if ($where !== NULL) {
            $sql .= ' Where ' . $where;
        }

        $con = Conexao::getInstance();
        $linhas = $con->query($sql);

        $retorno = array();
        $voClasse = $this->vo;
        while ($linha = $linhas->fetch(PDO::FETCH_ASSOC)) {
            $vo = new $voClasse();
            $vo->setAll($linha);
            $retorno[] = $vo;
        }

        return $retorno;
    }


    public function delete($where) {
        $sql = 'DELETE FROM '
                . $this->tabela
                . ' WHERE ' . $where
        ;

        $con = Conexao::getInstance();
        return $con->query($sql);
    }

}