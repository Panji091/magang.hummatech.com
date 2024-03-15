<?php

namespace App\Http\Controllers\StudentOnline;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentOnlineController extends Controller
{
    public function index()
    {
        return view('student_online.index');
    }
}
