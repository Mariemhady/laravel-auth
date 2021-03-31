<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function () {
    return view('student.students');
});

Route::get('/studentstest', function () {
    return "names";
});


Route::get('/studentstest1', function () {
    $year = 2021;
    return $year;
});


Route::get('/studentstest2', function () {
    // $names = ["test", "aya", "amera"];
    $names =  ["name"=>"noha", "age"=>12];
    return $names;
});

Route::get('/studentstest3/{kewwwy}', function ($key) {
    $names =  ["name"=>"noha", "age"=>12];
    if (array_key_exists($key,$names))
        {
            return $names[$key];

        }
        else
        {
        echo "Key does not exist!";
        }
});
// request -- to read request params, to read params sent in url 
Route::get('/request', function () {
    $req = request();
    return $req;
});

Route::get('/request1', function () {
    $req = request("name");
    if($req)
        return $req;
    else {
        return "not found";
    }
});

// ne3ml website so3'yr net3lm feh shwyet 7agatt

Route::get('/school', function () {
    return view('school.schoolhome');
});
Route::get('/school/contact', function () {
    return view('school.contact');
});
Route::get('/school/about', function () {
    return view('school.about');
});

Route::get('/school/books', function () {
    $books = ["test", "aya", "amera"];
    // $test = "test";
    return view('school.books', ["data"=>$books]);
});

Route::get('/school/tracks', function () {
    $tracks =  [
                "t1" => ["name"=>"PHP", "period"=>3],
                "t2" => ["name"=>".Net", "period"=>3],
                "t3" => ["name"=>"MERN", "period"=>9],
    ];

    return view('school.tracks', ["data"=>$tracks]);
});

// Route::get('/school/tracks/{trackid}', function ($trackid) {
//     $tracks =  [
//                 "t1" => ["name"=>"PHP", "period"=>3],
//                 "t2" => ["name"=>".Net", "period"=>3],
//                 "t3" => ["name"=>"MERN", "period"=>9],
//     ];
    
//     if(array_key_exists($trackid, $tracks))
//         return view('school.singletrack', ["data"=>$tracks[$trackid]]);
//     else {
//         // abort(404);
//         return redirect('school/books');
//     }
// });
use App\Http\Controllers;
use App\Http\Controllers\PostController;
// Route::get('/school/tracks', "App\Http\Controllers\BookController@tracksIndex");


// Route::get('/school/tracks/{trackid}', "App\Http\Controllers\BookController@getTrack");
// Route::get('/schosrackid}', "App\Http\Controllers\BookController");
// Route::get('/allstudents', [Controllers\StudentController::class, "allstudents"]);
// Route::get('/student/create',  [Controllers\StudentController::class, "create"]);
// Route::post('/student/store',  [Controllers\StudentController::class, "store"])->name("students.add");
// Route::get('/student/{id}',  [Controllers\StudentController::class, "show"])->name("students.show");
// Route::get('/student/{id}/edit',  [Controllers\StudentController::class, "edit"])->name("students.edit");
// Route::post('/student/{id}/update',  [Controllers\StudentController::class, "update"])->name("students.update");
// Route::get('/student/{id}/delete',  [Controllers\StudentController::class, "destroy"])->name("students.delete");




Route::resource('students', Controllers\StuController::class);

Route::resource('posts',PostController::class);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



