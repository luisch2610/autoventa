<?php
require_once __DIR__ . '/../models/ModeloModel.php';
require_once __DIR__ . '/../models/MarcaModel.php';

class ModeloController {
    private $model;
    private $marcaModel;

    public function __construct() {
        $this->model = new ModeloModel();
        $this->marcaModel = new MarcaModel();
    }

    public function index() {
        $modelos = $this->model->getAll();
        require __DIR__ . '/../views/modelos/list.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->create($_POST);
            header('Location: index.php?controller=Modelo&action=index');
        } else {
            $marcas = $this->marcaModel->getAll();
            require __DIR__ . '/../views/modelos/create.php';
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->update($id, $_POST);
            header('Location: index.php?controller=Modelo&action=index');
        } else {
            $modelo = $this->model->getById($id);
            $marcas = $this->marcaModel->getAll();
            require __DIR__ . '/../views/modelos/edit.php';
        }
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: index.php?controller=Modelo&action=index');
    }
}