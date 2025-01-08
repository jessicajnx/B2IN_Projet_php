<?php

namespace App\Model;

class TaskModel {
    private static $tasks = [
        ['id' => 1, 'name' => 'Acheter du lait'],
        ['id' => 2, 'name' => 'Réviser pour l\'examen'],
    ];

    public static function getAll() {
        return self::$tasks;
    }

    public static function add($taskName) {
        self::$tasks[] = ['id' => count(self::$tasks) + 1, 'name' => $taskName];
    }

    public static function delete($taskId) {
        self::$tasks = array_filter(self::$tasks, function($task) use ($taskId) {
            return $task['id'] != $taskId;
        });
    }
}
