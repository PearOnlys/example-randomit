<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

use function PHPUnit\Framework\throwException;

class SessionController extends Controller
{
    public function create()
    {
        return view('login');
    }

    public function store(){
        $attributes = request()->validate([
        'name' => 'required',
        'password' => 'required'
        ]);

        if(auth()->attempt($attributes)){
            return redirect('/');
        }
        return back()->withErrors([
        'name' => 'Wrong name',
        'password' => 'Wrong password']);
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}
