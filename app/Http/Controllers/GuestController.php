<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use App\User;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $entries = Entry::with('user')
            ->orderBy('created_at', 'desc')
            ->orderBy('id', 'desc')
            ->paginate(3);
        return view('welcome', compact('entries'));
    }

    public function show(Entry $entryBySlug)
    {
        return view('entries.show', [
            'entry' => $entryBySlug
        ]);
    }

 
}
