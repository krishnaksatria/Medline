<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PaymentTypes;
use App\User;
use App\Queues;
use App\DetailPayment;

class Payment extends Model
{   
    public function User(){
        return $this->belongsTo(User::class);
    }

    public function PaymentTypes(){
        return $this->hasMany(PaymentTypes::class);
    }

    public function Queue(){
        return $this->hasMany(Queues::class);
    }

    public function DetailPayment(){
        return $this->belongsTo(DetailPayment::class);
    }

    protected $fillable = [
        'user_id', 'total',
    ];
}
