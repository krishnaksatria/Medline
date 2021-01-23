<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Hospitals;
use App\ListMedicines;
use App\MedicineQueues;
use App\Medicines;
use App\PaymentTypes;
use App\Queues;
use App\Transactions;
use App\User;

class Doctors extends Model
{
    public function Hospitals(){
        return $this->belongsTo(Hospitals::class);
    }

    public function Queues(){
        return $this->hasMany(Queues::class);
    }

}
