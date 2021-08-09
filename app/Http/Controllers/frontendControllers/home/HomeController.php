<?php

namespace App\Http\Controllers\frontendControllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use CH;
class HomeController extends Controller
{
    //
     public function index()
    {


        return view('frontend.home.index');
    }



public function ApiOne(){
$irl = Http::get('https://irl.eu-supply.com/ctm/rss/Rss.ashx');

if ($irl->ok() && $irl->serverError()==false && $irl->clientError()==false) {
$xml = simplexml_load_string($irl->body());
$json = json_encode($xml);
$array = json_decode($json,TRUE);

foreach ($array as $key => $value) {
   echo "<pre>";
   print_r($value);
    echo "</pre>";
}

}
}
 


public function ApiTwo(){
// $europa = Http::get('https://ec.europa.eu/info/funding-tenders/opportunities/data/referenceData/grantsTenders.json');


$ctx = stream_context_create(array('http'=>
    array(
        'timeout' => 2400,  //1200 Seconds is 20 Minutes
    )
));



$strJsonFileContents = file_get_contents("https://ec.europa.eu/info/funding-tenders/opportunities/data/referenceData/grantsTenders.json", false, $ctx);
$array = json_decode($strJsonFileContents, true);
foreach ($array as $key => $value) {
   echo "<pre>";
   print_r($value);
    echo "</pre>";
} 
}

    public function apiTest(){

    
    // Api One 
    // $this->ApiOne();

    // Api Two


    $this->ApiTwo();

// $response = Http::get('https://irl.eu-supply.com/ctm/rss/Rss.ashx');
// $xml = simplexml_load_string($response->body());
// $json = json_encode($xml);

// $response = Http::get('https://ec.europa.eu/info/funding-tenders/opportunities/data/referenceData/grantsTenders.json');
// dd($response->body() );

 

 // Api Three
 
// $response = Http::get('https://www.contractsfinder.service.gov.uk/Published/Notices/OCDS/Search?page=1&size=20&orderBy=publishedDate&order=DESC');
// dd($response->body() );



    }
}


