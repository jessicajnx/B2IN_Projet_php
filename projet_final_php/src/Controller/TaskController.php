<?php

namespace App\Controller;

use App\Model\TaskModel;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TaskController {
    private $twig;

    public function __construct() {
        $loader = new FilesystemLoader(__DIR__ . '/../../templates');
        $this->twig = new Environment($loader);
    }

    public function listTasks() {
        $tasks = TaskModel::getAll();
        echo $this->twig->render('list.html.twig', ['tasks' => $tasks]);
    }

    public function addTask() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $taskName = $_POST['task_name'];
            TaskModel::add($taskName);
            header('Location: /');
            exit;
        }
        echo $this->twig->render('add.html.twig');
    }

    public function deleteTask() {
        $taskId = $_GET['id'] ?? null;
        if ($taskId) {
            TaskModel::delete($taskId);
            header('Location: /');
            exit;
        }
    }
}
