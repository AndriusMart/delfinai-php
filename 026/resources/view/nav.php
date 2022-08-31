<div class="container">
    <div class="row">
        <div class="col-12">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link " href="<?= URL ?>">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>animals">Animals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>animals/create">New Animals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>login">Login</a>
                </li>
                <li class="nav-item">
                    <form action="<?= URL ?>logout" method="post">
                        <button type="submit" class="nav-link" style="border: none; background: none">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>