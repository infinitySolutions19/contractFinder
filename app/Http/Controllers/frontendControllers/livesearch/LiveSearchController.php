<?php

namespace App\Http\Controllers\frontendControllers\livesearch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LiveSearchController extends Controller
{
    //
      public function index()
    {

        // return "hello from live search controller";
        return view('frontend.livesearch.searchlivetenders');
    }

      public function historicalSearch()
    {

        // return "hello from live search controller";
        return view('frontend.historicalsearch.historicalsearch');
    }
}
