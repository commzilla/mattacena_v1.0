<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $specials = Category::where('name', 'specials')->first();

        return view('welcome', compact('specials'));
    }
    public function thankyou()
    {
        return view('thankyou');
    }

    public function laNostraStoria(){
        return view('pages.la_nostra_storia');
    }

    public function contact(){
        return view('pages.contact');
    }
    public function DoveSiamo(){
        return view('pages.dove_siamo');
    }


    public function MenuMattopiatto(){
        return view('pages.menu.MenuMattopiatto');
    }
    public function Antipasti(){
        return view('pages.menu.Antipasti');
    }
    public function StritteFudde(){
        return view('pages.menu.StritteFudde');
    }
    public function INostriPrimi(){
        return view('pages.menu.INostriPrimi');
    }
    public function Manzo(){
        return view('pages.menu.Manzo');
    }
    public function MenuBistecca(){
        return view('pages.menu.MenuBistecca');
    }
    public function INostriOntorni(){
        return view('pages.menu.INostriOntorni');
    }
    public function IBere(){
        return view('pages.menu.IBere');
    }

    public function PrenotaUnTavolo(){
        return view('pages.prenota_un_tavolo');
    }
    public function PrenotaUnTavoloForm(){
        return view('pages.prenota_un_tavolo_form');
    }
    public function PrenotaUnTavoloFormSubmit(){
        return view('pages.prenota_un_tavolo_form_submit');
    }
}
