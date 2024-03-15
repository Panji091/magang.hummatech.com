<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\Interfaces\CodeOfConductInterface;
use App\Http\Controllers\Controller;
use App\Models\CodeOfConduct;
use App\Http\Requests\StoreCodeOfConductRequest;
use App\Http\Requests\UpdateCodeOfConductRequest;
use App\Services\CodeOfConductService;

class CodeOfConductController extends Controller
{
    private CodeOfConductInterface $codeOfConduct;
    private CodeOfConductService $service;

    public function __construct(CodeOfConductInterface $codeOfConduct, CodeOfConductService $codeOfConductService)
    {
        $this->codeOfConduct = $codeOfConduct;
        $this->service = $codeOfConductService;
    }

    /**
     * Displaying view for crud data upload at admin (/admin/settings/code-of-conduct)
     *
     * @author cakadi190
     * @package pkl-hummatech
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index(): \Illuminate\Contracts\View\View
    {
        $codeOfConducts = $this->codeOfConduct->get();
        return view('', compact('codeOfConducts'));
    }

    /**
     * Processing data storing from submission
     *
     * @author cakadi190
     * @package pkl-hummatech
     */
    public function store(StoreCodeOfConductRequest $request)
    {
        $this->service->store($request->validated());
        return back()->with('success' , 'Berhasil menambahkan data');
    }

    /**
     * Processing data update from submission
     *
     * @author cakadi190
     * @package pkl-hummatech
     */
    public function update(CodeOfConduct $codeOfConduct, UpdateCodeOfConductRequest $request)
    {
        $this->service->update($codeOfConduct, $request);
        return back()->with('success' , 'Berhasil memperbaharui data');
    }
}
