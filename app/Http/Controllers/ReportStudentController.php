<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\ReporStudenttInterface;
use App\Contracts\Interfaces\StudentInterface;
use App\Models\ReportStudent;
use App\Http\Requests\StoreReportStudentRequest;
use App\Http\Requests\UpdateReportStudentRequest;
use App\Services\ReportStudentService;
use App\Services\StudentService;

class ReportStudentController extends Controller
{
    private ReporStudenttInterface $reportStudent;
    private ReportStudentService $service;

    public function __construct(StudentInterface $reportStudent , StudentService $service)
    {
        $this->reportStudent = $reportStudent;
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = $this->reportStudent->get();
        return view('' , compact('students'));
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
    public function store(StoreReportStudentRequest $request)
    {
        $data = $this->service->store($request);
        $this->reportStudent->store($data);
        return back()->with('success' , 'Berhasil Menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(ReportStudent $reportStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReportStudent $reportStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReportStudentRequest $request, ReportStudent $reportStudent)
    {
        $data = $this->service->update($reportStudent, $request);
        $this->reportStudent->update($reportStudent->id, $data);
        return back()->with('success' , 'Berhasi Memperbarui Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReportStudent $reportStudent)
    {
        $this->service->delete($reportStudent);
        $this->reportStudent->delete($reportStudent->id);
        return back()->with('success' , 'Berhasi Menghapus Data');
    }
}
