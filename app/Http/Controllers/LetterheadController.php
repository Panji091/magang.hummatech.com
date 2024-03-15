<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\LetterheadsInterface;
use App\Models\Letterhead;
use App\Http\Requests\StoreLetterheadRequest;
use App\Http\Requests\UpdateLetterheadRequest;

class LetterheadController extends Controller
{
    private LetterheadsInterface $letterhead;

    public function __construct(LetterheadsInterface $letterhead)
    {
        $this->letterhead = $letterhead;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $letterheads = $this->letterhead->get();
        return view('' , compact('letterheads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLetterheadRequest $request)
    {
        $this->letterhead->store($request->validated());
        return back()->with('success' , 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Letterhead $letterhead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Letterhead $letterhead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLetterheadRequest $request, Letterhead $letterhead)
    {
        $this->letterhead->update($letterhead->id , $request->validated());
        return back()->with('success' , 'Data Berhasil Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Letterhead $letterhead)
    {
        $this->letterhead->delete($letterhead->id);
        return back()->with('success' , 'Data Berhasil DiHapus');
    }
}
