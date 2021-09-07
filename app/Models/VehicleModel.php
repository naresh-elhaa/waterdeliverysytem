<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alsofronie\Uuid\UuidModelTrait;

class VehicleModel extends Model
{
    use UuidModelTrait;

    protected $increment = false;

    protected $table = 'vehicle_modal_basic_details';

    protected $fillable = ['id','modal_name','seating_capacity','length','width','delivery_support','delivery_price','maximum_capacity','status'];


    public function vehicle_modal_minimum_fare()
    {
        return $this->belongsToMany(VehicleModelMinFar::class,'vehicle_modal_minimum_fare');
    }

}
