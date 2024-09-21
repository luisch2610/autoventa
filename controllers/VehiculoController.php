<?php
require_once __DIR__ . '/../models/VehiculoModel.php';

class VehiculoController {
    private $model;

    public function __construct() {
        $this->model = new VehiculoModel();
    }

    public function index() {
        $vehiculos = $this->model->getAll();
        require __DIR__ . '/../views/vehiculos/list.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->create($_POST);
            header('Location: index.php?action=index');
        } else {
            require __DIR__ . '/../views/vehiculos/create.php';
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->update($id, $_POST);
            header('Location: index.php?action=index');
        } else {
            $vehiculo = $this->model->getById($id);
            require __DIR__ . '/../views/vehiculos/edit.php';
        }
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: index.php?action=index');
    }
}