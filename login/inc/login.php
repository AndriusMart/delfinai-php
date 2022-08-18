<?php
view('top');
?>

<fieldset>
    <legend>Login</legend>
    <form action="<?= URL . 'login' ?>" method="post">
        NAME:<input type="text" name="name" />
        PASSWORD: <input type="password" name="psw" />
        <button type="submit">Login</buttton>
    </form>
</fieldset>

<?php
view('bottom');