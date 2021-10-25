<?php

namespace App\Http\Controllers;
use App\User;

class PageController extends Controller
{
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



