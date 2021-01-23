<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Doctors;
use App\Hospitals;
use App\ListMedicines;
use App\Medicines;
use App\PaymentTypes;
use App\Queues;
use App\Transactions;
use App\User;

class MedicineQueues extends Model
{
    public function ListMedicines(){
        return $this->hasMany(ListMedicines::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }



}
