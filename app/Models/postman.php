<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postman extends Model
{

    use HasFactory;
    protected $primaryKey = 'postman_id';

    protected $fillable = ['postman_id','truck_number','postman_number','postman_name','date_of_operation'];
}
