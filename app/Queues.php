<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Doctors;
use App\Hospitals;
use App\ListMedicines;
use App\MedicineQueues;
use App\Medicines;
use App\PaymentTypes;
use App\Transactions;
use App\User;
use App\Payment;

class Queues extends Model
{
    public function Doctors(){
        return $this->belongsTo(Doctors::class);
    }

    public function Hospitals(){
        return $this->hasMany(Queues::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Payment(){
        return $this->belongsTo(Payment::class);
    }

        protected $fillable = [
        'is_done',
    ];
}
