<?php

namespace App\Http\Controllers\StudentOfline;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentOflineController extends Controller
{
    public function index()
    {
        return view('student_offline.index');
    }
}
