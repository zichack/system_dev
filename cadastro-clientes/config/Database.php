<?php
class Database {
    private string $usuario = "root";
    private string $dbname = "sistema_clientes";
    private string $host = "localhost";
    private string $senha = "";
    private int $porta = 3306;
    private ?PDO $conexao = null;

    public function conectar(): PDO {
        if ($this->conexao === null) {
            try {
                // Usando $this-> para acessar as propriedades corretamente
                $dsn = "mysql:host={$this->host};port={$this->porta};dbname={$this->dbname};charset=utf8mb4";
                
                $this->conexao = new PDO($dsn, $this->usuario, $this->senha);
                
                // Opcional: configurar erros para exceções
                $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            } catch (PDOException $erro) {
                // É melhor lançar a exceção ou tratar, não apenas dar echo
                die("Erro na conexão: " . $erro->getMessage());
            }
        }
        return $this->conexao;
    }
}