<?php

class CategoriaDAO
{

    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3307;dbname=banco_mvc";

        $this->conexao = new PDO($dsn, 'root', 'etecjau');
    }
    public function insert(CategoriaModel $model)
    {
        
        $sql = "INSERT INTO categoria (Categoria, Descricao) VALUES (?, ?)";
         
        $stmt = $this->conexao->prepare($sql);
        
        $stmt->bindValue(1, $model->categoria); 
        $stmt->bindValue(2, $model->descricao);
        $stmt->execute();

    }

    public function update()
    {


    }

    public function select()
    {
        $sql ="SELECT * FROM categoria";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}
?>