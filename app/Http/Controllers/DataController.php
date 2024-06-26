<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\teacher;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function StudentregisterPost(Request $request)
    {
        $validateData = $request->validate([
            'fullname' => 'required',
            'yearlevel' => 'required',
            'dateofbirth' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $validateData['password'] = bcrypt($validateData['password']);
        student::create($validateData);

        return redirect('/loginStudent');
    }

    public function loginStudentPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (auth()->attempt($credentials)) {
            return redirect('/StudentDashboard')->with('Success', 'You are Logged in', 'title', 'Login');
        }

        return back()->with('error', 'Invalid Credentials');
    }

    public function TeacherRegisterPost(Request $request)
    {
        $validateData = $request->validate([
            'fullname' => 'required',
            'dateofbirth' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'phonenumber' => 'required',
            'address' => 'required',
            'employeeid' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        $validateData['password'] = bcrypt($validateData['password']);
        teacher::create($validateData);

        return redirect('/loginTeacher');
    }

    public function loginTeacherPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (auth()->attempt($credentials)) {
            return redirect('/teacherdashboard')->with('Success', 'You are Logged in', 'title', 'Login');
        }

        return back()->with('error', 'Invalid Credentials');
    }
}
