<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

        public function allstudents(){
            $students = new Student;
            $students = $students->all();
            // dd($students);
            return view("student.students", ["data"=>$students]);
        }

        public function create(){
            return view("student.create");
        }

        public function store()
        {
            // dd($_POST);
            // $data = request();
            // dd($data);
            
            $student = new Student;
            $student->name = request("name");
            $student->age = request("age");
            $student->email = request("email");
            $student->phone = request("phone");
            $student->save();
            return redirect("allstudents");
            //  return redirect()->route('posts.index')
        }

        public function show($id){
                // dd($id);
                $students = new Student;
                // $students = $students->find($id);
                $students = $students->findorfail($id);

                return view("student.show", ["data"=>$students]);
        }
        public function edit($id){
            $students = new Student;
            // $students = $students->find($id);
            $students = $students->findorfail($id);

            return view("student.edit", ["data"=>$students]);
        }

        public function update($id){
                // dd($id);

            $students = new Student;
            // $students = $students->find($id);
            $students = $students->findorfail($id);
            // dd(request());
            $students->name = request("name");
            $students->age = request("age");
            $students->email = request("email");
            $students->phone = request("phone");
            $students->save();
            return view("student.show", ["data"=>$students]);

            // return view("student.edit", ["data"=>$students]);
        }

        public function destroy($id){
            $students = new Student;
            // $students = $students->find($id);
            $students = $students->findorfail($id);

            $students->delete();
            return redirect("allstudents");

    }

}
