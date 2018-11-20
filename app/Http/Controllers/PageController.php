<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Mail;
use App\Mail\ContactForm;

class PageController extends Controller
{


    /**
     * Show the about us page.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function tours()
    {
        return view('tours');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function lengths()
    {
        return view('lengths');
    }



    /**
     * Show the additional Details dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function details()
    {
        return view('details');
    }

    /**
     * Show the Contact Us  dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Send the notification.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendMail(Request $request)
    {
      $this->validate($request,[
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'message' => 'required'
      ]);
        Mail::to('lawford.campbell@gmail.com')->send(new ContactForm($request));

        return redirect('/');
    }


public function profile($id)
{
  $user = User::with('routes')->find($id);
  return view('profile')->with('user', $user);
}

    /**
     * Show the guestbook dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function guestbook()
    {
        return view('guestbook');
    }
}
