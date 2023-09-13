<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable =['name','unit'];

    public function stock(){
        return $this -> hasOne(Stock::class);
    }
}
