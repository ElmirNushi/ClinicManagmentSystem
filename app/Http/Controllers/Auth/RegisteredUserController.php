<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{

    public function create(User $user)
    {
        return view('auth.register', compact('user'), [
            'categories' => Category::all(),
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|string|email|max:255|unique:users',
            'photo' => 'file|nullable|mimes:jpg,bmp,png',
            'category_id' => 'string',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $attributes['photo'] = request('photo')->store('avatars');

        User::create($attributes);

        return redirect('users')->with('success', 'User has been created successfully!');
    }
}
