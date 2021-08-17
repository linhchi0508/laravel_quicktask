<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::pagination(config('paginate.list'));

        return view('layouts.list_student', compact('students'));
    }

    public function create()
    {
        return view('layouts.create_student');
    }

    public function store(StudentRequest $request)
    {
        if($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalName();
            $extension = time() . $extension;
            $file->move('storage/image',  $extension);
            $filename = 'storage/image/' . $extension;
        } else {
            $filename = 'storage/image/account.png';
        }
        Student::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'student_number' => $request->student_number,
            'birthday' => $request->birthday,
            'manjor' => $request->manjor,
            'avatar' => $filename,
        ]);

        return redirect()->route('student.index')->with('message', trans('message.create_success'));
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        $subjects = $student->subjects;
        $listSubject = Subject::all();

        return view('layouts.readstudent', compact('student', 'subjects', 'listSubject'));
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('layouts.edit', compact('student'));
    }

    public function update(StudentRequest $request, $id)
    {
        $student= new Student();
        if($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalName();
            $extension = time() . $extension;
            $file->move('storage/image',  $extension);
            $filename = 'storage/image/'.$extension;
        }
        $data = [
            'fullname' => $request->fullname,
            'avatar' => $filename,
            'birthday' => $request->birthday,
        ];
        $student::findOrFail($id)->update($data);

        return redirect()->route('student.index')->with('message', trans('message.edit_success'));
    }


    public function destroy($id)
    {
        Student::findOrFail($id)->delete();

        return redirect()->back()->with('message', trans('message.delete_success'));
    }

    public function destroyPoint($studentId, $subjectId) 
    {
        $student = Student::findOrFail($studentId);
        $student->subjects()->detach($subjectId);

        return redirect()->back()->with('message', trans('message.delete_success'));
    }

    public function createPoint(Request $request, $id) 
    {
        $student = Student::findOrFail($id);
        $student->subjects()->attach($request->major, ['point' => $request->point]);

        return redirect()->back()->with('message', trans('message.delete_success'));
    }
}
