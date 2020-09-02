<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('entries.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|min:5|max:255|unique:entries',
            'content' => 'required|min:20|max:2000',
        ]);

        // dd($validateData);
        $entry = new Entry();
        $entry->title = $validateData['title'];
        $entry->content = $validateData['content'];
        $entry->user_id = auth()->id();
        $entry->save();

        $status = "Your entry has been publish successfully";
        return back()->with(compact('status'));
    }

    public function edit(Entry $entry)
    {
        $this->authorize('update', $entry);
        return view('entries.edit', compact('entry'));
    }

    public function update(Request $request, Entry $entry)
    {
        $this->authorize('update', $entry);

        $validateData = $request->validate([
            'title' => 'required|min:5|max:255|unique:entries,id,' . $entry->id,
            'content' => 'required|min:20|max:2000',
        ]);

        // TODO: edit validate only author
        // if($entry->user_id === auth()->id()){
        $entry->title = $validateData['title'];
        $entry->content = $validateData['content'];
        $entry->save();
        // } 

        $status = "Your entry has been updated successfully";
        return back()->with(compact('status'));
    }
}
