<?php require('../app/views/partials/head.php'); ?>
<?php require('../app/views/partials/navbar.php'); ?>
<?php require('../app/views/partials/header.php'); ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 h-screen">
    <?php foreach ($notes as $note) : ?>
        <li>
            <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
            <?= $note['body'] ?>
            </a>
        </li>
    <?php endforeach; ?>
  </div>
</main>

<?php require('../app/views/partials/footer.php'); ?>