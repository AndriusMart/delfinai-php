<?php

App\App::view('top', ['title' => $title]);

?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card m-4">
                <div class="card-header">
                    <h2>Add Money</h2>
                </div>
                <div class="card-body">
                    <form action="<?= URL ?>banks/addMoney/<?= $bank['id'] ?>" method="post">
                        <div class="form-group">
                            <label><?= $bank['vardas'] ?> <?= $bank['pavarde'] ?></label>
                            <div><?= $bank['asmensKodas'] ?></div>
                            <label>LIKUTIS:<?= $bank['likutis'] ?></label>
                            <input type="text" class="form-control" name="likutis" value="<?= $bank['likutis'] ?>">
                        </div>
                        <button type="submit" class="btn btn-primary mt-5">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

App\App::view('bottom');
