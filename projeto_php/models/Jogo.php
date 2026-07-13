<?php
class Jogo {
    private $conn;
    private $table_name = "jogos";

    // atributos
    public $id;
    public $titulo;
    public $genero;
    public $plataforma;
    public $ano_lancamento;

    public function __construct($db) {
        $this->conn = $db;
    }

    // create
    public function create() {
        $query = "INSERT INTO " . $this->table_name . " 
                  (titulo, genero, plataforma, ano_lancamento) 
                  VALUES (:titulo, :genero, :plataforma, :ano_lancamento)";

        $stmt = $this->conn->prepare($query);

        $this->titulo = htmlspecialchars(strip_tags($this->titulo));
        $this->genero = htmlspecialchars(strip_tags($this->genero));
        $this->plataforma = htmlspecialchars(strip_tags($this->plataforma));
        $this->ano_lancamento = htmlspecialchars(strip_tags($this->ano_lancamento));

        $stmt->bindParam(":titulo", $this->titulo);
        $stmt->bindParam(":genero", $this->genero);
        $stmt->bindParam(":plataforma", $this->plataforma);
        $stmt->bindParam(":ano_lancamento", $this->ano_lancamento);

        return $stmt->execute();
    }

    // read
    public function read() {
        $query = "SELECT id, titulo, genero, plataforma, ano_lancamento 
                  FROM " . $this->table_name . " 
                  ORDER BY titulo ASC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // read one
    public function readOne() {
        $query = "SELECT id, titulo, genero, plataforma, ano_lancamento 
                  FROM " . $this->table_name . " 
                  WHERE id = ? 
                  LIMIT 0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $this->titulo = $row['titulo'];
            $this->genero = $row['genero'];
            $this->plataforma = $row['plataforma'];
            $this->ano_lancamento = $row['ano_lancamento'];
            return true;
        }
        return false;
    }

    // update
    public function update() {
        $query = "UPDATE " . $this->table_name . " 
                  SET titulo = :titulo, genero = :genero, plataforma = :plataforma, ano_lancamento = :ano_lancamento 
                  WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        $this->titulo = htmlspecialchars(strip_tags($this->titulo));
        $this->genero = htmlspecialchars(strip_tags($this->genero));
        $this->plataforma = htmlspecialchars(strip_tags($this->plataforma));
        $this->ano_lancamento = htmlspecialchars(strip_tags($this->ano_lancamento));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(":titulo", $this->titulo);
        $stmt->bindParam(":genero", $this->genero);
        $stmt->bindParam(":plataforma", $this->plataforma);
        $stmt->bindParam(":ano_lancamento", $this->ano_lancamento);
        $stmt->bindParam(":id", $this->id);

        return $stmt->execute();
    }

    // delete
    public function delete() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(":id", $this->id);

        return $stmt->execute();
    }
}
?>