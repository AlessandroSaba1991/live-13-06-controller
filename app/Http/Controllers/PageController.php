<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $data = [
            'title'=> 'My Library',
            'description' => 'lorem10'
        ];
        return view('home',$data);
    }
    public function about()
    {
        $data = [
            'title'=> 'About Page',
            'description' => 'lorem10'
        ];
        return view('about',compact('data'));
    }
    public function contacts()
    {
        $data = [
            'title'=> 'Mt Contacts',
            'description' => 'lorem10'
        ];
        return view('contacts',compact('data'));
    }

}
