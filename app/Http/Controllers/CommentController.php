<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Jobs\SendEmailJob;
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

        // Panggil SendEmailJob untuk mengirim email
        $commentData = Comment::latest()->first()->toArray();
        dispatch(new SendEmailJob($commentData));

        return redirect()->back()->with('success', 'Komentar Anda berhasil disimpan!');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

}
