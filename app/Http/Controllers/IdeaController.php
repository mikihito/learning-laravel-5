<?php namespace App\Http\Controllers;
use App\teachers;
use App\teacher_book;
use App\books;
use App\students;
use App\student_follow_teacher;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use DB;
use App\User;
use Session;

class IdeaController extends Controller
{
/*
    public function login()
    {
        dd(Input::all());
        return view('idea.ok');
    }
*/
    public function checkLogin(Requests\IdeaRequest $request)
    {    

        // $inputs = Input::only(array('student_id'));
       // $param_student_id = Request::only(array('student_id'));
     
      //  $sh_student_pass = students::where('id',$student_id)->only('pass');
      // $sh_student_pass = students::where('id','=',$student_id)->only('pass');
      // dd($sh_student_pass);

        $student_id = Input::get('student_id');
        $pass = Input::get('pass');
        $sh_student_pass = students::where('id',"=",$student_id)->first()->pass;

        


        if($sh_student_pass == $pass){
            Session::put('login','ok');
            Session::put('student_id',$student_id);           
        }
        else{
            dd('Error');     
        }

        /*
        $test_id = 'moro';
        $test_pass= 'sawa';
        if($student_id == $test_id && $pass == $test_pass){
            dd('true');
        }
        else{
            dd('false');   
        }
        */

   
            return view('idea.login');
        
    }

    public function logout()
    {

        Session::forget('login');

        return view('idea.login');

    }



    public function showTeachers($student_id)
    {
        $teacher_ids = student_follow_teacher::where('student_id',$student_id)->lists('teacher_id');
        $teachers = teachers::whereIn('teacher_id',$teacher_ids)->get();


    	//$teachers = teachers::all();

        return view('idea.showTeachers',compact('teachers'));
    }


    public function showRecommendBook($id)
    {
    	//$book_ids = teacher_book::where('teacher_id' , $id)->get(['book_id']);
    	//return var_dump($book_ids);
    	$book_ids = teacher_book::where('teacher_id',$id)->lists('book_id');
        //$query -> whereIn('book_id',$book_ids);
       // $books = books::where('book_id',$book_ids)->get(['book_id']);
       $books = books::whereIn('book_id',$book_ids)->get();
        //dd($books);

    	return view('idea.showRecommendBook',compact('books'));
    }


    public function bookDetails($book_id)
    {
        $bookDetails = books::where('book_id',$book_id)->get();

        return view('idea.bookDetails',compact('bookDetails'));
    }

    public function create()
    {
        return 'ok?';
    }


}