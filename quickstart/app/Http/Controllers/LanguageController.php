<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function index($language) 
    {
        if ($language) {
        session()->put('language', $language);
        }
        return redirect()->back();

    }
}
