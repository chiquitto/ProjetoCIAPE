<?php


class Conexao extends PDO {

    private $dsn = 'mysql:host=localhost;dbname=clientes';
    private $user = 'root';
    private $password = '';
    private static $instancia;

    function __construct() {
        try {
            parent::__construct($this->dsn, $this->user, $this->password);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Conex�o falhou. Erro: " . $e->getMessage();
            exit;
        }
    }

    /**
     * 
     * @return Conexao
     */
    public static function getInstance() {
        if (null === self::$instancia) {
            self::$instancia = new self();
        }
        return self::$instancia;
    }

}