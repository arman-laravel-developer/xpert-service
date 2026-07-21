<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $user, $userRoles;

    public function index()
    {
        return view('user.index', ['roles' => Role::all()]);
    }

    public function create(Request $request)
    {
        $this->user = User::newUser($request);
        if ($request->role) {
            foreach ($request->role as $selectedOption)
            {
                $this->user->roles()->attach($selectedOption);
            }
        }
        return redirect('/user/add')->with('message', 'User info create successfully.');
    }

    public function manage()
    {
        return view('user.manage', ['users' => User::all()]);
    }

    public function edit($id)
    {
        return view('user.edit', ['roles' => Role::all(), 'user' => User::find($id)]);
    }

    public function update(Request $request, $id)
    {
        $this->user = User::updateUser($request, $id);
        if ($request->role)
        {
            DB::table('user_role')->where('user_id', $id)->delete();
            foreach ($request->role as $selectedOption)
            {
                $this->user->roles()->attach($selectedOption);
            }
        }
        return redirect('/user/manage')->with('message', 'User info update successfully.');
    }

    public function delete($id)
    {
        User::deleteUser($id);
        DB::table('user_role')->where('user_id', $id)->delete();
        return redirect('/user/manage')->with('message', 'User info delete successfully.');
    }

    public function adminProfile()
    {
        return view('admin.profile');
    }

    public function updateAdminProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . auth()->id(),
            'mobile' => 'nullable|string|max:20',
            'password' => 'nullable|string|min:8|confirmed',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;

        if ($request->file('image')) {
            if ($user->image && file_exists($user->image)) {
                unlink($user->image);
            }
            $img = $request->file('image');
            $name = 'profile-' . time() . '.' . $img->getClientOriginalExtension();
            $dir = 'user-images/';
            $img->move($dir, $name);
            $user->image = $dir . $name;
        }

        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        $user->save();
        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
