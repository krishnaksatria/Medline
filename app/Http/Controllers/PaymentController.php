<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Queues;
use App\Doctors;
use App\DetailPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function view(){
        $queue = Queues::where([['user_id', Auth::user()->id], ['is_done', 1]])->get();
        $sum = 0;
        foreach($queue as $queues){
            $doctor = Doctors::where('id', $queues->doctor_id)->first();
            if($queues != null){
                $sum += $queues->sum + $doctor->fee + 15000;
            }
        }
        $payment = Payment::create(['user_id'=>Auth::user()->id, 'total'=>$sum]);
        $data = DB::table('payments')
                ->where('user_id', Auth::user()->id)
                ->orderBy('id', 'DESC')
                ->first();
        return view('payment', ['payments'=>$data]);
    }

    public function insert(Request $request, $id){
        $queue = Queues::where([['user_id', Auth::user()->id], ['is_done', 1]])->get();
        foreach($queue as $queues){
            $queues->update(['is_done'=>0]);
        }
        $name = $request->get('cardname');
        $number = $request->get('cardnumber');
        $month = $request->get('month');
        $year = $request->get('year');
        $cvcvv = $request->get('cvcvv');
        
        DetailPayment::insert(['payment_id'=>$id, 'nameOnCard'=>$name, 'cardNumber'=>$number, 'year'=>$year, 'month'=>$month, 'cvcvv'=>$cvcvv]);

        return redirect('home');
    }
}
