<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use HasFactory;
    protected $primaryKey = 'truck_id';
    protected $fillable = ['truck_number', 'no_of_items', 'postman_name', 'date_of_operation', 'status'];
    
     public function Package()
    {
        return $this->hasMany(Package::class, 'truck_number', 'truck_number');
    }

     public function postman()
    {
        return $this->hasOne(postman::class, 'truck_number', 'truck_number');
    }

}
