<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request)
    {
     
        $request->session()->put('selected_language', $request->input('language'));

        return response()->json(['success' => true]);
    }
}
