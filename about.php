<?php
$title = "Про нас";
require_once "blocs/header.php";
?>
<h1><?=$title?></h1>
<div class="container mt-3">
    <form action="check_post.php" method="post">
        <input type="text" name="username" placeholder="Ведите имя" class="form-control"><br>
        <input type="email" name="email" placeholder="Ведите email" class="form-control"><br>
        <input type="password" name="password" placeholder="Ведите пароль" class="form-control"><br>
        <textarea name="message" placeholder="Ведите собщение" class="form-control"></textarea><br>
        <input type="submit" value="Отправить" class="btn btn-success">
    </form>
</div>

<?php
require_once "blocs/footer.php";
?>
