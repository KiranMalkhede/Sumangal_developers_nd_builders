<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvisorPromotion extends Model
{
    use HasFactory;
    protected $table = 'advisor_promotions';
    protected $fillable = ['advisor','date','comm'];
}
