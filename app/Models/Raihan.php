<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Raihan extends Model
{
    private static $namaku = "Raihan Hidayatullah Djunaedi";    
    
    public static function getNama(){
        return self::$namaku;
    }
    
    public static function getTitle($id){
        if ($id === 1){
            $title = "Home";
        }   
        elseif ($id === 2) {
            $title = "About";
        }
        elseif ($id === 3) {
            $title = "Comment";
        }
        else{
            $title = "Selengkapnya";
        }
        return $title;
    }

    public static function getRumah($id){
        if($id === 1){
            $rumah = "Jl. Puspa VI No 32";
        }
        else{
            $rumah = "Jl. Mawar III No 1";
        }
        return $rumah;
    }
    
    public static function getArrayku(){
        $data = collect([1,2,3,4,5]);
        // $total = ''; 
        // foreach ($data as $d) {
        //     $total = (int)$total + (int)$d;
        // }
        // return $total;
            return $data -> sum();
    }
}
