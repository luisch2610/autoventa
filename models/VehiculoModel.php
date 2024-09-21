<?php
require_once __DIR__ . '/../utils/Database.php';

class VehiculoModel {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAll() {
        $query = "SELECT * FROM Vehiculo";
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT * FROM Vehiculo WHERE idVehiculo = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function create($data) {
        $query = "INSERT INTO Vehiculo (idVehiculo, Anio, idModelo, idMarca, Chasis, Precio, VIN, Color, Disponible) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("iiiisdssi", $data['idVehiculo'], $data['Anio'], $data['idModelo'], $data['idMarca'], $data['Chasis'], $data['Precio'], $data['VIN'], $data['Color'], $data['Disponible']);
        return $stmt->execute();
    }

    public function update($id, $data) {
        $query = "UPDATE Vehiculo SET Anio = ?, idModelo = ?, idMarca = ?, Chasis = ?, Precio = ?, VIN = ?, Color = ?, Disponible = ? WHERE idVehiculo = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("iiisdssi", $data['Anio'], $data['idModelo'], $data['idMarca'], $data['Chasis'], $data['Precio'], $data['VIN'], $data['Color'], $data['Disponible'], $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM Vehiculo WHERE idVehiculo = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}