

<p>Переменная $var = <?php echo $var; ?></p>

<h1>Таски</h1>

<?php foreach ($tasks as $task): ?>
    <p> UserName: <?php echo $task->username ?>  Email: <?php echo $task->email;?> Description: <?php echo $task->description;?></p>
<?php endforeach; ?>
