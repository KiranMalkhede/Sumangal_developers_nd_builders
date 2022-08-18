<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandOwnerDetails extends Model
{
    use HasFactory;

    protected $table = 'land_owner_details';

    protected $fillable = ['ownerName','address','contactDetail','contactDetail2','mouza','khasara','phNo','acres','perAcres','totalCost','payPeriod'];
}
