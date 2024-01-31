<?php

namespace App\Models\Backend\BikeManagement;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BikeMotorType extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'image', 'other_info', 'status'];

    protected $searchableFields = ['*'];

    protected $table = 'bike_motor_types';

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function motorBikes()
    {
        return $this->hasMany(MotorBike::class);
    }
}
