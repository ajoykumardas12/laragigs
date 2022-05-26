<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Listing 
//extends Model
{
    // use HasFactory;

    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Desc1'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Desc2'
            ]
            ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }
}
