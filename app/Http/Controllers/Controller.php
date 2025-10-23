<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function login()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan()
    {
        $destinations = [
            [
                'id' => 1,
                'name' => 'Bali Paradise Tour',
                'location' => 'Bali, Indonesia',
                'price' => 'Rp 5.500.000',
                'duration' => '5 Days 4 Nights',
                'rating' => 4.8,
                'image' => 'https://images.unsplash.com/photo-1537996194471-e657df975ab4?w=400'
            ],
            [
                'id' => 2,
                'name' => 'Raja Ampat Adventure',
                'location' => 'Papua, Indonesia',
                'price' => 'Rp 12.000.000',
                'duration' => '7 Days 6 Nights',
                'rating' => 4.9,
                'image' => 'https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=400'
            ],
            [
                'id' => 3,
                'name' => 'Bromo Sunrise Experience',
                'location' => 'East Java, Indonesia',
                'price' => 'Rp 2.500.000',
                'duration' => '3 Days 2 Nights',
                'rating' => 4.7,
                'image' => 'https://images.unsplash.com/photo-1605640840605-14ac1855827b?w=400'
            ],
            [
                'id' => 4,
                'name' => 'Komodo Island Explorer',
                'location' => 'NTT, Indonesia',
                'price' => 'Rp 8.500.000',
                'duration' => '6 Days 5 Nights',
                'rating' => 4.8,
                'image' => 'https://images.unsplash.com/photo-1552733407-5d5c46c3bb3b?w=400'
            ],
            [
                'id' => 5,
                'name' => 'Yogyakarta Cultural Tour',
                'location' => 'Yogyakarta, Indonesia',
                'price' => 'Rp 3.200.000',
                'duration' => '4 Days 3 Nights',
                'rating' => 4.6,
                'image' => 'https://images.unsplash.com/photo-1596422846543-75c6fc197f07?w=400'
            ],
            [
                'id' => 6,
                'name' => 'Lombok Beach Escape',
                'location' => 'Lombok, Indonesia',
                'price' => 'Rp 4.800.000',
                'duration' => '5 Days 4 Nights',
                'rating' => 4.7,
                'image' => 'https://images.unsplash.com/photo-1559628376-f3fe5f782a2e?w=400'
            ]
        ];

        return view('pengelolaan', compact('destinations'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'Guest');
        return view('profile', compact('username'));
    }
}