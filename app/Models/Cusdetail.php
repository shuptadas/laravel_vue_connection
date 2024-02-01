<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cusdetail extends Model
{
    use HasFactory;

    protected $table = "cusdetails";
    protected $primaryKey = "id";
    protected $fillable = ['mobile','address'];

    public $timestamps = false;

    // public function __construct($mobile, $address) {
    //     $this->mobile = $mobile;
    //     $this->address = $address;
    // }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
}
