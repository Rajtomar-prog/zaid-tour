<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Profile;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        return view('admin.profiles.profile',compact('user'));
    }

    
    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,'.Auth::user()->id,
            'bio' => 'nullable|string|max:255',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'mobile' => 'numeric|digits:10',
            'address' => 'required|max:2048'
        ]);

        $user = Auth::user();

        $user->update(['name' => $request->input('name'), 'email' => $request->input('email')]);

        if ($request->hasFile('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        $user->profile()->updateOrCreate(['user_id' => $user->id], $data);

        return redirect()->route('my_account')->with('success', 'Profile updated successfully!');
    }
}
