<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverTruckRoute extends Model {
    use HasFactory;
    protected $table = 'driver_truck_route';
    protected $fillable = ['driver_id', 'truck_id', 'route_id', 'start_date', 'end_date', 'status'];

    public function driver() {
        return $this->belongsTo(Driver::class);
    }

    public function truck() {
        return $this->belongsTo(Truck::class);
    }

    public function route() {
        return $this->belongsTo(Route::class);
    }
}
