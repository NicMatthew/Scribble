<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherShipment extends Model
{
    use HasFactory;

    protected $primaryKey = "VoucherShipmentID";
    protected $table = "voucher_shipments";

}
