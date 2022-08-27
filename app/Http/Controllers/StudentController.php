<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function index(){
        $data = Student::get();
        //return $data;
        return view('studentlist',compact('data'));
    }

    public function addStudent(){
        return view('addstudent');
    }

    public function savestudent(Request $request){
        // dd($request->all());

        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'course'=>'required',
            'fees'=>'required',
            'password'=>'required',
        ]);

        $firstname=$request->firstname;
        $lastname=$request->lastname;
        $course=$request->course;
        $fees=$request->fees;
        $password=$request->password;

        $stud = new Student();
        $stud->firstname=$firstname;
        $stud->lastname=$lastname;
        $stud->course=$course;
        $stud->fees=$fees;
        $stud->password=$password;


        $stud->save();

        return redirect()->back()->with('success','Student Added Successfully');
    }

    public function editStudent($id){
        $data = Student::where('id','=',$id)->first();
        return view('editstudent',compact('data'));
        // return view('editstudent');
        // $data = Student::where('id',$id)->get();
        // return $data;
    }

    public function updateStudent(Request $request){

        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'course'=>'required',
            'fees'=>'required',
            'password'=>'required',
        ]);

        $id=$request->id;
        $firstname=$request->firstname;
        $lastname=$request->lastname;
        $course=$request->course;
        $fees=$request->fees;
        $password=$request->password;

        $stud = new Student();
        $stud->firstname=$firstname;
        $stud->lastname=$lastname;
        $stud->course=$course;
        $stud->fees=$fees;
        $stud->password=$password;

        Student::where('id','=',$id)->update([

            'firstname'=>$firstname,
            'lastname'=>$lastname,
            'course'=>$course,
            'fees'=>$fees,
            'password'=>$password
        ]);
        return redirect()->back()->with('success','Student Update Successfully');
    }

    public function deleteStudent($id){

        Student::where('id','=',$id)->delete();
        return redirect()->back()->with('success','Student Deleted Successfully');
    }
}
