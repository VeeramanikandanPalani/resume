<?= $this->extend('layouts/default') ?>


<?= $this->section('title') ?> 
    School
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1>School Tasks List</h1>
    <ul>
        <?php foreach($tasks as $task): ?>
            <li>
                <?= $task['id'] ?>
                <?= $task['description'] ?>
            </li>

        <?php endforeach; ?>
    </ul>
<?= $this->endSection() ?>

</body>
</html>