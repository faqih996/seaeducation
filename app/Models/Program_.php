<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program
{
    private static $blog_programs =[

        [
            "title" => "Regular Program",
            "slug" => "regular-program",
            "author" => "Admin",
            "body" => "loren ipsun dolor sit"

        ],

        [
            "title" => "Executive Program",
            "slug" => "executive-program",
            "author" => "Admin2",
            "body" => "loren ipsun"
        ]

    ];

    public static function all()
    {
        return collect(self::$blog_programs);
    }


    public static function find($slug)
    {
        $program = static::all();
        //$program = [];
        //foreach ($programs  as $p){
        //    if($p["slug"] === $slug){
        //        $program= $p;
        //    }
        //}

        return $program->firstWhere('slug', $slug);
    }

}
