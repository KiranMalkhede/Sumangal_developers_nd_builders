<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    use HasFactory;
    protected $fillable = 
    ['code','project','mouza','khasara','phNo','tah','land','share',
    'surplusLand','govtShare','openSpace','uitility','plot','road','commPlot',
    'downPay','installPer','samiComm','downPay2','installPer2','otherPlot',
    'downPay3','installPer3','sqrFt','finance','installPer'
];
}
