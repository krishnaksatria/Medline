<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Doctors;
use App\Hospitals;
use App\ListMedicines;
use App\MedicineQueues;
use App\Medicines;
use App\Queues;
use App\Transactions;
use App\User;
use App\Payment;

class PaymentTypes extends Model
{
    public function Payment(){
        return $this->hasMany(Payment::class);
    }
}
