<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AntrianController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('antrian', compact('users'));
    }

    public function create()
    {
        return view('tambahantrian');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->age = $request->age;
        $user->save();

        return redirect('antrian')->with('success', 'Data berhasil diupload');
    }

    public function add()
    {

    }

    public function show($id)
    {
        $users = User::findOrFail($id);

        return view('detailantrian', compact('users'));
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);

        return view('editantrian', compact('users'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->age = $request->age;
        $user->update();

        return redirect('antrian')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('antrian')->with('success', 'Data berhasil dihapus');
    }
}