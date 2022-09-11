<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $name1='Home';
        // return view('admin.index',['sum'=>$num]);'sum' is a new variable that we want it to store $num value
        return view('index',compact('name1'));
    }
    //lesson
    public function lesson()
    {
        $name3='Lesson';
        return view('lesson',compact('name3'));
    }
    //sharing
    public function sharing(){
        return view('sharing',['share'=>'Sharing']);
    }
    //Researching
    public function researching(){
        return view('researching',['r'=>'Researching']);
    }
    public function forum(){
        return view('forum',['f'=>'Forum']);
    }
    public function about(){
        $a='About';
        return view('about',compact('a'));
    }
}
