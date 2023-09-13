<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    use HasFactory;
    protected $fillable =['name','quantity', 'price'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public static function boot(){
    parent::boot(); 

    static::created(function($purchase){
        $purchase->product->stock->increment('quantity',$purchase->quantity);
    });

    static::updated(function($purchase){
        $purchase->product->stock->increment('quantity',$purchase->quantity);
    });

    static::deleting(function($purchase){
        $purchase->product->stock->decrement('quantity',$purchase->quantity);
    });

    }
}
