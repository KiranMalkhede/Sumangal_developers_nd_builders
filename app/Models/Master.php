<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    use HasFactory;
    protected $fillable = ['exeNo_id','srNo','exeNo', 'name', 'date', 'comm', 'customer_id','name2', 'dob', 'add', 'age', 'occupation', 'phone1', 'phone2', 'phone3', 'nameNom', 'dobNom', 'ageNom', 'app', 'add2', 'dise', 'lock', 'selectLayout', 'sqrFt', 'plotNo', 'khasaraNo', 'sqrFt2', 'mouza', 'phNo', 'size', 'otherDetail', 'saleRate', 'totalPlotC', 'ComRate', 'netPlotCost', 'noInstall', 'downPay', 'instalFrom', 'installTo', 'monInstall'];
}
