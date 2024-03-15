<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Interfaces\AbsenteePermitInterface;
use App\Http\Controllers\Controller;
use App\Models\AbsenteePermit;
use App\Http\Requests\StoreAbsenteePermitRequest;
use App\Http\Requests\UpdateAbsenteePermitRequest;

class AbsenteePermitController extends Controller
{
    private AbsenteePermitInterface $absenteePermit;

    public function __construct(AbsenteePermitInterface $absenteePermit)
    {
        $this->absenteePermit = $absenteePermit;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $absenteePermitData = $this->absenteePermit->get();
        return view('', compact('absenteePermitData'));
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
    public function store(StoreAbsenteePermitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AbsenteePermit $absenteePermit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AbsenteePermit $absenteePermit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAbsenteePermitRequest $request, AbsenteePermit $absenteePermit)
    {
        $this->absenteePermit->update($absenteePermit, $request->validated());
        return back()->with('success', 'Berhasil memperbaharui data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AbsenteePermit $absenteePermit)
    {
        //
    }
}
