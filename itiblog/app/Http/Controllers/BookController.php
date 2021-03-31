<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{

  public  $tracks =  [
        "t1" => ["name"=>"PHP", "period"=>3],
        "t2" => ["name"=>".Net", "period"=>3],
        "t3" => ["name"=>"MERN", "period"=>9],
    ];
    function tracksIndex () {
            // $tracks =  [
            //             "t1" => ["name"=>"PHP", "period"=>3],
            //             "t2" => ["name"=>".Net", "period"=>3],
            //             "t3" => ["name"=>"MERN", "period"=>9],
            // ];
        
            return view('school.schoolhome', ["data"=>$this->tracks]);
    }

    function getTrack($trackid) {
        // $tracks =  [
        //             "t1" => ["name"=>"PHP", "period"=>3],
        //             "t2" => ["name"=>".Net", "period"=>3],
        //             "t3" => ["name"=>"MERN", "period"=>9],
        // ];
        
        if(array_key_exists($trackid, $this->tracks))
            return view('school.tracks', ["data"=>$this->tracks[$trackid]]);
        else {
            // abort(404);
            return redirect('school/books');
        }
    }

    public function __invoke()
    {
        echo "hello";
    }





}
