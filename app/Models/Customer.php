<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customers";
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = ['name', 'age', 'email'];

    // public function __construct( $name,  $age,  $email) {
    //     $this->name = $name;
    //     $this->age = $age;
    //     $this->email = $email;
    // }

    public function cusdetail() : HasOne
    {
        return $this->hasOne(CusDetail::class, 'customer_id', 'id');
    }

    public function order() : HasMany
    {
        return $this->hasMany(Order::class, 'customer_id', 'id');
    }
}
