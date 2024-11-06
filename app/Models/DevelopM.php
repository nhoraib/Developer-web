<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevelopM extends Model
{
    use HasFactory;
    protected $table = 'DevelopM';
    public $timestamps = false;

    //protected $fillable = ['name', 'email','Position', 'about'];


    public function scopeFilter($query, array $filters){
 
        // search for ;
         if($filters['search'] ?? false) {
             $query->where('Position', 'like', '%' . request('search') . '%')
                 ->orWhere('name', 'like', '%' . request('search') . '%');
                 
         }
 
         
     }

   
}
