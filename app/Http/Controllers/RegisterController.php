<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Applicant;
use App\Models\Company;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function owner(){
        return view(('register.owner'), [
            'title' => 'owner Register'
        ]);
    }

    public function applicant(){
        return view(('register.applicant'), [
            'title' => 'Applicant Register'
        ]);
    }

    public function ownerRegister(Request $request){
        $validData = $request->validate([
            'name' => ['required', 'min:5'],
            'email' => ['required', 'email:dns', 'unique:companies', 'unique:applicants'],
            'phone' => ['required', 'unique:companies', 'unique:applicants'],
            'city' => ['required', 'min:4'],
            'address' => ['required', 'min:5'],
            'description' => ['required','min:10'],
            'password' => ['required', 'confirmed', 'min:3']
        ]);

        $validData['password'] = Hash::make($validData['password']);
        $validData['photo'] = 'images/test/test.jpg';

        Company::create($validData);

        return redirect('/login')->with('success', 'Registration Owner successfull! Please login.');
    }

    public function applicantRegister(Request $request){

        $validData = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email:dns', 'unique:companies', 'unique:applicants'],
            'phone' => ['required', 'unique:companies', 'unique:applicants'],
            'gender' => ['required'],
            'address' => ['required', 'min:5'],
            'password' => ['required', 'confirmed', 'min:3']
        ]);

        $validData['password'] = Hash::make($validData['password']);
        $validData['photo'] = 'images/test/test.jpg';
        $validData['cv'] = '';


        Applicant::create($validData);

        return redirect('/login')->with('success', 'Registration successfull! Please login.');
    }
}
