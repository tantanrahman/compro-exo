<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;

    protected $table = 'tracking_shipment';

    /**
     * @author Tantan
     * @description Get AWB for Compro
     * @created 16 Sep 2021
     */
    public static function getAwb($id)
    {
        $items      = self::join('shipment','tracking_shipment.shipment_id','=','shipment.id')
                        ->select('tracking_shipment.status_eng AS awb_eng')
                        ->where('shipment.connote',$id);

        return $items->first($id);
    }
}
