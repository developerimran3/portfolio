<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class StudentController extends Controller
{
    public function studentLogin()
    {
        return view("student.login");
    }
    public function studentRegister()
    {
        return view("student.register");
    }

    /*/ */
    public function register(Request $request)
    {
        //valadation
        $request->validate([
            "firstName"   => "required",
            "lastName"    => "required",
            "email"       => "required|email|unique:students",
            "password"    => "required|confirmed",
        ]);
        //file upload
        $fileName = $this->fileUpload($request->file('photo'), "media/student/");

        //data store
        Student::create([
            "firstName" => $request->firstName,
            "lastName"  => $request->lastName,
            "email"     => $request->email,
            "phone"     => $request->phone,
            "skill"     => $request->skill,
            "address"   => $request->address,
            "password"  => Hash::make($request->password),
            "photo"     => $fileName,
        ]);
        return back()->with("success", "Student Create Successful!");
    }

    public function login(Request $request)
    {
        $student = $request->validate([
            "email"       => "required",
            "password"    => "required",
        ]);

        if (Auth::guard('student')->attempt($student)) {
            return redirect()->route('student.profile')->with('success', 'Login Success');
        }
    }



    public function studentProfile()
    {
        return view("student.profile");
    }
    public function studentLogout()
    {
        Auth::guard('student')->logout();
        return redirect()->route('student.login');
    }

    public function allStudent()
    {
        $student = Student::all();
        return view('student.all', compact('student'));
    }
}
