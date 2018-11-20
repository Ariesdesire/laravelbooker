<?php

namespace App\Http\Controllers;

use App\Route;
use Illuminate\Http\Request;
use Auth;
use App\Notifications\TourApproved;
class RouteController extends Controller
{


  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth',['except'=> ['index','show']]);
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Go to the model and Get a Group of Records
        $routes = Route::paginate(5);

        //Go to the view and pass a list of records to Loop Through
        return view ('routes.index')-> with ('routes', $routes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('routes.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //validate the form SDO_DAS_DataObject
      $validatedData = $request->validate([
          'title' => 'required|max:255',
      ]);
      //process the data and submit interface
      $route = new Route();
      $route->title = $request->title;
      $route->description=$request->description;
      $route->user()->associate(Auth::id());
      $route->user->notify(new TourApproved($route,Auth::user()->name));
      //If successful we want to redirect
      if( $route->save()){
        return redirect() ->route('routes.show', $route->id);
      }else {
        return redirect()->route('routes.create');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //Use the model to get 1 record from the Database
      $route= Route::findOrFail($id);

        //Show the view and pass the record to the view
        return view('routes.show')->with('route',$route);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $route = Route::findOrFail($id);
      if($route->user->id !=Auth::id()){
        return abort(403);
      }
     return view ('routes.edit');

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $route = Route::findOrFail($id);
        if($route->user->id !=Auth::id()){
          return abort(403);
        }
       return view ('routes.edit');

     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(Route $route)
    {
        //
    }
}
