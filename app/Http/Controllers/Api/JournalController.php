<?php

namespace App\Http\Controllers\Api;

use App\Models\Journal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JournalController extends Controller
{
    public function index()
    {
        $journals = Journal::all();
        return response()->json($journals, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $journal = Journal::create([
            'entry' => $request->entry,
            'emotion' => $request->emotion
        ]);
        $journal->save();
        return response()->json($journal, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $journal = Journal::find($id);
        return response()->json($journal, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $journal = Journal::find($id);
        $journal->update([
            'entry' => $request->entry,
            'emotion' => $request->emotion
        ]);
        $journal->save();
        return response()->json($journal, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $journal = Journal::find($id);
        $journal->delete();
    }
}
