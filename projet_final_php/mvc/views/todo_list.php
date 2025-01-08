<?php ob_start(); ?>
<form action=\"/add\" method=\"post\">
    <input type=\"text\" name=\"task\" placeholder=\"Ajouter une tâche\" required>
    <button type=\"submit\">Ajouter</button>
</form>
<ul>
    <?php foreach ($todos as $todo): ?>
        <li>
            <form action=\"/toggle\" method=\"get\" style=\"display:inline;\">
                <input type=\"hidden\" name=\"id\" value=\"<?= $todo['id'] ?>\">
                <button type=\"submit\">[<?= $todo['done'] ? 'X' : ' ' ?>]</button>
            </form>
            <?= htmlspecialchars($todo['task']) ?>
        </li>
    <?php endforeach; ?>
</ul>
<?php $content = ob_get_clean(); require 'layout.php'; ?>
