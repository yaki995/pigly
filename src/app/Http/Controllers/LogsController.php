<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogsController extends Controller
{
  public function weight_logs()
  {
    return view('weight_logs');
  }
}
