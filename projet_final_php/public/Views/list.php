<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <h1>ToDo List</h1>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <span><?= htmlspecialchars($task['name']) ?> (Ajoutée le <?= $task['date'] ?>)</span>
                <a href="/update?id=<?= $task['id'] ?>">
                    <?= $task['completed'] ? 'Marquer comme non terminée' : 'Marquer comme terminée' ?>
                </a>
                <a href="/delete?id=<?= $task['id'] ?>" style="color: red;">Supprimer</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="/add">Ajouter une tâche</a>
</body>
</html>
