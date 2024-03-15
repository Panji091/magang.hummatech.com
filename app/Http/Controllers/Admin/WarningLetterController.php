<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Interfaces\WarningLetterInterface;
use App\Http\Controllers\Controller;
use App\Models\Warning_Letter;
use App\Http\Requests\StoreWarning_LetterRequest;
use App\Http\Requests\UpdateWarning_LetterRequest;
use App\Models\WarningLetter;
use App\Services\WarningLetterService;

class WarningLetterController extends Controller
{
    private WarningLetterInterface $warningLetters;
    private WarningLetterService $service;
    public function __construct(WarningLetterInterface $warningLetters , WarningLetterService $service)
    {
        $this->warningLetters = $warningLetters;
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $warningLetters = $this->warningLetters->get();
        return view('' , compact('warningLetters'));
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
    public function store(StoreWarning_LetterRequest $request)
    {
        $data = $this->service->store($request);
        $this->warningLetters->store($data);
        return back()->with('success' , 'Berhasil Menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(WarningLetter $WarningLetter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WarningLetter $WarningLetter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWarning_LetterRequest $request, WarningLetter $WarningLetter)
    {
        $data = $this->service->update($WarningLetter, $request);
        $this->warningLetters->update($WarningLetter->id, $data);
        return back()->with('success' , 'Berhasi Memperbarui Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WarningLetter $WarningLetter)
    {
        $this->service->delete($WarningLetter);
        $this->warningLetters->delete($WarningLetter->id);
        return back()->with('success' , 'Berhasi Menghapus Data');
    }
}
