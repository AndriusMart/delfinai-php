<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $host = '127.0.0.1';
    $db   = 'del_finu';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $options);

    // UPDATE table_name
    // SET column1 = value1, column2 = value2, ...
    // WHERE condition;
    $sql = "
    UPDATE trees
    SET type = :t, height = :h, title = :title
    WHERE id = :id;
    ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        't' => $_POST['type'],
        'h' => $_POST['height'],
        'id' => $_POST['id'],
        'title' =>  $_POST['title']
        ]);

    header('Location: http://localhost/delfinai-php/032/');
    die;
}


?>
<form action="" method="post">
    ID:<input type="text" name="id"></br></br>
    Title:<input type="text" name="title"></br></br>
    Height:<input type="text" name="height"></br></br>
    <select name="type">
        <option value="1">Lapuotis</option>
        <option value="2">Spygliuotis</option>
        <option value="3">Palme</option>
    </select>
    </br></br>
    <button type="submit">Plant</button>
</form>