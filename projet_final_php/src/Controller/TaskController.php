<?php

namespace App\Controller;

use App\Model\TaskModel;

class TaskController {
    public function listTasks() {
        $tasks = TaskModel::getAll();
        include __DIR__ . '/../../public/views/list.php';
    }

    public function addTask() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $taskName = $_POST['task_name'];
            $taskDate = date('Y-m-d H:i:s');
            TaskModel::add($taskName, $taskDate);
            header('Location: /');
            exit;
        }
        include __DIR__ . '/../../public/views/add.php';
    }

    public function updateTask() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            TaskModel::toggleCompleted($id);
            header('Location: /');
            exit;
        }
    }

    public function deleteTask() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            TaskModel::delete($id);
            header('Location: /');
            exit;
        }
    }
}
