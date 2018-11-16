<?php

namespace App\Http\Controllers;

use App\Attraction;
use App\Route;

use Illuminate\Http\Request;

class AttractionController extends Controller
{


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
          'route_id'=>'required | integer'
      ]);

      $attraction = new Attraction();
      $attraction->title = $request->title;
      $attraction->description=$request->description;

      $route=Route::findOrFail($request->route_id);
      $route->attractions()->save($attraction);

      return redirect()-> route('routes.show', $route->id);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function edit(Attraction $attraction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attraction $attraction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attraction $attraction)
    {
        //
    }
}
