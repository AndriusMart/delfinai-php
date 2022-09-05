<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;
use App\Services\Messages as M;

class bankController {

    public function create()
    {

        return App::view('bank_create', [
            'title' => 'New bank'
        ]);
    }
 
    public function store()
    {
        Json::connect()->create([
            'vardas' => $_POST['vardas'],
            'pavarde' => $_POST['pavarde'],
            'asmensKodas' => $_POST['asmensKodas'],
            'saskaitosNumeris' => $_POST['saskaitosNumeris'],
            'likutis' => $_POST['likutis']
        ]);
        return App::redirect('banks');
    }

    public function list()
    {

        return App::view('bank_list', [
            'title' => 'banks List',
            'banks' => Json::connect()->showAll()
        ]);
    }

    public function minus(int $id)
    {

        return App::view('bank_minus', [
        
            'title' => 'withdraw money',
            'bank' => Json::connect()->show($id)
        ]);
    }
    public function add(int $id)
    {

        return App::view('bank_add', [
        
            'title' => 'add money',
            'bank' => Json::connect()->show($id)
        ]);
    }

    

    public function addMoney(int $id)
    {
        $oldValues = Json::connect()->show($id);
        if($_POST['likutis'] >0){
        $oldValues['likutis'] = $oldValues['likutis'] + $_POST['likutis'];
        }else{
            M::makeMsg('red', 'Cant do that');

        }
        Json::connect()->update($id, $oldValues);
        return App::redirect('banks');
    }
    public function withdraw(int $id)
    {
        $oldValues = Json::connect()->show($id);
        if($oldValues['likutis'] >=$_POST['likutis'] && $_POST['likutis'] >0){
        $oldValues['likutis'] = $oldValues['likutis'] - $_POST['likutis'];
        }else{
            M::makeMsg('red', 'Cant do that');

        }
        Json::connect()->update($id, $oldValues);
        return App::redirect('banks');
    }

    public function delete(int $id)
    {
        $oldValues = Json::connect()->show($id);
        if($oldValues['likutis'] == 0){
        Json::connect()->delete($id);
        return App::redirect('banks');
        }else{
        M::makeMsg('red', 'Cant do that, you still have money');
        return App::redirect('banks');
        }
    }



    
}