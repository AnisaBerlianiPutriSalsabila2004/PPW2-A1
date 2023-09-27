<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tugas_controller;

Route::get('/about', [tugas_controller::class, 'menuHome']);
Route::get('/home', [tugas_controller::class, 'menuAbout']);

?>







Route::get('about',
'MencobaController@tesfungsi'); // untuk laravel versi 7
Route::get('/about',
[MencobaController::class, 'tesfungsi']); //


















<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MencobaController extends Controller
{
    //
}

















<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MencobaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly. created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
}













<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MencobaController;

// Versi 7
Route::get('trying','MencobaController@boomesport');

// Vesri 9
Route::get('/boom', [MencobaController::class, 'boomesport']);

Route::get('/prx', [MencobaController::class, 'prxesport']);

Route::get('/fnatic', [MencobaController::class, 'fnaticesport']);

Route::get('/fpx', [MencobaController::class, 'fpxesport']);

Route::get('/', [MencobaController::class, 'beranda']);

