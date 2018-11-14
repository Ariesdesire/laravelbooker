<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * Show the guestbook dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function guestbook()
    {
        return view('guestbook');
    }
}
