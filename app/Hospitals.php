<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Doctors;
use App\ListMedicines;
use App\MedicineQueues;
use App\Medicines;
use App\PaymentTypes;
use App\Queues;
use App\Transactions;
use App\User;

class Hospitals extends Model
{
    public function Doctors(){
        return $this->hasMany(Doctors::class);
    }

    public function Queues(){
        return $this->belongsTo(Queues::class);
    }

}
