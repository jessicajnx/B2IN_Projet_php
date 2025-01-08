<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une tâche</title>
</head>
<body>
    <h1>Ajouter une tâche</h1>
    <form action="/add" method="POST">
        <label for="task_name">Nom de la tâche :</label>
        <input type="text" id="task_name" name="task_name" required>
        <button type="submit">Ajouter</button>
    </form>
    <a href="/">Retour à la liste</a>
</body>
</html>
