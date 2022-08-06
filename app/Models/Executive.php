<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\LayoutController;

class Executive extends Model
{
    use HasFactory;
    protected $fillable = ['exe_id','name','code','email','phone','add'];
}
