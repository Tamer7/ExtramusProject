<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromoCode extends Model
{
    use HasFactory;
    public function discountCalculate($promoCode, $place_price){
      $promo = PromoCode::where('promocode', $promoCode)->first();
      $flag = ($promo->discount)/100;
      return $place_price * $flag;
    }

    public function checkingValidity($promoCode, $map_name){
        $promo_match_for_all = PromoCode::where('promocode', $promoCode)
                                          ->where('map_name', "For All")
                                          ->where('status', 1)
                                          ->count();
        if($promo_match_for_all) return true;
        $promo_match_for_map = PromoCode::where('promocode', $promoCode)
                                          ->where('map_name', $map_name)
                                          ->where('status', 1)
                                          ->count();
        if($promo_match_for_map) return true;

        return false;
    }

    public function usedPromoOnce($promoCode){
        $promomat = PromoCode::where('promocode', $promoCode)
                                ->where('status', 1)
                                ->first();

        if($promomat->numberofuse == -1) return true;

        if($promomat->numberofuse <= 0){
          $promomat->status=0;
          return false;
        }else{
          $promomat->numberofuse = $promomat->numberofuse - 1;
          if($promomat->numberofuse == 0)
            $promomat->status=0;
        }
        $promomat->save();
        return true;
    }
}