<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\StudentResource;
use Illuminate\Support\Str;

class StudentController extends BaseController
{
    public function index()
    {
        $students = Student::all();
        return $this->sendResponse(StudentResource::collection($students), 'Student retrieved successfully');
    }

    public function show($id)
    {
        $student = Student::find($id);

        if (is_null($student)) {
            return $this->sendError('Student not found');
        }

        return $this->sendResponse(new StudentResource($student), 'Student retrieved');
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',
            'grade' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation error', $validator->errors(), 400);
        }

        $new_student = [
            'student_id' => Str::random(32),
            'nis' => random_int(10000000, 99999999),
            'name' => $request->name,
            'grade' => $request->grade,
        ];

        $student = Student::create($new_student);
        return $this->sendResponse(new StudentResource($student), 'Student created successfully');
    }

    public function update(Request $request, Student $student)
    {
        $input = $request->all();

        $student->update($input);

        return $this->sendResponse(new StudentResource($student), 'Student Updated successfully');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return $this->sendResponse([], 'Student deleted successfully');
    }
}
