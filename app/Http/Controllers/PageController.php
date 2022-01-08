<?php

namespace App\Http\Controllers;
use App\User;
use App\Question;

class PageController extends Controller
{
    public function index()
    {
        $questions = Question::orderBy('id', 'desc')->take(3)->get();
        // return the view, and pass in the first 3 questions to loop through
        return view('welcome')->with('questions', $questions);
    }

    public function about()
    {
        return "about us...";
    }

    public function contact()
    {
        return "contact us...";
    }

    public function submitContact()
    {
        return "Submitted...";
    }

    public function profile($id)
    {
        // lazy loading
        // $user = User::findOrFail($id);
        // return view('profile')->with('user', $user);

        //eager loading
        $user = User::with(['questions', 'answers', 'answers.question'])->find($id);
        return view('profile')->with('user', $user);
    }


}



