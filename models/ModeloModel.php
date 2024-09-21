<?php
require_once __DIR__ . '/../utils/Database.php';

class ModeloModel {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAll() {
        $query = "SELECT * FROM Modelo";
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT * FROM Modelo WHERE idModelo = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function create($data) {
        $query = "INSERT INTO Modelo (idModelo, Nombre, idMarca) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("isi", $data['idModelo'], $data['Nombre'], $data['idMarca']);
        return $stmt->execute();
    }

    public function update($id, $data) {
        $query = "UPDATE Modelo SET Nombre = ?, idMarca = ? WHERE idModelo = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("sii", $data['Nombre'], $data['idMarca'], $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM Modelo WHERE idModelo = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}