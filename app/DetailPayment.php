<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Payment;

class DetailPayment extends Model
{
    public function Payment(){
        return $this->belongsTo(Payment::class);
    }
}
