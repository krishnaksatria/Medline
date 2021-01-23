<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hospitals;
use App\Doctors;
use Illuminate\Queue\Queue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Queues;

class PageController extends Controller
{
    
    public function home(){
        return view('home');
    }

    public function viewMedicine(){
        $med=DB::table('medicines')->get();
        return view('medicine', ['med'=>$med]);
    }

    public function search(Request $request){
        $keyword = $request->get('search');
        $inputSearch = Hospitals::where('name', 'like', '%'.$keyword.'%')->paginate(4);
        return view('allhospital', ['hospitals'=>$inputSearch]);
    }

    public function viewHospital(){
        $hospitals = Hospitals::limit(4)->get();
        // $hospitals = Hospitals::all();

        return view('hospital', ['hospitals'=>$hospitals]);
    }

    public function hospitalDetail($id){
        $data = Hospitals::where('id', $id)->first();
        $doctor = DB::table('doctors')->where('hospital_id', $id)->get();
        return view('detailhospital', ['data'=>$data, 'doctor'=>$doctor]);
    }
    
    public function viewDoctorQueue($id){
        $doctor = DB::table('doctors')->where('id', $id)->first();
        $queues = DB::table('queues')->where('doctor_id', $id)->orderBy('queue_number', 'DESC')->get();
        if($queues=="[]")
        {
            return view('doctorsqueue', ['info'=>$doctor, 'queues'=>$queues]);
        }
        $queue = DB::table('queues')->where('doctor_id', $id)->orderBy('queue_number', 'DESC')->first();
        // echo $queue;
        return view('doctorsqueue', ['info'=>$doctor , 'data'=>$queue, 'queues'=>$queues]);
    }

    public function counting($id){
        $q = DB::table('queues')->where('doctor_id', $id)->orderBy('queue_number', 'DESC')->get();
        if($q=="[]")
        {
            $Queues= new Queues;
            $Queues->queue_number=1;
            $Queues->doctor_id=$id;
            $Queues->user_id=Auth::user()->id;    
            $Queues->save();  
        }
        else
        {
            $queues = DB::table('queues')->where('doctor_id', $id)->orderBy('queue_number', 'DESC')->first();
            $Queues= new Queues;
            $Queues->queue_number=$queues->queue_number+1;
            $Queues->doctor_id=$id;
            $Queues->user_id=Auth::user()->id;
            $Queues->save();
        }
        $iduser=Auth::user()->id;
        return redirect('/queue/{$iduser}');
    }
    
}
