<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Dwi Alfiah Wahyuningrum',
            'email' => 'dwialfiah66@gmail.com',
            'bio' => 'Pelajar',
            'profile_picture' => 'poto.jpeg',
            'skills' => ['HTML', 'PHP'],
        ];
        return view('profile', compact('profile'));
    }
}
