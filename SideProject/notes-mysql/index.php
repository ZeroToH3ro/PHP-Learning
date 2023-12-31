<?php
$connection = require 'pdo.php';
$notes = $connection->getNotes();

$currentNote = [
    'id' => '',
    'title' => '',
    'description' => ''
];

if(isset($_GET['id'])){
    $currentNote = $connection->getNoteById($_GET['id']);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <title>Note App</title>
</head>
<body>
<div>
    <form action="create.php" method="post" class="new-note">
        <input type="hidden" name="id" value="<?php echo $currentNote['id'] ?>">
        <input type="text" name="title" placeholder="Note Title" autocomplete="off" value="<?php echo $currentNote['title'] ?>">
        <textarea name="description" placeholder="Note Description" cols="30" rows="4">
            <?php echo $currentNote['description'] ?>
        </textarea>
        <button>
            <?php if($currentNote['id']): ?>
                Update
            <?php else: ?>
                New Note
            <?php endif ?>
        </button>
    </form>

    <div class="notes">
        <?php foreach ($notes as $note): ?>
            <div class="note">
                <div class="title">
                    <a href="?id=<?php echo $note['id'] ?>">
                        <?php echo $note['title'] ?>
                    </a>
                </div>
                <div class="description">
                    <?php echo $note['description'] ?>
                </div>
                <small><?php echo date('d/m/Y H:i', strtotime($note['create_date'])) ?></small>
                <form action="delete.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $note['id'] ?>">
                    <button class="close">x</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
</html>
