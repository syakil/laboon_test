<?php

namespace App\Repositories;

use App\Kapal;

class KapalRepositories {


    public function getAll(){

        return Kapal::all();

    }


}
