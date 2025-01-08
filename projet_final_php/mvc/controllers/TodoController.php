<?php

require_once 'models/TodoModel.php';

class TodoController
{
    private $model;

    public function __construct()
    {
        $this->model = new TodoModel();
    }

    public function index()
    {
        $todos = $this->model->getAll();
        require 'views/todo_list.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['task'])) {
            $this->model->add($_POST['task']);
        }
        header('Location: /');
    }

    public function toggle()
    {
        if (isset($_GET['id'])) {
            $this->model->toggle((int)$_GET['id']);
        }
        header('Location: /');
    }
}
