<?php
require_once __DIR__ . '/../utils/Database.php';

class MarcaModel {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAll() {
        $query = "SELECT * FROM Marca";
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT * FROM Marca WHERE idMarca = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function create($data) {
        $query = "INSERT INTO Marca (idMarca, Nombre) VALUES (?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("is", $data['idMarca'], $data['Nombre']);
        return $stmt->execute();
    }

    public function update($id, $data) {
        $query = "UPDATE Marca SET Nombre = ? WHERE idMarca = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("si", $data['Nombre'], $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM Marca WHERE idMarca = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}