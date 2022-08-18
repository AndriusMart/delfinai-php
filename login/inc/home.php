<?php
view('top');
?>

<?php if(isLogged()) : ?>
<h2>Sveikas, <?= $_SESSION['user']['name'] ?></h2>
<?php view('logout'); ?>

<?php else : ?>
<a href="<?= URL ?>login">Login Here</a>

<?php endif?>


<?php
view('bottom');