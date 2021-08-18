<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Http\Requests\SubjectRequest;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::pagination(config('paginate.list'));

        return view('layouts.list_subject', compact('subjects'));
    }

    public function create()
    {
        return view('layouts.create_subject');
    }

    public function store(SubjectRequest $request)
    {
        Subject::create($request->all());

        return redirect()->route('subject.index')->with('message', trans('message.creat_success'));
    }

    public function destroy($id)
    {
        Subject::findOrFail($id)->delete();

        return redirect()->back()->with('message', trans('message.delete_success'));
    }

    public function edit($id)
    {
        $subject = Subject::findOrFail($id);

        return view('layouts.edit_subject', compact('subject'));
    }

    public function update(Request $request, $id)
    {
        $subject= new Subject();
        $subject::findOrFail($id)->update($request->all());

        return redirect()->route('subject.index')->with('message', trans('message.edit_success'));
    }

}
