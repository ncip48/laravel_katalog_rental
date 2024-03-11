<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.akun')->with('user', $user);
    }

    public function update(Request $request, User $user)
    {
        $input = $request->all();
        if ($input['password']) {
            $input['password'] = Hash::make($input['password']);
        } else {
            unset($input['password']);
        }

        // dd($input);
        $user->update($input);
        return redirect()->route('akun')->with('success', 'Akun berhasil diupdate');
    }
}
