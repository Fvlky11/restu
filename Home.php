<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class Home extends BaseController
{

    



    public function index(): string
    {
        return view('Pages/home');
    }

    public function date(): string
    {
        return view('Pages/date');
    }

    public function tempat(): string
    {
        return view('Pages/tempat');
    }

    public function makan(): string
    {
        return view('Pages/makan');
    }

    public function i(): string
    {
        return view('Album/i');
    }    

    public function u(): string
    {
        return view('Album/u');
    }    

    public function iu(): string
    {
        return view('Album/iu');
    }    


}
