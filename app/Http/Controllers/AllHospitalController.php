<?php

namespace App\Http\Controllers;

use App\Hospitals;
use Illuminate\Http\Request;

class AllHospitalController extends Controller
{
    public function view(){
        $hospital = Hospitals::paginate(4);

        return view('allhospital', ['hospitals'=>$hospital]);
    }
}
