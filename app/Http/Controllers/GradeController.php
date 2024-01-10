<?php

namespace App\Http\Controllers;

use App\Http\Requests\GradeRequest;
use App\Models\Grade;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::withTrashed()->get();
        return view('admin.grade.index')->with(compact('grades'));
    }

    public function create()
    {
        $grades = Grade::all();
        return view('admin.grade.create')->with(compact('grades'));
    }

    public function store(GradeRequest $request)
    {
        $data = $request->validated();
        $newTask = Grade::create($data);
        return redirect(route('grade.index'))->with('success', "Grade stored successfully");
    }

    public function edit($id)
    {
        $grades = Grade::find($id);
        return view('grade.edit')->with(compact('grades'));
    }
    public function update(GradeRequest $request, $id)
    {
        $grades = Grade::find($id);
        $data = $request->validated();
        $grades->update($data);
        return redirect(route('grade.index'))->with('success', "Grade updated successfully");
    }

    public function restore($id)
    {
        try {
            $grade = Grade::withTrashed()->findOrFail($id);

            if ($grade->trashed()) {
                $grade->restore();
                return redirect(route('grade.index'))->with('success', 'Grade restored successfully');
            } else {
                return redirect(route('grade.index'))->with('error', 'Grade is not soft-deleted');
            }
        } catch (ModelNotFoundException $exception) {
            return redirect(route('grade.index'))->with('error', 'Grade not found');
        }
    }

    public function forceDelete($id)
    {
        try {
            $grade = Grade::withTrashed()->findOrFail($id);

            if ($grade->trashed()) {
                $grade->forceDelete();
                return redirect(route('grade.index'))->with('success', 'Grade forcefully deleted successfully');
            } else {
                return redirect(route('grade.index'))->with('error', 'Grade is not soft-deleted');
            }
        } catch (ModelNotFoundException $exception) {
            return redirect(route('grade.index'))->with('error', 'Grade not found');
        }
    }

    public function delete($id)
    {
        $grades = Grade::find($id);
        $grades->delete();
        return redirect(route('grade.index'))->with('success', 'Grade deleted Successfully');
    }
}
