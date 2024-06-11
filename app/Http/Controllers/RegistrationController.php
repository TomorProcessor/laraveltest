<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'username' => 'required|min:5|unique:users,username',
        ]);

/**        $attributes['password'] = bcrypt($attributes['password']);
  *          Lehetne így is, de helyette Eloquent mutator-rel, vagyus user osztályba setter
  *        a password taghoz, automatán lefut a create során
*/
        //ha validation failed, akkor nem jut ide. ha minden okés, akkor az eredmény az attributes változóba kerül

        User::create($attributes); //ekkor már megy db-be is

        session()->flash('message', 'Your account has been created.');

        return redirect('/test_asd/a');
    }
}
