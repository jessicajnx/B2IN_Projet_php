<?php

class TodoModel
{
    private $file = 'data.json';

    public function getAll()
    {
        if (!file_exists($this->file)) {
            return [];
        }
        $json = file_get_contents($this->file);
        return json_decode($json, true) ?? [];
    }

    public function add($task)
    {
        $todos = $this->getAll();
        $todos[] = ['id' => time(), 'task' => $task, 'done' => false];
        file_put_contents($this->file, json_encode($todos));
    }

    public function toggle($id)
    {
        $todos = $this->getAll();
        foreach ($todos as &$todo) {
            if ($todo['id'] === $id) {
                $todo['done'] = !$todo['done'];
                break;
            }
        }
        file_put_contents($this->file, json_encode($todos));
    }
}
