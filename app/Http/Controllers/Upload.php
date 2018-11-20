<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Upload extends Controller
{
  public function getUpload()
  {
    return view('upload');
  }
  public function postUpload()
  {
    echo "File Uploaded";

  }


}
