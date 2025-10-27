<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function teacherLogin()
    {
        return view("teacher.login");
    }
    public function teacherRegister()
    {
        return view("teacher.register");
    }

    /*/ */
    public function register(Request $request)
    {
        //valadation
        $request->validate([
            "name"        => "required",
            // "username"    => "required|username|unique:teachers",
            "email"       => "required|email|unique:teachers",
            // "phone"       => "required|phone|unique:teachers",
            "password"    => "required|confirmed",
        ]);
        //file upload
        $fileName = $this->fileUpload($request->file('photo'), "media/teacher/");

        //data store
        Teacher::create([
            "name"      => $request->name,
            "username"  => $request->username,
            "email"     => $request->email,
            "phone"     => $request->phone,
            "degree"    => $request->degree,
            "password"  => Hash::make($request->password),
            "photo"     => $fileName,
        ]);
        return back()->with("success", "Teacher Create Successful!");
    }

    public function login(Request $request)
    {
        $cradencial = $request->validate([
            "email"       => "required",
            "password"    => "required",
        ]);

        if (Auth::guard('teacher')->attempt($cradencial)) {
            return redirect()->route('teacher.profile')->with('success', 'Login Success');
        }
    }



    public function teacherProfile()
    {
        return view("teacher.profile");
    }
    public function teacherLogout()
    {
        Auth::guard('teacher')->logout();
        return redirect()->route('teacher.login');
    }

    // public function showTeacher()
    // {
    //     $teacher = teacher::all();
    //     return view('teacher.show', compact('teacher'));
    // }
}
