<?php

namespace App\Http\Controllers\frontendControllers\tenderdetailpage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TenderDetailController extends Controller
{
    //

    public function index()
    {
       return view('frontend.tenderdetailpage.tenderdetailpage');
    }
    
}
