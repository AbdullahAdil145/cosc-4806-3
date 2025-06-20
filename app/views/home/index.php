    <?php require_once 'app/views/templates/header.php'; ?>
    <div class="container">
        <h1>Hey, <?= $_SESSION['username'] ?? '' ?> 👋</h1>
        <p><?= date('F jS, Y') ?></p>
    </div>
