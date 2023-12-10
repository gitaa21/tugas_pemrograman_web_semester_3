<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;

class UserController extends Controller
{
    public function passwordAction(Request $request)
    {
        $request->validate([
            'pass1' => 'required',
            'pass2' => 'required',
            'pass3' => 'required',
        ]);

        if (!Hash::check($request->pass1, Auth::user()->password))
            return back()->withErrors(['pass1' => 'Password lama salah']);

        if ($request->pass2 != $request->pass3)
            return back()->withErrors(['pass2' => 'Password baru dan konfimasi password baru harus sama']);

        user::where('id_user', Auth::id())->update([
            'password' => Hash::make($request->pass2)
        ]);
        return redirect()->route('user.password')->with(['message' => 'Password berhasil diubah!']);
    }


    public function password()
    {
        $title = 'Ubah Password';
        return view('user.password', compact('title'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }

    public function loginAction(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('home');
            // return 'Login Berhasil';
        }

        return back()->withErrors([
            'username' => 'Salah kombinasi username dan password'
        ]);
    }


    public function login()
    {
        $title = 'Login';
        return view('user.login', compact('title'));
    }

    // public function index()
    // {
    //     $title = 'Data User';
    //     $users = User::all();
    //     return view('user.index', compact('title', 'users'));
    // }

    public function index(Request $request)
    {
        $title = 'Data User';
        $q = $request->query('q');
        $users = User::where('nama_user', 'like', '%'. $q. '%')
            ->paginate(10)
            ->withQueryString();
        $no = $users->firstItem();
        return view('user.index', compact('title','users', 'q', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah User';
        $users = User::orderBy('nama_user')->get();
        return view('user.create', compact('title', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_user'=> 'required',
            'username'=> 'required',
            'telp'=> 'required',
            'email'=> 'required',
            'jabatan'=> 'required',
        ]);
        $user = new User($request->all());
        $user->save();
        return redirect()->route('user.index')->with(['message' => 'Data Berhasil Ditambah']);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $title = 'Ubah User';
        $users = User::orderBy('nama_user')->get();
        return view('user.edit', compact('title', 'user', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('user.index')->with(['message'=>'Data berhasil diubah!']);  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
      $user->delete();
      return redirect()->route('user.index')->with(['message'=>'Data berhasil dihapus!']);  
    }
}
