<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
// use App\Models\Role;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('updated_at', 'DESC')->get();
        return view('users.index')->with('users', $users);

    }

    public function edit()
    {

        return view('users.edit')->with('user', auth()->user());

    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'about' => 'required'
        ]);

        $user = auth()->user();

        $user->update([
            'name' => $request->name,
            'about' => $request->about
        ]);

        session()->flash('success', 'Profile updated successfully');
        return redirect()->back();

    }


    /**
     * Delete the user's account.
     */
    public function destroy(User $user): RedirectResponse
    {
        $user->delete();

        return redirect()->route('staff.index')->with('success', 'User deleted successfully.');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('searchNamePhone');

        $results = User::where('name', 'like', '%' . $searchTerm . '%')
            ->orWhere('phone', 'like', '%' . $searchTerm . '%')
            ->orWhereHas('roles', function ($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%');
            })
            ->get();

        return view('staff.search', compact('results'));
    }

    public function makeAdmin(Request $request, User $user)
    {
        // $user->role = 'admin';

        // $user->save();

        // session()->flash('success', 'Admin added successfully');
        // return redirect(route('users.index'));

        $role = $request->input('role');

        $user->role = $role;
        $user->save();

        session()->flash('success', 'User role updated successfully');
        return redirect(route('users.index'));

    }
}
