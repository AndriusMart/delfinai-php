<div class="container">
    <div class="row">
        <div class="col-12">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link " href="<?= URL ?>">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>banks">banks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>banks/create">New banks</a>
                </li>

                <?php if (App\Middlewares\Auth::isLoged()) : ?>
                    <li class="nav-item">
                        <div class="user-nav">
                            <div class="name"><?= $_SESSION['user']['name'] ?></div>
                            <form action="<?= URL ?>logout" method="post">
                                <button type="submit" class="nav-link" style="border: none; background: none">Logout</button>
                            </form>
                        </div>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL ?>login">Login</a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</div>