<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //login
    public function loginStudent()
    {
        return view('loginStudent');
    }
    public function loginTeacher()
    {
        return view('loginTeacher');
    }
    public function loginParents()
    {
        return view('loginParents');
    }
    //register
    public function StudentRegister()
    {
        return view('StudentRegister');
    }
    public function TeacherRegister()
    {
        return view('TeacherRegister');
    }

    public function admin()
    {
        return view('admin');
    }

    public function StudentDashboard()
    {
        return view('StudentDashboard');
    }

    public function teacherdashboard()
    {
        return view('teacherdashboard');
    }
}
