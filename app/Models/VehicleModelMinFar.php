<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alsofronie\Uuid\UuidModelTrait;

class VehicleModelMinFar extends Model
{
    use UuidModelTrait;

    protected $increment = false;

    protected $table = 'vehicle_modal_minimum_fare';

    protected $fillable = ['id','minimum_fare_km','minimum_fare_bdt','status'];


    public function vehicle_modal_basic_details()
    {
        return $this->belongsToMany(VehicleModel::class,'vehicle_modal_basic_details');
    }

}
