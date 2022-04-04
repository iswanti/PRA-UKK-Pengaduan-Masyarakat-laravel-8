<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //gunakan middleware (memvalidasi section) auth
    }
    public function index()
    {
        $users = User::where('level', 'petugas')->get();
        return view('user.index', ['data' => $users]);
    }

    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'level' => 'petugas',
            'password' => Hash::make($request->password)

        ]);

        return redirect('/users');
    }

    public function edit($id){
        $data = User::find($id);
        return view('user.edit', ['data' => $data]);
    }

    public function update(Request $request, $id){
        $data = User::find($id);
        $data->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ]);

        return redirect('/users');
    }

    public function delete($id){
        $data = User::find($id);

        $data->delete();

        return redirect('/users');
    }
}
