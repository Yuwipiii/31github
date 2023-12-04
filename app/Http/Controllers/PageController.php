<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $lessons = Lesson::all();
        return view('index',compact('lessons'));
    }
}
