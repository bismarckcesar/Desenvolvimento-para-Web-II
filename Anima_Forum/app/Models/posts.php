<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;
    protected $fillable = ['title','subtitle','contents','comments','user_id'];
   // public function owner(){
   //     return $this->belongsTo(User::class,'user_id');
   // }
}
