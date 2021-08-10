<?php

namespace App\Http\Controllers\frontendControllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use CH;
Use App\Models\apidata;
class HomeController extends Controller
{
    //
     public function index()
    {


        return view('frontend.home.index');
    }






  public function isArraycheck($obj){



 if (is_array($obj)) {
   return json_encode($obj);
 }else{

 return $obj;
 }
  }

  public  function slugify($text, string $divider = '_')
{
  // replace non letter or digits by divider
  $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
  $text = trim($text, $divider);

  // remove duplicate divider
  $text = preg_replace('~-+~', $divider, $text);

  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }

  return $text;
}
  

public function ApiOne(){


$irl = Http::get('https://irl.eu-supply.com/ctm/rss/Rss.ashx');

if ($irl->ok() && $irl->serverError()==false && $irl->clientError()==false) {
$xml = simplexml_load_string($irl->body());
$json = json_encode($xml);
$array = json_decode($json,TRUE);

foreach ($array['entry'] as $key => $value) {

 $apidata=apidata::where('title_slug',$this->slugify($value['title']));

if($apidata->count()>0){

$apidata->update([
        'title'=>$value['title'],
        'title_slug'=>$this->slugify($value['title']),
        'description'=>$this->isArraycheck($value['content']['publication']['detailedDescription']),
        'summary'=>$this->isArraycheck($value['summary']),
       'cpvjson'=>json_encode($value['content']['publication']['cpvCodes']['cpvCode']),
        'location'=>'Ireland',
        'published_date'=>date('Y-m-d H:i:s',strtotime($value['published'])),
        'buyer_location'=>'Ireland',
        'buyer_region'=>'Ireland',
        'status'=>$value['content']['publication']['processTemplate'],
        'tag'=>$value['content']['publication']['processTemplate'],
        'buyer_name_1'=>$value['content']['publication']['authority']['@attributes']['name'],
        'buyer_name_2'=>$value['content']['publication']['contactPerson']['@attributes']['firstName'].' '.$value['content']['publication']['contactPerson']['@attributes']['lastName'],
        'api_type'=>1,
        'object'=>json_encode($value),
        'initiation_time'=>$value['content']['publication']['publishedTime'],
        'api_url'=>'https://irl.eu-supply.com/ctm/rss/Rss.ashx',
    
        ]);

}else{
 

apidata::create([
        'title'=>$value['title'],
        'title_slug'=>$this->slugify($value['title']),
        'description'=>$this->isArraycheck($value['content']['publication']['detailedDescription']),
        'summary'=>$this->isArraycheck($value['summary']),
       'cpvjson'=>json_encode($value['content']['publication']['cpvCodes']['cpvCode']),
        'location'=>'Ireland',
        'published_date'=>date('Y-m-d H:i:s',strtotime($value['published'])),
        'buyer_location'=>'Ireland',
        'buyer_region'=>'Ireland',
        'status'=>$value['content']['publication']['processTemplate'],
        'tag'=>$value['content']['publication']['processTemplate'],
        'buyer_name_1'=>$value['content']['publication']['authority']['@attributes']['name'],
        'buyer_name_2'=>$value['content']['publication']['contactPerson']['@attributes']['firstName'].' '.$value['content']['publication']['contactPerson']['@attributes']['lastName'],
        'api_type'=>1,
        'object'=>json_encode($value),
        'initiation_time'=>$value['content']['publication']['publishedTime'],
        'api_url'=>'https://irl.eu-supply.com/ctm/rss/Rss.ashx',
    
        ]);

}
   
   
   
    
}




}
}
 


public function ApiTwo(){




// [
//         'title'=>$value['title'],
//         'title_slug'=>$this->slugify($value['title']),
//         'description'=>$value['content']['publication']['detailedDescription'],
//         'summary'=>$value['summary'],
//         'cpv'=>$value['content']['publication']['cpvCodes']['cpvCode']['@attributes']['code'],
//         'location'=>'Ireland',
//         'published_date'=>date('Y-m-d H:i:s',strtotime($value['published'])),
//         'oicd'=>'',
//         'tid'=>'',
//         'price'=>'',
//         'min_price'=>'',
//         'currency'=>'',
//         'buyer_location'=>'Ireland',
//         'buyer_postal_code'=>'',
//         'buyer_region'=>'Ireland',
//         'status'=>$value['content']['publication']['processTemplate'],
//         'tag'=>'',
//         'buyer_name_1'=>$value['content']['publication']['authority']['@attributes']['name'],
//         'buyer_name_2'=>$value['content']['publication']['contactPerson']['@attributes']['firstName'].' '.$value['content']['publication']['contactPerson']['@attributes']['lastName'],
//         'supplier_name'=>'',
//         'api_type'=>1,
//         'object'=>json_encode($value),
//         'tender_id'=>'',
//         'initiation_time'=>$value['content']['publication']['publishedTime'],
//         'api_url'=>'https://irl.eu-supply.com/ctm/rss/Rss.ashx',
//         'page_size'=>'',
//         'page_number'=>'',
        

//         ]


$strJsonFileContents = file_get_contents("https://ec.europa.eu/info/funding-tenders/opportunities/data/referenceData/grantsTenders.json");
// Convert to array 
$array = json_decode($strJsonFileContents, true);
 

foreach ($array as $key => $value) {

    if ($value['key']==1) {
       echo "<pre>";
   print_r($value);
    echo "</pre>";
    }
  
} 
}

 


public function ApiThree(){


  
$irl = Http::get('https://www.contractsfinder.service.gov.uk/Published/Notices/OCDS/Search?page=1&size=100&orderBy=publishedDate&order=ASC');

if ($irl->ok() && $irl->serverError()==false && $irl->clientError()==false) {
$xml = $irl->body();

$array = json_decode($xml,TRUE);

foreach ($array as $key => $value) {
   echo "<pre>";
   print_r($value);
    echo "</pre>";
}

}
}



    public function apiTest(){

    
    // Api One 
   // $this->ApiOne();

    // Api Two


    $this->ApiTwo();

    // Api three 


    //$this->ApiThree();



    }
}


