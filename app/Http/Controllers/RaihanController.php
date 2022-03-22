<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Raihan;

class RaihanController extends Controller
{
    //
    public function index(){
        $data = array (
            "title" => Raihan::getTitle(1)
        ); 
        return view('layouts.main',$data);
    }
    public function home(){
        $data = array (
            "title" => Raihan::getTitle(1)
        ); 
        return view('home',$data);
    }
    public function about(){
        $data = array (
            "title" => Raihan::getTitle(2)
        ); 
        return view('about',$data);
    }   
    public function comment(){
        $data = array (
            "title" => Raihan::getTitle(3)
        ); 
        return view('comment',$data);
    }
    public function selengkapnya(){
        $data = array (
            "title" => Raihan::getTitle(4)
        );    
        return view('selengkapnya',$data); 
    }  
}
