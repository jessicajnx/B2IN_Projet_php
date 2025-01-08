<?php

namespace App\Model;

class TaskModel {
    private static $tasks = [];

    public static function getAll() {
        return self::$tasks;
    }

    public static function add($name, $date) {
        self::$tasks[] = [
            'id' => count(self::$tasks) + 1,
            'name' => $name,
            'date' => $date,
            'completed' => false,
        ];
    }

    public static function toggleCompleted($id) {
        foreach (self::$tasks as &$task) {
            if ($task['id'] == $id) {
                $task['completed'] = !$task['completed'];
                break;
            }
        }
    }

    public static function delete($id) {
        self::$tasks = array_filter(self::$tasks, function($task) use ($id) {
            return $task['id'] != $id;
        });
    }
}
