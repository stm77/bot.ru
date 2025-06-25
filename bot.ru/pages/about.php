<?php include '../includes/header.php'; ?>
<main>
    <h1>О нас</h1>
</main>
<?php include '../includes/footer.php'; ?>

5.2. contact.php
<?php include '../includes/header.php'; ?>
<main>
    <h1>Контакты</h1>
    <form method="post">
        <input type="text" name="name" placeholder="Имя">
        <input type="email" name="email" placeholder="Email">
        <textarea name="message"></textarea>
        <button type="submit">Отправить</button>
    </form>
</main>
<?php include '../includes/footer.php'; ?>
