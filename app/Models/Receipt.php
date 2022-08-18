<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;
    protected $fillable = ['receiptNo','receiptDate','giver','layout','mouza','khasara','plot_no','size','type','ex_details','amount_received','on_ac_of','tokenExpDate','month','mode_of_pay','cheque_no','cheque_date','bank_name'];
}
