<?php
require_once __DIR__ . '/../models/MarcaModel.php';

class MarcaController {
    private $model;

    public function __construct() {
        $this->model = new MarcaModel();
    }

    public function index() {
        $marcas = $this->model->getAll();
        require __DIR__ . '/../views/marcas/list.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->create($_POST);
            header('Location: index.php?controller=Marca&action=index');
        } else {
            require __DIR__ . '/../views/marcas/create.php';
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->update($id, $_POST);
            header('Location: index.php?controller=Marca&action=index');
        } else {
            $marca = $this->model->getById($id);
            require __DIR__ . '/../views/marcas/edit.php';
        }
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: index.php?controller=Marca&action=index');
    }
}