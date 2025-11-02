<?php
// app/Http/Controllers/BirthdayController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BirthdayController extends Controller
{
    public function envelope()
    {
        return view('birthday.envelope');
    }

    public function name()
    {
        return view('birthday.name');
    }

    public function storeName(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);
        
        session(['user_name' => $request->name]);
        return redirect()->route('birth');
    }

    public function birth()
    {
        if (!session('user_name')) {
            return redirect()->route('name');
        }
        return view('birthday.birth');
    }

    public function storeBirth(Request $request)
    {
        $request->validate([
            'birth_place' => 'required|string|max:255',
            'birth_date' => 'required|date'
        ]);
        
        session([
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date
        ]);
        return redirect()->route('dream');
    }

    public function dream()
    {
        if (!session('user_name') || !session('birth_place')) {
            return redirect()->route('name');
        }
        return view('birthday.dream');
    }

    public function storeDream(Request $request)
    {
        $request->validate([
            'dream' => 'required|string|max:500'
        ]);
        
        session(['dream' => $request->dream]);
        return redirect()->route('intro');
    }

    public function intro()
    {
        if (!session('user_name')) {
            return redirect()->route('name');
        }
        return view('birthday.intro');
    }

    public function curhat()
    {
        return view('birthday.curhat');
    }

    public function dreamView()
    {
        if (!session('dream')) {
            return redirect()->route('name');
        }
        return view('birthday.dream-view');
    }

    public function giftBox()
    {
        return view('birthday.gift-box');
    }

    public function celebration()
    {
        if (!session('user_name')) {
            return redirect()->route('name');
        }
        return view('birthday.celebration');
    }

    public function photoMemory()
    {
        return view('birthday.photo-memory');
    }

    public function wishes()
    {
        return view('birthday.wishes');
    }

    public function final()
    {
        return view('birthday.final');
    }
}