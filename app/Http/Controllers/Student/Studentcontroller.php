<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class Studentcontroller extends Controller
{
    public function index()
    {
        return view('addstudent');
    }
    public function list()
    {
        $students = Student::all();
        return view('welcome', compact('students'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'email' => 'required', 'unique',
        ]);

        $student = new Student();

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $student->image = $imageName;

        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->gender = $request->gender;
        $student->save();
        return back()->with('success','Item created successfully!');
    }

    public function update(Request $request, Student $student)
    {
        if (!empty($request->oldimage && $request->file('image')))
        {
            unlink(public_path('images/' . $request->oldimage));
            $imageName = time(). '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }
        else if(!empty($request->file('image')))
        {
            $imageName = time(). '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }
        else
        {
            $imageName = $request->oldimage;
        }
        $student->image = $imageName;

        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->gender = $request->gender;
        $student->save();
        return back()->with('success','Item upadated successfully!');
    }




    public function delete(Student $student)
    {
        if (!empty($student->image)) {
            unlink(public_path('images/' . $student->image));
        }
        $student->delete();

        return back()->with('danger','Item deleted successfully!');
    }
}
