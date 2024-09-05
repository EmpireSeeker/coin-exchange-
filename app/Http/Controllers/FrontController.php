<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Coin, Setting, Section};

class FrontController extends Controller
{
    private $settings = Setting::all();
    public function index()
    {
        return view('index', ['title' => 'Home - Welcome', 'coins' => Coin::all(), 'sections' => Section::all()]);
    }

    public function about()
    {
        return view('about', ['title' => 'About', 'settings' => $settings]);
    }

    public function exchange(Coin $coin)
    {
        return view('exchange', ['title' => 'Our rates', 'coin' => $coin]);
    }

    public function support()
    {
        return view('support', ['title' => 'Support', 'settings' => $settings]);
    }
}
