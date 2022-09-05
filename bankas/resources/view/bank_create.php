<?php

App\App::view('top', ['title' => $title]);

?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card m-4">
                <div class="card-header">
                    <h2>New bank</h2>
                </div>
                <div class="card-body">
                    <form action="<?= URL ?>banks/store" method="post">
                        <div class="form-group">
                            <label>Jūsų vardas:</label>
                            <input type="text" name="vardas" required>
                        </div>
                        <div class="form-group">
                            <label>Jūsų Pavardė:</label>
                            <input type="text" name="pavarde" required>
                        </div>
                        <div class="form-group">
                            <label>Jūsų asmens kodas:</label>
                            <input type="number" name="asmensKodas" min="30000000000" max="99999999999" required>
                        </div>
                        <div class="form-group">
                            <label>Jūsų sąskaitos numeris:</label>
                            <input type="text" name="saskaitosNumeris"
                value="LT<?= rand(100000000000000000, 999999999999999999) ?>" readonly>
                        </div>
                        <input type="text" name="likutis" value="0" readonly hidden>
                        <button type="submit" class="btn btn-primary mt-5">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

App\App::view('bottom');