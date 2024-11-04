<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;

class Devolp extends Model
{
    public function scopeFilter($query, array $filters){
 
       // search for ;
        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('name', 'like', '%' . request('search') . '%');
                
        }
    }
}
