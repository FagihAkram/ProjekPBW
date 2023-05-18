<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required',
        ]);

        Comment::create([
            'message' => $request->input('message'),
        ]);

        return redirect()->back()->with('success', 'Komentar Anda berhasil disimpan!');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

}
