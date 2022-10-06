<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HisobotController extends Controller
{
    public function hisobot(){
//        Session::get("$tahlil");
        require_once 'AmalController.php';
        return view('admin.hisobot');
    }
}
