<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ERPController extends Controller
{
    // صفحة الهبوط
    public function index($locale = 'en')
    {
        if (!in_array($locale, ['en', 'ar'])) {
            $locale = 'en';
        }

        app()->setLocale($locale);

        return view('home', compact('locale'));
    }

    // تغيير اللغة
    public function switchLang($locale)
    {
        if (!in_array($locale, ['en', 'ar'])) {
            return redirect('/');
        }

        return redirect("/$locale");
    }
}
