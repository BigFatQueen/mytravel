<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=['name','desc','depart_id','arrive_id','start','end','priceperperson','discount','days','ppl','company_hotel_id','company_car_id','status']
      
}
