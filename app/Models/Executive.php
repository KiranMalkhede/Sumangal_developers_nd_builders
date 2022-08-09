<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\LayoutController;

class Executive extends Model
{
    use HasFactory;
    protected $fillable = ['exe_id', 'code', 'joiningDate', 'sponsorCode', 'name', 'sponsorName', 'email', 'add', 'phone', 'phone1', 'phone2', 'dob', 'age', 'qualitification', 'sex', 'commision', 'pan'];
}
