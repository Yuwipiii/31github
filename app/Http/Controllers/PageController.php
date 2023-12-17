<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $monday = Lesson::where('day','=',1)->get();
        $tuesday = Lesson::where('day','=',2)->get();
        $wednesday = Lesson::where('day','=',3)->get();
        $thursday = Lesson::where('day','=',4)->get();
        $friday = Lesson::where('day','=',5)->get();
        $saturday = Lesson::where('day','=',6)->get();
        $sunday = Lesson::where('day','=',7)->get();
        return view('index',compact('monday','thursday','tuesday','wednesday','friday','sunday','saturday'));
    }

    public function show(Lesson $lesson)
    {
        return view('show',compact('lesson'));
    }
}
