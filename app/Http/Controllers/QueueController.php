<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QueueController extends Controller
{
    public function view($id){
        $user = DB::table('queues')->where('user_id', Auth::user()->id)->first();
        $users = DB::table('queues')->where('user_id', Auth::user()->id)->get();
        if($users=="[]")
        {
            return view('queue', ['users'=>$users]);
        }
        $total = DB::table('queues')
            ->where('doctor_id', $user->doctor_id)
            ->orderBy('queue_number', 'DESC')
            ->first();
        $cur = DB::table('queues')
        ->where('doctor_id', $user->doctor_id)
        ->orderBy('queue_number', 'ASC')
        ->first();
        if($user->queue_number==1)
        {
            $esti=0;
        }
        else
        {
            $esti=($user->queue_number-$cur->queue_number)*10;
        }
        return view('queue', ['user'=>$user, 'total'=>$total, 'cur'=>$cur, 'esti'=>$esti, 'users'=>$users]);
    
    }

    public function takeQueue(){
        return view('take-queue');
    }
}
