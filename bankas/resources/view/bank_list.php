<?php

App\App::view('top', ['title' => $title]);

?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card m-4">
                <div class="card-header">
                    <h2>Bank account list</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <?php foreach ($banks as $bank) : ?>
                            <li class="list-group-item">
                                <div class="column">
                                    <div class="line__content">
                                        <div class="line__content__type">
                                            <?= $bank['vardas'] ?>
                                        </div>
                                        <div class="line__content__type">
                                            <?= $bank['pavarde'] ?>
                                        </div>
                                        <div class="line__content__weight">
                                            <?= $bank['asmensKodas'] ?>
                                        </div>
                                        <div class="line__content__weights">
                                            <?= $bank['saskaitosNumeris'] ?>
                                        </div>
                                        
                                    </div>
                                    <div class="line__content__weight">
                                          Likutis:  <?= $bank['likutis'] ?>
                                        </div>
                                    <div class="line__buttons">
                                        <a href="<?= URL . 'banks/add/' . $bank['id'] ?>" type="button" class="btn btn-outline-success m-2">Add money</a>
                                        <a href="<?= URL . 'banks/minus/' . $bank['id'] ?>" type="button" class="btn btn-outline-success m-2">Withdraw</a>
                                        <form action="<?= URL ?>banks/delete/<?= $bank['id'] ?>" method="post">
                                            <button type="submit" class="btn btn-outline-danger m-2">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

App\App::view('bottom');
